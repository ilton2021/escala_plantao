<?php

namespace App\Exports;

use App\Models\Frequencia_Escala;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FrequenciaEscalaExport implements FromCollection, FromView
{
	use Exportable;
	
	public function __construct(int $id)
    {
        $this->id = $id;
    }
	
	
	public function view(): View
    {
        return view('exports.teste', [
            'frequencia_escala' => Frequencia_Escala::where('escala_id', $this->id)->get();	
        ]);
    }
	
}
