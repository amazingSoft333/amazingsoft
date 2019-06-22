<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
		//dd($request);
		if(is_null($request->name))
		{
			
		}
		else{
		User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
		}
		
		
		
		if($request->method == 'card')
		{
			dd($request);
			return view('frontend.product.userspaymentt',['total'=> $request->total]);
		}
		elseif($request->method == 'paypal')
		{
			
		}
		else
		{
			dd($request->method);
		}
		
	}
	public function payment_store(Request $request)
    {
		
	//dd($request);
			
	\Stripe\Stripe::setApiKey ( 'sk_test_RyFAiUILwhx6K0gz2RxbhC9S' );  

	    try {

			\Stripe\Charge::create ( array (

					"amount" => 500 * 100,

					"currency" => "usd",

					"source" => $request->input('stripeToken'), // obtained with Stripe.js

					"description" => "Test payment."
 
			) );


			
			return view('frontend.product.successfull')->with('msg','Successfully Complet Your Order');
														


			
			
			
			/*Session::flash ( 'success-message', 'Payment done successfully !' )

			return Redirect::back ();*/

		}

		 catch ( \Exception $e ) {
			return view('frontend.product.successfull')->with('msg','Unsuccessful!! Please Try Again Later');
			/*Session::flash ( 'fail-message', "Error! Please Try again." );
			
			return Redirect::back ();*/

		}





    }
	/*product_registration*/
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
