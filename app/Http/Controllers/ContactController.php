<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'medio' => 'required',
            'interested' => 'required',
            'message' => 'required',
        ]);

        try {
            $data = $request->toArray();
            $data['name'] = $request->name . ' ' . $request->lastname;
            unset($data['lastname']);
            $data['interesado'] = $request->interested;
            unset($data['interested']);
            Contact::create($data);
            return redirect()->back()->with('success', true);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', true);
        }
    }
}
