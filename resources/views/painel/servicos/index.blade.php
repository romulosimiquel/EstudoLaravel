<h1>Listagem dos serviços</h1>

<table>
	<tr>
		<th>Nome</th>
		<th>Descrição</th>
	</tr>
	@foreach($servicos as $servico)
	<tr>
		<td>{{$servico->name}}</td>
		<td>{{$servico->descricao}}</td>
	</tr>
	@endforeach
</table>