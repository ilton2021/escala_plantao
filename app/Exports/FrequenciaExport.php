<?php

namespace App\Exports;

use App\Models\Frequencia_Escala;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FrequenciaExport implements FromView
{
	use Exportable;
	
	public function __construct(int $id)
    {
        $this->id = $id;
    }
	
	public function view(): View
    {
        return view('exports.teste', [
        	'frequencia_escala' => 
			DB::table('frequencia_escala')
			->join('funcionario','funcionario.id','=','frequencia_escala.funcionario_id')
			->where('escala_id',$this->id)
			->get() 
        ]); 
    }
	
	public function headings()
    {
        return [
            'CENTRO DE CUSTO',
            'NOME FUNCIONÁRIO',
            'CARGO',
            'PLANTÃO',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
			'21',
            '22',
            '23',
            '24',
            '25',
            '26',
            '27',
            '28',
            '29',
            '30',
			'31'
        ];
    }
	
}
