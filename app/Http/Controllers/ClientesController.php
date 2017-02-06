<?php

namespace projectmanager\Http\Controllers;

use Illuminate\Http\Request;
use projectmanager\Repositories\ClienteRepository;
use projectmanager\Services\ClienteService;

class ClientesController extends Controller
{
    
    /**
     *  @var ClienteRepository
     */
    private $repository;

    /**
     * @var ClienteService
     */
    private $service;


    public function __construct( ClienteRepository $repository, ClienteService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        $clientes = $this->repository->paginate($limit = 5, $columns = ['*']); 
        return view('clientes.index', compact('clientes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {   
        $this->service->create($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $cliente = $this->repository->find($id);
        return view('clientes.editar', compact('cliente'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $this->repository->find($id)->update($request->all());
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $this->repository->find($id)->delete();
        return redirect()->route('clientes.index');
    }
}
