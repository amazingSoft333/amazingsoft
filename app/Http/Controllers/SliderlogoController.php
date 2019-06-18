<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;
use App\Slider;
use App\Hfinfo;
use App\Tool;
use DB;
use File;

class SliderlogoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function createLogo()
    {
        $ab = DB::table('logos')->first();
        if(is_null($ab))
        {
        return view('backend.logo.createLogo');
        }
        else
        {
            return redirect()->route('logoManage')-> with('message','You can Insert Max: 1 time in field');
        }
    }

    public function storeLogo(Request $request){
		

        $logo="";
        if($request->hasFile('logo'))
        {
                $destinationPath='Image/LogoImage/';
                $file=$request->logo;
                $extention=$file->getClientOriginalExtension();
                $filename=rand(1111,9999).".".$extention;
                $file->move($destinationPath, $filename);
                $logo=$filename;
        }
        $data = [
                     
                     'logo'=>$logo,
             ];
        $logoPart=Logo::create($data);
        return redirect()->route('logoManage');
    
    }

    public function manageLogo()
	  {
		   $logos=Logo::all();
			return view ('backend.logo.manageLogo',['logos'=>$logos]);
		}
		
		public function deleteLogo($id){
			
			$oldimage =Logo::findOrFail($id);
			 $image_path ='Image/LogoImage/'.$oldimage->logo;
			 if(File::exists($image_path))
			 {
					File::delete($image_path);
			 }
				$oldimage->delete();
				return redirect()->route('logoManage')->with('message','Successfully Deleted');
     }
     
     /*Slider Section */
     public function createSlider()
     {
         return view('backend.slider.sliderAdd');
     }
 
 
     public function storeSlider(Request $request)
   {
         
       $sliderImage="";
        if($request->hasFile('sliderImage'))
        {
            $destinationPath='Image/SliderImage/';
            $file=$request->sliderImage;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111,9999).".".$extention;
            $file->move($destinationPath, $filename);
            $sliderImage=$filename;
        }
        $data = [
                    'heading01' => $request->heading01,
                    'heading02' => $request->heading02,
                    'sliderImage' => $sliderImage,
           ];
        $slider=Slider::create($data);
        return redirect()->route('sliderManage');
 
   }
 
    public function manageSlider()
     {
         $sliders=Slider::all();
         return view('backend.slider.sliderManage',['sliders'=>$sliders]);
     }
 
 
     public function updateSlider(Request $request,$id)
     {
             // return $request->all();
         $oldimage =Slider::select('sliderImage')->find($id);
       
        if ($request->hasFile('sliderImage')) {
           $file = $request->sliderImage;
           $extention = $file->getClientOriginalExtension();
           $filename = rand(1111, 9999).
           ".".$extention;
           $file->move(('Image/SliderImage/'), $filename);
           $photo = $filename;
           $filename = ($photo);
           $oldimage =Slider::findOrFail($id);
           $image_path = 
           'Image/SliderImage/'.$oldimage->sliderImage;
           if (File::exists($image_path)) {
               File::delete($image_path);
 
           }
           $data = [
            'heading01' => $request->heading01,
            'heading02' => $request->heading02,
            'sliderImage' => $photo,
           ];
                     DB::table('sliders')->where('id', $id)->update($data);
 
                     return redirect()->route('sliderManage')->with('message','Information Update Successfully');
          }
          
        else {
           $data = 
           [
            'heading01' => $request->heading01,
            'heading02' => $request->heading02,
            'sliderImage' =>$oldimage->sliderImage,
           ];
           
             DB::table('sliders')->where('id', $id)->update($data);
 
                         return redirect()->route('sliderManage')->with('message','Information Update Successfully');
       }
        
       
          
     }
 
     public function deleteSlider($id){
             
              $oldimage =Slider::findOrFail($id);
             $image_path ='Image/SliderImage/'.$oldimage->sliderImage;
             if(File::exists($image_path))
                 {
                    File::delete($image_path);
                 }
              $oldimage->delete();
                return redirect()->route('sliderManage')->with('message','Successfully Deleted');
       }
/*Header-Footer Info Section */
       public function createHfInfo()
       {
        $xx = DB::table('hfinfos')->first();
        if(is_null($xx))
        {
            return view('backend.headerfooter.hfInfoAdd');
        }
        else
        {
            return redirect()->route('hfInfoManage')->with('message','You can Insert Max: 1 time in field');
        }
       
        
       }

       public function storeHfInfo(Request $request)
       {
        $hf = new Hfinfo();
        $hf->address =$request->address;
        $hf->email =$request->email;
        $hf->number =$request->number;
        $hf->facebook =$request->facebook;
        $hf->twitter =$request->twitter;
        $hf->linkdin =$request->linkdin;
        $hf->skype =$request->skype;
        $hf->time=$request->time;
        $hf->information =$request->information;
        $hf->save();
        return redirect()->route('hfInfoManage')->with('message','Information Save Successfully');


       }

       public function manageHfInfo()
       {
           $hfs=Hfinfo::all();
           return view ('backend.headerfooter.hfInfoManage',['hfs'=>$hfs]);
       }

       public function updateHfInfo(Request $request)
       {
        //return $request;
       $hf= Hfinfo::find($request->id);
       $hf->address =$request->address;
       $hf->email =$request->email;
       $hf->number =$request->number;
       $hf->facebook =$request->facebook;
        $hf->twitter =$request->twitter;
        $hf->linkdin =$request->linkdin;
        $hf->skype =$request->skype;
        $hf->time =$request->time;
       $hf->information =$request->information;
       $hf->save();
       
       return redirect()->route('hfInfoManage')-> with('message','Information update successfully');
      }
      
    
    public function deleteHfInfo($id){
            $hf= Hfinfo::find($id);
            $hf->delete();
       
            return redirect()->route('hfInfoManage')-> with('message','Information Delete Successfully');
      }


      /*Tools Section */
      public function saveTools(Request $request)
      {
     
        $imageTools="";
        if($request->hasFile('imageTools'))
        {
            $destinationPath='Image/ToolsImage/';
            $file=$request->imageTools;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111,9999).".".$extention;
            $file->move($destinationPath, $filename);
            $imageTools=$filename;
        }
        $data = [
                          
                             'imageTools' => $imageTools,
           ];
        $test= Tool::create($data);
        return redirect()->route('toolsManage');
    
      }


      public function manageTools()
      {
          //$categories=Portcat::idDescending()->all();
          $tools = DB::table('tools')
          ->select('tools.*')
          ->orderBy('id','DESC')
          ->get();
         
          return view('backend.tools.toolsManage',['tools'=>$tools]);
              
      }

      public function updateTools(Request $request,$id)
  {
       
    $oldimage =Tool::select('imageTools')->find($id);
	  
    if ($request->hasFile('imageTools')) {
       $file = $request->imageTools;
       $extention = $file->getClientOriginalExtension();
       $filename = rand(1111, 9999).
       ".".$extention;
       $file->move(('Image/ToolsImage/'), $filename);
       $photo = $filename;
       $filename = ($photo);
       $oldimage =Tool::findOrFail($id);
       $image_path = 
       'Image/ToolsImage/'.$oldimage->imageTools;
       if (File::exists($image_path)) {
           File::delete($image_path);

       }
       $data = [
                  
                    'imageTools' => $photo,
       ];
                 DB::table('tools')->where('id', $id)->update($data);

                 return redirect()->route('toolsManage')->with('message','Information Update Successfully');
      }
      
    else {
       $data = 
       [
                         
                         'imageTools' =>$oldimage->imageTools,
       ];
       
         DB::table('tools')->where('id', $id)->update($data);

                     return redirect()->route('toolsManage')->with('message','Information Update Successfully');
   }
    
       
  }

  public function deleteTools($id){
			
    $oldimage =Tool::findOrFail($id);
   $image_path ='Image/ToolsImage/'.$oldimage->imageTools;
   if(File::exists($image_path))
       {
          File::delete($image_path);
       }
    $oldimage->delete();
      return redirect()->route('toolsManage')->with('message','Successfully Deleted');
}

    
    


      

	  
}
