<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentroCusto;
use Validator;

class CentroCusto_Controller extends Controller
{
    public function cadastroCentroC()
	{
		$centro_custo = CentroCusto::all();
		$text = false;
		return view('cadastro_centro_custo', compact('centro_custo','text'));
	}
	
	public function novoCentroC()
	{
		return view('novo_centro_custo');
	}
	
	public function alterarCentroC($id)
	{
		$centro_custo = CentroCusto::where('id', $id)->get();
		return view('alterar_centro_custo', compact('centro_custo'));
	}
	
	public function excluirCentroC($id)
	{
		$centro_custo = CentroCusto::where('id', $id)->get();
		return view('excluir_centro_custo', compact('centro_custo'));
	}
	
	public function storeCentroCusto(Request $request)
	{
		$input = $request->all();
		$validator = Validator::make($request->all(), [
			'descricao' => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('novo_centro_custo')
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$centro_custo = CentroCusto::create($input);
			$centro_custo = CentroCusto::all();
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Centro de Custo cadastrado com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_centro_custo', compact('centro_custo','text'));
		}
	}
	
	public function updateCentroCusto($id, Request $request)
	{
		$input = $request->all();
		$validator = Validator::make($request->all(), [
			'descricao' => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('novo_centro_custo')
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$centro_custo = CentroCusto::find($id); 
			$centro_custo->update($input);	
			$centro_custo = CentroCusto::all();
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Centro de Custo alterado com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_centro_custo', compact('centro_custo','text'));
		}
	}
	
	public function deleteCentroCusto($id, Request $request)
	{
		CentroCusto::find($id)->delete();  
		$centro_custo = CentroCusto::all();
		$text = true;
		\Session::flash('mensagem', ['msg' => 'Centro de Custo excluído com sucesso!!','class'=>'green white-text']);		
		return view('cadastro_centro_custo', compact('centro_custo','text'));
	}
}