<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller {

	public function __construct(){


		// Dessa forma é para fazer auth só nas funcções que estão dentro do array only
		// $this->middleware('auth')
		// 			->only([
		// 				'contato',
		// 				'categoria'
		// 			]);

		// Dessa forma o auth passa em todas as funções desse controller menos nas que estão dentro do array
		// $this->middleware('auth')
		// 				->except([
		// 					'index',
		// 					'contato'
		// 				]);
	}
 	
	public function index() 
	{
		$title  = 'Capeeeta';

		$teste  = 123;
        $teste2 = 231;
        $teste3 = 312;

        $xss    = '<script>alert("Ataque XSS");</script>';

        $var1   = '123';

        $valor  = 6;

        $arrayData = [];

        return view('site.home.index', compact( 'arrayData', 'valor', 'var1','teste', 'title', 'teste2', 'teste3', 'xss'));
	}

	public function contato() {


		return view('site.contact.index');
	}

	public function categoria($id = 'n/a') {


		return " 	Categoria Page, listagem: {$id}";
	}

	public function categoriaOp($id = 'Bambu') {


		return "Categoria Page, listagem: {$id}";
	}
}
