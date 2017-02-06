<?php

namespace projectmanager\Http\Controllers;

use Illuminate\Http\Request;
use projectmanager\Repositories\ProjectRepository;
//use projectmanager\Services\ProjectService;
use projectmanager\Entities\Project;
use projectmanager\Entities\Clientes;
use projectmanager\Entities\StatusProject;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    
    /**
     *  @var ProjectRepository
     */
    private $repository;

    /**
     * @var ProjectService
     */
    private $service;

    /**
     * @var Project
     */
    private $project;

    public function __construct(Project $project, ProjectRepository $repository)
    {
        $this->repository = $repository;
        $this->project = $project;
    }

    public function index()
    {   
        $projetos = $this->project->paginate(5);
        $clientes = Clientes::lists('name', 'id');
        $status = StatusProject::lists('descricao', 'id');
        $user = Auth::user();
        return view('projetos.index', compact('projetos','status','clientes','user'));
    }

    public function home()
    {   
        $projetos = $this->project->paginate(5);
        return view('home.index', compact('projetos'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {   
        $this->project->create($request->all());
        return redirect()->route('projetos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $projeto = $this->project->find($id);
        $clientes =  Clientes::lists('name', 'id');
        $status = StatusProject::lists('descricao', 'id');
        $user = Auth::user();
        return view('projetos.editar', compact('projeto','status','clientes','user'));
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
        $this->project->find($id)->update($request->all());
        return redirect()->route('projetos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->project->find($id)->delete();
        return redirect()->route('projetos.index');
    }
}
