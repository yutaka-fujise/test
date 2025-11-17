<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $validated = $request->validate([
            'name_sei' => 'required',
            'name_mei' => 'required',
            'gender'   => 'required',
            'email'    => 'required|email',
            'tel'      => 'required|array',
            'tel.*'    => 'required|digits_between:1,4',
            'address'  => 'required',
            'building' => 'nullable',
            'type'     => 'required',
            'content'  => 'required',
        ]);

        $contact = [
            'name_sei' => $request->name_sei,
            'name_mei' => $request->name_mei,
            'gender'   => $request->gender,
            'email'    => $request->email,
            'tel'      => $request->tel, 
            'address'  => $request->address,
            'building' => $request->building,
            'type'     => $request->type,
            'content'  => $request->content,
        ];

        return view('confirm', compact('contact'));
    }

    public function back(Request $request)
    {
        return redirect()->route('contacts.form')->withInput();
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function send(Request $request)
    {
        return redirect()->route('contacts.thanks');
    }
}
