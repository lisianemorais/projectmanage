<div class="form-group">
	{!! Form::label('name', 'Nome do Projeto:') !!}			
	{!! Form::text('name',null, ['class'=>'form-control'] ) !!}			
</div>

<div class="form-group">
	{!! Form::label('cliente', 'Cliente:') !!}
	{!! Form::select( 'clientes_id', $clientes,['class'=>'form-control']  ) !!}
</div>

<div class="form-group">
	{!! Form::label('descricao', 'Descrição:') !!}			
	{!! Form::textarea('descricao',null, ['class'=>'form-control'] ) !!}			
</div>

<div class="form-group">
	{!! Form::label('status', 'Status do Projeto:') !!}
	{!! Form::select( 'status', $status,['class'=>'form-control']  ) !!}
</div>

<div class="form-group">
	{!! Form::label('progresso', 'Progresso do Projeto:') !!}
	{!! Form::selectRange('progresso', 0, 100, ['class'=>'form-control']  ) !!}
</div>

<div class="form-group">
	<label for="nome">Data Final:</label>
	<input type="date" name="data_fim" class="form-control">
</div>

<div class="form-group">
	{!! Form::hidden('owner_id', $user->id ) !!}
</div>

