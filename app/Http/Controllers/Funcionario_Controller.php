<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroCusto;
use App\Models\Funcionario;
use Validator;
use DB;

class Funcionario_Controller extends Controller
{
    public function cadastroFunc()
	{
		$funcionario = DB::table('funcionario')->paginate(10);
		$centro_custo = CentroCusto::all();
		$text = false;
		return view('cadastro_funcionario', compact('funcionario','centro_custo','text'));
	}
	
	public function novoFunc()
	{
		$centro_custo = CentroCusto::all();
		return view('novo_funcionario', compact('centro_custo'));
	}
	
	public function alterarFunc($id)
	{
		$funcionario = Funcionario::where('id',$id)->get();
		$centro_custo = CentroCusto::all();
		return view('alterar_funcionario', compact('funcionario','centro_custo'));
	}
	
	public function excluirFunc($id)
	{
		$funcionario = Funcionario::where('id',$id)->get();
		$centro_custo = CentroCusto::all();
		return view('excluir_funcionario', compact('funcionario','centro_custo'));
	}
	
	public function pesqFunc(Request $request)
	{
		$input = $request->all();
		$a = sizeof($_POST);  
		if($a == 0) {
			$funcionario = DB::table('funcionario')->paginate(10);
		} else {
			$nome = $input['pesq'];
			$tipo = $input['tipo'];
			if($tipo == "NOME") {
				$funcionario = DB::table('funcionario')->where('nome','like','%'. $nome .'%')->paginate(10);
			} else if($tipo == "CARGO") {
				$funcionario = DB::table('funcionario')->where('cargo','like','%'. $nome .'%')->paginate(10);
			} else if($tipo == "CENTRO_CUSTO") {
				$centro_custo = DB::table('centro_custo')->where('descricao',$nome)->get();
				$cc = $centro_custo[0]->id;
				$funcionario = DB::table('funcionario')
				->join('centro_custo','funcionario.centro_custo_id','=','centro_custo.id')
				->where('funcionario.centro_custo_id','=',$cc)
				->paginate(20);
			} else if($tipo == "PLANTAO") {
				if($nome == "DIA"){ $nome = "D"; } else if($nome == "NOITE"){ $nome = "N"; }
				$funcionario = DB::table('funcionario')->where('tipo_plantao','like','%'. $nome .'%')->paginate(10);
			}
		}
		$centro_custo = CentroCusto::all(); 
		if($funcionario[0] == NULL) { 
			$text = true; 
			\Session::flash('mensagem', ['msg' => 'Nenhum Resultado Encontrado!','class'=>'green white-text']);
		} else { $text = false; }
		return view('cadastro_funcionario', compact('funcionario','centro_custo','text'));
	}
	
	public function storeFunc(Request $request)
	{
		$input 		  = $request->all();
		$centro_custo = CentroCusto::all();
		$validator = Validator::make($request->all(), [
			'nome' 			  => 'required|max:255',
			'cargo' 		  => 'required|max:255',
			'matricula' 	  => 'required|max:255',
			'centro_custo_id' => 'required|max:255',
			'tipo_plantao' 	  => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('novo_funcionario', compact('centro_custo'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$cc = $input['centro_custo_id'];
			if($cc == 12) {
				$input['centro_custo'] = "ENFERMAGEM";
			} else {
				$input['centro_custo'] = "UTI";
			}
			$tp = $input['tipo_plantao'];
			if($tp == "12x60"){
				$input['escala'] = "";
			} 
			$funcionario = Funcionario::create($input);
			$funcionario = Funcionario::paginate(50);
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Funcionário cadastrado com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_funcionario', compact('funcionario','text','centro_custo'));
		}
	}
	
	public function updateFunc($id, Request $request)
	{
		$input 		  = $request->all();
		$centro_custo = CentroCusto::all();
		$validator = Validator::make($request->all(), [
			'nome' 			  => 'required|max:255',
			'cargo' 		  => 'required|max:255',
			'matricula' 	  => 'required|max:255',
			'centro_custo_id' => 'required|max:255',
			'tipo_plantao' 	  => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('alterar_funcionario', compact('centro_custo'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$funcionario = Funcionario::find($id); 
			if($funcionario['tipo_plantao'] == "12x60"){
				$input['escala'] = "";
			}
			$funcionario->update($input);	
			$funcionario = Funcionario::paginate(50);
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Funcionário alterado com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_funcionario', compact('funcionario','text','centro_custo'));
		}
	}
	
	public function deleteFunc($id, Request $request)
	{
		Funcionario::find($id)->delete();  
		$funcionario  = Funcionario::paginate(50);
		$centro_custo = CentroCusto::all();
		$text 		  = true;
		\Session::flash('mensagem', ['msg' => 'Funcionário excluído com sucesso!!','class'=>'green white-text']);		
		return view('cadastro_funcionario', compact('funcionario','text','centro_custo'));
	}
}