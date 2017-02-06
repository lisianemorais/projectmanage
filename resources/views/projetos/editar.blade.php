@extends('template')


@section('content')

<h3>Projeto {{$projeto->name}}</h3>
@if($errors->any())
	<ul class="alert">
	   @foreach($errors->all() as $error)
	   	   <li>{{$error}}</li>
	   @endforeach
	</ul>			
		
	@endif
             
    {{$clientes}}                
	{!! Form::model($projeto,['route'=>['projetos.update', $projeto->id],'method'=>'put']) !!}
			
		@include('projetos._form')
                       
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-primary">Salvar</button>
	{!! Form::close()!!}

@endSection