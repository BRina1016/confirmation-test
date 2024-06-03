<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(Request $request){
        $contact = $request->only(['first_name' , 'last_name', 'gender' , 'email', 'tel1', 'tel2', 'tel3', 'address' , 'building' , 'detail' , 'contact']);
        return view('confirm', compact('contact'));
    }

    public function thanks(Request $request){
        $contact = $request->only(['first_name' , 'last_name', 'gender' , 'email', 'tel', 'address' , 'building' , 'detail' , 'contact']);
        Contact::create($contact);
        return view('thanks');
    }

    public function admin(){
        return view('admin');
    }
}
