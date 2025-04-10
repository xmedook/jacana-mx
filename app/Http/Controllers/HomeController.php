<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Department;
use App\Models\Place;
use Encore\Admin\Grid\Displayers\Prefix;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $prefix = '';
        app()->setLocale('es');
        $departments = Department::all();
        return view('home.index', compact('departments', 'prefix'));
    }

    public function indexEn()
    {
        app()->setLocale('en');
        $prefix = '/en';
        $departments = Department::all();
        return view('home.index', compact('departments', 'prefix'));
    }

    public function departamentos(Request $request)
    {
        app()->setLocale('es');
        $departments = Department::all();
        return view('departamentos.index', compact('departments'));
    }

    public function departamentosEn(Request $request)
    {
        app()->setLocale('en');
        $departments = Department::all();
        return view('departamentos.index', compact('departments'));
    }

    public function amenidades()
    {
        app()->setLocale('es');
        $places = Place::orderBy('position')->get();
        return view('amenidades.index', compact('places'));
    }

    public function amenidadesEn()
    {
        app()->setLocale('en');
        $places = Place::orderBy('position')->get();
        return view('amenidades.index', compact('places'));
    }

    public function contacto()
    {
        app()->setLocale('es');
        return view('contacto.index');
    }

    public function contactoEn()
    {
        app()->setLocale('en');
        return view('contacto.index');
    }


    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);

        try {
            Contact::create($request->all());
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect('/#contact-form')->with('message', 'Ocurrió un error, por favor intenta de nuevo');
        }

        return redirect('/#contact-form')->with('message', 'Recibimos tu mensaje, te responderemos en breve');
    }

    public function aviso()
    {
        app()->setLocale('es');
        return view('aviso-privacidad');
    }

    public function avisoEn()
    {
        app()->setLocale('en');
        return view('aviso-privacidad');
    }
}
