	<!-- Modal Para Gestão Projetos -->
<div class="modal fade" id="modalGestao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-padrao4">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Gestão de Projetos</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-warning msg-war" role="alert" style="display: none"></div>
                <div class="alert alert-success msg-suc" role="alert" style="display: none"></div>

                @if($errors->any())
					<ul class="alert">
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
					</ul>			
		
				@endif

				{!! Form::open(['route'=>'projetos.store','method'=>'post']) !!}
				
				@include('projetos._form')
                        
      		</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
                
				{!! Form::close()!!}
            </div>
        </div>
    </div>
</div>