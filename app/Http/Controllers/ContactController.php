<?php

namespace App\Http\Controllers;


use App\Http\Requests\Email\Send;
use App\Mail\ContactForm;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function contact()
    {
        return view('theme.contact');
    }

    /**
     * @param Send $request
     * @return Application|RedirectResponse|Redirector
     */
    public function create(Send $request)
    {
        dd($request->all());
        $data = $request->all();
        Mail::to('test@test.com')->send(new ContactForm($data));

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
