@extends('principal')
@section('conteudo')
<form method="POST" action="/produtos/adiciona">
<input type="hidden" value="{{csrf_token()}}" name="_token">
<div class="form-group">
	<label>Nome</label>
	<input type="text" name="nome" class="form-control">
</div>
<div class="form-group">
	<label>valor</label>
	<input type="text" name="valor" class="form-control">
</div>
<div class="form-group">
	<label>Quantidade</label>
	<input type="text" name="quantidade" class="form-control">
</div>
<div class="form-group">
	<label>Descrição</label>
	<textarea class="form-control" name="descricao"></textarea>
</div>
<button type="submit" class="btn btn-default">Adicionar</button>
</form>
@stop