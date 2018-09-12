<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
class informationController extends Controller
{
    public function createNewInformation(){
        return view('admin.mainPageInfo.newInfo');
    }
    public function storeNewInformation(Request $request){
        $this->validate($request,[
            'info_Phone'=>'required|regex:/(^01[56789]{1}[0-9]{8}$)/u',
            'info_Email'=>'required|email',
            'info_logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'publication_status'=>'required',

        ]);
        $info_logo=$request->file('info_logo');
        $name=$info_logo->getClientOriginalName();
        $uploadPath='productImage/';
        $imageUrl=$uploadPath.$name;
        $info_logo->move($uploadPath,$name);

        $this->saveFrontInfo($request,$imageUrl);

        return redirect('adminpanel/new/information')->with('message','Front Informaion Saved Successfully');
    }

    public function saveFrontInfo($request,$imageUrl){

        $Info=new Info();
        $Info->info_Phone=$request->info_Phone;
        $Info->info_Email=$request->info_Email;
        $Info->info_logo=$imageUrl;
        $Info->publication_status=$request->publication_status;
        $Info->save();
    }

    public function manageInformation(){
        $Information=Info::paginate(6);
        return view('admin.mainPageInfo.manageInfo',['Information'=>$Information]);
    }

    public function changestatus($id=null){
        $count=Info::where('publication_status','1')->get();
        $infoById=Info::where('id',$id)->first();
        $data=$infoById->publication_status;
        If(count($count)>=1 && $data=='0'){
            return redirect('adminpanel/Manage/information')->with('message','Only one item can be select for main page.');
        }
        elseif(count($count)==0){

            if($data=='1'){
                $infoById->publication_status='0';
                $infoById->save();
            }
            else{
                $infoById->publication_status='1';
                $infoById->save();
            }
            return redirect('adminpanel/Manage/information')->with('msg','One Item selected for main page.');
        }
        else{
            if($data=='1'){
                $infoById->publication_status='0';
                $infoById->save();
            }
            else{
                $infoById->publication_status='1';
                $infoById->save();
            }
            return redirect('adminpanel/Manage/information')->with('message','Please select one item  for main page.');

        }

    }
    public function deleteInfo($id=null){
        $info=Info::findOrFail($id);
        unlink($info->info_logo);
        $info->delete();
        return redirect('adminpanel/Manage/information')->with('message',' information Deleted successfully');
    }
}
