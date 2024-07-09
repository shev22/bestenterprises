<?php

namespace App\Http\Controllers;

use App\Models\EmailForm;
use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function services($args = '')
   {
      return view('frontend.services');
   }

   public function store(Request $request)
   {

      $validatedData = $request->validate([
         'name' => 'required|string',
         'email' => 'required|email|unique:users,email',
         // 'website' => 'string',
         // 'phone' => 'regex:/^([0-9\s\-\+\(\)]*)$/',
         'text' => 'required',
         'market_budget' => 'required',
    
       ]);

      EmailForm::create([
         "website" => $request->website,
         "name" =>  $request->name,
         "email" => $request->email,
         "phone" =>   $request->phone,
         "text" =>  $request->message,
         "market_budget" =>  $request->market_budget
      ]);

      return redirect()->back()->with('success', 'Thank you for contacting metapromo');
   }

   public function admin()
   {
      $quotes = EmailForm::all();
      return view('frontend.admin.admin', compact('quotes'));
   }
}
