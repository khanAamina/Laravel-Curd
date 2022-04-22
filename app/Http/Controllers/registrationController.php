<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class registrationController extends Controller
{
   //Customer Registration function 
   public function index()
   {
      $url=url('/registration');
      $title='Customer Registration';
      $customer=new Customer();
      $data=compact('url','title','customer');
      return view('registration')->with($data);
   }
 // customer save function 
   public function store(Request $req)
   {
      $validate=$req->validate([
         'firstname'=>'required',
         'lastname'=>'required',
         'email'=>'required|email',
         'password'=>'required|confirmed',
         'password_confirmation'=>'required',
      ]);
      $customer=new Customer;
      $customer->first_name=$req['firstname'];
      $customer->last_name=$req['lastname'];
      $customer->email=$req['email'];
      $customer->password=md5($req['password']);
      $customer->save();
      return redirect('/customer/view');
   }
   //customer view function 
   public function view(){
      $customers=Customer::all();
      $data=compact('customers');
      return view('customer-view')->with($data);
   }
   //delete function
   public function delete($id){
      $customer=Customer::find($id);
      if(!is_null($customer)){
         $customer->delete();
      }
      return redirect('/customer/view');
   }
   //update function
   public function edit($id){
      $customer=Customer::find($id);
      if(is_null($customer)){
         return redirect('/customer/view');
      }else{
         $url=url('/customer/update').'/'.$id;
         $title='Update Customer Data';
         $data=compact('customer','url','title');
         return view('registration')->with($data);
      }
   }
   public function update($id ,Request $req){
      $customer=Customer::find($id);
      $customer->first_name=$req['firstname'];
      $customer->last_name=$req['lastname'];
      $customer->email=$req['email'];
      $customer->save();
      return redirect('/customer/view');
   }


}
