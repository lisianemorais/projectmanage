<div class="form-group">
	{!! Form::label('name', 'Nome:') !!}			
	{!! Form::text('name',null, ['class'=>'form-control'] ) !!}			
</div>
<div class="form-group">
	{!! Form::label('responsavel', 'Responsavel:') !!}			
	{!! Form::text('responsavel',null, ['class'=>'form-control'] ) !!}			
</div>

<div class="form-group">
	{!! Form::label('phone', 'Telefone:') !!}			
	{!! Form::text('phone',null, ['class'=>'form-control'] ) !!}			
</div>

<div class="form-group">
	{!!Form::label('responsavel', 'E-mail:') !!}			
	{!!Form::text('email', 'example@gmail.com', ['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!! Form::label('endereco', 'Endereço:') !!}			
	{!! Form::textarea('endereco',null, ['class'=>'form-control'] ) !!}			
</div>

<div class="form-group">
	{!! Form::label('obs', 'Observações:') !!}			
	{!! Form::textarea('obs',null, ['class'=>'form-control'] ) !!}			
</div>