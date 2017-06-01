<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

	public function lista() {
		$produtos = DB::select('select * from produtos');
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra () {
		//$id      =  Request::input('id', '1'); ASSIM PEGA VARIAVEIS
		$id       = Request::route('id'); // ASSIM PEGA A VARIAVEL DA ROTA
		$produto = DB::select('select * from produtos where id = ?', [$id]);
		if(empty($produto)) {
	    return "Esse produto não existe";
	  }
		return view('detalhes')->with('p', $produto[0]);
	}

}