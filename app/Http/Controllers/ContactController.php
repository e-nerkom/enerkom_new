<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
    	return view('contact');
    }

    public function create(Request $request)
    {
    	$contact = Contact::create($request->all());
    	// sent mail here
		$data = array(
            'name' => $request->get('contactName'),
            'email' => $request->get('contactEmail'),
            'user_message' => $request->get('contactMessage')
        );

        try {
            Mail::send('mail.contact',
                $data , function($message)use($request) {       
                    $message->from('bandunetwork@gmail.com', 'Enerkom');
                    $message->to($request->email, $request->name)->subject('Thanks for contacting us.');
                }
            );
        } catch(\Exception $e) {
            // return redirect('/contact')->with('errStatus', 'Your messages failed to sent. Please try again later...');
        }

    	return redirect('/contact')->with('status', 'Thanks for contact with us. We will contact you shortly.');
    }
}
