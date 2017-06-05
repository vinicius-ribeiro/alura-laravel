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

	public function novo () {
		return view('formulario');
	}

	public function adiciona () {

		$nome       = Request::input('nome');
		$quantidade = Request::input('quantidade');
		$valor      = Request::input('valor'); 
		$descricao  = Request::input('descricao');

		DB::insert('INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?, ?, ?, ?)', array($nome, $quantidade, $valor, $descricao));

		return redirect('/produtos')->withInput();
	}

	public function listaJson () {
		$produtos = DB::select('select * from produtos');
		return $produtos;
	}

}