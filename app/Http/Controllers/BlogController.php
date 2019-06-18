<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Blogbanner;
use App\Blogcategory;
use DB;
use File;

class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //blog category section
    public function saveBlogCat(Request $request)
	{
	
	   $c = new Blogcategory();
       $c->category =$request->category;
	   $c->save();
	   return redirect()->route('blogCatManage')->with('message','Information Save Successfully');
    }
    public function manageBlogCat()
    {
        
        $categories = DB::table('blogcategories')
        ->select('blogcategories.*')
        ->orderBy('id','DESC')
        ->get();
       
        return view('backend.blog.blogCatManage',['categories'=>$categories]);
            
    }

    public function updateBlogCat(Request $request)
    {
   
    $xx=Blogcategory::find($request->id);
    $xx->category =$request->category;
    $xx->save();
    
    return redirect()->route('blogCatManage')-> with('message','Information update successfully');
   }
   
 
 public function deleteBlogCat($id){
         $about=Blogcategory::find($id);
         $about->delete();
    
         return redirect()->route('blogCatManage')-> with('message','Information Delete Successfully');
   }

    //End Blog category section
   
    public function saveBlog(Request $request){

        $blogImage="";
        if($request->hasFile('blogImage'))
        {
            $destinationPath='Image/BlogImage/';
            $file=$request->blogImage;
            $extention=$file->getClientOriginalExtension();
            $filename=rand(1111,9999).".".$extention;
            $file->move($destinationPath, $filename);
            $blogImage=$filename;
        }
        $data = [
               'blogTitle' => $request->blogTitle,
               'categoryId'=> $request->categoryId,
               'information' => $request->information,
               'blogImage' => $blogImage,
           ];
        $book= Blog::create($data);
        return redirect()->route('blogManage');
    
 
 }

    public function manageBlog()
	{
		$blogs = DB::table('blogs')
            ->join('blogcategories','blogs.categoryId', '=', 'blogcategories.id')
            ->select('blogs.*','blogcategories.category')
            ->orderBy('id','DESC')
            ->get();
        $categories=Blogcategory::get();
		return view('backend.blog.blogManage',['blogs'=>$blogs,'categories'=>$categories]);
    }

    

    public function updateBlog(Request $request,$id)
	{
		    // return $request->all();
		$oldimage = Blog::select('blogImage')->find($id);
	  
	   if ($request->hasFile('blogImage')) {
          $file = $request->blogImage;
          $extention = $file->getClientOriginalExtension();
          $filename = rand(1111, 9999).
          ".".$extention;
          $file->move(('Image/BlogImage/'), $filename);
          $photo = $filename;
          $filename = ($photo);
          $oldimage = Blog::findOrFail($id);
          $image_path = 
          'Image/BlogImage/'.$oldimage->blogImage;
          if (File::exists($image_path)) {
              File::delete($image_path);

          }
		  $data = [
              'blogTitle' => $request->blogTitle,
              'categoryId'=> $request->categoryId,
              'information' => $request->information,
              'blogImage' => $photo,
          ];
					DB::table('blogs')->where('id', $id)->update($data);

                    return redirect()->route('blogManage') ->with('message','Blog info update successfully');
	   }
	   else {
          $data = 
		  [
              'blogTitle' => $request->blogTitle,
              'categoryId'=> $request->categoryId,
              'information' => $request->information,
              'blogImage' => $oldimage->blogImage,
          ];
          
            DB::table('blogs')->where('id', $id)->update($data);

        return redirect()->route('blogManage') ->with('message','Blog info update successfully');
      }
	   
	  
	     
    }
    
    public function deleteBlog($id){
			
        $oldimage = Blog::findOrFail($id);
       $image_path = 'Image/BlogImage/'.$oldimage->blogImage;
       if(File::exists($image_path))
           {
              File::delete($image_path);
           }
        $oldimage->delete();
        return redirect()->route('blogManage')->with('message','Successfully Deleted');
 }

//Blog Banner Section
public function createBlogBanner()
{
	$f = DB::table('blogbanners')->first();
			if(is_null($f))
			{
	return view('backend.blog.banner.createBannner');
			}
			else
			{
					return redirect()->route('blogBannerManage');
			}

}

public function saveBlogBanner(Request $request){
		

	$banner="";
	if($request->hasFile('banner'))
	{
			$destinationPath='Image/BlogBanner/';
			$file=$request->banner;
			$extention=$file->getClientOriginalExtension();
			$filename=rand(1111,9999).".".$extention;
			$file->move($destinationPath, $filename);
			$banner=$filename;
	}
	$data = [
				 
				 'banner' => $banner,
		 ];
	$blogBanner=Blogbanner::create($data);
	return redirect()->route('blogBannerManage')->with('message','Successfully Add Information');

}

public function manageBlogBanner()
	  {
		  $blogBanners=Blogbanner::all();
			return view ('backend.blog.banner.manageBanner',['blogBanners'=>$blogBanners]);
		}
		
public function deleteBlogBanner($id){
			
			$oldimage =Blogbanner::findOrFail($id);
			 $image_path ='Image/BlogBanner/'.$oldimage->banner;
			 if(File::exists($image_path))
			 {
					File::delete($image_path);
			 }
				$oldimage->delete();
				return redirect()->route('blogBannerAdd')->with('message','Successfully Deleted');
	 }
	  

 /*End About us Banner Section */

}
    

    




