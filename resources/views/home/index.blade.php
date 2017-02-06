@extends('template')

@section('content')
	
	<h1 class="titulo-pg-painel">Dashboard</h1>

	<div class="divider"></div>
 	<table class="table table-hover">
        <th>Projeto</th>
        <th>Descrição</th>
        <th>Status</th>

        <th>Progresso</th>
        

     @forelse($projetos as $projeto)
     <tr> 
     	<td> 
            <h5> Projeto: {{$projeto->name}}</h5> <br>
            <h5>Cliente:{{$projeto->cliente->name}}</h5>
        </td>   
        <td>
        	{{$projeto->descricao}}
        </td>
        <td>
        	{{$projeto->status}}
        </td>
        <td>
        	{{$projeto->progresso}}%
        </td>
     </tr>
     @empty
     <tr>
         <td colspan="500">Nenhum Projeto Cadastrado!</td>
     </tr>
     @endforelse
    
</table>

<nav>
    {!!$projetos->render()!!}
</nav>
@endSection