<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Função responsável pelo carregamento da página inicial.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
}
