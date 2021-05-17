<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escala;
use App\Models\Funcionario;
use App\Models\CentroCusto;
use App\Models\Escala_Mes_Ano;
use Validator;
use DB;

class Escala_Controller extends Controller
{
	public function novaEscalaMesAno()
	{
		$text = false;
		return view('novo_escala_mes_ano', compact('text'));
	}
	
    public function cadastroEscala()
	{
		$escalas = Escala_Mes_Ano::all();
		$text 	 = false;
		return view('cadastro_escala', compact('escalas','text'));
	}
	
	public function excluirEscala($id)
	{
		$escalas = Escala_Mes_Ano::where('id', $id)->get();
		$text = false;
		return view('excluir_escala', compact('escalas','text'));
	}
	
	public function visualizarEscala($id)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$cc 	= $escala[0]->centro_custo; 
		if($cc == "ENFERMAGEM") {
			$funcionarios = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$centro_custo = CentroCusto::all();			
		} else { 
			$funcionarios = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
			$centro_custo = CentroCusto::all();			
		}
		$escala = DB::table('escala')
		->join('funcionario','escala.funcionario_id','=','funcionario.id')
		->where('escala_id',$id)->get();
		return view('visualizar_escala', compact('funcionarios','centro_custo','escala'));
	}

	public function visualizarEscalaUTI($id,$cc)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$centro_custo = CentroCusto::all();			
		$escala = DB::table('escala')
		->join('funcionario','escala.funcionario_id','=','funcionario.id')
		->where('escala.centro_custo',$cc)
		->where('escala_id',$id)->get();
		return view('visualizar_escala', compact('funcionarios','centro_custo','escala'));
	}
	
	public function novaEscala($id)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$cc 	= $escala[0]->centro_custo; 
		if($cc == "ENFERMAGEM") {
			$funcionarios = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$centro_custo = CentroCusto::all();			
		} else { 
			$funcionarios = Funcionario::where('centro_custo_id', 1)->orderBy('centro_custo_id','ASC')->get();
			$centro_custo = CentroCusto::all();			
		}
		return view('novo_escala', compact('funcionarios','centro_custo','escala'));
	}

	public function novaEscalaUTI($id)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$centro_custo = CentroCusto::whereIn('id',[1,2,3,4,5,6,7,8,9,10])->get();
		$funcionarios = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
		return view('novo_escala_uti', compact('funcionarios','centro_custo','escala'));
	}

	public function novaEscalaUTI_novo($id, $cc)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$centro_custo = CentroCusto::where('id',$cc)->get();
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$centro_c = $cc;
		return view('novo_escala_uti_novo', compact('funcionarios','centro_custo','escala','centro_c'));
	}
	
	public function storeEscalaUTI(Request $request, $id, $cc){
		$input = $request->all(); 
		$cc = $input['centro_custo_id'];
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$centro_custo = CentroCusto::all();			
		$validator = Validator::make($request->all(), [
			'mes' => 'required|max:255',
			'ano' => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('novo_escala', compact('funcionarios','centro_custo','escala'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$qtd1 = sizeof($funcionarios);  
			for($a = 1; $a <= $qtd1; $a++) { 
				$tp = $input['tipo_plantao_'.$a];
				$input['escala_id'] = $id;
				$input['funcionario_id'] = $input['funcionario_id_'.$a];
				if(!empty($input['dia1_'.$a])){$input['dia1'] = $tp;}else{$input['dia1'] = "";} if(!empty($input['dia2_'.$a])){$input['dia2'] = $tp;}else{$input['dia2'] = "";}
				if(!empty($input['dia3_'.$a])){$input['dia3'] = $tp;}else{$input['dia3'] = "";} if(!empty($input['dia4_'.$a])){$input['dia4'] = $tp;}else{$input['dia4'] = "";}
				if(!empty($input['dia5_'.$a])){$input['dia5'] = $tp;}else{$input['dia5'] = "";} if(!empty($input['dia6_'.$a])){$input['dia6'] = $tp;}else{$input['dia6'] = "";}
				if(!empty($input['dia7_'.$a])){$input['dia7'] = $tp;}else{$input['dia7'] = "";} if(!empty($input['dia8_'.$a])){$input['dia8'] = $tp;}else{$input['dia8'] = "";}
				if(!empty($input['dia9_'.$a])){$input['dia9'] = $tp;}else{$input['dia9'] = "";} if(!empty($input['dia10_'.$a])){$input['dia10'] = $tp;}else{$input['dia10'] = "";}
				if(!empty($input['dia11_'.$a])){$input['dia11'] = $tp;}else{$input['dia11'] = "";} if(!empty($input['dia12_'.$a])){$input['dia12'] = $tp;}else{$input['dia12'] = "";}
				if(!empty($input['dia13_'.$a])){$input['dia13'] = $tp;}else{$input['dia13'] = "";} if(!empty($input['dia14_'.$a])){$input['dia14'] = $tp;}else{$input['dia14'] = "";}
				if(!empty($input['dia15_'.$a])){$input['dia15'] = $tp;}else{$input['dia15'] = "";} if(!empty($input['dia16_'.$a])){$input['dia16'] = $tp;}else{$input['dia16'] = "";}
				if(!empty($input['dia17_'.$a])){$input['dia17'] = $tp;}else{$input['dia17'] = "";} if(!empty($input['dia18_'.$a])){$input['dia18'] = $tp;}else{$input['dia18'] = "";}
				if(!empty($input['dia19_'.$a])){$input['dia19'] = $tp;}else{$input['dia19'] = "";} if(!empty($input['dia20_'.$a])){$input['dia20'] = $tp;}else{$input['dia20'] = "";}
				if(!empty($input['dia21_'.$a])){$input['dia21'] = $tp;}else{$input['dia21'] = "";} if(!empty($input['dia22_'.$a])){$input['dia22'] = $tp;}else{$input['dia22'] = "";}
				if(!empty($input['dia23_'.$a])){$input['dia23'] = $tp;}else{$input['dia23'] = "";} if(!empty($input['dia24_'.$a])){$input['dia24'] = $tp;}else{$input['dia24'] = "";}
				if(!empty($input['dia25_'.$a])){$input['dia25'] = $tp;}else{$input['dia25'] = "";} if(!empty($input['dia26_'.$a])){$input['dia26'] = $tp;}else{$input['dia26'] = "";}
				if(!empty($input['dia27_'.$a])){$input['dia27'] = $tp;}else{$input['dia27'] = "";} if(!empty($input['dia28_'.$a])){$input['dia28'] = $tp;}else{$input['dia28'] = "";}
				if(!empty($input['dia29_'.$a])){$input['dia29'] = $tp;}else{$input['dia29'] = "";} if(!empty($input['dia30_'.$a])){$input['dia30'] = $tp;}else{$input['dia30'] = "";}
				if(!empty($input['dia31_'.$a])){$input['dia31'] = $tp;}else{$input['dia31'] = "";}
				$escala = Escala::create($input);
			}
			$escalas = Escala_Mes_Ano::all();
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Escala cadastrada com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_escala', compact('escalas','text'));
		}

	}

	public function storeEscalaMesAno(Request $request)
	{   
		$input = $request->all();
		$validator = Validator::make($request->all(), [
			'mes' => 'required|max:255',
			'ano' => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('novo_escala_mes_ano')
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$mes 		  = $input['mes'];
			$ano 		  = $input['ano'];
			$centro_custo = $input['centro_custo'];
			$qtd = Escala_Mes_Ano::where('ano',$ano)->where('mes',$mes)->where('centro_custo',$centro_custo)->count();
			if($qtd == 0) {
				$escala  = Escala_Mes_Ano::create($input);
				$escalas = Escala_Mes_Ano::all();
				$text = true;
				\Session::flash('mensagem', ['msg' => 'Escala cadastrada com sucesso!!','class'=>'green white-text']);		
				return view('cadastro_escala', compact('escalas','text'));
			} else {
				$validator = "Esta Escala já foi cadastrada!";
				return view('novo_escala_mes_ano')
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
			}
		}
	}
	
	public function storeEscala($id, Request $request)
	{   
		$input = $request->all();
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$cc 	= $escala[0]->centro_custo; 
		if($cc == "ENFERMAGEM") {
			$funcionarios = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$centro_custo = CentroCusto::all();		
		} else { 
			$funcionarios = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
			$centro_custo = CentroCusto::all();			
		}
		$validator = Validator::make($request->all(), [
			'mes' => 'required|max:255',
			'ano' => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('novo_escala', compact('funcionarios','centro_custo','escala'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$qtd1 = sizeof($funcionarios);
			for($a = 1; $a <= $qtd1; $a++) { 
				$tp = $input['tipo_plantao_'.$a];
				$input['escala_id'] = $id;
				$input['centro_custo'] = $input['centro_custo_'.$a]; $input['funcionario_id'] = $input['funcionario_id_'.$a];
				if(!empty($input['dia1_'.$a])){$input['dia1'] = $tp;}else{$input['dia1'] = "";} if(!empty($input['dia2_'.$a])){$input['dia2'] = $tp;}else{$input['dia2'] = "";}
				if(!empty($input['dia3_'.$a])){$input['dia3'] = $tp;}else{$input['dia3'] = "";} if(!empty($input['dia4_'.$a])){$input['dia4'] = $tp;}else{$input['dia4'] = "";}
				if(!empty($input['dia5_'.$a])){$input['dia5'] = $tp;}else{$input['dia5'] = "";} if(!empty($input['dia6_'.$a])){$input['dia6'] = $tp;}else{$input['dia6'] = "";}
				if(!empty($input['dia7_'.$a])){$input['dia7'] = $tp;}else{$input['dia7'] = "";} if(!empty($input['dia8_'.$a])){$input['dia8'] = $tp;}else{$input['dia8'] = "";}
				if(!empty($input['dia9_'.$a])){$input['dia9'] = $tp;}else{$input['dia9'] = "";} if(!empty($input['dia10_'.$a])){$input['dia10'] = $tp;}else{$input['dia10'] = "";}
				if(!empty($input['dia11_'.$a])){$input['dia11'] = $tp;}else{$input['dia11'] = "";} if(!empty($input['dia12_'.$a])){$input['dia12'] = $tp;}else{$input['dia12'] = "";}
				if(!empty($input['dia13_'.$a])){$input['dia13'] = $tp;}else{$input['dia13'] = "";} if(!empty($input['dia14_'.$a])){$input['dia14'] = $tp;}else{$input['dia14'] = "";}
				if(!empty($input['dia15_'.$a])){$input['dia15'] = $tp;}else{$input['dia15'] = "";} if(!empty($input['dia16_'.$a])){$input['dia16'] = $tp;}else{$input['dia16'] = "";}
				if(!empty($input['dia17_'.$a])){$input['dia17'] = $tp;}else{$input['dia17'] = "";} if(!empty($input['dia18_'.$a])){$input['dia18'] = $tp;}else{$input['dia18'] = "";}
				if(!empty($input['dia19_'.$a])){$input['dia19'] = $tp;}else{$input['dia19'] = "";} if(!empty($input['dia20_'.$a])){$input['dia20'] = $tp;}else{$input['dia20'] = "";}
				if(!empty($input['dia21_'.$a])){$input['dia21'] = $tp;}else{$input['dia21'] = "";} if(!empty($input['dia22_'.$a])){$input['dia22'] = $tp;}else{$input['dia22'] = "";}
				if(!empty($input['dia23_'.$a])){$input['dia23'] = $tp;}else{$input['dia23'] = "";} if(!empty($input['dia24_'.$a])){$input['dia24'] = $tp;}else{$input['dia24'] = "";}
				if(!empty($input['dia25_'.$a])){$input['dia25'] = $tp;}else{$input['dia25'] = "";} if(!empty($input['dia26_'.$a])){$input['dia26'] = $tp;}else{$input['dia26'] = "";}
				if(!empty($input['dia27_'.$a])){$input['dia27'] = $tp;}else{$input['dia27'] = "";} if(!empty($input['dia28_'.$a])){$input['dia28'] = $tp;}else{$input['dia28'] = "";}
				if(!empty($input['dia29_'.$a])){$input['dia29'] = $tp;}else{$input['dia29'] = "";} if(!empty($input['dia30_'.$a])){$input['dia30'] = $tp;}else{$input['dia30'] = "";}
				if(!empty($input['dia31_'.$a])){$input['dia31'] = $tp;}else{$input['dia31'] = "";}
				$escala = Escala::create($input);
			}
			$escalas = Escala_Mes_Ano::all();
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Escala cadastrada com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_escala', compact('escalas','text'));
		}
	}
	
	public function deleteEscala($id, Request $request)
	{
		$escalasD = DB::statement("DELETE FROM escala WHERE escala_id = ".$id);
		Escala_Mes_Ano::find($id)->delete();  
		$escalas = Escala_Mes_Ano::all();
		$text    = true;
		\Session::flash('mensagem', ['msg' => 'Escala excluido com sucesso!!','class'=>'green white-text']);		
		return view('cadastro_escala', compact('escalas','text'));
	}
}