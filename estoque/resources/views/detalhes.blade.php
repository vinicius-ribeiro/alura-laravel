@extends('principal')

@section('conteudo');
<h1>Detalhes do Produtos - <?php echo $p->nome; ?></h1>	
<ul>
	<li>Nome: {{$p->nome}}</li>
	<li>Descrição: {{$p->descricao or 'Produto sem Descrição'}}</li>	
	<li>Quantidade: {{$p->quantidade}}</li>
</ul>
@stop