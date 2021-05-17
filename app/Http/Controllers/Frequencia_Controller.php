<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escala_Mes_Ano;
use App\Models\Escala;
use App\Models\Funcionario;
use App\Models\CentroCusto;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Frequencia_Escala;
use DB;
use Validator;
use App\Exports\FrequenciaExport;

class Frequencia_Controller extends Controller
{
    public function frequenciaEscala($id)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$cc 	= $escala[0]->centro_custo; 
		if($cc == "ENFERMAGEM") {
			$funcionarios = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$funcT 		  = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
			$centro_custo = CentroCusto::all();			
		} else { 
			$funcionarios = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
			$funcT 		  = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
			$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
			$centro_custo = CentroCusto::all();			
		}
		$escala = DB::table('escala')
		->join('funcionario','escala.funcionario_id','=','funcionario.id')
		->where('escala_id',$id)->get(); 
		$text = false;
		$idEs = $id;
		$frequencia = DB::table('frequencia_escala')->where('escala_id',$id)->get();
		return view('frequencia_escala', compact('funcionarios','text','escala','funcT','idEs','funcRpa','frequencia'));
	}

	public function frequenciaEscalaUTI($id)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$centro_custo = CentroCusto::whereIn('id',[1,2,3,4,5,6,7,8,9,10])->get();	
		$text = false;
		return view('frequencia_escalaUTI', compact('text','escala','centro_custo'));
	}

	public function frequenciaEscalaUTI_novo($id, $cc)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$funcT 		  = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
		$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
		$centro_custo = CentroCusto::all();			
		$escala = DB::table('escala')
		->join('funcionario','escala.funcionario_id','=','funcionario.id')
		->where('escala.centro_custo',$cc)
		->where('escala.escala_id',$id)
		->select('funcionario.*','escala.*')->get();  
		$frequencia = DB::table('frequencia_escala')
		->join('funcionario','frequencia_escala.funcionario_id','=','funcionario.id')
		->where('frequencia_escala.escala_id',$id)->where('frequencia_escala.centro_custo',$cc)
		->select('funcionario.*','funcionario.nome as NOME','frequencia_escala.*')->get();
		$text = false;
		$idEs = $id;
		$frequencia = DB::table('frequencia_escala')->where('escala_id',$id)->get();
		return view('frequencia_escalauti_novo', compact('funcionarios','text','escala','funcT','idEs','funcRpa','frequencia'));
	}

	public function frequenciaEscalaUTI_novo_dia($id, $cc, $dia){
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$funcT 		  = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
		$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
		$centro_custo = CentroCusto::all();			
		$escala = DB::table('escala')
		->join('funcionario','escala.funcionario_id','=','funcionario.id')
		->where('escala.centro_custo',$cc)
		->where('escala_id',$id)
		->select('funcionario.*','escala.*')->get();  
		$text = false;
		$idEs = $id;
		$dia  = 'dia'.$dia;
		$frequencia = DB::table('frequencia_escala')->where('escala_id',$id)->get();
		return view('frequencia_escalauti_novo_dia', compact('funcionarios','text','escala','funcT','idEs','funcRpa','frequencia','dia'));
	}

	public function storeFrequenciaEscalaUTI_novo($id, $cc, Request $request)
	{
		$input  = $request->all(); 
		$cc 	= $input['centro_custo_id'];
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$funcT 		  = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
		$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
		$centro_custo = CentroCusto::all();			
		$escala = DB::table('escala')
		->join('funcionario','escala.funcionario_id','=','funcionario.id')
		->where('escala.centro_custo',$cc)
		->where('escala_id',$id)
		->select('funcionario.*','escala.*')->get(); 
		$validator = Validator::make($request->all(), [
			'mes' => 'required|max:255',
			'ano' => 'required|max:255'
		]);
		if ($validator->fails()) {
			$text = true;
			return view('frequencia_escalauti_novo', compact('funcionarios','text','escala','funcT'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$escala    = Frequencia_Escala::where('escala_id',$id)->where('centro_custo',$cc)->get();
			$qtdEscala = sizeof($escala); 
			$qtd1 = sizeof($funcionarios);  
			$b = 1; 
			$dia = substr($input['dia'], 3, 2);
			for($a = 1; $a < $qtd1; $a++) { 
				$input['funcionario_id'] = $input['funcionario_id_'.$a];
					if($input['dia'.$dia.'_'.$a] == "") {
						if($qtdEscala > 0){
							$idE = Frequencia_Escala::where('escala_id',$id)->where('funcionario_id',$input['funcionario_id'])->get();
							$idEs = $idE[0]->id;
							
							DB::update("UPDATE frequencia_escala SET dia".$dia." = ? WHERE id = ".$idEs.";", ['-']);
						} else {
							$escala = Frequencia_Escala::create($input);	
						}
				    } else {
						if($input['dia'.$dia.'_'.$a] == "Atestado") { 
							if($input['qtdDias_'.$a] < 10) {
								$input['dia'.$dia] = "Atestado - 0" .$input['qtdDias_'.$a]. " - " .$input['substituto_'.$a]; 
							} else {
								$input['dia'.$dia] = "Atestado - " .$input['qtdDias_'.$a]. " - " .$input['substituto_'.$a]; 
							}
						} else if($input['dia'.$dia.'_'.$a] == "Permuta") { 
							$input['dia'.$dia] = "Permuta - " .$input['substituto_'.$a]; 
						} else if($input['dia'.$dia.'_'.$a] == "Falta") { 
							if($input['tipo_func_'.$a] == "func"){ 
								$input['dia'.$dia] = "Falta - FUNC - " .$input['substituto_'.$a]; 
							} else if($input['tipo_func_'.$a] == "rpa"){ 
								$input['dia'.$dia] = "Falta - RPA - " .$input['substitutorpa_'.$a]; 
							} 
						} else if($input['dia'.$dia.'_'.$a] == "Suspensão"){ 
							if($input['tipo_func_'.$a] == "func"){ 
								$input['dia'.$dia] = "Falta - FUNC - " .$input['substituto_'.$a]; 
							} else if($input['tipo_func_'.$a] == "rpa"){ 
								$input['dia'.$dia] = "Falta -  RPA - " .$input['substitutorpa_'.$a]; 
							} 
						} else if($input['dia'.$dia.'_'.$a] == "Presente"){
							$input['dia'.$dia] = "Presente";
						} else if($input['dia'.$dia.'_'.$a] == "Folga"){
							$input['dia'.$dia] = "Folga";
						} else if($input['dia'.$dia.'_'.$a] == "Desligamento"){
							$input['dia'.$dia] = "Desligamento";
						}
						if($qtdEscala > 0){
							$idE  = Frequencia_Escala::where('escala_id',$id)->where('funcionario_id',$input['funcionario_id'])->get();
							$idEs = $idE[0]->id;
							$t 	  = $input['dia'.$dia];
							DB::update("UPDATE frequencia_escala SET dia".$dia." = ? WHERE id = ".$idEs.";", [$t]);
						} else {
							$escala = Frequencia_Escala::create($input);	
						}
				    }
					$b += 1;
			}
			$escalas = Escala_Mes_Ano::all();
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Frequência de Escala cadastrada com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_escala', compact('escalas','text'));
		}
	}
	
	public function visualizarFrequenciaUTI($id, $cc)
	{
		$escala 	  = Escala_Mes_Ano::where('id',$id)->get();
		$funcionarios = Funcionario::where('centro_custo_id', $cc)->orderBy('centro_custo_id','ASC')->get();
		$funcT 		  = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
		$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
		$escala_frequencia = DB::table('frequencia_escala')
		->join('funcionario','frequencia_escala.funcionario_id','=','funcionario.id')
		->where('frequencia_escala.centro_custo_id',$cc)
		->where('escala_id',$id)->get(); 
		$text = false;
		$idEs = $id;
		return view('visualizar_frequenciaUTI', compact('funcionarios','text','escala','funcT','idEs','funcRpa','escala_frequencia'));
	}

	public function frequenciaEscalaRH_cadastro()
	{
		$escalas = Escala_Mes_Ano::all();
		$text = false;
		return view('frequencia_escala_rh_cadastro', compact('text','escalas'));
	}
	
	public function frequenciaEscalaRH($id)
	{
		$escala = Escala_Mes_Ano::where('id',$id)->get();
		$cc     = $escala[0]->centro_custo;
		if($cc == "ENFERMAGEM") {
			$funcionarios = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$funcT 		  = Funcionario::where('centro_custo', 'Enfermagem')->get();
			$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
			$centro_custo = CentroCusto::all();			
		} else { 
			$funcionarios = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
			$funcT 		  = Funcionario::where('centro_custo', 'UTI')->orderBy('centro_custo_id','ASC')->get();
			$funcRpa 	  = Funcionario::where('matricula', 'RPA')->get();
			$centro_custo = CentroCusto::all();			
		}
		$escala_frequencia = DB::table('frequencia_escala')
		->join('funcionario','frequencia_escala.funcionario_id','=','funcionario.id')
		->where('escala_id',$id)->orderBy('frequencia_escala.centro_custo_id','ASC')->get(); 
		$text = false;
		$idEs = $id;
		return view('frequencia_escala_rh', compact('funcionarios','text','escala','funcT','idEs','funcRpa','escala_frequencia'));
	}
	
	public function frequenciaEscalaExport($id)
	{
		return Excel::download(new FrequenciaExport($id), 'escala.xlsx');	
	}
	
	public function storeFrequencia($id, Request $request)
	{   
		$input  = $request->all();
		$funcT  = Funcionario::all();
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
			return view('frequencia_escala', compact('funcionarios','text','escala','funcT'))
				  ->withErrors($validator)
                  ->withInput(session()->flashInput($request->input()));
		} else {
			$qtd1 = sizeof($funcionarios);
			$input['escala_id'] = $escala[0]->id;
			for($a = 1; $a <= $qtd1; $a++) { 
			    $input['centro_custo_id'] = $input['centro_custo_id_'.$a]; $input['funcionario_id'] = $input['funcionario_id_'.$a];
				
				if(!empty($input['dia1_'.$a])){ $input['dia1'] = $input['dia1_'.$a]; if($input['dia1'] == "Atestado") { $input['dia1'] = "Atestado - " .$input['qtdDias1_'.$a]. " - " .$input['substituto1_'.$a]; } else if($input['dia1'] == "Permuta") { $input['dia1'] = "Permuta - " .$input['substituto1_'.$a]; } else if($input['dia1'] == "Falta") { if($input['tipo_func1_'.$a] == "func"){ $input['dia1'] = "Falta - FUNC - " .$input['substituto1_'.$a]; } else if($input['tipo_func1_'.$a] == "rpa"){ $input['dia1'] = "Falta - RPA - " .$input['substitutorpa1_'.$a]; } } else if($input['dia1'] == "Suspensão"){ if($input['tipo_func1_'.$a] == "func"){ $input['dia1'] = "Falta - FUNC - " .$input['substituto1_'.$a]; } else if($input['tipo_func1_'.$a] == "rpa"){ $input['dia1'] = "Falta -  RPA - " .$input['substitutorpa1_'.$a]; } } } else { $input['dia1'] = ""; }
				if(!empty($input['dia2_'.$a])){ $input['dia2'] = $input['dia2_'.$a]; if($input['dia2'] == "Atestado") { $input['dia2'] = "Atestado - " .$input['qtdDias2_'.$a]. " - " .$input['substituto2_'.$a]; } else if($input['dia2'] == "Permuta") { $input['dia2'] = "Permuta - " .$input['substituto2_'.$a]; } else if($input['dia2'] == "Falta") { if($input['tipo_func2_'.$a] == "func"){ $input['dia2'] = "Falta - FUNC - " .$input['substituto2_'.$a]; } else if($input['tipo_func2_'.$a] == "rpa"){ $input['dia2'] = "Falta - RPA - " .$input['substitutorpa2_'.$a]; } } else if($input['dia2'] == "Suspensão"){ if($input['tipo_func2_'.$a] == "func"){ $input['dia2'] = "Falta - FUNC - " .$input['substituto2_'.$a]; } else if($input['tipo_func2_'.$a] == "rpa"){ $input['dia2'] = "Falta -  RPA - " .$input['substitutorpa2_'.$a]; } } } else { $input['dia2'] = ""; }
				if(!empty($input['dia3_'.$a])){ $input['dia3'] = $input['dia3_'.$a]; if($input['dia3'] == "Atestado") { $input['dia3'] = "Atestado - " .$input['qtdDias3_'.$a]. " - " .$input['substituto3_'.$a]; } else if($input['dia3'] == "Permuta") { $input['dia3'] = "Permuta - " .$input['substituto3_'.$a]; } else if($input['dia3'] == "Falta") { if($input['tipo_func3_'.$a] == "func"){ $input['dia3'] = "Falta - FUNC - " .$input['substituto3_'.$a]; } else if($input['tipo_func3_'.$a] == "rpa"){ $input['dia3'] = "Falta - RPA - " .$input['substitutorpa3_'.$a]; } } else if($input['dia3'] == "Suspensão"){ if($input['tipo_func3_'.$a] == "func"){ $input['dia3'] = "Falta - FUNC - " .$input['substituto3_'.$a]; } else if($input['tipo_func3_'.$a] == "rpa"){ $input['dia3'] = "Falta -  RPA - " .$input['substitutorpa3_'.$a]; } } } else { $input['dia3'] = ""; }
				if(!empty($input['dia4_'.$a])){ $input['dia4'] = $input['dia4_'.$a]; if($input['dia4'] == "Atestado") { $input['dia4'] = "Atestado - " .$input['qtdDias4_'.$a]. " - " .$input['substituto4_'.$a]; } else if($input['dia4'] == "Permuta") { $input['dia4'] = "Permuta - " .$input['substituto4_'.$a]; } else if($input['dia4'] == "Falta") { if($input['tipo_func4_'.$a] == "func"){ $input['dia4'] = "Falta - FUNC - " .$input['substituto4_'.$a]; } else if($input['tipo_func4_'.$a] == "rpa"){ $input['dia4'] = "Falta - RPA - " .$input['substitutorpa4_'.$a]; } } else if($input['dia4'] == "Suspensão"){ if($input['tipo_func4_'.$a] == "func"){ $input['dia4'] = "Falta - FUNC - " .$input['substituto4_'.$a]; } else if($input['tipo_func4_'.$a] == "rpa"){ $input['dia4'] = "Falta -  RPA - " .$input['substitutorpa4_'.$a]; } } } else { $input['dia4'] = ""; }
				if(!empty($input['dia5_'.$a])){ $input['dia5'] = $input['dia5_'.$a]; if($input['dia5'] == "Atestado") { $input['dia5'] = "Atestado - " .$input['qtdDias5_'.$a]. " - " .$input['substituto5_'.$a]; } else if($input['dia5'] == "Permuta") { $input['dia5'] = "Permuta - " .$input['substituto5_'.$a]; } else if($input['dia5'] == "Falta") { if($input['tipo_func5_'.$a] == "func"){ $input['dia5'] = "Falta - FUNC - " .$input['substituto5_'.$a]; } else if($input['tipo_func5_'.$a] == "rpa"){ $input['dia5'] = "Falta - RPA - " .$input['substitutorpa5_'.$a]; } } else if($input['dia5'] == "Suspensão"){ if($input['tipo_func5_'.$a] == "func"){ $input['dia5'] = "Falta - FUNC - " .$input['substituto5_'.$a]; } else if($input['tipo_func5_'.$a] == "rpa"){ $input['dia5'] = "Falta -  RPA - " .$input['substitutorpa5_'.$a]; } } } else { $input['dia5'] = ""; }
				if(!empty($input['dia6_'.$a])){ $input['dia6'] = $input['dia6_'.$a]; if($input['dia6'] == "Atestado") { $input['dia6'] = "Atestado - " .$input['qtdDias6_'.$a]. " - " .$input['substituto6_'.$a]; } else if($input['dia6'] == "Permuta") { $input['dia6'] = "Permuta - " .$input['substituto6_'.$a]; } else if($input['dia6'] == "Falta") { if($input['tipo_func6_'.$a] == "func"){ $input['dia6'] = "Falta - FUNC - " .$input['substituto6_'.$a]; } else if($input['tipo_func6_'.$a] == "rpa"){ $input['dia6'] = "Falta - RPA - " .$input['substitutorpa6_'.$a]; } } else if($input['dia6'] == "Suspensão"){ if($input['tipo_func6_'.$a] == "func"){ $input['dia6'] = "Falta - FUNC - " .$input['substituto6_'.$a]; } else if($input['tipo_func6_'.$a] == "rpa"){ $input['dia6'] = "Falta -  RPA - " .$input['substitutorpa6_'.$a]; } } } else { $input['dia6'] = ""; }
				if(!empty($input['dia7_'.$a])){ $input['dia7'] = $input['dia7_'.$a]; if($input['dia7'] == "Atestado") { $input['dia7'] = "Atestado - " .$input['qtdDias7_'.$a]. " - " .$input['substituto7_'.$a]; } else if($input['dia7'] == "Permuta") { $input['dia7'] = "Permuta - " .$input['substituto7_'.$a]; } else if($input['dia7'] == "Falta") { if($input['tipo_func7_'.$a] == "func"){ $input['dia7'] = "Falta - FUNC - " .$input['substituto7_'.$a]; } else if($input['tipo_func7_'.$a] == "rpa"){ $input['dia7'] = "Falta - RPA - " .$input['substitutorpa7_'.$a]; } } else if($input['dia7'] == "Suspensão"){ if($input['tipo_func7_'.$a] == "func"){ $input['dia7'] = "Falta - FUNC - " .$input['substituto7_'.$a]; } else if($input['tipo_func7_'.$a] == "rpa"){ $input['dia7'] = "Falta -  RPA - " .$input['substitutorpa7_'.$a]; } } } else { $input['dia7'] = ""; }
				if(!empty($input['dia8_'.$a])){ $input['dia8'] = $input['dia8_'.$a]; if($input['dia8'] == "Atestado") { $input['dia8'] = "Atestado - " .$input['qtdDias8_'.$a]. " - " .$input['substituto8_'.$a]; } else if($input['dia8'] == "Permuta") { $input['dia8'] = "Permuta - " .$input['substituto8_'.$a]; } else if($input['dia8'] == "Falta") { if($input['tipo_func8_'.$a] == "func"){ $input['dia8'] = "Falta - FUNC - " .$input['substituto8_'.$a]; } else if($input['tipo_func8_'.$a] == "rpa"){ $input['dia8'] = "Falta - RPA - " .$input['substitutorpa8_'.$a]; } } else if($input['dia8'] == "Suspensão"){ if($input['tipo_func8_'.$a] == "func"){ $input['dia8'] = "Falta - FUNC - " .$input['substituto8_'.$a]; } else if($input['tipo_func8_'.$a] == "rpa"){ $input['dia8'] = "Falta -  RPA - " .$input['substitutorpa8_'.$a]; } } } else { $input['dia8'] = ""; }
				if(!empty($input['dia9_'.$a])){ $input['dia9'] = $input['dia9_'.$a]; if($input['dia9'] == "Atestado") { $input['dia9'] = "Atestado - " .$input['qtdDias9_'.$a]. " - " .$input['substituto9_'.$a]; } else if($input['dia9'] == "Permuta") { $input['dia9'] = "Permuta - " .$input['substituto9_'.$a]; } else if($input['dia9'] == "Falta") { if($input['tipo_func9_'.$a] == "func"){ $input['dia9'] = "Falta - FUNC - " .$input['substituto9_'.$a]; } else if($input['tipo_func9_'.$a] == "rpa"){ $input['dia9'] = "Falta - RPA - " .$input['substitutorpa9_'.$a]; } } else if($input['dia9'] == "Suspensão"){ if($input['tipo_func9_'.$a] == "func"){ $input['dia9'] = "Falta - FUNC - " .$input['substituto9_'.$a]; } else if($input['tipo_func9_'.$a] == "rpa"){ $input['dia9'] = "Falta -  RPA - " .$input['substitutorpa9_'.$a]; } } } else { $input['dia9'] = ""; }
				if(!empty($input['dia10_'.$a])){ $input['dia10'] = $input['dia10_'.$a]; if($input['dia10'] == "Atestado") { $input['dia10'] = "Atestado - " .$input['qtdDias10_'.$a]. " - " .$input['substituto10_'.$a]; } else if($input['dia10'] == "Permuta") { $input['dia10'] = "Permuta - " .$input['substituto10_'.$a]; } else if($input['dia10'] == "Falta") { if($input['tipo_func10_'.$a] == "func"){ $input['dia10'] = "Falta - FUNC - " .$input['substituto10_'.$a]; } else if($input['tipo_func10_'.$a] == "rpa"){ $input['dia10'] = "Falta - RPA - " .$input['substitutorpa10_'.$a]; } } else if($input['dia10'] == "Suspensão"){ if($input['tipo_func10_'.$a] == "func"){ $input['dia10'] = "Falta - FUNC - " .$input['substituto10_'.$a]; } else if($input['tipo_func10_'.$a] == "rpa"){ $input['dia10'] = "Falta -  RPA - " .$input['substitutorpa10_'.$a]; } } } else { $input['dia10'] = ""; }
				if(!empty($input['dia11_'.$a])){ $input['dia11'] = $input['dia11_'.$a]; if($input['dia11'] == "Atestado") { $input['dia11'] = "Atestado - " .$input['qtdDias11_'.$a]. " - " .$input['substituto11_'.$a]; } else if($input['dia11'] == "Permuta") { $input['dia11'] = "Permuta - " .$input['substituto11_'.$a]; } else if($input['dia11'] == "Falta") { if($input['tipo_func11_'.$a] == "func"){ $input['dia11'] = "Falta - FUNC - " .$input['substituto11_'.$a]; } else if($input['tipo_func11_'.$a] == "rpa"){ $input['dia11'] = "Falta - RPA - " .$input['substitutorpa11_'.$a]; } } else if($input['dia11'] == "Suspensão"){ if($input['tipo_func11_'.$a] == "func"){ $input['dia11'] = "Falta - FUNC - " .$input['substituto11_'.$a]; } else if($input['tipo_func11_'.$a] == "rpa"){ $input['dia11'] = "Falta -  RPA - " .$input['substitutorpa11_'.$a]; } } } else { $input['dia11'] = ""; }
				if(!empty($input['dia12_'.$a])){ $input['dia12'] = $input['dia12_'.$a]; if($input['dia12'] == "Atestado") { $input['dia12'] = "Atestado - " .$input['qtdDias12_'.$a]. " - " .$input['substituto12_'.$a]; } else if($input['dia12'] == "Permuta") { $input['dia12'] = "Permuta - " .$input['substituto12_'.$a]; } else if($input['dia12'] == "Falta") { if($input['tipo_func12_'.$a] == "func"){ $input['dia12'] = "Falta - FUNC - " .$input['substituto12_'.$a]; } else if($input['tipo_func12_'.$a] == "rpa"){ $input['dia12'] = "Falta - RPA - " .$input['substitutorpa12_'.$a]; } } else if($input['dia12'] == "Suspensão"){ if($input['tipo_func12_'.$a] == "func"){ $input['dia12'] = "Falta - FUNC - " .$input['substituto12_'.$a]; } else if($input['tipo_func12_'.$a] == "rpa"){ $input['dia12'] = "Falta -  RPA - " .$input['substitutorpa12_'.$a]; } } } else { $input['dia12'] = ""; }
				if(!empty($input['dia13_'.$a])){ $input['dia13'] = $input['dia13_'.$a]; if($input['dia13'] == "Atestado") { $input['dia13'] = "Atestado - " .$input['qtdDias13_'.$a]. " - " .$input['substituto13_'.$a]; } else if($input['dia13'] == "Permuta") { $input['dia13'] = "Permuta - " .$input['substituto13_'.$a]; } else if($input['dia13'] == "Falta") { if($input['tipo_func13_'.$a] == "func"){ $input['dia13'] = "Falta - FUNC - " .$input['substituto13_'.$a]; } else if($input['tipo_func13_'.$a] == "rpa"){ $input['dia13'] = "Falta - RPA - " .$input['substitutorpa13_'.$a]; } } else if($input['dia13'] == "Suspensão"){ if($input['tipo_func13_'.$a] == "func"){ $input['dia13'] = "Falta - FUNC - " .$input['substituto13_'.$a]; } else if($input['tipo_func13_'.$a] == "rpa"){ $input['dia13'] = "Falta -  RPA - " .$input['substitutorpa13_'.$a]; } } } else { $input['dia13'] = ""; }
				if(!empty($input['dia14_'.$a])){ $input['dia14'] = $input['dia14_'.$a]; if($input['dia14'] == "Atestado") { $input['dia14'] = "Atestado - " .$input['qtdDias14_'.$a]. " - " .$input['substituto14_'.$a]; } else if($input['dia14'] == "Permuta") { $input['dia14'] = "Permuta - " .$input['substituto14_'.$a]; } else if($input['dia14'] == "Falta") { if($input['tipo_func14_'.$a] == "func"){ $input['dia14'] = "Falta - FUNC - " .$input['substituto14_'.$a]; } else if($input['tipo_func14_'.$a] == "rpa"){ $input['dia14'] = "Falta - RPA - " .$input['substitutorpa14_'.$a]; } } else if($input['dia14'] == "Suspensão"){ if($input['tipo_func14_'.$a] == "func"){ $input['dia14'] = "Falta - FUNC - " .$input['substituto14_'.$a]; } else if($input['tipo_func14_'.$a] == "rpa"){ $input['dia14'] = "Falta -  RPA - " .$input['substitutorpa14_'.$a]; } } } else { $input['dia14'] = ""; }
				if(!empty($input['dia15_'.$a])){ $input['dia15'] = $input['dia15_'.$a]; if($input['dia15'] == "Atestado") { $input['dia15'] = "Atestado - " .$input['qtdDias15_'.$a]. " - " .$input['substituto15_'.$a]; } else if($input['dia15'] == "Permuta") { $input['dia15'] = "Permuta - " .$input['substituto15_'.$a]; } else if($input['dia15'] == "Falta") { if($input['tipo_func15_'.$a] == "func"){ $input['dia15'] = "Falta - FUNC - " .$input['substituto15_'.$a]; } else if($input['tipo_func15_'.$a] == "rpa"){ $input['dia15'] = "Falta - RPA - " .$input['substitutorpa15_'.$a]; } } else if($input['dia15'] == "Suspensão"){ if($input['tipo_func15_'.$a] == "func"){ $input['dia15'] = "Falta - FUNC - " .$input['substituto15_'.$a]; } else if($input['tipo_func15_'.$a] == "rpa"){ $input['dia15'] = "Falta -  RPA - " .$input['substitutorpa15_'.$a]; } } } else { $input['dia15'] = ""; }
				if(!empty($input['dia16_'.$a])){ $input['dia16'] = $input['dia16_'.$a]; if($input['dia16'] == "Atestado") { $input['dia16'] = "Atestado - " .$input['qtdDias16_'.$a]. " - " .$input['substituto16_'.$a]; } else if($input['dia16'] == "Permuta") { $input['dia16'] = "Permuta - " .$input['substituto16_'.$a]; } else if($input['dia16'] == "Falta") { if($input['tipo_func16_'.$a] == "func"){ $input['dia16'] = "Falta - FUNC - " .$input['substituto16_'.$a]; } else if($input['tipo_func16_'.$a] == "rpa"){ $input['dia16'] = "Falta - RPA - " .$input['substitutorpa16_'.$a]; } } else if($input['dia16'] == "Suspensão"){ if($input['tipo_func16_'.$a] == "func"){ $input['dia16'] = "Falta - FUNC - " .$input['substituto16_'.$a]; } else if($input['tipo_func16_'.$a] == "rpa"){ $input['dia16'] = "Falta -  RPA - " .$input['substitutorpa16_'.$a]; } } } else { $input['dia16'] = ""; }
				if(!empty($input['dia17_'.$a])){ $input['dia17'] = $input['dia17_'.$a]; if($input['dia17'] == "Atestado") { $input['dia17'] = "Atestado - " .$input['qtdDias17_'.$a]. " - " .$input['substituto17_'.$a]; } else if($input['dia17'] == "Permuta") { $input['dia17'] = "Permuta - " .$input['substituto17_'.$a]; } else if($input['dia17'] == "Falta") { if($input['tipo_func17_'.$a] == "func"){ $input['dia17'] = "Falta - FUNC - " .$input['substituto17_'.$a]; } else if($input['tipo_func17_'.$a] == "rpa"){ $input['dia17'] = "Falta - RPA - " .$input['substitutorpa17_'.$a]; } } else if($input['dia17'] == "Suspensão"){ if($input['tipo_func17_'.$a] == "func"){ $input['dia17'] = "Falta - FUNC - " .$input['substituto17_'.$a]; } else if($input['tipo_func17_'.$a] == "rpa"){ $input['dia17'] = "Falta -  RPA - " .$input['substitutorpa17_'.$a]; } } } else { $input['dia17'] = ""; }
				if(!empty($input['dia18_'.$a])){ $input['dia18'] = $input['dia18_'.$a]; if($input['dia18'] == "Atestado") { $input['dia18'] = "Atestado - " .$input['qtdDias18_'.$a]. " - " .$input['substituto18_'.$a]; } else if($input['dia18'] == "Permuta") { $input['dia18'] = "Permuta - " .$input['substituto18_'.$a]; } else if($input['dia18'] == "Falta") { if($input['tipo_func18_'.$a] == "func"){ $input['dia18'] = "Falta - FUNC - " .$input['substituto18_'.$a]; } else if($input['tipo_func18_'.$a] == "rpa"){ $input['dia18'] = "Falta - RPA - " .$input['substitutorpa18_'.$a]; } } else if($input['dia18'] == "Suspensão"){ if($input['tipo_func18_'.$a] == "func"){ $input['dia18'] = "Falta - FUNC - " .$input['substituto18_'.$a]; } else if($input['tipo_func18_'.$a] == "rpa"){ $input['dia18'] = "Falta -  RPA - " .$input['substitutorpa18_'.$a]; } } } else { $input['dia18'] = ""; }
				if(!empty($input['dia19_'.$a])){ $input['dia19'] = $input['dia19_'.$a]; if($input['dia19'] == "Atestado") { $input['dia19'] = "Atestado - " .$input['qtdDias19_'.$a]. " - " .$input['substituto19_'.$a]; } else if($input['dia19'] == "Permuta") { $input['dia19'] = "Permuta - " .$input['substituto19_'.$a]; } else if($input['dia19'] == "Falta") { if($input['tipo_func19_'.$a] == "func"){ $input['dia19'] = "Falta - FUNC - " .$input['substituto19_'.$a]; } else if($input['tipo_func19_'.$a] == "rpa"){ $input['dia19'] = "Falta - RPA - " .$input['substitutorpa19_'.$a]; } } else if($input['dia19'] == "Suspensão"){ if($input['tipo_func19_'.$a] == "func"){ $input['dia19'] = "Falta - FUNC - " .$input['substituto19_'.$a]; } else if($input['tipo_func19_'.$a] == "rpa"){ $input['dia19'] = "Falta -  RPA - " .$input['substitutorpa19_'.$a]; } } } else { $input['dia19'] = ""; }
				if(!empty($input['dia20_'.$a])){ $input['dia20'] = $input['dia20_'.$a]; if($input['dia20'] == "Atestado") { $input['dia20'] = "Atestado - " .$input['qtdDias20_'.$a]. " - " .$input['substituto20_'.$a]; } else if($input['dia20'] == "Permuta") { $input['dia20'] = "Permuta - " .$input['substituto20_'.$a]; } else if($input['dia20'] == "Falta") { if($input['tipo_func20_'.$a] == "func"){ $input['dia20'] = "Falta - FUNC - " .$input['substituto20_'.$a]; } else if($input['tipo_func20_'.$a] == "rpa"){ $input['dia20'] = "Falta - RPA - " .$input['substitutorpa20_'.$a]; } } else if($input['dia20'] == "Suspensão"){ if($input['tipo_func20_'.$a] == "func"){ $input['dia20'] = "Falta - FUNC - " .$input['substituto20_'.$a]; } else if($input['tipo_func20_'.$a] == "rpa"){ $input['dia20'] = "Falta -  RPA - " .$input['substitutorpa20_'.$a]; } } } else { $input['dia20'] = ""; }
				if(!empty($input['dia21_'.$a])){ $input['dia21'] = $input['dia21_'.$a]; if($input['dia21'] == "Atestado") { $input['dia21'] = "Atestado - " .$input['qtdDias21_'.$a]. " - " .$input['substituto21_'.$a]; } else if($input['dia21'] == "Permuta") { $input['dia21'] = "Permuta - " .$input['substituto21_'.$a]; } else if($input['dia21'] == "Falta") { if($input['tipo_func21_'.$a] == "func"){ $input['dia21'] = "Falta - FUNC - " .$input['substituto21_'.$a]; } else if($input['tipo_func21_'.$a] == "rpa"){ $input['dia21'] = "Falta - RPA - " .$input['substitutorpa21_'.$a]; } } else if($input['dia21'] == "Suspensão"){ if($input['tipo_func21_'.$a] == "func"){ $input['dia21'] = "Falta - FUNC - " .$input['substituto21_'.$a]; } else if($input['tipo_func21_'.$a] == "rpa"){ $input['dia21'] = "Falta -  RPA - " .$input['substitutorpa21_'.$a]; } } } else { $input['dia21'] = ""; }
				if(!empty($input['dia22_'.$a])){ $input['dia22'] = $input['dia22_'.$a]; if($input['dia22'] == "Atestado") { $input['dia22'] = "Atestado - " .$input['qtdDias22_'.$a]. " - " .$input['substituto22_'.$a]; } else if($input['dia22'] == "Permuta") { $input['dia22'] = "Permuta - " .$input['substituto22_'.$a]; } else if($input['dia22'] == "Falta") { if($input['tipo_func22_'.$a] == "func"){ $input['dia22'] = "Falta - FUNC - " .$input['substituto22_'.$a]; } else if($input['tipo_func22_'.$a] == "rpa"){ $input['dia22'] = "Falta - RPA - " .$input['substitutorpa22_'.$a]; } } else if($input['dia22'] == "Suspensão"){ if($input['tipo_func22_'.$a] == "func"){ $input['dia22'] = "Falta - FUNC - " .$input['substituto22_'.$a]; } else if($input['tipo_func22_'.$a] == "rpa"){ $input['dia22'] = "Falta -  RPA - " .$input['substitutorpa22_'.$a]; } } } else { $input['dia22'] = ""; }
				if(!empty($input['dia23_'.$a])){ $input['dia23'] = $input['dia23_'.$a]; if($input['dia23'] == "Atestado") { $input['dia23'] = "Atestado - " .$input['qtdDias23_'.$a]. " - " .$input['substituto23_'.$a]; } else if($input['dia23'] == "Permuta") { $input['dia23'] = "Permuta - " .$input['substituto23_'.$a]; } else if($input['dia23'] == "Falta") { if($input['tipo_func23_'.$a] == "func"){ $input['dia23'] = "Falta - FUNC - " .$input['substituto23_'.$a]; } else if($input['tipo_func23_'.$a] == "rpa"){ $input['dia23'] = "Falta - RPA - " .$input['substitutorpa23_'.$a]; } } else if($input['dia23'] == "Suspensão"){ if($input['tipo_func23_'.$a] == "func"){ $input['dia23'] = "Falta - FUNC - " .$input['substituto23_'.$a]; } else if($input['tipo_func23_'.$a] == "rpa"){ $input['dia23'] = "Falta -  RPA - " .$input['substitutorpa23_'.$a]; } } } else { $input['dia23'] = ""; }
				if(!empty($input['dia24_'.$a])){ $input['dia24'] = $input['dia24_'.$a]; if($input['dia24'] == "Atestado") { $input['dia24'] = "Atestado - " .$input['qtdDias24_'.$a]. " - " .$input['substituto24_'.$a]; } else if($input['dia24'] == "Permuta") { $input['dia24'] = "Permuta - " .$input['substituto24_'.$a]; } else if($input['dia24'] == "Falta") { if($input['tipo_func24_'.$a] == "func"){ $input['dia24'] = "Falta - FUNC - " .$input['substituto24_'.$a]; } else if($input['tipo_func24_'.$a] == "rpa"){ $input['dia24'] = "Falta - RPA - " .$input['substitutorpa24_'.$a]; } } else if($input['dia24'] == "Suspensão"){ if($input['tipo_func24_'.$a] == "func"){ $input['dia24'] = "Falta - FUNC - " .$input['substituto24_'.$a]; } else if($input['tipo_func24_'.$a] == "rpa"){ $input['dia24'] = "Falta -  RPA - " .$input['substitutorpa24_'.$a]; } } } else { $input['dia24'] = ""; }
				if(!empty($input['dia25_'.$a])){ $input['dia25'] = $input['dia25_'.$a]; if($input['dia25'] == "Atestado") { $input['dia25'] = "Atestado - " .$input['qtdDias25_'.$a]. " - " .$input['substituto25_'.$a]; } else if($input['dia25'] == "Permuta") { $input['dia25'] = "Permuta - " .$input['substituto25_'.$a]; } else if($input['dia25'] == "Falta") { if($input['tipo_func25_'.$a] == "func"){ $input['dia25'] = "Falta - FUNC - " .$input['substituto25_'.$a]; } else if($input['tipo_func25_'.$a] == "rpa"){ $input['dia25'] = "Falta - RPA - " .$input['substitutorpa25_'.$a]; } } else if($input['dia25'] == "Suspensão"){ if($input['tipo_func25_'.$a] == "func"){ $input['dia25'] = "Falta - FUNC - " .$input['substituto25_'.$a]; } else if($input['tipo_func25_'.$a] == "rpa"){ $input['dia25'] = "Falta -  RPA - " .$input['substitutorpa25_'.$a]; } } } else { $input['dia25'] = ""; }
				if(!empty($input['dia26_'.$a])){ $input['dia26'] = $input['dia26_'.$a]; if($input['dia26'] == "Atestado") { $input['dia26'] = "Atestado - " .$input['qtdDias26_'.$a]. " - " .$input['substituto26_'.$a]; } else if($input['dia26'] == "Permuta") { $input['dia26'] = "Permuta - " .$input['substituto26_'.$a]; } else if($input['dia26'] == "Falta") { if($input['tipo_func26_'.$a] == "func"){ $input['dia26'] = "Falta - FUNC - " .$input['substituto26_'.$a]; } else if($input['tipo_func26_'.$a] == "rpa"){ $input['dia26'] = "Falta - RPA - " .$input['substitutorpa26_'.$a]; } } else if($input['dia26'] == "Suspensão"){ if($input['tipo_func26_'.$a] == "func"){ $input['dia26'] = "Falta - FUNC - " .$input['substituto26_'.$a]; } else if($input['tipo_func26_'.$a] == "rpa"){ $input['dia26'] = "Falta -  RPA - " .$input['substitutorpa26_'.$a]; } } } else { $input['dia26'] = ""; }
				if(!empty($input['dia27_'.$a])){ $input['dia27'] = $input['dia27_'.$a]; if($input['dia27'] == "Atestado") { $input['dia27'] = "Atestado - " .$input['qtdDias27_'.$a]. " - " .$input['substituto27_'.$a]; } else if($input['dia27'] == "Permuta") { $input['dia27'] = "Permuta - " .$input['substituto27_'.$a]; } else if($input['dia27'] == "Falta") { if($input['tipo_func27_'.$a] == "func"){ $input['dia27'] = "Falta - FUNC - " .$input['substituto27_'.$a]; } else if($input['tipo_func27_'.$a] == "rpa"){ $input['dia27'] = "Falta - RPA - " .$input['substitutorpa27_'.$a]; } } else if($input['dia27'] == "Suspensão"){ if($input['tipo_func27_'.$a] == "func"){ $input['dia27'] = "Falta - FUNC - " .$input['substituto27_'.$a]; } else if($input['tipo_func27_'.$a] == "rpa"){ $input['dia27'] = "Falta -  RPA - " .$input['substitutorpa27_'.$a]; } } } else { $input['dia27'] = ""; }
				if(!empty($input['dia28_'.$a])){ $input['dia28'] = $input['dia28_'.$a]; if($input['dia28'] == "Atestado") { $input['dia28'] = "Atestado - " .$input['qtdDias28_'.$a]. " - " .$input['substituto28_'.$a]; } else if($input['dia28'] == "Permuta") { $input['dia28'] = "Permuta - " .$input['substituto28_'.$a]; } else if($input['dia28'] == "Falta") { if($input['tipo_func29_'.$a] == "func"){ $input['dia28'] = "Falta - FUNC - " .$input['substituto28_'.$a]; } else if($input['tipo_func28_'.$a] == "rpa"){ $input['dia28'] = "Falta - RPA - " .$input['substitutorpa28_'.$a]; } } else if($input['dia28'] == "Suspensão"){ if($input['tipo_func28_'.$a] == "func"){ $input['dia28'] = "Falta - FUNC - " .$input['substituto28_'.$a]; } else if($input['tipo_func28_'.$a] == "rpa"){ $input['dia28'] = "Falta -  RPA - " .$input['substitutorpa28_'.$a]; } } } else { $input['dia28'] = ""; }
				if(!empty($input['dia29_'.$a])){ $input['dia29'] = $input['dia29_'.$a]; if($input['dia29'] == "Atestado") { $input['dia29'] = "Atestado - " .$input['qtdDias29_'.$a]. " - " .$input['substituto29_'.$a]; } else if($input['dia29'] == "Permuta") { $input['dia29'] = "Permuta - " .$input['substituto29_'.$a]; } else if($input['dia29'] == "Falta") { if($input['tipo_func29_'.$a] == "func"){ $input['dia29'] = "Falta - FUNC - " .$input['substituto29_'.$a]; } else if($input['tipo_func29_'.$a] == "rpa"){ $input['dia29'] = "Falta - RPA - " .$input['substitutorpa29_'.$a]; } } else if($input['dia29'] == "Suspensão"){ if($input['tipo_func29_'.$a] == "func"){ $input['dia29'] = "Falta - FUNC - " .$input['substituto29_'.$a]; } else if($input['tipo_func29_'.$a] == "rpa"){ $input['dia29'] = "Falta -  RPA - " .$input['substitutorpa29_'.$a]; } } } else { $input['dia29'] = ""; }
				if(!empty($input['dia30_'.$a])){ $input['dia30'] = $input['dia30_'.$a]; if($input['dia30'] == "Atestado") { $input['dia30'] = "Atestado - " .$input['qtdDias30_'.$a]. " - " .$input['substituto30_'.$a]; } else if($input['dia30'] == "Permuta") { $input['dia30'] = "Permuta - " .$input['substituto30_'.$a]; } else if($input['dia30'] == "Falta") { if($input['tipo_func30_'.$a] == "func"){ $input['dia30'] = "Falta - FUNC - " .$input['substituto30_'.$a]; } else if($input['tipo_func30_'.$a] == "rpa"){ $input['dia30'] = "Falta - RPA - " .$input['substitutorpa30_'.$a]; } } else if($input['dia30'] == "Suspensão"){ if($input['tipo_func30_'.$a] == "func"){ $input['dia30'] = "Falta - FUNC - " .$input['substituto30_'.$a]; } else if($input['tipo_func30_'.$a] == "rpa"){ $input['dia30'] = "Falta -  RPA - " .$input['substitutorpa30_'.$a]; } } } else { $input['dia30'] = ""; }
				if(!empty($input['dia31_'.$a])){ $input['dia31'] = $input['dia31_'.$a]; if($input['dia31'] == "Atestado") { $input['dia31'] = "Atestado - " .$input['qtdDias31_'.$a]. " - " .$input['substituto31_'.$a]; } else if($input['dia31'] == "Permuta") { $input['dia31'] = "Permuta - " .$input['substituto31_'.$a]; } else if($input['dia31'] == "Falta") { if($input['tipo_func31_'.$a] == "func"){ $input['dia31'] = "Falta - FUNC - " .$input['substituto31_'.$a]; } else if($input['tipo_func31_'.$a] == "rpa"){ $input['dia31'] = "Falta - RPA - " .$input['substitutorpa31_'.$a]; } } else if($input['dia31'] == "Suspensão"){ if($input['tipo_func31_'.$a] == "func"){ $input['dia31'] = "Falta - FUNC - " .$input['substituto31_'.$a]; } else if($input['tipo_func31_'.$a] == "rpa"){ $input['dia31'] = "Falta -  RPA - " .$input['substitutorpa31_'.$a]; } } } else { $input['dia31'] = ""; }
				
				$escala = Frequencia_Escala::create($input);
			}
			$escalas = Escala_Mes_Ano::all();
			$text = true;
			\Session::flash('mensagem', ['msg' => 'Frequência de Escala cadastrada com sucesso!!','class'=>'green white-text']);		
			return view('cadastro_escala', compact('escalas','text'));
		}
	}
}