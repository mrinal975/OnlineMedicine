<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Session;
use App\subcategory;
use App\prescription;
use App\Info;
class PrescriptionController extends Controller
{
    public function prescription(){
        $Category=Category::all();
        $subcategory=subcategory::all();
        $info=Info::where('publication_status',1)->first();
        return view('frontEnd.prescription-upload.prescription-upload',['Category'=>$Category,'subcategory'=>$subcategory,'info'=>$info]);
    }

    public function uploadprescripton(Request $request){
        $this->validate($request,[
            'customerName'=>'required',
            'customerPhone'=>'required|regex:/(^01[56789]{1}[0-9]{8}$)/u',
            'customerEmail'=>'required|email',
            'prescriptionsImage'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);

        $prescriptionsImage=$request->file('prescriptionsImage');
        $name=$prescriptionsImage->getClientOriginalName();
        // return $name;	
        $uploadPath='productImage/';
        $imageUrl=$uploadPath.$name;
        $prescriptionsImage->move($uploadPath,$name);

        $prescriptionsQuestion=$request->prescriptionsQuestion;
        
        if(empty($prescriptionsQuestion)){
        	$this->savePrescriptionInfoWithoutQuestion($request,$imageUrl);
        }
        else{
        	$this->savePrescriptionsInfoWithQuestion($request,$imageUrl);
        }

        return redirect('/prescription-upload')->with('message','prescription successfully uploaded');

    }

    protected function savePrescriptionInfoWithoutQuestion($request,$imageUrl){
		$prescription=new prescription();
        $prescription->customerName=$request->customerName;
        $prescription->customerPhone=$request->customerPhone;
        $prescription->customerEmail=$request->customerEmail;
        $prescription->prescriptionsImage=$imageUrl;
        $prescription->prescriptionsQuestion='';
        $prescription->save();
    }
    protected function savePrescriptionsInfoWithQuestion($request,$imageUrl){
		$prescription=new prescription();
        $prescription->customerName=$request->customerName;
        $prescription->customerPhone=$request->customerPhone;
        $prescription->customerEmail=$request->customerEmail;
        $prescription->prescriptionsImage=$imageUrl;
        $prescription->prescriptionsQuestion=$request->prescriptionsQuestion;
        $prescription->save();
    }
    public function viewnewprescription(){
        $prescription=prescription::where('prescriptionStatus','0')->get();
        return view('admin.prescription.newprescription',['prescription'=>$prescription]);

    }
    public function manageprescription(){
        $prescription=prescription::all();
        return view('admin.prescription.manageprescription',['prescription'=>$prescription]);
    }
    public function singleprescriptionview($id=null){
        $prescription=prescription::where('id',$id)->first();
        if($prescription->prescriptionStatus=='0'){
            $prescription->prescriptionStatus='1';
        }
        $prescription->save();
        return view('admin.prescription.viewprescription',['prescription'=>$prescription]);
    }
    public function deleteprescription($id=null){
        $prescription=prescription::findOrFail($id);
        $prescription->delete();
        return redirect('adminpanel/Manage/prescription')->with('message','Prescription Deleted Successfully');
    }


//Process for data Table
    public  function processprescription(Request $request){
        //print_r($request->all()); 
        $prescription= prescription::all();
        $columns = array(
            0 => 'customerName',
            1 => 'status',
            2 => 'customerPhone',
            3 => 'customerEmail',
            4 => 'prescriptionsImage',
            5 => 'prescriptionsQuestion',
            6 => 'action'
        );
        
        $totalData = prescription::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        
        if(empty($request->input('search.value'))){
            $posts = prescription::offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
            $totalFiltered = prescription::count();
        }else{
            $search = $request->input('search.value');
            $prescription = prescription::where('customerName', 'like', "%{$search}%")
                            ->orWhere('customerPhone','like',"%{$search}%")
                            ->orWhere('customerEmail','like',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order, $dir)
                            ->get();
            $totalFiltered = prescription::where('customerName', 'like', "%{$search}%")
                            ->orWhere('customerPhone','like',"%{$search}%")
                            ->count();
        }       
                    
        
        $data = array();
        
        if($prescription){
            foreach($prescription as $r){
                $nestedData['customerName'] = $r->customerName;
                $nestedData['status'] = $r->prescriptionStatus=='1'? '<p class="text-success">Viewed</p>':'<p class="text-danger ">New</p>';
                $nestedData['customerPhone'] = $r->customerPhone;
                $nestedData['customerEmail'] = $r->customerEmail;
                $nestedData['prescriptionsImage'] = '<img src="'.asset($r->prescriptionsImage).'" alt="'.$r->categoryName.'" height="50" width="50" class=" img-rounded">';
                $nestedData['prescriptionsQuestion'] =$r->prescriptionsQuestion;
                $nestedData['action'] = '
                    <a href="/adminpanel/prescription/view/'.$r->id.'" class="btn btn-warning btn-xs">View</a>
                    <a href="/adminpanel/prescription/delete/'.$r->id.'" class="btn btn-danger btn-xs" onclick="return confirm(Are you sure to delete);">Delete</a>
                ';
                $data[] = $nestedData;
            }
        }
        
        $json_data = array(
            "draw"          => intval($request->input('draw')),
            "recordsTotal"  => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"          => $data
        );
        
        echo json_encode($json_data);
    
       
    }



}
