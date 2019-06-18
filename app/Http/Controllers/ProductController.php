<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productcat;
use App\Product;
use App\Productbanner;
use DB;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function saveCategory(Request $request)
	{
	
	   $c = new Productcat();
       $c->category =$request->category;
	   $c->save();
	   return redirect()->route('catManage')->with('message','Information Save Successfully');
    }
    public function manageCategory()
    {
        
        $categories = DB::table('productcats')
        ->select('productcats.*')
        ->orderBy('id','DESC')
        ->get();
       
        return view('backend.product.productCatManage',['categories'=>$categories]);
            
    }

    public function updateCategory(Request $request)
    {
   
    $xx=Productcat::find($request->id);
    $xx->category =$request->category;
    $xx->save();
    return redirect()->route('catManage')-> with('message','Information update successfully');
   }
   
 
 public function deleteCategory($id){
         $about=Productcat::find($id);
         $about->delete();
         return redirect()->route('catManage')-> with('message','Information Delete Successfully');
   }




/*Aamazing Soft Product section */
public function saveProduct(Request $request)
{

  $imageProduct="";
  if($request->hasFile('imageProduct'))
  {
      $destinationPath='Image/ProductImage/';
      $file=$request->imageProduct;
      $extention=$file->getClientOriginalExtension();
      $filename=rand(1111,9999).".".$extention;
      $file->move($destinationPath, $filename);
      $imageProduct=$filename;
  }
  $data = [
                       'name' => $request->name,
                       'category' => $request->category,
                       'information' => $request->information,
                       'price'=>$request->price,
                       'imageProduct' => $imageProduct,
     ];
  $test=Product::create($data);
  return redirect()->route('productManage');

}

public function manageProduct()
{
    $products= DB::table('products')
        ->join('productcats','products.category', '=', 'productcats.id')
        ->select('products.*','productcats.category')
        ->orderBy('id','DESC')
        ->get();
    $categories=Productcat::get();			
    return view('backend.product.productManage',['products'=>$products,'categories'=>$categories]);
        
}

public function updateProduct(Request $request,$id)
{
     
  $oldimage =Product::select('imageProduct')->find($id);
    
  if ($request->hasFile('imageProduct')) {
     $file = $request->imageProduct;
     $extention = $file->getClientOriginalExtension();
     $filename = rand(1111, 9999).
     ".".$extention;
     $file->move(('Image/ProductImage/'), $filename);
     $photo = $filename;
     $filename = ($photo);
     $oldimage =Product::findOrFail($id);
     $image_path = 
     'Image/ProductImage/'.$oldimage->imageProduct;
     if (File::exists($image_path)) {
         File::delete($image_path);

     }
     $data = [
                'name' => $request->name,
                 'category' => $request->category,
                 'information' => $request->information,
                 'price'=>$request->price,
                  'imageProduct' => $photo,
     ];
               DB::table('products')->where('id', $id)->update($data);

               return redirect()->route('productManage')->with('message','Information Update Successfully');
    }
    
  else {
     $data = 
     [
        'name' => $request->name,
        'category' => $request->category,
        'information' => $request->information,
        'price'=>$request->price,
        'imageProduct' =>$oldimage->imageProduct,
     ];
     
       DB::table('products')->where('id', $id)->update($data);

                   return redirect()->route('productManage')->with('message','Information Update Successfully');
 }
  
     
}

public function deleteProduct($id){
			
    $oldimage =Product::findOrFail($id);
   $image_path ='Image/ProductImage/'.$oldimage->imageProduct;
   if(File::exists($image_path))
       {
          File::delete($image_path);
       }
    $oldimage->delete();
      return redirect()->route('productManage')->with('message','Successfully Deleted');
}



/*Aamazing Soft Product section End*/

/*Product Banner Section Start */
public function createProductBanner()
{
	$f = DB::table('productbanners')->first();
			if(is_null($f))
			{
	return view('backend.product.banner.createBannner');
			}
			else
			{
					return redirect()->route('productImageManage')-> with('message','You can Insert Max: 1 time in field');
			}

}

public function saveProductBanner(Request $request){
		

	$banner="";
	if($request->hasFile('banner'))
	{
			$destinationPath='Image/ProductBannerImage/';
			$file=$request->banner;
			$extention=$file->getClientOriginalExtension();
			$filename=rand(1111,9999).".".$extention;
			$file->move($destinationPath, $filename);
			$banner=$filename;
	}
	$data = [
				 
				 'banner' => $banner,
		 ];
	$productBanner=Productbanner::create($data);
	return redirect()->route('productImageManage')->with('message','Successfully Saved Information');

}

public function manageProductBanner()
	  {
		  $productBanners=Productbanner::all();
			return view ('backend.product.banner.manageBanner',['productBanners'=>$productBanners]);
		}
		
		public function deleteProductBanner($id){
			
			$oldimage =Productbanner::findOrFail($id);
			 $image_path ='Image/ProductBannerImage/'.$oldimage->banner;
			 if(File::exists($image_path))
			 {
					File::delete($image_path);
			 }
				$oldimage->delete();
				return redirect()->route('productImageAdd')->with('message','Successfully Deleted');
	 }
	  

/*Product Banner Section End */
}