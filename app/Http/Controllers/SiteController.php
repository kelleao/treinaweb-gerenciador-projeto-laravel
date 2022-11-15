<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a página index
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Mostra a página da sobre
     *
     * @return void
     */
    public function sobre()
    {
        echo "Conteudo dinamico Sobre";
    }

    /**
     * Mostra a página de contato
     *
     * @return void
     */
    public function contato()
    {
        echo "Conteudo dinamico Contato";
    }

    /**
     * Mostra a página de servicos
     *
     * @return void
     */
    public function servicos()
    {
        echo "Conteudo dinamico Servicos";
    }

    /**
     * Mostra um serviço por id
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'descricao muito longa...'
            ],
            2 => [
                'nome' => 'Lavagem de Corberta',
                'descricao' => 'descricao muito longa...'
            ],
            3 => [
                'nome' => 'Lavagem de Urso',
                'descricao' => 'descricao muito longa...'
            ],
    ];

    return view('site.servico', [
        'servico' => $servicos[$id],
        'outro' => 'treinaweb'
    ]);

    }
}
