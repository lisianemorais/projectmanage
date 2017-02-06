@extends('template')


@section('content')
<h1 class="titulo-pg-painel">Listagem dos Projetos:</h1>

<div class="divider"></div>

<div class="col-md-12">
    <form class="form-padrao form-inline padding-20 form-pesquisa" method="POST">
        <a href="" class="btn-cadastrar" data-toggle="modal" data-target="#modalGestao"><i class="fa fa-plus-circle"></i> Novo Projeto</a>
    </form>
</div>

<table class="table table-hover">
    <tr>
        <th>Projeto</th>
        <th>Cliente</th>
        <th></th>
    </tr>

     @forelse($projetos as $projeto)
     <tr>
            <td>{{$projeto->name}}</td>
            <td>{{$projeto->cliente->name}}</td>
            <td>
            <a href="{{route('projetos.edit', ['id'=> $projeto->id] )}}" class="edit"><i class="fa fa-pencil-square-o"></i>
            </a>
            
            <a href="{{route('projetos.destroy', ['id'=> $user->id] )}}" class="delete">
                <i class="fa fa-times"></i>
            </a>
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
	

@include('projetos.create')



@endSection