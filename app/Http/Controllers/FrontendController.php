<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Blog;


class FrontendController extends Controller
{
    public function index()
	{
		return view('frontend.home.homeContent');
    }
    public function aboutContent()
    {
        return view('frontend.about.aboutContent');
    }
    Public function packageContent($id)
    {
        $publishedPackages=Package::where('categoryId',$id)->get();                     
        return view('frontend.packages.packageContent',['publishedPackages'=>$publishedPackages]);
    }


    public function productContent()
    {
        return view('frontend.product.productContent');
    }

    public function productDetail()
    {
		//dd($id);
        return view('frontend.product.productDetails');
    }

    public function productRegister()
    {
        return view('frontend.product.productRegister');
    }
	/*product registration*/
	public function userpayment_index()
	{
		return view('frontend.product.userpayment');
	}
	public function userpayment2_index(Request $request)
	{
		dd($request);
	}

    public function blogContent()
    {
        $publishedRecentNews=Blog::take(5)
                            ->orderBy('id', 'DESC')
                            ->get();
        return view('frontend.blog.blogContent',['publishedRecentNews'=>$publishedRecentNews]);
    }
    public function blogDetailContent($id)
    {
        
        $publishedRecentNews=Blog::take(5)
                            ->orderBy('id', 'DESC')
                            ->get();
       $blogById=Blog::where('id',$id)->first();
        return view('frontend.blog.blogDetail',['publishedRecentNews'=>$publishedRecentNews,'blogById'=>$blogById]);
    }
    public function contactContent()
    {
        return view('frontend.contact.contactContent');
    }

    public function userLogin()
    {
    return view ('frontend.loginReg.login');
    }

    public function userRegister()
    {
        return view('frontend.loginReg.registration');
    }
}
