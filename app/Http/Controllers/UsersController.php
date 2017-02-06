<?php

namespace projectmanager\Http\Controllers;

use Illuminate\Http\Request;
use projectmanager\Entities\User;

class UsersController extends Controller
{
    
    /**
     *  @var User
     */
    private $user;

    

    public function __construct( User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->paginate($limit = 5, $columns = ['*']); 
        return view('usuarios.index', compact('users'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {       
        $this->user->create($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $user = $this->user->find($id);
        return view('usuarios.editar', compact('user'));
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
        $this->user->find($id)->update($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $this->user->find($id)->delete();
        return redirect()->route('users.index');
    }
}
