<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
	    public function formValidation()

    {

    	return view('welcome');

    }


    public function formValidationPost(Request $request)

    {

    	$this->validate($request,[

    			'proname' => 'required|min:3|max:100',

    			'qtyinstock' => 'required|numeric',

    			'priceperitem' => 'required|numeric',

    		],[

    			'proname.required' => ' The first name field is required.',

    			'proname.min' => ' The first name must be at least 3 characters.',

    			'proname.max' => ' The first name may not be greater than 100 characters.',

    		]);

		$proname=$request->input('proname');
		$qty=$request->input('qtyinstock');
		$amt=$request->input('priceperitem');
		//echo $proname.$qty.$amt;
		 $data['proname']=$proname;
		 $data['qty']=$qty;
		 $data['amt']=$amt;
		 $data['sumamt']=$qty*$amt;
		 return view('welcome')->with($data);
		 
    	dd('You are successfully added all fields.');

    }
}
