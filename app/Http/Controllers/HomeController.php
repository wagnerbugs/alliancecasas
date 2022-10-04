<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contatos = Contato::orderBy('id', 'DESC')->get();
        return view('home', compact('contatos'));
    }

    public function contactDestroy(Contato $contato)
    {
        $contato->delete();
        return redirect()->back();
    }


}
