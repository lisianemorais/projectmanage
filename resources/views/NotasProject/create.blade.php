@extends('template')


@section('content')
    @if($errors->any())
		<ul class="alert">
		@foreach($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
		</ul>			
	@endif

	{!! Form::open(['route'=>'notas.store','method'=>'post']) !!}
				
		@include('NotasProject._form')
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
    {!! Form::close()!!}

@endSection