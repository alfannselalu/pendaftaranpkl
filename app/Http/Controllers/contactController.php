<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\sendEmail; 
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('home.contact.index');
    }

    // public function sendContactEmail(Request $request)
    // {
    //     Mail::to('harderplank44@gmail.com')->send(new SendEmail(
    //         'John Doe',
    //         'john.doe@example.com',
    //         'Test Subject',
    //         'This is a test message.'
    //     ));
    
    //     return 'Test email sent successfully!';
    // }
}
