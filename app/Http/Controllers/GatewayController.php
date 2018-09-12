<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gateway;
class GatewayController extends Controller
{
    public function createNewInformation(){
        return view('admin.gateway.newgateway');
    }
    public function storeNewInformation(Request $request){
        $this->validate($request,[
            'bkas'=>'required|regex:/(^01[56789]{1}[0-9]{8}$)/u',
            'rocket'=>'required|regex:/(^01[56789]{1}[0-9]{9}$)/u',
            'publication_status'=>'required',

        ]);

        $Gateway=new Gateway();
        $Gateway->bkas=$request->bkas;
        $Gateway->rocket=$request->rocket;
        $Gateway->publication_status=$request->publication_status;
        $Gateway->save();

        return redirect('adminpanel/new/gateway')->with('message','Informaion Saved Successfully');
    }

    public function manageInformation(){
    	$Information=Gateway::paginate(5);
        return view('admin.gateway.managegateway',['Information'=>$Information]);
    }

    public function changestatus($id=null){
        $count=Gateway::where('publication_status','1')->get();
        $infoById=Gateway::where('id',$id)->first();
        $data=$infoById->publication_status;
        If(count($count)>=1 && $data=='0'){
            return redirect('adminpanel/manage/gateway')->with('message','Only one item can be select for main page.');
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
            return redirect('adminpanel/manage/gateway')->with('msg','One Item selected for main page.');
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
            return redirect('adminpanel/manage/gateway')->with('message','Please select one item  for main page.');

        }

    }
    public function deleteInfo($id=null){
        $info=Gateway::findOrFail($id);
        $info->delete();
        return redirect('adminpanel/manage/gateway')->with('message',' information Deleted successfully');
    }
}
