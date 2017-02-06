<?php  

namespace projectmanager\Transformers;

use projectmanager\Entities\Clientes;
use League\Fractal\TransformerAbstract;


class ClientesProjetoTransformer extends TransformerAbstract
{
	public function transform(Clientes $clientesProjeto)
	{
		return [
			'cliente_id' => $clientesProjeto->id,
			'name'    => $clientesProjeto->name,
		];
	}
}
