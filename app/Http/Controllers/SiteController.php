<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class SiteController extends Controller
{
    /**
     * Função responsável pelo carregamento da página inicial.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Função responsável pelo carregamento da página sobre nós.
     *
     * @return \Illuminate\Http\Response
     */
    public function sobre()
    {
        return view('sobre');
    }

    /**
     * Função responsável pelo carregamento da página de obras.
     *
     * @return \Illuminate\Http\Response
     */
    public function obras()
    {
        return view('obras');
    }

    /**
     * Função responsável pelo carregamento da página de dúvidas.
     *
     * @return \Illuminate\Http\Response
     */
    public function duvidas()
    {
        return view('duvidas');
    }

    /**
     * Função responsável pelo carregamento da página de contato.
     *
     * @return \Illuminate\Http\Response
     */
    public function contato()
    {
        return view('contato');
    }

    /**
     * Função responsável pelo carregamento da página de contato.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'message' => 'required',
        ]);

        $data = $request->only('name', 'email', 'tel', 'message', 'option');
        $data['option'] = 1;
        $save = Contato::create($data);

        if ($save) {
            return redirect()->route('site.contato')->with('success', 'Contato recebido com sucesso.');
        } else {
            return redirect()->route('site.contato')->with('fail', 'Um erro impediu o cadastro.');
        }
        return view('contato');
    }

    /**
     * Função responsável pelo carregamento da página de contato.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacidade()
    {
        return view('privacidade');
    }

    /**
     * Função responsável pelo carregamento da página de contato.
     *
     * @return \Illuminate\Http\Response
     */
    public function termos()
    {
        return view('termos');
    }

    /**
     * Função responsável pelo carregamento da página madeira de lei.
     *
     * @return \Illuminate\Http\Response
     */
    public function madeira()
    {
        return view('pages.madeira');
    }

    /**
     * Função responsável pelo carregamento da página vale a pena compra casa de madeira.
     *
     * @return \Illuminate\Http\Response
     */
    public function investir()
    {
        return view('pages.investir');
    }
}
