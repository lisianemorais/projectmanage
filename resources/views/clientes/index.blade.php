@extends('template')


@section('content')
<h1 class="titulo-pg-painel">Listagem dos clientes:</h1>

<div class="divider"></div>

<div class="col-md-12">
    <form class="form-padrao form-inline padding-20 form-pesquisa" method="POST">
        <a href="" class="btn-cadastrar" data-toggle="modal" data-target="#modalGestao"><i class="fa fa-plus-circle"></i> Cadastrar</a>
    </form>
    
    @if( isset($palavraPesquisa) )
        <p>Resultados para a pesquisa <b>{{$palavraPesquisa}}</b></p>
    @endif
</div>


<table class="table table-hover">
    <tr>
        <th>Nome</th>
        <th>Responsável</th>
        <th>Telefone</th>
        <th>E-mail</th>
        <th>Endereço</th>
        <th>Obs</th>
        <th width="120px;"></th>
    </tr>
    @forelse($clientes as $cliente)
    <tr>
        <td>{{$cliente->name}}</td>
        <td>{{$cliente->responsavel}}</td>
        <td>{{$cliente->phone}}</td>
        <td>{{$cliente->email}}</td>
        <td>{{$cliente->endereco}}</td>
        <td>{{$cliente->obs}}</td>
        <td>
        	<a href="{{route('clientes.edit', ['id'=> $cliente->id] )}}" class="edit"><i class="fa fa-pencil-square-o"></i>
        	</a>
            
            <a href="{{route('clientes.destroy', ['id'=> $cliente->id] )}}" class="delete">
                <i class="fa fa-times"></i>
            </a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="500">Nenhum Cliente cadastrado!</td>
    </tr>
    @endforelse
</table>

<nav>
    {!!$clientes->render()!!}
</nav>
	

@include('clientes.create')



@endSection