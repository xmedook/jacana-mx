<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CustomCode;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        // Get the first record or create a new one
        $customCode = CustomCode::first();
        if (!$customCode) {
            $customCode = new CustomCode();
            $customCode->save();
        }
        
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row("<h1>Desarrollo Jacana</h1>")
            ->row("<h2>Hola Mundo</h2>")
            ->row(function (Row $row) use ($customCode) {
                $row->column(12, view('admin.custom-code.form', ['customCode' => $customCode]));
            });
    }
    
    /**
     * Update the custom code.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function updateCustomCode(Request $request)
    {
        // Validate the request
        $request->validate([
            'css_head' => 'nullable|string',
            'js_head' => 'nullable|string',
            'css_body' => 'nullable|string',
            'js_body' => 'nullable|string',
        ]);

        // Get the data from the request
        $data = [
            'css_head' => $request->input('css_head'),
            'js_head' => $request->input('js_head'),
            'css_body' => $request->input('css_body'),
            'js_body' => $request->input('js_body'),
        ];
        
        // Log the data for debugging
        \Log::info('Custom code update data:', $data);

        // Get or create the custom code record
        $customCode = CustomCode::first();
        if (!$customCode) {
            $customCode = new CustomCode();
        }
        
        // Fill and save the model
        $customCode->fill($data);
        $customCode->save();

        // Log the saved record
        \Log::info('Custom code saved with ID: ' . $customCode->id);

        // Redirect with success message
        admin_toastr('Código personalizado guardado exitosamente', 'success');
        return redirect()->route('admin.home');
    }
}
