<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAdminRegistrationForm()
    {
        $roles = UserRole::getAdminRoleList(Auth::user());
    	return view('auth.register_admin', compact('roles'));
    }
    public function index()
    {
            $registros = User::all();
            return view('admin.users.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.users.adicionar');

    }  

        public function salvar(Request $req)
    {
      $dados = $req->all();
      
      User::create($dados);

      return redirect()->route('admin.users');

    }
    public function editar($id)
    {
      $registro = User::find($id);
      return view('admin.users.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      User::find($id)->update($dados);


      return redirect()->route('admin.users');
      

    }

    public function deletar($id)
    {
      User::find($id)->delete();
      return redirect()->route('admin.users');
    }


      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        if (!array_key_exists("roles", $data)){
            $roles = array();
            $roles[] = UserRole::ROLE_HOSPEDE;
            $data['roles'] = $roles;
        }

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'email' => $data['tipo'],
            'password' => Hash::make($data['password']),
            'roles' => $data['roles'],
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}