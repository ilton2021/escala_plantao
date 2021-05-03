<table>
    <thead>
    <tr>
	    <th>Centro de Custo</th>
		<th>userionário</th>
		<th>Cargo</th>
		<th>Plantão</th>
        <th>Dia1</th>
        <th>Dia2</th>
		<th>Dia3</th>
		<th>Dia4</th>
		<th>Dia5</th>
		<th>Dia6</th>
		<th>Dia7</th>
		<th>Dia8</th>
		<th>Dia9</th>
		<th>Dia10</th>
		<th>Dia11</th>
		<th>Dia12</th>
		<th>Dia13</th>
		<th>Dia14</th>
		<th>Dia15</th>
		<th>Dia16</th>
		<th>Dia17</th>
		<th>Dia18</th>
		<th>Dia19</th>
		<th>Dia20</th>
		<th>Dia21</th>
		<th>Dia22</th>
		<th>Dia23</th>
		<th>Dia24</th>
		<th>Dia25</th>
		<th>Dia26</th>
		<th>Dia27</th>
		<th>Dia28</th>
		<th>Dia29</th>
		<th>Dia30</th>
		<th>Dia31</th>
		<th>Diárias</th>
		<th>P. Diurno</th>
		<th>P. Noturno</th>
		<th>Dias de Suspensão</th>
		<th>Faltas</th>
		<th>Dias de Atestado</th>
    </tr>
    </thead>
    <tbody><?php $diarias = 0; $faltas = 0; $suspensao = 0; $atm = 0; $diurno = 0; $noturno = 0; $nome = 0; ?>
    @foreach($frequencia_escala as $user)
        <tr>
			<td>{{ $user->centro_custo }}</td>
			<td>{{ $user->nome }}</td>
			<td>{{ $user->cargo }}</td>
			<td>{{ $user->tipo_plantao }}</td>
            <td>{{ $user->dia1 }}</td> <?php $nome1 = strtoupper(substr($user->dia1, 0, 2)); if($nome1 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome1 == "FA"){ $faltas += 1; }else if($nome1 == "SU"){ $suspensao += 1; }else if($nome1 == "AT"){ $nome = substr($user->dia1, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia2 }}</td> <?php $nome2 = strtoupper(substr($user->dia2, 0, 2)); if($nome2 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome2 == "FA"){ $faltas += 1; }else if($nome2 == "SU"){ $suspensao += 1; }else if($nome2 == "AT"){ $nome = substr($user->dia2, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia3 }}</td> <?php $nome3 = strtoupper(substr($user->dia3, 0, 2)); if($nome3 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome3 == "FA"){ $faltas += 1; }else if($nome3 == "SU"){ $suspensao += 1; }else if($nome3 == "AT"){ $nome = substr($user->dia3, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia4 }}</td> <?php $nome4 = strtoupper(substr($user->dia4, 0, 2)); if($nome4 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome4 == "FA"){ $faltas += 1; }else if($nome4 == "SU"){ $suspensao += 1; }else if($nome4 == "AT"){ $nome = substr($user->dia4, 11, 2); $atm += $nome; } ?> 
			<td>{{ $user->dia5 }}</td> <?php $nome5 = strtoupper(substr($user->dia5, 0, 2)); if($nome5 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome5 == "FA"){ $faltas += 1; }else if($nome5 == "SU"){ $suspensao += 1; }else if($nome5 == "AT"){ $nome = substr($user->dia5, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia6 }}</td> <?php $nome6 = strtoupper(substr($user->dia6, 0, 2)); if($nome6 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome6 == "FA"){ $faltas += 1; }else if($nome6 == "SU"){ $suspensao += 1; }else if($nome6 == "AT"){ $nome = substr($user->dia6, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia7 }}</td> <?php $nome7 = strtoupper(substr($user->dia7, 0, 2)); if($nome7 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome7 == "FA"){ $faltas += 1; }else if($nome7 == "SU"){ $suspensao += 1; }else if($nome7 == "AT"){ $nome = substr($user->dia7, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia8 }}</td> <?php $nome8 = strtoupper(substr($user->dia8, 0, 2)); if($nome8 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome8 == "FA"){ $faltas += 1; }else if($nome8 == "SU"){ $suspensao += 1; }else if($nome8 == "AT"){ $nome = substr($user->dia8, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia9 }}</td> <?php $nome9 = strtoupper(substr($user->dia9, 0, 2)); if($nome9 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome9 == "FA"){ $faltas += 1; }else if($nome9 == "SU"){ $suspensao += 1; }else if($nome9 == "AT"){ $nome = substr($user->dia9, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia10 }}</td> <?php $nome10 = strtoupper(substr($user->dia10, 0, 2)); if($nome10 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome10 == "FA"){ $faltas += 1; }else if($nome10 == "SU"){ $suspensao += 1; }else if($nome10 == "AT"){ $nome = substr($user->dia10, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia11 }}</td> <?php $nome11 = strtoupper(substr($user->dia11, 0, 2)); if($nome11 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome11 == "FA"){ $faltas += 1; }else if($nome11 == "SU"){ $suspensao += 1; }else if($nome11 == "AT"){ $nome = substr($user->dia11, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia12 }}</td> <?php $nome12 = strtoupper(substr($user->dia12, 0, 2)); if($nome12 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome12 == "FA"){ $faltas += 1; }else if($nome12 == "SU"){ $suspensao += 1; }else if($nome12 == "AT"){ $nome = substr($user->dia12, 11, 2); $atm += $nome; } ?> 
			<td>{{ $user->dia13 }}</td> <?php $nome13 = strtoupper(substr($user->dia13, 0, 2)); if($nome13 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome13 == "FA"){ $faltas += 1; }else if($nome13 == "SU"){ $suspensao += 1; }else if($nome13 == "AT"){ $nome = substr($user->dia13, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia14 }}</td> <?php $nome14 = strtoupper(substr($user->dia14, 0, 2)); if($nome14 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome14 == "FA"){ $faltas += 1; }else if($nome14 == "SU"){ $suspensao += 1; }else if($nome14 == "AT"){ $nome = substr($user->dia14, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia15 }}</td> <?php $nome15 = strtoupper(substr($user->dia15, 0, 2)); if($nome15 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome15 == "FA"){ $faltas += 1; }else if($nome15 == "SU"){ $suspensao += 1; }else if($nome15 == "AT"){ $nome = substr($user->dia15, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia16 }}</td> <?php $nome16 = strtoupper(substr($user->dia16, 0, 2)); if($nome16 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome16 == "FA"){ $faltas += 1; }else if($nome16 == "SU"){ $suspensao += 1; }else if($nome16 == "AT"){ $nome = substr($user->dia16, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia17 }}</td> <?php $nome17 = strtoupper(substr($user->dia17, 0, 2)); if($nome17 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome17 == "FA"){ $faltas += 1; }else if($nome17 == "SU"){ $suspensao += 1; }else if($nome17 == "AT"){ $nome = substr($user->dia17, 11, 2); $atm += $nome; } ?> 
            <td>{{ $user->dia18 }}</td> <?php $nome18 = strtoupper(substr($user->dia18, 0, 2)); if($nome18 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome18 == "FA"){ $faltas += 1; }else if($nome18 == "SU"){ $suspensao += 1; }else if($nome18 == "AT"){ $nome = substr($user->dia18, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia19 }}</td> <?php $nome19 = strtoupper(substr($user->dia19, 0, 2)); if($nome19 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome19 == "FA"){ $faltas += 1; }else if($nome19 == "SU"){ $suspensao += 1; }else if($nome19 == "AT"){ $nome = substr($user->dia19, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia20 }}</td> <?php $nome20 = strtoupper(substr($user->dia20, 0, 2)); if($nome20 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome20 == "FA"){ $faltas += 1; }else if($nome20 == "SU"){ $suspensao += 1; }else if($nome20 == "AT"){ $nome = substr($user->dia20, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia21 }}</td> <?php $nome21 = strtoupper(substr($user->dia21, 0, 2)); if($nome21 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome21 == "FA"){ $faltas += 1; }else if($nome21 == "SU"){ $suspensao += 1; }else if($nome21 == "AT"){ $nome = substr($user->dia21, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia22 }}</td> <?php $nome22 = strtoupper(substr($user->dia22, 0, 2)); if($nome22 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome22 == "FA"){ $faltas += 1; }else if($nome22 == "SU"){ $suspensao += 1; }else if($nome22 == "AT"){ $nome = substr($user->dia22, 11, 2); $atm += $nome; } ?> 
			<td>{{ $user->dia23 }}</td> <?php $nome23 = strtoupper(substr($user->dia23, 0, 2)); if($nome23 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome23 == "FA"){ $faltas += 1; }else if($nome23 == "SU"){ $suspensao += 1; }else if($nome23 == "AT"){ $nome = substr($user->dia23, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia24 }}</td> <?php $nome24 = strtoupper(substr($user->dia24, 0, 2)); if($nome24 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome24 == "FA"){ $faltas += 1; }else if($nome24 == "SU"){ $suspensao += 1; }else if($nome24 == "AT"){ $nome = substr($user->dia24, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia25 }}</td> <?php $nome25 = strtoupper(substr($user->dia25, 0, 2)); if($nome25 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome25 == "FA"){ $faltas += 1; }else if($nome25 == "SU"){ $suspensao += 1; }else if($nome25 == "AT"){ $nome = substr($user->dia25, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia26 }}</td> <?php $nome26 = strtoupper(substr($user->dia26, 0, 2)); if($nome26 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome26 == "FA"){ $faltas += 1; }else if($nome26 == "SU"){ $suspensao += 1; }else if($nome26 == "AT"){ $nome = substr($user->dia26, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia27 }}</td> <?php $nome27 = strtoupper(substr($user->dia27, 0, 2)); if($nome27 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome27 == "FA"){ $faltas += 1; }else if($nome27 == "SU"){ $suspensao += 1; }else if($nome27 == "AT"){ $nome = substr($user->dia27, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia28 }}</td> <?php $nome28 = strtoupper(substr($user->dia28, 0, 2)); if($nome28 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome28 == "FA"){ $faltas += 1; }else if($nome28 == "SU"){ $suspensao += 1; }else if($nome28 == "AT"){ $nome = substr($user->dia28, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia29 }}</td> <?php $nome29 = strtoupper(substr($user->dia29, 0, 2)); if($nome29 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome29 == "FA"){ $faltas += 1; }else if($nome29 == "SU"){ $suspensao += 1; }else if($nome29 == "AT"){ $nome = substr($user->dia29, 11, 2); $atm += $nome; } ?>
            <td>{{ $user->dia30 }}</td> <?php $nome30 = strtoupper(substr($user->dia30, 0, 2)); if($nome30 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome30 == "FA"){ $faltas += 1; }else if($nome30 == "SU"){ $suspensao += 1; }else if($nome30 == "AT"){ $nome = substr($user->dia30, 11, 2); $atm += $nome; } ?>
			<td>{{ $user->dia31 }}</td> <?php $nome31 = strtoupper(substr($user->dia31, 0, 2)); if($nome31 == "PR"){ $diarias += 1; if($user->tipo_plantao == "D"){ $diurno += 1; }else{ $noturno += 1; } }else if($nome31 == "FA"){ $faltas += 1; }else if($nome31 == "SU"){ $suspensao += 1; }else if($nome31 == "AT"){ $nome = substr($user->dia31, 11, 2); $atm += $nome; } ?>
			<td>{{ $diarias }} </td>
			<td>{{ $diurno }} </td>
			<td>{{ $noturno }} </td>
			<td>{{ $suspensao }} </td>
			<td>{{ $faltas }} </td>
			<td>{{ $atm }} </td>
			<?php $diarias = 0; $faltas = 0; $suspensao = 0; $atm = 0; $diurno = 0; $noturno = 0; $nome = 0; ?>
        </tr>
    @endforeach
    </tbody>
</table>