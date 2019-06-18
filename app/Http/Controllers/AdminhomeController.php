<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homebox;
use App\Homeabout;
use App\Homecounter;
use App\Efficiency;
use App\Chooseinfo;
use App\Serviceinfo;
use DB;

class AdminhomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function addDescription()
    {
        return view('backend.adminHome.boxInfo.desAdd');
    }

    public function saveDescription(Request $request)
	{
	
       $des = new Homebox();
       $des->title =$request->title;
	   $des->information =$request->information;
	   $des->save();
	   return redirect()->route('desBoxManage')->with('message','Information Save Successfully');
    }
    

    public function manageDescription()
	{
		$dess=Homebox::all();
		return view ('backend.adminHome.boxInfo.desManage',['dess'=>$dess]);
    }
   
 
    public function updateDescription(Request $request)
	   {
		//return $request;
       $des= Homebox::find($request->id);
       $des->title =$request->title;
	   $des->information =$request->information;
	   $des->save();
	   
	   return redirect()->route('desBoxManage')-> with('message','Information update successfully');
	  }
	  
	
	public function deleteDescription($id){
			$about= Homebox::find($id);
			$about->delete();
	   
            return redirect()->route('desBoxManage')-> with('message','Information Delete Successfully');
      }

      /*Home About Section */
      public function addHomeAbout()
    {
        $x = DB::table('homeabouts')->first();
        if(is_null($x))
        {
        return view('backend.adminHome.about.homeAboutAdd');
        }
        else
        {
            return redirect()->route('homeAboutManage')-> with('message','You can Insert Max: 1 time in field');
        }
    }

    public function saveHomeAbout(Request $request)
	{
	
	   $des = new Homeabout();
	   $des->information =$request->information;
	   $des->save();
	   return redirect()->route('homeAboutManage')->with('message','Information Save Successfully');
    }
    

    public function manageHomeAbout()
	{
		$dess=Homeabout::all();
		return view ('backend.adminHome.about.homeAboutManage',['dess'=>$dess]);
    }
    
    
    public function updateHomeAbout(Request $request)
	   {
		//return $request;
	   $about= Homeabout::find($request->id);
	   $about->information =$request->information;
	   $about->save();
	   return redirect()->route('homeAboutManage')-> with('message','Information update successfully');
	  }
	  
	
	public function deleteHomeAbout($id){
			$about= Homeabout::find($id);
			$about->delete();
            return redirect()->route('homeAboutManage')-> with('message','Information Delete Successfully');
      }

      /*Counter*/
      
  
     
      public function saveCounter(Request $request)
      {
     
         $count = new Homecounter();
         $count->title =$request->title;
         $count->counter =$request->counter;
         $count->save();
         return redirect()->route('counterManage')->with('message','Information Save Successfully');
      }
      
  
      public function manageCounter()
      {
          $counters=Homecounter::all();
          return view ('backend.adminHome.counter.manageCounter',['counters'=>$counters]);
      }
     
   
      public function updateCounter(Request $request)
         {
          //return $request;
         $c= Homecounter::find($request->id);
         $c->title =$request->title;
         $c->counter =$request->counter;
         $c->save();
         
         return redirect()->route('counterManage')-> with('message','Information update successfully');
        }
        
      
      public function deleteCounter($id){
              $about= Homecounter::find($id);
              $about->delete();
         
              return redirect()->route('counterManage')-> with('message','Information Delete Successfully');
        }
  
/*Work efficiency*/


public function saveEff(Request $request)
{

   $eff = new Efficiency();
   $eff->title =$request->title;
   $eff->number =$request->number;
   $eff->save();
   return redirect()->route('efficiencyManage')->with('message','Information Save Successfully');
}


public function manageEff()
{
    $effs=Efficiency::all();
    return view ('backend.adminHome.efficiency.manageEff',['effs'=>$effs]);
}


public function updateEff(Request $request)
   {
    //return $request;
   $c= Efficiency::find($request->id);
   $c->title =$request->title;
   $c->number =$request->number;
   $c->save();
   
   return redirect()->route('efficiencyManage')-> with('message','Information update successfully');
  }
  

public function deleteEff($id){
        $about= Efficiency::find($id);
        $about->delete();
   
        return redirect()->route('efficiencyManage')-> with('message','Information Delete Successfully');
  }
    /*Why Choose us section */

    public function addChoose()
    {
        $ab = DB::table('chooseinfos')->first();
        if(is_null($ab))
        {
        return view('backend.adminHome.choose.chooseAdd');
        }
        else
        {
            return redirect()->route('chooseInfoManage')-> with('message','You can Insert Max: 1 time in field');
        }
    }

    public function saveChoose(Request $request)
	{
	
	   $des = new Chooseinfo();
	   $des->information =$request->information;
	   $des->save();
	   return redirect()->route('chooseInfoManage')->with('message','Information Save Successfully');
    }

    public function manageChoose()
	{
		$dess=Chooseinfo::all();
		return view ('backend.adminHome.choose.chooseManage',['dess'=>$dess]);
    }
      
      public function updateChoose(Request $request)
	   {
		//return $request;
	   $ab=Chooseinfo::find($request->id);
	   $ab->information =$request->information;
	   $ab->save();
	   return redirect()->route('chooseInfoManage')-> with('message','Information Update Successfully');
	  }
	  
	
	public function deleteChoose($id){
			$about=Chooseinfo::find($id);
			$about->delete();
            return redirect()->route('chooseInfoAdd')-> with('message','Information Delete Successfully');
      }
/* Why Choose us service section*/


public function saveService(Request $request)
{

   $serv = new Serviceinfo();
   $serv->service =$request->service;
   $serv->save();
   return redirect()->route('serviceManageChoose')->with('message','Information Save Successfully');
}

public function manageService()
{
            
    $services=Serviceinfo::all();
  
    return view ('backend.adminHome.choose.manageService',['services'=>$services]);
}



public function updateService(Request $request)
   {
    
   $ss=Serviceinfo::find($request->id);
   $ss->service =$request->service;
   $ss->save();
   return redirect()->route('serviceManageChoose')-> with('message','Information Update Successfully');
  }
  

public function deleteService($id){
        $ss=Serviceinfo::find($id);
        $ss->delete();
        return redirect()->route('serviceManageChoose')-> with('message','Information Delete Successfully');
  }
  	  
}
