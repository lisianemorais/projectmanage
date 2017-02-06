@extends('template')


@section('content')
<h1 class="titulo-pg-painel">Listagem dos Usuários:</h1>

<div class="divider"></div>

<div class="col-md-12">
    <form class="form-padrao form-inline padding-20 form-pesquisa" method="POST">
        <a href="" class="btn-cadastrar" data-toggle="modal" data-target="#modalGestao"><i class="fa fa-plus-circle"></i>Novo Usuário</a>
    </form>
</div>

<table class="table table-hover">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th width="120px;"></th>
    </tr>
    @forelse($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
        	<a href="{{route('users.edit', ['id'=> $user->id] )}}" class="edit"><i class="fa fa-pencil-square-o"></i>
        	</a>
            
            <a href="{{route('users.destroy', ['id'=> $user->id] )}}" class="delete">
                <i class="fa fa-times"></i>
            </a>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="500">Nenhum Usuário cadastrado!</td>
    </tr>
    @endforelse
</table>

<nav>
    {!!$users->render()!!}
</nav>
	

@include('usuarios.create')



@endSection