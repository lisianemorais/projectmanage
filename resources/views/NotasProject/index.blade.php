@extends('template')


@section('content')
<h1 class="titulo-pg-painel">Notas do Projeto: </h1>

<div class="divider"></div>

<div class="col-md-12">
        <a href="{{route('projetos.notas.create')}}" class="btn-cadastrar"><i class="fa fa-plus-circle"></i> Nova Nota</a>
</div>

<table class="table table-hover">
    <tr>
        <th>Título</th>
        <th>Nota</th>
        <th></th>
    </tr>

     @forelse($notas as $nota)
     {{$nota->project}}
     <tr>
            <td>{{$nota->titulo}}</td>
            <td>{{$nota->nota}}</td>
            <td>
            <a href="{{route('notas.destroy', ['id'=> $nota->project->id, 'notaID'=>$nota->id] )}}" class="delete">
                <i class="fa fa-times"></i>
            </a>
            </td>
     </tr>
     @empty
     <tr>
         <td colspan="500">Nenhuma Nota Cadastrado!</td>
     </tr>
     @endforelse
    
</table>

<nav>
    
</nav>
	

@include('NotasProject.create')



@endSection