<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portcat;
use App\Portfolio;
use App\Testimonial;
use App\Portbackground;
use DB;
use File;

class PoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

/*Portfolio Category section */
    public function savePortCat(Request $request)
	{
	
	   $c = new Portcat();
       $c->category =$request->category;
	   $c->save();
	   return redirect()->route('portCatManage')->with('message','Information Save Successfully');
    }
    public function managePortCat()
    {
        
        $categories = DB::table('portcats')
        ->select('portcats.*')
        ->orderBy('id','DESC')
        ->get();
       
        return view('backend.portfolio.portfolioCatManage',['categories'=>$categories]);
            
    }

    public function updatePortCat(Request $request)
    {
   
    $xx=Portcat::find($request->id);
    $xx->category =$request->category;
    $xx->save();
    
    return redirect()->route('portCatManage')-> with('message','Information update successfully');
   }
   
 
 public function deletePortCat($id){
         $about=Portcat::find($id);
         $about->delete();
    
         return redirect()->route('portCatManage')-> with('message','Information Delete Successfully');
   }

   /*Portfolio Section */
   public function savePortfolio(Request $request)
   {
   
      $c = new Portfolio();
      $c->name =$request->name;
      $c->categoryId =$request->categoryId;
      $c->weblink =$request->weblink;
      $c->save();
      return redirect()->route('portfolioManage')->with('message','Portfolio Information Save Successfully');
   }

   public function managePortfolio()
    {
        $portfolios = DB::table('portfolios')
            ->join('portcats','portfolios.categoryId', '=', 'portcats.id')
            ->select('portfolios.*','portcats.category')
            ->orderBy('id','DESC')
			->get();
		$categories=Portcat::get();			
		return view('backend.portfolio.portfolioManage',['portfolios'=>$portfolios,'categories'=>$categories]);
            
    }

    public function updatePortfolio(Request $request)
    {
     //return $request;
    $about= Portfolio::find($request->id);
    $about->name =$request->name;
    $about->categoryId =$request->categoryId;
    $about->weblink =$request->weblink;
    $about->save();
    
    return redirect()->route('portfolioManage')-> with('message','portfolio Information update successfully');
   }
   

    public function deletePortfolio($id){
        $about= Portfolio::find($id);
        $about->delete();
   
        return redirect()->route('portfolioManage')-> with('message','Portfolio Information Delete Successfully');
  }

  /*Testimonial Section Start*/
  public function saveTestimonial(Request $request)
  {
 
    $imageTesti="";
    if($request->hasFile('imageTesti'))
    {
        $destinationPath='Image/TestimonialImage/';
        $file=$request->imageTesti;
        $extention=$file->getClientOriginalExtension();
        $filename=rand(1111,9999).".".$extention;
        $file->move($destinationPath, $filename);
        $imageTesti=$filename;
    }
    $data = [
                        'name' => $request->name,
                         'designation' => $request->designation,
                         'information' => $request->information,
                         'imageTesti' => $imageTesti,
       ];
    $test= Testimonial::create($data);
    return redirect()->route('testimonialManage');

  }

  public function manageTestimonial()
  {
      //$categories=Portcat::idDescending()->all();
      $testimonials = DB::table('testimonials')
      ->select('testimonials.*')
      ->orderBy('id','DESC')
      ->get();
     
      return view('backend.testimonial.testimonialManage',['testimonials'=>$testimonials]);
          
  }


  public function updateTestimonial(Request $request,$id)
  {
       
    $oldimage =Testimonial::select('imageTesti')->find($id);
	  
    if ($request->hasFile('imageTesti')) {
       $file = $request->imageTesti;
       $extention = $file->getClientOriginalExtension();
       $filename = rand(1111, 9999).
       ".".$extention;
       $file->move(('Image/TestimonialImage/'), $filename);
       $photo = $filename;
       $filename = ($photo);
       $oldimage =Testimonial::findOrFail($id);
       $image_path = 
       'Image/TestimonialImage/'.$oldimage->imageTesti;
       if (File::exists($image_path)) {
           File::delete($image_path);

       }
       $data = [
                   'name' => $request->name,
                   'designation' => $request->designation,
                   'information' => $request->information,
                    'imageTesti' => $photo,
       ];
                 DB::table('testimonials')->where('id', $id)->update($data);

                 return redirect()->route('testimonialManage')->with('message','Information Update Successfully');
      }
      
    else {
       $data = 
       [
                         'name' => $request->name,
                         'designation' => $request->designation,
                         'information' => $request->information,
                         'imageTesti' =>$oldimage->imageTesti,
       ];
       
         DB::table('testimonials')->where('id', $id)->update($data);

                     return redirect()->route('testimonialManage')->with('message','Information Update Successfully');
   }
    
       
  }

  public function deleteTestimonial($id){
			
    $oldimage =Testimonial::findOrFail($id);
   $image_path ='Image/TestimonialImage/'.$oldimage->imageTesti;
   if(File::exists($image_path))
       {
          File::delete($image_path);
       }
    $oldimage->delete();
      return redirect()->route('testimonialManage')->with('message','Successfully Deleted');
}

  /*Testimonial Section End */

  /*Portfolio background image Section start*/
  public function createBackImage()
  {
      $ab = DB::table('portbackgrounds')->first();
      if(is_null($ab))
      {
      return view('backend.portBackground.createPortBackground');
      }
      else
      {
          return redirect()->route('imageManage')-> with('message','You can Insert Max: 1 time in field');
      }
  }

  public function storeBackImage(Request $request){
  

      $backgroundImage="";
      if($request->hasFile('backgroundImage'))
      {
              $destinationPath='Image/PortBackImage/';
              $file=$request->backgroundImage;
              $extention=$file->getClientOriginalExtension();
              $filename=rand(1111,9999).".".$extention;
              $file->move($destinationPath, $filename);
              $backgroundImage=$filename;
      }
      $data = [
                   
                   'backgroundImage'=>$backgroundImage,
           ];
      $backgrountPart=Portbackground::create($data);
      return redirect()->route('imageManage');
  
  }

  public function manageBackImage()
  {
     $backgrounds=Portbackground::all();
    return view ('backend.portBackground.managePortBackground',['backgrounds'=>$backgrounds]);
  }
  
  public function deleteBackImage($id){
    
    $oldimage =Portbackground::findOrFail($id);
     $image_path ='Image/PortBackImage/'.$oldimage->backgroundImage;
     if(File::exists($image_path))
     {
        File::delete($image_path);
     }
      $oldimage->delete();
      return redirect()->route('imageManage')->with('message','Successfully Deleted');
   }
  /*Portfolio background image section end*/
}
