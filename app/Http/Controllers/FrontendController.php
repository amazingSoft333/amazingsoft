<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\product_order_model;
use App\Package;
use App\Blog;



use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

use PayPal\Api\Payer;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\ItemList;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Redirect;
use Session;
use URL;
use DB;
use \Auth;


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

		if($request->has('name'))
		{
			$validatedData = $request->validate([
			'email' => 'unique:users',
			]);
			User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
			]);
		}
		else{
			
		}
		
		
		
		if($request->method == 'card')
		{
			//dd($request);
			return view('frontend.product.userspaymentt',['total'=> $request->total,'email' => $request->email]);
		}
		elseif($request->method == 'paypal')
		{
			return view('frontend.product.userspaymenttt',['total'=> $request->total,'email' => $request->email]);
		}
		else
		{
			return view('frontend.product.userspaymentttt',['total'=> $request->total,'email' => $request->email]);
		}
		
	}
	public function payment_store(Request $request)
    {
		
			
	\Stripe\Stripe::setApiKey ( 'sk_test_RyFAiUILwhx6K0gz2RxbhC9S' );  

	    try {

			\Stripe\Charge::create ( array (

					"amount" => $request->amount * 100,

					"currency" => "usd",

					"source" => $request->input('stripeToken'), // obtained with Stripe.js

					"description" => "Test payment."
 
			) );
			
			product_order_model::create([
            'email' => $request->email,
            'u_id' => $request->customer,
            'product_id' => $request->product_id,
            'product_unique_id' => $request->product_unique_id,
            'domain' => $request->domain,
            'site' => $request->site,
            'doamin_lid' => $request->doamin_lid,
            'domain_pass' => $request->domain_pass,
            'search' => $request->search,
            'domain_cost' => $request->domain_cost,
            'demo2' => $request->demo2,
			
            'cpanel_link' => $request->cpanel_link,
            'cpanel_id' => $request->cpanel_id,
            'cpanel_pass' => $request->cpanel_pass,
            'hosting_cost' => $request->hosting_cost,
            'doamin_lid' => $request->doamin_lid,
            'content_size' => $request->content_size,
            'content' => $request->content,
            'total' => $request->amount,
            'method' => $request->method,
			]);

			
			return view('frontend.product.successfull');
														


			
			
			
			/*Session::flash ( 'success-message', 'Payment done successfully !' )

			return Redirect::back ();*/

		}

		 catch ( \Exception $e ) {
			 dd($e);
			return view('frontend.product.successfull');
			/*Session::flash ( 'fail-message', "Error! Please Try again." );
			
			return Redirect::back ();*/

		}





    }
	private $_api_context;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
	{

			/** PayPal api context **/
			$paypal_conf = \Config::get('paypal');
			$this->_api_context = new ApiContext(new OAuthTokenCredential(
				$paypal_conf['client_id'],
				$paypal_conf['secret'])
			);
			$this->_api_context->setConfig($paypal_conf['settings']);
	}
	public function payWithpaypal(Request $request)
	{
		product_order_model::create([
            'email' => $request->email,
			'u_id' => $request->u_id,
			'product_id' => $request->product_id,
            'product_unique_id' => $request->product_unique_id,
            'domain' => $request->domain,
            'site' => $request->site,
            'doamin_lid' => $request->doamin_lid,
            'domain_pass' => $request->domain_pass,
            'search' => $request->search,
            'domain_cost' => $request->domain_cost,
            'demo2' => $request->demo2,
			
            'cpanel_link' => $request->cpanel_link,
            'cpanel_id' => $request->cpanel_id,
            'cpanel_pass' => $request->cpanel_pass,
            'hosting_cost' => $request->hosting_cost,
            'doamin_lid' => $request->doamin_lid,
            'content_size' => $request->content_size,
            'content' => $request->content,
            'total' => $request->amount,
            'method' => $request->method,
			]);
			
		
			$payer = new Payer();
				$payer->setPaymentMethod('paypal');
				
				$item_1 = new Item();
				$item_1->setName('Item 1') /** item name **/
							->setCurrency('USD')
							->setQuantity(1)
						    ->setPrice($request->get('amount')); /** unit price **/

				$item_list = new ItemList();
				$item_list->setItems(array($item_1));
				
				
				
				
				/*Amount ta add krte hobe*/
				
				$amount = new Amount();
				$amount->setCurrency('USD')
							 ->setTotal($request->get('amount'));
				/*end*/
				$transaction = new Transaction();
				$transaction->setAmount($amount)
							 ->setItemList($item_list)
							 ->setDescription('Your transaction description');
				/*payment succefull hole*/
				$redirect_urls = new RedirectUrls();
						$redirect_urls->setReturnUrl(URL::route('status')) /** Specify return URL **/
						->setCancelUrl(URL::route('status'));
				/*End*/
				$payment = new Payment();
						$payment->setIntent('Sale')
						  ->setPayer($payer)
						  ->setRedirectUrls($redirect_urls)
						  ->setTransactions(array($transaction));
			/** dd($payment->create($this->_api_context));exit; **/
			try {
					$payment->create($this->_api_context);
				}
			catch (\PayPal\Exception\PPConnectionException $ex) {
				if (\Config::get('app.debug')) {
					\Session::put('error', 'Connection timeout');
					return Redirect::route('paywithpaypal');
				} else {

					\Session::put('error', 'Some error occur, sorry for inconvenient');
					return Redirect::route('paywithpaypal');
				}
			}

		foreach ($payment->getLinks() as $link) {
				if ($link->getRel() == 'approval_url') {
					$redirect_url = $link->getHref();
					break;
	}
	}

	/** add payment ID to session **/
			Session::put('paypal_payment_id', $payment->getId());
		if (isset($redirect_url)) {
			/** redirect to paypal **/
				return Redirect::away($redirect_url);
			}

		\Session::put('error', 'Unknown error occurred');
			return Redirect::route('paywithpaypal');
	}
		
		
		
		
	public function getPaymentStatus()
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');

		/** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {

			\Session::put('error', 'Payment failed');
				return Redirect::route('home');
		}

		$payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

		/**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

		if ($result->getState() == 'approved') {

				\Session::put('success', 'Payment success');
            return Redirect::route('home');
		}

			\Session::put('error', 'Payment failed');
        return Redirect::route('about');
	}	
	
	
	
	
	
	public function paymentbd_store(Request $request)
	{
			//dd($request);
			product_order_model::create([
            'email' => $request->email,
			'u_id' => $request->u_id,
			'product_id' => $request->product_id,
            'product_unique_id' => $request->product_unique_id,
            'domain' => $request->domain,
            'site' => $request->site,
            'doamin_lid' => $request->doamin_lid,
            'domain_pass' => $request->domain_pass,
            'search' => $request->search,
            'domain_cost' => $request->domain_cost,
            'demo2' => $request->demo2,
			
            'cpanel_link' => $request->cpanel_link,
            'cpanel_id' => $request->cpanel_id,
            'cpanel_pass' => $request->cpanel_pass,
            'hosting_cost' => $request->hosting_cost,
            'doamin_lid' => $request->doamin_lid,
            'content_size' => $request->content_size,
            'content' => $request->content,
            'total' => $request->amount,
            'method' => $request->method,
            'mobile' => $request->mobile,
            'transaction' => $request->transaction,
			]);
			return view('frontend.product.successfull');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public function success_index()
	{
		return view('frontend.product.successfull');
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

    
}
