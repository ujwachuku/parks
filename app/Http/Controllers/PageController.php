<?php

namespace App\Http\Controllers;

use App\Ride;
use App\Package;
use App\Slider;
use App\Group;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function pricing()
    {
        $packages = Package::all();

        return view('pages.pricing', compact('packages'));
    }

    public function groups()
    {
        $groups = Group::all();

        return view('pages.groups', compact('groups'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendMessage(Request $request)
    {
        // Validate request
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:3'
        ]);

        $emailMessage = 'You have received a message from the contact form.'."\n\r";
        $emailMessage .= 'Sender: '.$request->input('name')."\n\r";
        $emailMessage .= 'Email: '.$request->input('email')."\n\r";
        $emailMessage .= 'Subject: '.$request->input('subject')."\n\r";
        $emailMessage .= 'Message: '."\n\r".$request->input('message');

        // Send message to designated email address
        \Mail::raw($emailMessage, function ($message) {
            $message->to('info@funplexng.com');
        });

        return redirect()->route('pages.contact')->withSuccess('Message sent!');
    }
    
}
