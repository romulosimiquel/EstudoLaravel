<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Painel\Servico;

class ServicoController extends Controller
{

    private $servico;

    public function __construct(Servico $servico)
    {
        $this->servico = $servico;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $servicos = $this->servico->all();

        return view('painel.servicos.index', compact('servicos'));


        // $teste  = 123;
        // $teste2 = 231;
        // $teste3 = 312;
        // return view('teste', compact('teste', 'teste2', 'teste3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    } 

    public function tests()
    {


        // $serv = $this->servico->find(6);
        // $update = $serv->update([
        //                 'name'     => 'Caia pedra no chão, do update',
        //                 'processo' => 9635,
        //                 'category' => 'cópia',
        //                 'descricao'=> 'Isso é só teste só mesmo, do update também' 
        // ]);

        // if( $update )
        //     return 'Altered beast com sucesso';
        // else 
        //     return 'Não deu';

        $serv = $this->servico->where('processo', 3625);
        $update = $serv->update([
                        'name'     => 'Pirapora bahia agora',
                        'processo' => 7895  ,
                        'category' => 'guia',
                        'descricao'=> 'Isso é só teste só mesmo, do update de novo' 
        ]);

        if( $update )
            return 'Altered beast com sucesso';
        else 
            return 'Não deu';

       /* $serv = $this->servico->find(5);

        dd($serv); debug do laravel, muito bom, recomendo, 5 estrelas
        $serv->name = 'Protocolo do chiclete ploc';
        $serv->processo = 3625;
        $serv->category = 'protocolo';
        $serv->descricao = 'Agora é ploc, mudou';
        $update = $serv->save();

        if( $update )
            return 'Altered beast com sucesso';
        else 
            return 'Não deu';*/


        /* $insert = $this->servico->create([
            'name'     => 'Cópia da cópia copiada da copiadora',
            'processo' => 999,
            'category' => 'cópia',
            'descricao'=> 'Música do depeche mode, ou do NIN, não sei'
        ]); 

        if( $insert )
            return 'Inserido com sucesso';
        else
            return 'Falha no engano';



        $serv = $this->servico;
        $serv->name = 'Protocolo disso aqui';
        $serv->processo = 2444;
        $serv->category = 'protocolo';
        $serv->descricao = 'Olá faz um protocolo pá nois';

        Esse $insert retorna true ou false, por isso vamos usar ele para nos dar retorno
        $insert = $serv->save();

        if( $insert )
            return 'Inserido com sucesso';
        else
            return 'Falha no engano'; */

    }
}
