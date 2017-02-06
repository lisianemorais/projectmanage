<div class="form-group">
	{!! Form::label('name', 'Nome:') !!}			
	{!! Form::text('name',null, ['class'=>'form-control'] ) !!}			
</div>
<div class="form-group">
	{!!Form::label('email', 'E-mail:') !!}			
	{!!Form::text('email', 'example@gmail.com', ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Senha:') !!}	
	{!! Form::password('password', ['class'=>'form-control'])!!}			
</div>

