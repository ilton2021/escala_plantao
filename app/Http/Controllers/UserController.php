<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Validator;
use Hash;
use \Auth;

class UserController extends Controller
{
	
	// Página Index Usuário //
    public function index(Request $request)
    {
        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

	// Página Create Usuário //
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles'));
    }
	
	// Tela de Login //
	public function telaLogin()
	{
		$text = false;
		return view('auth.login', compact('text'));
	}

	// Tela de Registro Usuário //
	public function telaRegistro()
	{
		$text = false;
		return view('auth.register', compact('text'));
	}
	
	// Tela Email //
	public function telaEmail()
	{
		return view('auth.passwords.email');
	}
	
	// Tela Resetar Senha Usuário //
	public function telaReset()
	{
		$text = false;
		$token = '';
		return view('auth.passwords.reset', compact('text','token'));
	}
	
	// Login Usuário //
	public function Login(Request $request)
	{ 
		$input = $request->all(); 		
		$validator = Validator::make($request->all(), [
			'email'    => 'required|email',
            'password' => 'required'
		]);		
		if ($validator->fails()) {
			$text = true;
			return view('auth.login', compact('text'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input())); 
		} else {
			$email = $input['email'];
			$senha = $input['password'];		
			$user  = User::where('email', $email)->where('password',$senha)->get(); 
			$qtd   = sizeof($user); 			
			if ( $qtd == 0 ) {
				$validator = 'Login Inválido!';
				$text = true;
				return view('auth.login', compact('user','text'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input())); 
			} else {
				$text = true;
				Auth::login($user);
				return view('index', compact('user','text')); 						
			}
		}
	}
	
	// Resetar Senha Usuário //
	public function resetarSenha(Request $request)
	{ 
		$input = $request->all();		
		$validator = Validator::make($request->all(), [
			'email'    => 'required|email',
            'password' => 'required|same:password_confirmation',
			'password_confirmation' => 'required'
    	]);		
		if ($validator->fails()) {
			$text = true;
			return view('auth.passwords/reset', compact('text'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input())); 
		} else {
			if(!empty($input['password'])){ 
				$input['password'] = Hash::make($input['password']);
			}else{
				$input = array_except($input,array('password'));    
			}
			$email = $input['email'];
			$user = User::where('email', $email)->get();
			$qtd = sizeof($user);
			if($qtd == 0){
				$text = true;
				$validator = 'Usuário não cadastrado!!';
				return view('auth.passwords/reset', compact('text'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input())); 
			}
			$idUser = $user[0]->id;
			$user = User::find($idUser);
			$user->update($input);
			$text = true;
			$validator = 'Senha alterada com sucesso!!';
			return view('auth/login', compact('text'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input())); 
		}
	}
	
	// Salvar Novo Usuário //
    public function store(Request $request)
    {
		$input = $request->all();
		$validator = Validator::make($request->all(), [
			'name'     		   => 'required',
            'email'    		   => 'required|email|unique:users,email',
            'password' 		   => 'required|same:password_confirmation',
			'password_confirmation' => 'required',
			'perfil'           => 'required'
		]);		
		if ($validator->fails()) {
			$text = true;
			return view('auth.register', compact('text'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$input['password'] = Hash::make($input['password']);
			$user = User::create($input);
			\Session::flash('mensagem', ['msg' => 'Usuário cadastrado com sucesso!','class'=>'green white-text']);
			$text = true;
			return view('auth.login', compact('text')); 						
		}
    }

	// Tela Exibir Usuário //
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show',compact('user'));
    }

	// Tela Editar Usuário //
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('users.edit',compact('user','roles','userRole'));
    }

	// Alterar Usuário //
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = array_except($input,array('password'));    
        }
        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
        $user->assignRole($request->input('roles'));
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

	// Excluir Usuário //
	public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}