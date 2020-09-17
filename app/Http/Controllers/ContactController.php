<?php

namespace App\Http\Controllers;


use App\Mail\ContactForm;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function create()
    {
        return view('theme.contact');
    }

    public function createCarriers()
    {
        return view('theme.carriers');

    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'last_name' => 'required',
            'message' => 'required',
        ]);
        Mail::to('test@test.com')->send(new ContactForm($data));

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
