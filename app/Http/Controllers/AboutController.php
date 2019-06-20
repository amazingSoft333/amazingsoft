<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutdescription;
use App\Categoryteam;
use App\Desone;
use App\Destwo;
use App\Desthree;
use App\Ceo;
use App\Teammember;
use App\Aboutbanner;
use File;
use DB;


class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function addDescription()
    { 
			
			$a = DB::table('aboutdescriptions')->first();
			if(is_null($a))
			{
				return view('backend.about.desAdd');
			}

			else
			{
					return redirect()->route('desManage')-> with('message','You can Insert Max: 1 time in field');
			}
    }

    public function saveDescription(Request $request)
	{
	
	   $des = new Aboutdescription();
	   $des->information =$request->information;
	   $des->save();
	   return redirect()->route('desManage')->with('message','Information Save Successfully');
    }
    

    public function manageDescription()
	{
		$dess=Aboutdescription::all();
		return view ('backend.about.desManage',['dess'=>$dess]);
    }
		  
    public function updateDescription(Request $request)
	   {
		//return $request;
	   $about= Aboutdescription::find($request->id);
	   $about->information =$request->information;
	   $about->save();
	   
	   return redirect()->route('desManage')-> with('message','Information update successfully');
	  }
	  
	
	public function deleteDescription($id){
			$about= Aboutdescription::find($id);
			$about->delete();
	   
            return redirect()->route('desAdd')-> with('message','Information Delete Successfully');
      }
      
    /*Team-Category Part */
    public function addCategory()
    {
        return view('backend.about.teamCategory.createCategory');
    }

    public function saveCategory(Request $request)
	{
	
	   $catTeam = new Categoryteam();
	   $catTeam->category =$request->category;
	   $catTeam->save();
	   return redirect()->route('catTeamManage')->with('message','Information Save Successfully');
    }

    public function manageCategory()
	{
				
        $catTeams=Categoryteam::all();
      
		return view ('backend.about.teamCategory.manageCategory',['catTeams'=>$catTeams]);
    }
    
    
    
    public function updateCategory(Request $request)
	   {
		//return $request;
	   $cate=Categoryteam::find($request->id);
	   $cate->category =$request->category;
	   $cate->save();
	   
	   return redirect()->route('catTeamManage')-> with('message','Information update successfully');
	  }
	  
	
	public function deleteCategory($id){
			$about=Categoryteam::find($id);
			$about->delete();
	   
            return redirect()->route('catTeamManage')-> with('message','Information Delete Successfully');
	  }
	  
	  /*One box descriptions */

	  public function addOneDescription()
    {
			$b = DB::table('desones')->first();
			if(is_null($b))
			{
				return view('backend.about.threebox.CreativityAdd');
			}

			else
			{
					return redirect()->route('desManageOne')-> with('message','You can Insert Max: 1 time in field');
			}

    }

    public function saveOneDescription(Request $request)
	{
	
	   $desOne = new Desone();
	   $desOne->information =$request->information;
	   $desOne->save();
	   return redirect()->route('desManageOne')->with('message','Information Save Successfully');
    }
    

    public function manageOneDescription()
	{
		$desOnes=Desone::all();
		return view ('backend.about.threebox.CreativityManage',['desOnes'=>$desOnes]);
    }
    
    
    public function updateOneDescription(Request $request)
	   {
		//return $request;
	   $desOne= Desone::find($request->id);
	   $desOne->information =$request->information;
	   $desOne->save();
	   
	   return redirect()->route('desManageOne')-> with('message','Information update successfully');
	  }
	  
	
	public function deleteOneDescription($id){
			$about= Desone::find($id);
			$about->delete();
	   
            return redirect()->route('desAddOne')-> with('message','Information Delete Successfully');
	  }
	  
	  /*Two Box Description */

	  public function addTwoDescription()
	  {
			$c = DB::table('destwos')->first();
			if(is_null($c))
			{
			return view('backend.about.threebox.missionAdd');
			}
			else
			{
				return redirect()->route('desManageTwo')-> with('message','You can Insert Max: 1 time in field');
			}
	  }
  
	  public function saveTwoDescription(Request $request)
	  {
	  
		 $desTwo = new Destwo();
		 $desTwo->information =$request->information;
		 $desTwo->save();
		 return redirect()->route('desManageTwo')->with('message','Information Save Successfully');
	  }
	  
  
	  public function manageTwoDescription()
	  {
		  $desTwos=Destwo::all();
		  return view ('backend.about.threebox.missionManage',['desTwos'=>$desTwos]);
	  }
	  
	  
	  
	  public function updateTwoDescription(Request $request)
		 {
		  //return $request;
		 $desTwo= Destwo::find($request->id);
		 $desTwo->information =$request->information;
		 $desTwo->save();
		 
		 return redirect()->route('desManageTwo')-> with('message','Information update successfully');
		}
		
	  
	  public function deleteTwoDescription($id){
			  $about= Destwo::find($id);
			  $about->delete();
		 
			  return redirect()->route('desAddTwo')-> with('message','Information Delete Successfully');
		}

		/*Three Box Description*/

		public function addThreeDescription()
	  {
			$d = DB::table('desthrees')->first();
			if(is_null($d))
			{
			return view('backend.about.threebox.visionAdd');
			}

			else
			{
				return redirect()->route('desManageThree')-> with('message','You can Insert Max: 1 time in field');
			}

	  }
  
	  public function saveThreeDescription(Request $request)
	  {
	  
		 $desThree = new Desthree();
		 $desThree->information =$request->information;
		 $desThree->save();
		 return redirect()->route('desManageThree')->with('message','Information Save Successfully');
	  }
	  
  
	  public function manageThreeDescription()
	  {
		  $desThrees=Desthree::all();
		  return view ('backend.about.threebox.visionManage',['desThrees'=>$desThrees]);
	  }
	  
	  
	  
	  public function updateThreeDescription(Request $request)
		 {
		  //return $request;
		 $desThree= Desthree::find($request->id);
		 $desThree->information =$request->information;
		 $desThree->save();
		 
		 return redirect()->route('desManageThree')-> with('message','Information update successfully');
		}
		
	  
	  public function deleteThreeDescription($id){
			  $about= Desthree::find($id);
			  $about->delete();
		 
			  return redirect()->route('desAddThree')-> with('message','Information Delete Successfully');
		}

		/* CEO information */
		public function createCeoInfo()
    {
			$e = DB::table('ceos')->first();
			if(is_null($e))
			{
			return view('backend.about.ceo.ceoAdd');
			}

			else
			{
				return redirect()->route('ceoInfoManage')-> with('message','You can Insert Max: 1 time in field');
			}
    }


    public function storeCeoInfo(Request $request)
  {
		
	  $ceoImage="";
       if($request->hasFile('ceoImage'))
       {
           $destinationPath='Image/CEOImage/';
           $file=$request->ceoImage;
           $extention=$file->getClientOriginalExtension();
           $filename=rand(1111,9999).".".$extention;
           $file->move($destinationPath, $filename);
           $ceoImage=$filename;
       }
       $data = [
		      		'name' => $request->name,
							'designation' => $request->designation,
							'information' => $request->information,
              'ceoImage' => $ceoImage,
          ];
       $ceo= Ceo::create($data);
       return redirect()->route('ceoInfoManage');

  }

   public function manageCeoInfo()
	{
		$ceos=Ceo::all();
		return view('backend.about.ceo.ceoManage',['ceos'=>$ceos]);
	}


	public function editCeoInfo($id)
	{
		$ceoById=Ceo::where('id',$id)->first();
		
		return view('backend.about.ceo.ceoEdit',['ceoById'=>$ceoById]);
	}


	public function updateCeoInfo(Request $request,$id)
	{
		    // return $request->all();
		$oldimage = Ceo::select('ceoImage')->find($id);
	  
	   if ($request->hasFile('ceoImage')) {
          $file = $request->ceoImage;
          $extention = $file->getClientOriginalExtension();
          $filename = rand(1111, 9999).
          ".".$extention;
          $file->move(('Image/CEOImage/'), $filename);
          $photo = $filename;
          $filename = ($photo);
          $oldimage =Ceo::findOrFail($id);
          $image_path = 
          'Image/CEOImage/'.$oldimage->ceoImage;
          if (File::exists($image_path)) {
              File::delete($image_path);

          }
		  $data = [
				      'name' => $request->name,
				      'designation' => $request->designation,
				      'information' => $request->information,
              'ceoImage' => $photo,
          ];
					DB::table('ceos')->where('id', $id)->update($data);

					return redirect()->route('ceoInfoManage')->with('message','Information Update Successfully');
		 }
		 
	   else {
          $data = 
		  [
							'name' => $request->name,
							'designation' => $request->designation,
							'information' => $request->information,
              'ceoImage' =>$oldimage->ceoImage,
          ];
          
            DB::table('ceos')->where('id', $id)->update($data);

						return redirect()->route('ceoInfoManage')->with('message','Information Update Successfully');
      }
	   
	  
	     
	}

	public function deleteCeoInfo($id){
			
			 $oldimage =Ceo::findOrFail($id);
		    $image_path ='Image/CEOImage/'.$oldimage->ceoImage;
			if(File::exists($image_path))
				{
				   File::delete($image_path);
				}
		     $oldimage->delete();
		   	return redirect()->route('ceoInfoAdd')->with('message','Successfully Deleted');
	  }

		/* Company Member Information Section */
		public function createMemberInfo()
    {
			$categories=Categoryteam::get();
    	return view('backend.about.member.memberCreate',['categories'=>$categories]);
		}
		
		public function saveMemberInfo(Request $request){
		

			$memberImage="";
			if($request->hasFile('memberImage'))
			{
					$destinationPath='Image/MemberImage/';
					$file=$request->memberImage;
					$extention=$file->getClientOriginalExtension();
					$filename=rand(1111,9999).".".$extention;
					$file->move($destinationPath, $filename);
					$memberImage=$filename;
			}
			$data = [
				     'name' => $request->name,
						 'categoryId'=>$request->categoryId,
						 'address' => $request->address,
						 'fbLink' => $request->fbLink,
						 'linkdLink' => $request->linkdLink,
						 'twLink' => $request->twLink,
						 'memberImage' => $memberImage,
				 ];
			$member=Teammember::create($data);
			return redirect()->route('memberInfoManage');

	 }

	 public function manageMemberInfo()
	{
		$members = DB::table('teammembers')
            ->join('categoryteams','teammembers.categoryId', '=', 'categoryteams.id')
            ->select('teammembers.*','categoryteams.category')
						->get();
		$categories=Categoryteam::get();			
		return view('backend.about.member.memberManage',['members'=>$members,'categories'=>$categories]);
	}
	public function detailMemberInfo($id)
	{
		$memberById = DB::table('teammembers')
		->join('categoryteams','teammembers.categoryId', '=', 'categoryteams.id')
    ->select('teammembers.*','categoryteams.category')
		->where('teammembers.id',$id)
		->first();
		return view('backend.about.member.memberDetail',['memberById'=>$memberById]);
	}

	public function updateMemberInfo(Request $request,$id)
	{
		    //return $request->all();
		$oldimage =Teammember::select('memberImage')->find($id);
	  
	   if ($request->hasFile('memberImage')) {
          $file = $request->memberImage;
          $extention = $file->getClientOriginalExtension();
          $filename = rand(1111, 9999).
          ".".$extention;
          $file->move(('Image/MemberImage/'), $filename);
          $photo = $filename;
          $filename = ($photo);
          $oldimage =Teammember::findOrFail($id);
          $image_path =
          'Image/MemberImage/'.$oldimage->memberImage;
          if (File::exists($image_path)) {
              File::delete($image_path);

          }
		  $data = [
				'name' => $request->name,
				'categoryId'=>$request->categoryId,
				'address' => $request->address,
				'fbLink' => $request->fbLink,
				'linkdLink' => $request->linkdLink,
				'twLink' => $request->twLink,
        'memberImage' =>$photo,
          ];
					DB::table('teammembers')->where('id', $id)->update($data);

					return redirect()->route('memberInfoManage')->with('message','Information Update Successfully');
	   }
	   else {
          $data = [
				'name' => $request->name,
				'categoryId'=>$request->categoryId,
				'address' => $request->address,
				'fbLink' => $request->fbLink,
				'linkdLink' => $request->linkdLink,
				'twLink' => $request->twLink,
        'memberImage' => $oldimage->memberImage,
					];
          
            DB::table('teammembers')->where('id', $id)->update($data);

						return redirect()->route('memberInfoManage')->with('message','Information Update Successfully');
      }
	   
	  
	     
	}
	public function deleteMemberInfo($id){
			
		$oldimage =Teammember::findOrFail($id);
		 $image_path ='Image/MemberImage/'.$oldimage->memberImage;
	 if(File::exists($image_path))
		 {
				File::delete($image_path);
		 }
			$oldimage->delete();
			return redirect()->route('memberInfoManage')->with('message','Successfully Deleted');
 }
 /*About us Banner Section  */
public function createAboutBanner()
{
	$f = DB::table('aboutbanners')->first();
			if(is_null($f))
			{
	return view('backend.about.banner.createBannner');
			}
			else
			{
					return redirect()->route('bannerInfoManage')-> with('message','You can Insert Max: 1 time in field');
			}

}

public function saveAboutBanner(Request $request){
		

	$banner="";
	if($request->hasFile('banner'))
	{
			$destinationPath='Image/BannerImage/';
			$file=$request->banner;
			$extention=$file->getClientOriginalExtension();
			$filename=rand(1111,9999).".".$extention;
			$file->move($destinationPath, $filename);
			$banner=$filename;
	}
	$data = [
				 
				 'banner' => $banner,
		 ];
	$aboutBanner=Aboutbanner::create($data);
	return redirect()->route('bannerInfoManage');

}

public function manageAboutBanner()
	  {
		  $aboutBanners=Aboutbanner::all();
			return view ('backend.about.banner.manageBanner',['aboutBanners'=>$aboutBanners]);
		}
		
		public function deleteAboutBanner($id){
			
			$oldimage =Aboutbanner::findOrFail($id);
			 $image_path ='Image/BannerImage/'.$oldimage->banner;
			 if(File::exists($image_path))
			 {
					File::delete($image_path);
			 }
				$oldimage->delete();
				return redirect()->route('bannerInfoManage')->with('message','Successfully Deleted');
	 }
	  

 /*End About us Banner Section */


		
      



}