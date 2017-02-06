@extends('template')


@section('content')

<h3>Usuário {{$user->name}}</h3>
@if($errors->any())
	<ul class="alert">
	   @foreach($errors->all() as $error)
	   	   <li>{{$error}}</li>
	   @endforeach
	</ul>			
		
	@endif
                             
	{!! Form::model($user,['route'=>['users.update', $user->id],'method'=>'put']) !!}
			
		@include('usuarios._form')
                       
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-primary">Salvar</button>
	{!! Form::close()!!}

@endSection