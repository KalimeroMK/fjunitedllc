<?php

namespace App\Http\Controllers;


use App\Mail\CarrierForm;
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
        Mail::to('dispatch@fjunitedllc.com')->send(new ContactForm($data));
        return redirect()->back()->with('success', 'Thanks for contact us, we will reach you out shortly');
    }

    public function storeCarrier(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'age' => 'required',
            'experience' => 'required',
            'options' => 'required',
            'equipment' => 'required'
        ]);
        Mail::to('filip@fjunitedllc.com')->send(new CarrierForm($data));
        return back()->with('success', 'Thanks for signing up at FJ UNITED LLC, we will reach you out shortly');
    }
}
