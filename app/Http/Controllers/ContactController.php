<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('ContactMessages/Index',[
            'contactMessages' => ContactMessage::latest()->get()
        ]);
    }
    public function create()
    {
        return Inertia::render('ContactMessages/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        ContactMessage::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message')
        ]);
        return redirect()->to('/contact');
    }


    public function edit($id)
    {
        return $id;
    }
    public function update()
    {
        return "nfvbdf";
    }
}
