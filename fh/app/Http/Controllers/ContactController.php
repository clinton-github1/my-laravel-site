<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
// use App\ContactUS;

class ContactController extends Controller
{
       

        public function index()
   {
       return view('footer');
   }
   
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    * 
    */


     function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|digits:10|numeric',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        Contact::create($input);

        $data = array(
            'name' => $request->name,
            'message' => $request->message,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject
        );

        Mail::to('clintonwilliams801@gmail.com')->send(new ContactMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }




//    public function contactUSPost(Request $request)
//    {
//        $this->validate($request,[
//             'name' => 'required',
//             'phone' => 'required|digits:10|numeric',
//             'email' => 'required|email',
//             'subject' => 'required',
//             'message' => 'required',
//         ]);

//        $input = $request->all();

//         Contact::create($input);
        


// \Mail::send('email', array(
//             'name' => $input['name'],
//             'email' => $input['email'],
//             'phone' => $input['phone'],
//             'subject' => $input['subject'],
//             'message' => $input['message'],
//         ), function($message) use ($request){
//             $message->from($request->email);
//             $message->to('clintonwilliams801@gmail.com', 'Admin')->subject($request->get('subject'));
//         });







       // Mail::send('email',
       //     $data=array(
       //         'name' => $request->get('name'),
       //         'phone' => $request->get('phone'),
       //         'email' => $request->get('email'),
       //         'subject' => $request->get('subject'),
       //         'message' => $request->get('message')
       //     ), function($message)
       // {
       //     $message->from('clintonwilliams801@gmail.com');
       //     $message->to('clintonwilliams801@gmail.com', 'Admin')->subject('Contact Form Messages');
       // });


}
