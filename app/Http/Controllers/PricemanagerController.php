<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hostingprice;
use App\Contentmanage;


class PricemanagerController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

/*******Hosting Section **********/
    public function saveHosting(Request $request)
	{
	
	   $hosting = new Hostingprice();
       $hosting->hosting =$request->hosting;
       $hosting->price =$request->price;
	   $hosting->save();
	   return redirect()->route('manageHosting')->with('message','Information Save Successfully');
    }

    public function manageHosting()
	{
				
        $ab=Hostingprice::all();
       return view ('backend.pricemanage.manageHostingPrice',['ab'=>$ab]);
    }
    
    
    
    public function updateHosting(Request $request)
	   {
		//return $request;
	   $abc=Hostingprice::find($request->id);
       $abc->hosting =$request->hosting;
       $abc->price =$request->price;
	   $abc->save();
	   
	   return redirect()->route('manageHosting')-> with('message','Information update successfully');
	  }
	  
	
	public function deleteHosting($id){
			$about=Hostingprice::find($id);
			$about->delete();
	   
            return redirect()->route('manageHosting')-> with('message','Information Delete Successfully');
      }
      
      /*****Content Section ******/
      public function saveContent(Request $request)
      {
      
         $content = new Contentmanage();
         $content->content =$request->content;
         $content->price =$request->price;
         $content->publicationType =$request->publicationType;
         $content->save();
         return redirect()->route('manageContent')->with('message','Information Save Successfully');
      }
  
      public function manageContent()
      {
                  
          $ab=Contentmanage::all();
         return view ('backend.pricemanage.manageContentPrice',['ab'=>$ab]);
      }
      
      
      
      public function updateContent(Request $request)
         {
          //return $request;
         $abc=Contentmanage::find($request->id);
         $abc->hosting =$request->hosting;
         $abc->price =$request->price;
         $abc->publicationType =$request->publicationType;
         $abc->save();
         
         return redirect()->route('manageContent')-> with('message','Information update successfully');
        }
        
      
      public function deleteContent($id){
              $about=Contentmanage::find($id);
              $about->delete();
         
              return redirect()->route('manageContent')-> with('message','Information Delete Successfully');
        }
        

}
