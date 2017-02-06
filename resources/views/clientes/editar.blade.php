@extends('template')


@section('content')

<h3>Cliente {{$cliente->name}}</h3>
@if($errors->any())
	<ul class="alert">
	   @foreach($errors->all() as $error)
	   	   <li>{{$error}}</li>
	   @endforeach
	</ul>			
		
	@endif
                             
	{!! Form::model($cliente,['route'=>['clientes.update', $cliente->id],'method'=>'put']) !!}
				
			@include('clientes._form')
                        
      		</div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
	{!! Form::close()!!}

@endSection