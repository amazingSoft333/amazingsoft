<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contactinfo;
use App\Contactad;
use App\Contactbanner;
use DB;
use File;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function addContactInfo()
    {
        $a = DB::table('contactinfos')->first();
        if(is_null($a))
        {
        return view('backend.contact.contactInfoAdd');
        }

        else
        {
            return redirect()->route('contactInfoManage')-> with('message','You can Insert Max: 1 time in field');
        }


    }

    public function manageContactInfo()
    {
        $contacts=Contactinfo::all();
       
        return view('backend.contact.contactInfoManage',['contacts'=>$contacts]);
            
    }

    public function saveContactInfo(Request $request)
	{
	
	   $c = new Contactinfo();
       $c->address =$request->address;
       $c->information =$request->information;
	   $c->save();
	   return redirect()->route('contactInfoManage')->with('message','Information Save Successfully');
    }

    public function updateContactInfo(Request $request)
    {
     //return $request;
    $xx=Contactinfo::find($request->id);
    $xx->address =$request->address;
    $xx->information =$request->information;
    $xx->save();
    
    return redirect()->route('contactInfoManage')-> with('message','Information update successfully');
   }
   
 
 public function deleteContactInfo($id){
         $about=Contactinfo::find($id);
         $about->delete();
    
         return redirect()->route('contactInfoManage')-> with('message','Information Delete Successfully');
   }

   /**Email and Phone**/

   public function addContactPE()
    {
        
        return view('backend.contact.contactInfoPEAdd');

    }

    public function saveContactPE(Request $request)
	{
	
	   $c = new Contactad();
       $c->number=$request->number;
       $c->email =$request->email;
	   $c->save();
	   return redirect()->route('contactPEManage')->with('message','Information Save Successfully');
    }

    public function manageContactPE()
    {
        $contacts=Contactad::all();
       
        return view('backend.contact.contactInfoPEManage',['contacts'=>$contacts]);
            
    }

    public function updateContactPE(Request $request)
    {
     //return $request;
    $xx=Contactad::find($request->id);
    $xx->number =$request->number;
    $xx->email =$request->email;
    $xx->save();
    
    return redirect()->route('contactPEManage')-> with('message','Information update successfully');
   }
   
 
 public function deleteContactPE($id){
         $about=Contactad::find($id);
         $about->delete();
    
         return redirect()->route('contactPEManage')-> with('message','Information Delete Successfully');
   }
/*Contact banner Image */
public function createContactBanner()
{
	$f = DB::table('contactbanners')->first();
			if(is_null($f))
			{
	return view('backend.contact.banner.createBannner');
			}
			else
			{
					return redirect()->route('contactImageManage')-> with('message','You can Insert Max: 1 time in field');
			}

}

public function saveContactBanner(Request $request){
		

	$banner="";
	if($request->hasFile('banner'))
	{
			$destinationPath='Image/ContactBannerImage/';
			$file=$request->banner;
			$extention=$file->getClientOriginalExtension();
			$filename=rand(1111,9999).".".$extention;
			$file->move($destinationPath, $filename);
			$banner=$filename;
	}
	$data = [
				 
				 'banner' => $banner,
		 ];
	$contactBanner=Contactbanner::create($data);
	return redirect()->route('contactImageManage');

}

public function manageContactBanner()
	  {
		  $contactBanners=Contactbanner::all();
			return view ('backend.contact.banner.manageBanner',['contactBanners'=>$contactBanners]);
		}
		
		public function deleteContactBanner($id){
			
			$oldimage =Contactbanner::findOrFail($id);
			 $image_path ='Image/ContactBannerImage/'.$oldimage->banner;
			 if(File::exists($image_path))
			 {
					File::delete($image_path);
			 }
				$oldimage->delete();
				return redirect()->route('contactImageAdd')->with('message','Successfully Deleted');
	 }
	  



}
