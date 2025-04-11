<?php

namespace App\Http\Controllers;

use App\Models\CustomCode;
use Illuminate\Http\Request;

class CustomCodeController extends Controller
{
    /**
     * Display the custom code form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the first record or create a new one
        $customCode = CustomCode::first();
        if (!$customCode) {
            $customCode = new CustomCode();
            $customCode->save();
        }
        
        return view('admin.custom-code.index', compact('customCode'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'css_head' => 'nullable|string',
            'js_head' => 'nullable|string',
            'css_body' => 'nullable|string',
            'js_body' => 'nullable|string',
        ]);

        $customCode = CustomCode::first();
        if (!$customCode) {
            $customCode = new CustomCode();
        }
        
        $customCode->fill($request->all());
        $customCode->save();

        return redirect()->route('admin.custom-code.index')
            ->with('success', 'Código personalizado guardado exitosamente');
    }
}
