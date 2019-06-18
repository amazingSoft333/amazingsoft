<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Packagecat;
use App\Package;
use DB;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function savePackageCategory(Request $request)
	{
	
	   $c = new Packagecat();
       $c->category =$request->category;
	   $c->save();
	   return redirect()->route('packageCategoryManage')->with('message','Information Save Successfully');
    }

    public function managePackageCategory()
    {
        //$categories=Portcat::idDescending()->all();
        $categories = DB::table('packagecats')
        ->select('packagecats.*')
        ->orderBy('id','DESC')
        ->get();
       
        return view('backend.package.packageCatManage',['categories'=>$categories]);
            
    }

    public function updatePackageCategory(Request $request)
    {
     //return $request;
    $xx=Packagecat::find($request->id);
    $xx->category =$request->category;
    $xx->save();
    
    return redirect()->route('packageCategoryManage')-> with('message','Information update successfully');
   }

   public function deletePackageCategory($id){
    $about=Packagecat::find($id);
    $about->delete();

    return redirect()->route('packageCategoryManage')-> with('message','Information Delete Successfully');
}

/*package section */

public function savePackage(Request $request)
{

   $c = new Package();
   $c->name =$request->name;
   $c->categoryId =$request->categoryId;
   $c->price =$request->price;
   $c->information=$request->information;
   $c->save();
   return redirect()->route('packageManage')->with('message','Information Save Successfully');
}

public function managePackage()
{
    $packages = DB::table('packages')
        ->join('packagecats','packages.categoryId', '=', 'packagecats.id')
        ->select('packages.*','packagecats.category')
        ->orderBy('id','DESC')
        ->get();
    $categories=Packagecat::get();			
    return view('backend.package.packageManage',['packages'=>$packages,'categories'=>$categories]);
        
}

public function updatePackage(Request $request)
{
 //return $request;
$about= Package::find($request->id);
$about->name =$request->name;
$about->categoryId =$request->categoryId;
$about->price =$request->price;
$about->information=$request->information;
$about->save();

return redirect()->route('packageManage')-> with('message','Information update successfully');
}


public function deletePackage($id){
    $about= Package::find($id);
    $about->delete();

    return redirect()->route('packageManage')-> with('message','Information Delete Successfully');
}



}
