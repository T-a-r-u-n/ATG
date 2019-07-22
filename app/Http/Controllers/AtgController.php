<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Atg;
use Session;

class AtgController extends Controller
{

    public function index()
    {
        
    	return view('Atg');

    }

    public function storeandview(Request $request)
    {

  

        
        $person = new Atg();
            $person->name = $request->input('name');
            $person->email = $request->input('email');
            $person->pin = $request->input('pin');
            if(Atg::where('email',$request->input('email'))->exists()){
                Session::flash('error', 'Data already exist');
                return redirect()->back()->withInput();
            } 
            if (filter_var($person->email, FILTER_VALIDATE_EMAIL)) {
                if(!preg_match('/^\d{6}$/', $person->pin)) {
                    Session::flash('error', 'Invalid Pincode');
                    return redirect()->back()->withInput();
                }
                $person->save();
    
                Session::flash('success', 'inserted');
        
                return redirect()->back()->withInput();
              } else {
                Session::flash('error', 'Invalid Email');
                return redirect()->back()->withInput();
              }
           
    }


}
