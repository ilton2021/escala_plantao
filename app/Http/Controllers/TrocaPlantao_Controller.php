<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;
use App\Models\Escala_Mes_Ano;
use App\Models\Escala;
use App\Models\TrocaPlantao;
use Auth;
use DB;
use Validator;

class TrocaPlantao_Controller extends Controller
{
    public function cadastroTrocaP()
	{
		$a = 0;
		return view('cadastro_troca_plantao', compact('a'));
	}
	
	public function visualizarTrocaP()
	{
		$mes = date('m', strtotime('now')); 
		if($mes == "01"){ $mes = "Janeiro";    } else if($mes == "02"){ $mes = "Fevereiro"; } 
		else if($mes == "03"){ $mes = "Março"; } else if($mes == "04"){ $mes = "Abril"; } 
		else if($mes == "05"){ $mes = "Maio";  } else if($mes == "06"){ $mes = "Junho"; } 
		else if($mes == "07"){ $mes = "Julho"; } else if($mes == "08"){ $mes = "Agosto"; } 
		else if($mes == "09"){ $mes = "Setembro"; } else if($mes == "10"){ $mes = "Outubro"; } 
		else if($mes == "11"){ $mes = "Novembro"; } else if($mes == "12"){ $mes = "Dezembro"; }    
		$ano = date('Y', strtotime('now'));
		$idF = Auth::user()->id;
		$funcionario = Funcionario::where('id',$idF)->get();
		$c_func = $funcionario[0]->centro_custo;
		$escala   = Escala_Mes_Ano::where('mes',$mes)->where('ano',$ano)
								  ->where('centro_custo',$c_func)->get();
		$qtd = sizeof($escala); 
		if($qtd == 0) {
			$a = 0;
			$validator = "Funcionário não cadastrado na escala deste mês/ano!!";		
			return view('cadastro_troca_plantao', compact('funcionario','a'))
				  ->withErrors($validator);
		} else {
			$idEscala = $escala[0]->id;
			$permutas = TrocaPlantao::where('escala_id',$idEscala)->get();
			return view('visualizar_plantao', compact('permutas','escala'));
		}
	}
	
	public function cadastroTPSolicitante($d, $escala, Request $request)
	{
		$a 	 = 0;
		$idF = Auth::user()->id;
		$funcionarioSub = Funcionario::where('id', $idF)->get();
		$permuta = TrocaPlantao::where('escala_id',$escala)->get();
		$idFSub  = $permuta[0]->colaborador;
		$funcionarioSol = Funcionario::where('id',$idFSub)->get();
		return view('cadastro_troca_plantao_solicitante', compact('d','a','funcionarioSol','funcionarioSub'));
	}
	
	public function novaTrocaP(Request $request)
	{
		$nome 		 = Auth::user()->name;
		$funcionario = Funcionario::where('nome', $nome)->get();
		$qtd 		 = sizeof($funcionario);
		if($qtd == 0) {
			$validator = "Funcionário não cadastrado";		
			$a = 0;
			return view('cadastro_troca_plantao', compact('funcionario','a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$idF = $funcionario[0]->id;
			$mes = date('m', strtotime('now')); $ano = date('Y', strtotime('now'));
			if($mes == "01"){ $mes = "Janeiro";    } else if($mes == "02"){ $mes = "Fevereiro"; } 
			else if($mes == "03"){ $mes = "Março"; } else if($mes == "04"){ $mes = "Abril"; } 
			else if($mes == "05"){ $mes = "Maio";  } else if($mes == "06"){ $mes = "Junho"; } 
			else if($mes == "07"){ $mes = "Julho"; } else if($mes == "08"){ $mes = "Agosto"; } 
			else if($mes == "09"){ $mes = "Setembro"; } else if($mes == "10"){ $mes = "Outubro"; } 
			else if($mes == "11"){ $mes = "Novembro"; } else if($mes == "12"){ $mes = "Dezembro"; }    
			$escala    = DB::table('escala')->where('funcionario_id',$idF)->where('mes',$mes)->get();
			$escala_id = DB::table('escala_mes_ano')->where('mes',$mes)->where('ano',$ano)->get();
			$qtdE 	   = sizeof($escala);
			if($qtdE == 0){  
				$a = 0;
				$validator = "Funcionário não cadastrado na escala deste mês/ano!!";		
				return view('cadastro_troca_plantao', compact('funcionario','a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
			} else {
				$validator = NULL;
				return view('novo_troca_plantao', compact('funcionario','escala','mes','ano','escala_id'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
			}
		}
	}
	
	public function storeTrocaP(Request $request)
	{
		$input = $request->all();
		$nome 		 = Auth::user()->name;
		$funcionario = Funcionario::where('nome', $nome)->get();
		$idF = $funcionario[0]->id;
		$mes = date('m', strtotime('now')); $ano = date('Y', strtotime('now'));
		if($mes == "01"){ $mes = "Janeiro";    } else if($mes == "02"){ $mes = "Fevereiro"; } 
		else if($mes == "03"){ $mes = "Março"; } else if($mes == "04"){ $mes = "Abril"; } 
		else if($mes == "05"){ $mes = "Maio";  } else if($mes == "06"){ $mes = "Junho"; } 
		else if($mes == "07"){ $mes = "Julho"; } else if($mes == "08"){ $mes = "Agosto"; } 
		else if($mes == "09"){ $mes = "Setembro"; } else if($mes == "10"){ $mes = "Outubro"; } 
		else if($mes == "11"){ $mes = "Novembro"; } else if($mes == "12"){ $mes = "Dezembro"; }    
		$escala    = DB::table('escala')->where('funcionario_id',$idF)->where('mes',$mes)->get();
		$escala_id = DB::table('escala_mes_ano')->where('mes',$mes)->where('ano',$ano)->get();
		$validator = Validator::make($request->all(), [
			'colaborador' => 'required',
			'dia' 		  => 'required|max:255',
			'mes_ano' 	  => 'required|max:255',
			'escala_id'   => 'required'
		]);
		if ($validator->fails()) {
			$a = 0;
			return view('novo_troca_plantao', compact('funcionario','escala','mes','ano','escala_id','a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$dia 	 = $input['dia'];
			$esc     = $input['escala_id'];
			$mes_ano = $input['mes_ano'];
			$perm    = TrocaPlantao::where('colaborador',$idF)->where('dia',$dia)->where('escala_id',$esc)
			->where('mes_ano',$mes_ano)->get();
			$qtdE = sizeof($perm);
			if($qtdE > 0) {
				$text = true;
				$validator = "Este Dia desta Escala já foi cadastrado!!";
				$a = 0;
				return view('novo_troca_plantao', compact('funcionario','escala','mes','ano','escala_id','a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
			} else {
				$permuta   = TrocaPlantao::create($input);
				$validator = "Troca de Plantão Cadastrada com Sucesso!!";		
				$a = 1;
				return view('cadastro_troca_plantao',compact('a'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
			}
		}
	}
}