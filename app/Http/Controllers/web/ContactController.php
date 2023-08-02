<?php

namespace App\Http\Controllers\Web;

use App\Contact;
use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create(){
        $countries = Country::all();

        return view('pages.contact', compact('countries'));
    }

    public function store(StoreContactRequest $request){

        // dd($request);


        $contact= Contact::create($request->all());

         // Send mail to user
      Mail::to($contact->email)->send(new ContactMail($contact));
        // Send mail to admin
      Mail::to(config('app.mail_address'))->send(new ContactAdminMail($contact));

      return redirect()->back()->withSuccess('Thank you for showing your intrest, We\'ve received your query successfully.');
    }
}
