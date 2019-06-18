<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicecat;
use App\Service;
use DB;
use File;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function saveServiceCategory(Request $request)
	{
	
	   $c = new Servicecat();
       $c->category =$request->category;
	   $c->save();
	   return redirect()->route('serviceCategoryManage')->with('message','Information Save Successfully');
    }

    public function manageServiceCategory()
    {
        //$categories=Portcat::idDescending()->all();
        $categories = DB::table('servicecats')
        ->select('servicecats.*')
        ->orderBy('id','DESC')
        ->get();
       
        return view('backend.service.serviceCatManage',['categories'=>$categories]);
            
    }

    public function updateServiceCategory(Request $request)
    {
     //return $request;
    $xx=Servicecat::find($request->id);
    $xx->category =$request->category;
    $xx->save();
    
    return redirect()->route('serviceCategoryManage')-> with('message','Information update successfully');
   }

   public function deleteServiceCategory($id){
    $about=Servicecat::find($id);
    $about->delete();

    return redirect()->route('serviceCategoryManage')-> with('message','Information Delete Successfully');
}

/*Start Service Section */
public function saveService(Request $request)
{

  $photo="";
  if($request->hasFile('photo'))
  {
      $destinationPath='Image/ServiceBannerImage/';
      $file=$request->photo;
      $extention=$file->getClientOriginalExtension();
      $filename=rand(1111,9999).".".$extention;
      $file->move($destinationPath, $filename);
      $photo=$filename;
  }
  $data = [
                       
                       'categoryId' => $request->categoryId,
                       'information' => $request->information,
                       'photo' => $photo,
     ];
  $test=Service::create($data);
  return redirect()->route('serviceManage')->with('message','Information Save Successfully');

}

public function manageService()
{
    $services= DB::table('services')
            ->join('servicecats','services.categoryId', '=', 'servicecats.id')
            ->select('services.*','servicecats.category')
            ->orderBy('id','DESC')
			->get();
		$categories=Servicecat::get();			
		return view('backend.service.serviceManage',['services'=>$services,'categories'=>$categories]);
        
}


public function updateService(Request $request,$id)
{
     
  $oldimage =Service::select('photo')->find($id);
    
  if ($request->hasFile('photo')) {
     $file = $request->photo;
     $extention = $file->getClientOriginalExtension();
     $filename = rand(1111, 9999).
     ".".$extention;
     $file->move(('Image/ServiceBannerImage/'), $filename);
     $photo = $filename;
     $filename = ($photo);
     $oldimage =Service::findOrFail($id);
     $image_path = 
     'Image/ServiceBannerImage/'.$oldimage->photo;
     if (File::exists($image_path)) {
         File::delete($image_path);

     }
     $data = [
                
                'categoryId' => $request->categoryId,
                'information' => $request->information,
                  'photo' => $photo,
     ];
               DB::table('services')->where('id', $id)->update($data);

               return redirect()->route('serviceManage')->with('message','Information Update Successfully');
    }
    
  else {
     $data = 
     [
                        
                        'categoryId' => $request->categoryId,
                         'information' => $request->information,
                        'photo' =>$oldimage->photo,
     ];
     
       DB::table('services')->where('id', $id)->update($data);

                   return redirect()->route('serviceManage')->with('message','Information Update Successfully');
 }
  
     
}

public function deleteService($id){
			
    $oldimage =Service::findOrFail($id);
   $image_path ='Image/ServiceBannerImage/'.$oldimage->photo;
   if(File::exists($image_path))
       {
          File::delete($image_path);
       }
    $oldimage->delete();
      return redirect()->route('serviceManage')->with('message','Successfully Deleted');
}



/*End Service Section*/

}
