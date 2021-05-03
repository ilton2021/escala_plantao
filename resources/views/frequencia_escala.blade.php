@extends('layouts.app')
<!DOCTYPE html>
<html lang="pt">
<head>
    <title>Frequência Escala</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <link rel="icon" href="assets/images/favico.png" type="image/x-icon">
	<?php $qtd = sizeof($escala); $qtdF = sizeof($funcionarios); $dia = date('d', strtotime('now')); ?>
	<script type="text/javascript">
	 window.onload = function() {
		<?php   
			  $dias = 31;
			  for($a = 1; $a <= $qtdF; $a++){
			  	for($b = 1; $b <= $dias; $b++){
					if($dia == "05") {
						?> document.getElementById('dia<?php echo $a ?>_<?php echo $b ?>').disabled = true; <?php
					} else {
						?> document.getElementById('dia<?php echo $a ?>_<?php echo $b ?>').disabled = false; <?php
					}
				}
			  }
		?>
	 };
	 
	 function mudar(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia1_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias1_<?php echo $a ?>').hidden = false; document.getElementById('substituto1_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func1_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto1_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias1_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func1_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func1_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias1_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func1_<?php echo $a ?>').hidden = true; document.getElementById('substituto1_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias1_<?php echo $a ?>').hidden = true; document.getElementById('substituto1_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa1_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar2(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia2_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias2_<?php echo $a ?>').hidden = false; document.getElementById('substituto2_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func2_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto2_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias2_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func2_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func2_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias2_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func2_<?php echo $a ?>').hidden = true; document.getElementById('substituto2_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias2_<?php echo $a ?>').hidden = true; document.getElementById('substituto2_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa2_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar3(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia3_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias3_<?php echo $a ?>').hidden = false; document.getElementById('substituto3_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func3_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto3_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias3_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func3_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func3_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias3_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func3_<?php echo $a ?>').hidden = true; document.getElementById('substituto3_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias3_<?php echo $a ?>').hidden = true; document.getElementById('substituto3_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa3_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar4(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia4_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias4_<?php echo $a ?>').hidden = false; document.getElementById('substituto4_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func4_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto4_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias4_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func4_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func4_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias4_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func4_<?php echo $a ?>').hidden = true; document.getElementById('substituto4_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias4_<?php echo $a ?>').hidden = true; document.getElementById('substituto4_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa4_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar5(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia5_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias5_<?php echo $a ?>').hidden = false; document.getElementById('substituto5_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func5_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto5_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias5_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func5_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func5_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias5_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func5_<?php echo $a ?>').hidden = true; document.getElementById('substituto5_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias5_<?php echo $a ?>').hidden = true; document.getElementById('substituto5_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa5_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar6(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia6_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias6_<?php echo $a ?>').hidden = false; document.getElementById('substituto6_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func6_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto6_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias6_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func6_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func6_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias6_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func6_<?php echo $a ?>').hidden = true; document.getElementById('substituto6_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias6_<?php echo $a ?>').hidden = true; document.getElementById('substituto6_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa6_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar7(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia7_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias7_<?php echo $a ?>').hidden = false; document.getElementById('substituto7_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func7_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto7_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias7_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func7_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func7_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias7_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func7_<?php echo $a ?>').hidden = true; document.getElementById('substituto7_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias7_<?php echo $a ?>').hidden = true; document.getElementById('substituto7_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa7_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar8(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia8_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias8_<?php echo $a ?>').hidden = false; document.getElementById('substituto8_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func8_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto8_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias8_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func8_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func8_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias8_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func8_<?php echo $a ?>').hidden = true; document.getElementById('substituto8_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias8_<?php echo $a ?>').hidden = true; document.getElementById('substituto8_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa8_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar9(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia9_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias9_<?php echo $a ?>').hidden = false; document.getElementById('substituto9_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func9_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto9_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias9_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func9_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func9_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias9_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func9_<?php echo $a ?>').hidden = true; document.getElementById('substituto9_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias9_<?php echo $a ?>').hidden = true; document.getElementById('substituto9_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa9_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar10(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia10_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias10_<?php echo $a ?>').hidden = false; document.getElementById('substituto10_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func10_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto10_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias10_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func10_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func10_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias10_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func10_<?php echo $a ?>').hidden = true; document.getElementById('substituto10_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias10_<?php echo $a ?>').hidden = true; document.getElementById('substituto10_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa10_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar11(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia11_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias11_<?php echo $a ?>').hidden = false; document.getElementById('substituto11_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func11_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto11_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias11_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func11_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func11_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias11_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func11_<?php echo $a ?>').hidden = true; document.getElementById('substituto11_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias11_<?php echo $a ?>').hidden = true; document.getElementById('substituto11_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa11_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar12(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia12_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias12_<?php echo $a ?>').hidden = false; document.getElementById('substituto12_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func12_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto12_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias12_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func12_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func12_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias12_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func12_<?php echo $a ?>').hidden = true; document.getElementById('substituto12_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias12_<?php echo $a ?>').hidden = true; document.getElementById('substituto12_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa12_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar13(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia13_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias13_<?php echo $a ?>').hidden = false; document.getElementById('substituto13_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func13_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto13_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias13_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func13_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func13_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias13_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func13_<?php echo $a ?>').hidden = true; document.getElementById('substituto13_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias13_<?php echo $a ?>').hidden = true; document.getElementById('substituto13_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa13_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar14(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia14_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias14_<?php echo $a ?>').hidden = false; document.getElementById('substituto14_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func14_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto14_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias14_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func14_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func14_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias14_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func14_<?php echo $a ?>').hidden = true; document.getElementById('substituto14_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias14_<?php echo $a ?>').hidden = true; document.getElementById('substituto14_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa14_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar15(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia15_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias15_<?php echo $a ?>').hidden = false; document.getElementById('substituto15_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func15_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto15_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias15_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func15_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func15_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias15_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func15_<?php echo $a ?>').hidden = true; document.getElementById('substituto15_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias15_<?php echo $a ?>').hidden = true; document.getElementById('substituto15_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa15_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar16(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia16_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias16_<?php echo $a ?>').hidden = false; document.getElementById('substituto16_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func16_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto16_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias16_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func16_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func16_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias16_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func16_<?php echo $a ?>').hidden = true; document.getElementById('substituto16_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias16_<?php echo $a ?>').hidden = true; document.getElementById('substituto16_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa16_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar17(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia17_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias17_<?php echo $a ?>').hidden = false; document.getElementById('substituto17_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func17_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto17_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias17_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func17_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func17_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias17_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func17_<?php echo $a ?>').hidden = true; document.getElementById('substituto17_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias17_<?php echo $a ?>').hidden = true; document.getElementById('substituto17_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa17_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar18(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia18_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias18_<?php echo $a ?>').hidden = false; document.getElementById('substituto18_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func18_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto18_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias18_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func18_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func18_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias18_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func18_<?php echo $a ?>').hidden = true; document.getElementById('substituto18_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias18_<?php echo $a ?>').hidden = true; document.getElementById('substituto18_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa18_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar19(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia19_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias19_<?php echo $a ?>').hidden = false; document.getElementById('substituto19_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func19_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto19_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias19_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func19_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func19_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias19_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func19_<?php echo $a ?>').hidden = true; document.getElementById('substituto19_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias19_<?php echo $a ?>').hidden = true; document.getElementById('substituto19_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa19_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar20(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia20_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias20_<?php echo $a ?>').hidden = false; document.getElementById('substituto20_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func20_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto20_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias20_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func20_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func20_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias20_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func20_<?php echo $a ?>').hidden = true; document.getElementById('substituto20_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias20_<?php echo $a ?>').hidden = true; document.getElementById('substituto20_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa20_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar21(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia21_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias21_<?php echo $a ?>').hidden = false; document.getElementById('substituto21_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func21_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto21_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias21_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func21_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func21_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias21_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func21_<?php echo $a ?>').hidden = true; document.getElementById('substituto21_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias21_<?php echo $a ?>').hidden = true; document.getElementById('substituto21_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa21_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar22(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia22_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias22_<?php echo $a ?>').hidden = false; document.getElementById('substituto22_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func22_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto22_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias22_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func22_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func22_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias22_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func22_<?php echo $a ?>').hidden = true; document.getElementById('substituto22_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias22_<?php echo $a ?>').hidden = true; document.getElementById('substituto22_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa22_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar23(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia23_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias23_<?php echo $a ?>').hidden = false; document.getElementById('substituto23_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func23_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto23_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias23_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func23_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func23_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias23_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func23_<?php echo $a ?>').hidden = true; document.getElementById('substituto23_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias23_<?php echo $a ?>').hidden = true; document.getElementById('substituto23_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa23_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar24(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia24_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias24_<?php echo $a ?>').hidden = false; document.getElementById('substituto24_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func24_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto24_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias24_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func24_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func24_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias24_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func24_<?php echo $a ?>').hidden = true; document.getElementById('substituto24_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias24_<?php echo $a ?>').hidden = true; document.getElementById('substituto24_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa24_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar25(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia25_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias25_<?php echo $a ?>').hidden = false; document.getElementById('substituto25_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func25_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto25_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias25_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func25_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func25_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias25_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func25_<?php echo $a ?>').hidden = true; document.getElementById('substituto25_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias25_<?php echo $a ?>').hidden = true; document.getElementById('substituto25_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa25_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar26(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia26_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias26_<?php echo $a ?>').hidden = false; document.getElementById('substituto26_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func26_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto26_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias26_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func26_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func26_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias26_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func26_<?php echo $a ?>').hidden = true; document.getElementById('substituto26_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias26_<?php echo $a ?>').hidden = true; document.getElementById('substituto26_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa26_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar27(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia27_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias27_<?php echo $a ?>').hidden = false; document.getElementById('substituto27_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func27_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto27_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias27_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func27_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func27_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias27_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func27_<?php echo $a ?>').hidden = true; document.getElementById('substituto27_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias27_<?php echo $a ?>').hidden = true; document.getElementById('substituto27_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa27_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar28(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia28_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias28_<?php echo $a ?>').hidden = false; document.getElementById('substituto28_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func28_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto28_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias28_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func28_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func28_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias28_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func28_<?php echo $a ?>').hidden = true; document.getElementById('substituto28_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias28_<?php echo $a ?>').hidden = true; document.getElementById('substituto28_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa28_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar29(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia29_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias29_<?php echo $a ?>').hidden = false; document.getElementById('substituto29_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func29_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto29_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias29_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func29_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func29_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias29_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func29_<?php echo $a ?>').hidden = true; document.getElementById('substituto29_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias29_<?php echo $a ?>').hidden = true; document.getElementById('substituto29_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa29_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar30(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia30_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias30_<?php echo $a ?>').hidden = false; document.getElementById('substituto30_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func30_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto30_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias30_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func30_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func30_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias30_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func30_<?php echo $a ?>').hidden = true; document.getElementById('substituto30_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias30_<?php echo $a ?>').hidden = true; document.getElementById('substituto30_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa30_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudar31(valor){ <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor) { var x = document.getElementById('dia31_<?php echo $a ?>'); var y = x.options[x.selectedIndex].text; if(y == "Atestado"){ document.getElementById('qtdDias31_<?php echo $a ?>').hidden = false; document.getElementById('substituto31_<?php echo $a ?>').hidden = false; document.getElementById('tipo_func31_<?php echo $a ?>').hidden = true; } else if(y == "Permuta") { document.getElementById('substituto31_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias31_<?php echo $a ?>').hidden = true; document.getElementById('tipo_func31_<?php echo $a ?>').hidden = true; } else if(y == "Falta" || y == "Suspensão") { document.getElementById('tipo_func31_<?php echo $a ?>').hidden = false; document.getElementById('qtdDias31_<?php echo $a ?>').hidden = true; } else { document.getElementById('tipo_func31_<?php echo $a ?>').hidden = true; document.getElementById('substituto31_<?php echo $a ?>').hidden = true; document.getElementById('qtdDias31_<?php echo $a ?>').hidden = true; document.getElementById('substituto31_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa31_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 
	 function mudarFalta(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func1_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto1_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa1_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto1_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa1_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto1_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa1_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta2(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func2_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto2_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa2_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto2_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa2_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto2_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa2_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta3(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func3_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto3_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa3_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto3_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa3_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto3_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa3_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta4(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func4_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto4_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa4_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto4_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa4_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto4_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa4_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta5(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func5_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto5_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa5_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto5_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa5_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto5_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa5_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta6(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func6_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto6_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa6_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto6_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa6_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto6_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa6_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta7(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func2_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto7_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa7_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto7_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa7_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto7_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa7_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta8(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func8_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto8_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa8_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto8_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa8_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto8_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa8_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta9(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func9_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto9_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa9_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto9_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa9_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto9_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa9_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta10(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func10_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto10_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa10_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto10_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa10_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto10_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa10_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta11(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func11_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto11_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa11_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto11_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa11_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto11_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa11_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta12(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func12_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto12_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa12_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto12_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa12_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto12_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa12_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta13(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func13_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto13_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa13_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto13_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa13_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto13_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa13_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta14(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func14_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto14_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa14_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto14_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa14_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto14_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa14_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta15(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func15_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto15_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa15_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto15_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa15_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto15_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa15_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta16(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func16_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto16_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa16_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto16_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa16_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto16_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa16_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta17(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func17_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto17_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa17_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto17_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa17_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto17_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa17_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta18(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func18_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto18_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa18_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto18_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa18_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto18_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa18_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta19(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func19_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto19_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa19_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto19_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa19_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto19_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa19_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta20(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func20_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto20_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa20_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto20_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa20_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto20_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa20_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta21(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func21_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto21_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa21_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto21_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa21_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto21_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa21_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta22(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func22_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto22_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa22_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto22_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa22_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto22_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa22_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta23(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func23_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto23_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa23_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto23_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa23_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto23_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa23_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta24(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func24_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto24_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa24_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto24_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa24_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto24_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa24_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta25(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func25_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto25_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa25_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto25_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa25_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto25_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa25_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta26(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func26_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto26_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa26_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto26_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa26_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto26_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa26_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta27(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func27_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto27_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa27_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto27_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa27_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto27_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa27_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta28(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func28_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto28_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa28_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto28_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa28_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto28_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa28_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta29(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func29_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto29_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa29_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto29_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa29_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto29_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa29_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta30(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func30_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto30_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa30_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto30_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa30_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto30_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa30_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 function mudarFalta31(valor) { <?php for($a = 1; $a <= $qtd; $a++){ ?> if(<?php echo $a ?> == valor){ var c = document.getElementById('tipo_func31_<?php echo $a ?>'); var z = c.options[c.selectedIndex].text; if(z == "FUNC.") { document.getElementById('substituto31_<?php echo $a ?>').hidden = false; document.getElementById('substitutorpa31_<?php echo $a ?>').hidden = true; } else if (z == "RPA") { document.getElementById('substituto31_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa31_<?php echo $a ?>').hidden = false; } else if (z == "Selecione...") { document.getElementById('substituto31_<?php echo $a ?>').hidden = true; document.getElementById('substitutorpa31_<?php echo $a ?>').hidden = true; } } <?php } ?> };
	 
	 </script>
</head>

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a href="{{ route('index') }}">
                           <p style="margin-left: 30px"> Escala de Plantão </p>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="{{ asset('assets/images/favico.png') }}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <!--a href="user-profile.html"><i class="ti-user"></i>Visualizar Perfil</a-->
                                            <a class="dropdown-item" href="{{ route('logout') }}"
											   onclick="event.preventDefault();
															 document.getElementById('logout-form2').submit();">
												{{ __('Sair') }}
											</a>

											<form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigation-label">Cadastros</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext">Cadastros</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{ route('cadastroCentroC') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Centro de Custo</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{ route('cadastroFunc') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Funcionário</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" ">
                                            <a href="{{ route('cadastroEscala') }}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Escala</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
					
                    <div class="pcoded-content">
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Frequência Escala</h5>
                                            <p class="m-b-0">Bem-vindo à Escala de Plantão</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item">
                                                <a href="{{ url('/') }}"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="{{ route('frequenciaEscala', $escala[0]->escala_id) }}">Frequência Escala</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
						<!-- Frame Principal -->
						<div class="pcoded-inner-content" style="width: 100%; overflow: scroll;">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                           <div class="col-xl-30 col-md-20">
										      <a href="{{ route('cadastroEscala') }}" class="btn btn-warning btn-sm">Voltar</a>
                                             	<div class="card table-card">
                                                 	<div class="card-header">
                                                        <h5>Frequência da Escala:</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
														@if ($errors->any())
														  <div class="alert alert-danger">
															<ul>
																@foreach ($errors->all() as $error)
																	<li>{{ $error }}</li>
																@endforeach
															</ul>
														  </div>
														  @endif
														 <?php $qtd = sizeof($escala); ?>
														 @if($qtd > 0)
														 <form action="{{\Request::route('storeFrequencia', $idEs)}}" method="POST">
													     @endif
														 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <table class="table table-hover m-b-0 without-header" style="width:500px">
                                                                  <tr>
																   <td style="width:300px"> Mês: 
																   <select readonly="true" id="mes" name="mes" class="form-control" width="300px">
																   @foreach($escala as $es)  
																	 <option id="mes" name="mes" value="<?php echo $es->mes ?>">{{ $es->mes }}</option>
																	 <?php break; ?>
																   @endforeach
																   </select>
																   </td>
																   <td width="200px"> Ano: 
																    <select readonly="true" id="ano" name="ano" class="form-control" width="200px">
																	 @foreach($escala as $es)
																	 <option id="ano" name="ano" value="<?php echo $es->ano ?>">{{ $es->ano }}</option>
																	 <?php break; ?>
																	 @endforeach
																	</select>
																   </td>											   
																  </tr>
															</table>
															<?php $qtd = sizeof($escala); ?>
															@if($qtd > 0)
															<table class="table table-hover m-b-0 without-header">	  
																<tr>
																 <td colspan="3">FUNCIONÁRIO:</td>
																</tr>
																<tr>
																  <td></td>
																  <td><center>Nome do Funcionário</center></td>
																  <td><center>Cargo</center></td>
																  <td><center>Plantão</center></td>
															      <?php for($a = 1; $a < 32; $a++){ ?>
																   <td><center>{{ $a }} </center></td>
																  <?php } ?>
																 <?php $b = 0; ?>
																@foreach($escala as $func) <?php $b += 1; ?>
																  </tr> 
																  <tr>
																    @if($func->centro_custo == "ENFERMAGEM")
																    <td>{{ $func->centro_custo }}</td>
																	@else
																	<td>{{ $func->centro_custo .$func->centro_custo_id }}</td>
																	@endif
																    <td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo_id_<?php echo $b ?>" name="centro_custo_id_<?php echo $b ?>" value="<?php echo $func->centro_custo_id; ?>" />
																	 <input type="text" style="width:350px" class="form-control" id="centro_custo" name="centro_custo" value="<?php echo $func->centro_custo; ?>" />
																	 <input type="text" style="width:350px" class="form-control" id="escala_id" name="escala_id" value="<?php echo $idEs; ?>" />
																	</td>
																	<td hidden>
																	 <input type="text" style="width:350px" class="form-control" id="funcionario_id_<?php echo $b ?>" name="funcionario_id_<?php echo $b ?>" value="<?php echo $func->funcionario_id; ?>" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:350px" class="form-control" id="nome" name="nome" value="<?php echo $func->nome; ?>" title="<?php echo $func->nome; ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:150px" class="form-control" id="cargo" name="cargo" value="<?php echo $func->cargo; ?>" title="<?php echo $func->cargo; ?>" required="true" />
																	</td>
																	<td>
																	 <input type="text" disabled="true" style="width:70px" class="form-control" id="tipo_plantao" name="tipo_plantao" value="<?php if($func->tipo_plantao == "D"){ echo "DIA"; }else{ echo "NOITE"; }  ?>" required="true" />
																	</td>
																	<td>
																	@if($func->dia1 == "DIA" || $func->dia1 == "NOITE")
																	 <select class="form-control" id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" style="width:120px" onchange="mudar(<?php echo $b ?>)">
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia1_<?php echo $b ?>" name="dia1_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select>
																	 <input hidden title="QTD DIAS" type="number" id="qtdDias1_<?php echo $b ?>" name="qtdDias1_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func1_<?php echo $b ?>" name="tipo_func1_<?php echo $b ?>" class="form-control" onchange="mudarFalta(<?php echo $b ?>)">
																	  <option id="tipo_func1_<?php echo $b ?>" name="tipo_func1_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func1_<?php echo $b ?>" name="tipo_func1_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func1_<?php echo $b ?>" name="tipo_func1_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto1_<?php echo $b ?>" name="substituto1_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto1_<?php echo $b ?>" name="substituto1_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa1_<?php echo $b ?>" name="substitutorpa1_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa1_<?php echo $b ?>" name="substitutorpa1_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	@else
																	<center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia1' name='dia1' value="<?php echo strtoupper(substr($func->dia1, 0, 1)); ?>" /></center>	
																	@endif
																	</td>
																	<td>
																	@if($func->dia2 == "DIA" || $func->dia2 == "NOITE")
																	 <select class="form-control" id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" style="width:120px" onchange="mudar2(<?php echo $b ?>)">
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia2_<?php echo $b ?>" name="dia2_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias2_<?php echo $b ?>" name="qtdDias2_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func2_<?php echo $b ?>" name="tipo_func2_<?php echo $b ?>" class="form-control" onchange="mudarFalta2(<?php echo $b ?>)">
																	  <option id="tipo_func2_<?php echo $b ?>" name="tipo_func2_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func2_<?php echo $b ?>" name="tipo_func2_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func2_<?php echo $b ?>" name="tipo_func2_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto2_<?php echo $b ?>" name="substituto2_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto2_<?php echo $b ?>" name="substituto2_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa2_<?php echo $b ?>" name="substitutorpa2_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa2_<?php echo $b ?>" name="substitutorpa2_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	@else
																	<center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia2' name='dia2' value="<?php echo strtoupper(substr($func->dia2, 0, 1)); ?>" /></center>
																	@endif
																	</td>
																	<td>
																	 @if($func->dia3 == "DIA" || $func->dia3 == "NOITE")
																	 <select class="form-control" id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" style="width:120px" onchange="mudar3(<?php echo $b ?>)">
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia3_<?php echo $b ?>" name="dia3_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select>
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias3_<?php echo $b ?>" name="qtdDias3_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func3_<?php echo $b ?>" name="tipo_func3_<?php echo $b ?>" class="form-control" onchange="mudarFalta3(<?php echo $b ?>)">
																	  <option id="tipo_func3_<?php echo $b ?>" name="tipo_func3_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func3_<?php echo $b ?>" name="tipo_func3_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func3_<?php echo $b ?>" name="tipo_func3_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto3_<?php echo $b ?>" name="substituto3_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto3_<?php echo $b ?>" name="substituto3_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa3_<?php echo $b ?>" name="substitutorpa3_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa3_<?php echo $b ?>" name="substitutorpa3_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	  <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia3' name='dia3' value="<?php echo strtoupper(substr($func->dia3, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia4 == "DIA" || $func->dia4 == "NOITE")
																	 <select class="form-control" id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" style="width:120px" onchange="mudar4(<?php echo $b ?>)">
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia4_<?php echo $b ?>" name="dia4_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias4_<?php echo $b ?>" name="qtdDias4_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func4_<?php echo $b ?>" name="tipo_func4_<?php echo $b ?>" class="form-control" onchange="mudarFalta4(<?php echo $b ?>)">
																	  <option id="tipo_func4_<?php echo $b ?>" name="tipo_func4_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func4_<?php echo $b ?>" name="tipo_func4_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func4_<?php echo $b ?>" name="tipo_func4_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto4_<?php echo $b ?>" name="substituto4_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto4_<?php echo $b ?>" name="substituto4_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa4_<?php echo $b ?>" name="substitutorpa4_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa4_<?php echo $b ?>" name="substitutorpa4_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia4' name='dia4' value="<?php echo strtoupper(substr($func->dia4, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia5 == "DIA" || $func->dia5 == "NOITE")
																	 <select class="form-control" id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" style="width:120px" onchange="mudar5(<?php echo $b ?>)">
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia5_<?php echo $b ?>" name="dia5_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias5_<?php echo $b ?>" name="qtdDias5_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func5_<?php echo $b ?>" name="tipo_func5_<?php echo $b ?>" class="form-control" onchange="mudarFalta5(<?php echo $b ?>)">
																	  <option id="tipo_func5_<?php echo $b ?>" name="tipo_func5_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func5_<?php echo $b ?>" name="tipo_func5_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func5_<?php echo $b ?>" name="tipo_func5_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto5_<?php echo $b ?>" name="substituto5_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto5_<?php echo $b ?>" name="substituto5_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa5_<?php echo $b ?>" name="substitutorpa5_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa5_<?php echo $b ?>" name="substitutorpa5_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia5' name='dia5' value="<?php echo strtoupper(substr($func->dia5, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia6 == "DIA" || $func->dia6 == "NOITE")
																	 <select class="form-control" id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" style="width:120px" onchange="mudar6(<?php echo $b ?>)">
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia6_<?php echo $b ?>" name="dia6_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias6_<?php echo $b ?>" name="qtdDias6_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func6_<?php echo $b ?>" name="tipo_func6_<?php echo $b ?>" class="form-control" onchange="mudarFalta6(<?php echo $b ?>)">
																	  <option id="tipo_func6_<?php echo $b ?>" name="tipo_func6_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func6_<?php echo $b ?>" name="tipo_func6_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func6_<?php echo $b ?>" name="tipo_func6_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto6_<?php echo $b ?>" name="substituto6_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto6_<?php echo $b ?>" name="substituto6_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa6_<?php echo $b ?>" name="substitutorpa6_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa6_<?php echo $b ?>" name="substitutorpa6_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia6' name='dia6' value="<?php echo strtoupper(substr($func->dia6, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia7 == "DIA" || $func->dia7 == "NOITE")
																	 <select class="form-control" id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" style="width:120px" onchange="mudar7(<?php echo $b ?>)">
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia7_<?php echo $b ?>" name="dia7_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select>
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias7_<?php echo $b ?>" name="qtdDias7_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func7_<?php echo $b ?>" name="tipo_func7_<?php echo $b ?>" class="form-control" onchange="mudarFalta7(<?php echo $b ?>)">
																	  <option id="tipo_func7_<?php echo $b ?>" name="tipo_func7_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func7_<?php echo $b ?>" name="tipo_func7_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func7_<?php echo $b ?>" name="tipo_func7_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto7_<?php echo $b ?>" name="substituto7_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto7_<?php echo $b ?>" name="substituto7_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa7_<?php echo $b ?>" name="substitutorpa7_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa7_<?php echo $b ?>" name="substitutorpa7_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia7' name='dia7' value="<?php echo strtoupper(substr($func->dia7, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia8 == "DIA" || $func->dia8 == "NOITE")
																	 <select class="form-control" id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" style="width:120px" onchange="mudar8(<?php echo $b ?>)">
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia8_<?php echo $b ?>" name="dia8_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias8_<?php echo $b ?>" name="qtdDias8_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func8_<?php echo $b ?>" name="tipo_func8_<?php echo $b ?>" class="form-control" onchange="mudarFalta8(<?php echo $b ?>)">
																	  <option id="tipo_func8_<?php echo $b ?>" name="tipo_func8_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func8_<?php echo $b ?>" name="tipo_func8_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func8_<?php echo $b ?>" name="tipo_func8_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto8_<?php echo $b ?>" name="substituto8_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto8_<?php echo $b ?>" name="substituto8_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa8_<?php echo $b ?>" name="substitutorpa8_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa8_<?php echo $b ?>" name="substitutorpa8_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																	 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia8' name='dia8' value="<?php echo strtoupper(substr($func->dia8, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia9 == "DIA" || $func->dia9 == "NOITE")
																	 <select class="form-control" id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" style="width:120px" onchange="mudar9(<?php echo $b ?>)">
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia9_<?php echo $b ?>" name="dia9_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias9_<?php echo $b ?>" name="qtdDias9_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func9_<?php echo $b ?>" name="tipo_func9_<?php echo $b ?>" class="form-control" onchange="mudarFalta9(<?php echo $b ?>)">
																	  <option id="tipo_func9_<?php echo $b ?>" name="tipo_func9_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func9_<?php echo $b ?>" name="tipo_func9_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func9_<?php echo $b ?>" name="tipo_func9_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto9_<?php echo $b ?>" name="substituto9_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto9_<?php echo $b ?>" name="substituto9_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa9_<?php echo $b ?>" name="substitutorpa9_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa9_<?php echo $b ?>" name="substitutorpa9_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																	 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia9' name='dia9' value="<?php echo strtoupper(substr($func->dia9, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia10 == "DIA" || $func->dia10 == "NOITE")
																	 <select class="form-control" id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" style="width:120px" onchange="mudar10(<?php echo $b ?>)">
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia10_<?php echo $b ?>" name="dia10_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias10_<?php echo $b ?>" name="qtdDias10_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func10_<?php echo $b ?>" name="tipo_func10_<?php echo $b ?>" class="form-control" onchange="mudarFalta10(<?php echo $b ?>)">
																	  <option id="tipo_func10_<?php echo $b ?>" name="tipo_func10_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func10_<?php echo $b ?>" name="tipo_func10_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func10_<?php echo $b ?>" name="tipo_func10_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto10_<?php echo $b ?>" name="substituto10_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto10_<?php echo $b ?>" name="substituto10_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa10_<?php echo $b ?>" name="substitutorpa10_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa10_<?php echo $b ?>" name="substitutorpa10_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																	 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia10' name='dia10' value="<?php echo strtoupper(substr($func->dia10, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia11 == "DIA" || $func->dia11 == "NOITE")
																	 <select class="form-control" id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" style="width:120px" onchange="mudar11(<?php echo $b ?>)">
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia11_<?php echo $b ?>" name="dia11_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias11_<?php echo $b ?>" name="qtdDias11_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func11_<?php echo $b ?>" name="tipo_func11_<?php echo $b ?>" class="form-control" onchange="mudarFalta11(<?php echo $b ?>)">
																	  <option id="tipo_func11_<?php echo $b ?>" name="tipo_func11_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func11_<?php echo $b ?>" name="tipo_func11_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func11_<?php echo $b ?>" name="tipo_func11_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto11_<?php echo $b ?>" name="substituto11_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto11_<?php echo $b ?>" name="substituto11_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa11_<?php echo $b ?>" name="substitutorpa11_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa11_<?php echo $b ?>" name="substitutorpa11_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																	 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia11' name='dia11' value="<?php echo strtoupper(substr($func->dia11, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia12 == "DIA" || $func->dia12 == "NOITE")
																	 <select class="form-control" id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" style="width:120px" onchange="mudar12(<?php echo $b ?>)">
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia12_<?php echo $b ?>" name="dia12_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias12_<?php echo $b ?>" name="qtdDias12_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func12_<?php echo $b ?>" name="tipo_func12_<?php echo $b ?>" class="form-control" onchange="mudarFalta12(<?php echo $b ?>)">
																	  <option id="tipo_func12_<?php echo $b ?>" name="tipo_func12_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func12_<?php echo $b ?>" name="tipo_func12_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func12_<?php echo $b ?>" name="tipo_func12_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto12_<?php echo $b ?>" name="substituto12_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto12_<?php echo $b ?>" name="substituto12_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa12_<?php echo $b ?>" name="substitutorpa12_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa12_<?php echo $b ?>" name="substitutorpa12_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia12' name='dia12' value="<?php echo strtoupper(substr($func->dia12, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia13 == "DIA" || $func->dia13 == "NOITE")
																	 <select class="form-control" id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" style="width:120px" onchange="mudar13(<?php echo $b ?>)">
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia13_<?php echo $b ?>" name="dia13_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias13_<?php echo $b ?>" name="qtdDias13_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func13_<?php echo $b ?>" name="tipo_func13_<?php echo $b ?>" class="form-control" onchange="mudarFalta13(<?php echo $b ?>)">
																	  <option id="tipo_func13_<?php echo $b ?>" name="tipo_func13_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func13_<?php echo $b ?>" name="tipo_func13_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func13_<?php echo $b ?>" name="tipo_func13_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto13_<?php echo $b ?>" name="substituto13_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto13_<?php echo $b ?>" name="substituto13_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa13_<?php echo $b ?>" name="substitutorpa13_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa13_<?php echo $b ?>" name="substitutorpa13_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia13' name='dia13' value="<?php echo strtoupper(substr($func->dia13, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia14 == "DIA" || $func->dia14 == "NOITE")
																	 <select class="form-control" id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" style="width:120px" onchange="mudar14(<?php echo $b ?>)">
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia14_<?php echo $b ?>" name="dia14_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias14_<?php echo $b ?>" name="qtdDias14_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func14_<?php echo $b ?>" name="tipo_func14_<?php echo $b ?>" class="form-control" onchange="mudarFalta14(<?php echo $b ?>)">
																	  <option id="tipo_func14_<?php echo $b ?>" name="tipo_func14_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func14_<?php echo $b ?>" name="tipo_func14_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func14_<?php echo $b ?>" name="tipo_func14_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto14_<?php echo $b ?>" name="substituto14_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto14_<?php echo $b ?>" name="substituto14_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa14_<?php echo $b ?>" name="substitutorpa14_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa14_<?php echo $b ?>" name="substitutorpa14_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia14' name='dia14' value="<?php echo strtoupper(substr($func->dia14, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia15 == "DIA" || $func->dia15 == "NOITE")
																	 <select class="form-control" id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" style="width:120px" onchange="mudar15(<?php echo $b ?>)">
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia15_<?php echo $b ?>" name="dia15_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias15_<?php echo $b ?>" name="qtdDias15_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func15_<?php echo $b ?>" name="tipo_func15_<?php echo $b ?>" class="form-control" onchange="mudarFalta15(<?php echo $b ?>)">
																	  <option id="tipo_func15_<?php echo $b ?>" name="tipo_func15_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func15_<?php echo $b ?>" name="tipo_func15_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func15_<?php echo $b ?>" name="tipo_func15_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto15_<?php echo $b ?>" name="substituto15_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto15_<?php echo $b ?>" name="substituto15_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa15_<?php echo $b ?>" name="substitutorpa15_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa15_<?php echo $b ?>" name="substitutorpa15_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia15' name='dia15' value="<?php echo strtoupper(substr($func->dia15, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia16 == "DIA" || $func->dia16 == "NOITE")
																	 <select class="form-control" id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" style="width:120px" onchange="mudar16(<?php echo $b ?>)">
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia16_<?php echo $b ?>" name="dia16_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias16_<?php echo $b ?>" name="qtdDias16_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func16_<?php echo $b ?>" name="tipo_func16_<?php echo $b ?>" class="form-control" onchange="mudarFalta16(<?php echo $b ?>)">
																	  <option id="tipo_func16_<?php echo $b ?>" name="tipo_func16_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func16_<?php echo $b ?>" name="tipo_func16_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func16_<?php echo $b ?>" name="tipo_func16_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto16_<?php echo $b ?>" name="substituto16_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto16_<?php echo $b ?>" name="substituto16_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa16_<?php echo $b ?>" name="substitutorpa16_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa16_<?php echo $b ?>" name="substitutorpa16_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia16' name='dia16' value="<?php echo strtoupper(substr($func->dia16, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia17 == "DIA" || $func->dia17 == "NOITE")
																	 <select class="form-control" id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" style="width:120px" onchange="mudar17(<?php echo $b ?>)">
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia17_<?php echo $b ?>" name="dia17_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias17_<?php echo $b ?>" name="qtdDias17_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func17_<?php echo $b ?>" name="tipo_func17_<?php echo $b ?>" class="form-control" onchange="mudarFalta17(<?php echo $b ?>)">
																	  <option id="tipo_func17_<?php echo $b ?>" name="tipo_func17_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func17_<?php echo $b ?>" name="tipo_func17_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func17_<?php echo $b ?>" name="tipo_func17_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto17_<?php echo $b ?>" name="substituto17_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto17_<?php echo $b ?>" name="substituto17_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa17_<?php echo $b ?>" name="substitutorpa17_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa17_<?php echo $b ?>" name="substitutorpa17_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia17' name='dia17' value="<?php echo strtoupper(substr($func->dia17, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia18 == "DIA" || $func->dia18 == "NOITE")
																	 <select class="form-control" id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" style="width:120px" onchange="mudar18(<?php echo $b ?>)">
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia18_<?php echo $b ?>" name="dia18_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias18_<?php echo $b ?>" name="qtdDias18_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func18_<?php echo $b ?>" name="tipo_func18_<?php echo $b ?>" class="form-control" onchange="mudarFalta18(<?php echo $b ?>)">
																	  <option id="tipo_func18_<?php echo $b ?>" name="tipo_func18_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func18_<?php echo $b ?>" name="tipo_func18_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func18_<?php echo $b ?>" name="tipo_func18_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto18_<?php echo $b ?>" name="substituto18_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto18_<?php echo $b ?>" name="substituto18_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa18_<?php echo $b ?>" name="substitutorpa18_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa18_<?php echo $b ?>" name="substitutorpa18_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia18' name='dia18' value="<?php echo strtoupper(substr($func->dia18, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia19 == "DIA" || $func->dia19 == "NOITE")
																	 <select class="form-control" id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" style="width:120px" onchange="mudar19(<?php echo $b ?>)">
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia19_<?php echo $b ?>" name="dia19_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias19_<?php echo $b ?>" name="qtdDias19_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func19_<?php echo $b ?>" name="tipo_func19_<?php echo $b ?>" class="form-control" onchange="mudarFalta19(<?php echo $b ?>)">
																	  <option id="tipo_func19_<?php echo $b ?>" name="tipo_func19_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func19_<?php echo $b ?>" name="tipo_func19_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func19_<?php echo $b ?>" name="tipo_func19_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto19_<?php echo $b ?>" name="substituto19_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto19_<?php echo $b ?>" name="substituto19_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa19_<?php echo $b ?>" name="substitutorpa19_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa19_<?php echo $b ?>" name="substitutorpa19_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia19' name='dia19' value="<?php echo strtoupper(substr($func->dia19, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia20 == "DIA" || $func->dia20 == "NOITE")
																	 <select class="form-control" id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" style="width:120px" onchange="mudar20(<?php echo $b ?>)">
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia20_<?php echo $b ?>" name="dia20_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias20_<?php echo $b ?>" name="qtdDias20_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func20_<?php echo $b ?>" name="tipo_func20_<?php echo $b ?>" class="form-control" onchange="mudarFalta20(<?php echo $b ?>)">
																	  <option id="tipo_func20_<?php echo $b ?>" name="tipo_func20_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func20_<?php echo $b ?>" name="tipo_func20_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func20_<?php echo $b ?>" name="tipo_func20_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto20_<?php echo $b ?>" name="substituto20_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto20_<?php echo $b ?>" name="substituto20_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa20_<?php echo $b ?>" name="substitutorpa20_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa20_<?php echo $b ?>" name="substitutorpa20_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia20' name='dia20' value="<?php echo strtoupper(substr($func->dia20, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia21 == "DIA" || $func->dia21 == "NOITE")
																	 <select class="form-control" id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" style="width:120px" onchange="mudar21(<?php echo $b ?>)">
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia21_<?php echo $b ?>" name="dia21_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias21_<?php echo $b ?>" name="qtdDias21_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func21_<?php echo $b ?>" name="tipo_func21_<?php echo $b ?>" class="form-control" onchange="mudarFalta21(<?php echo $b ?>)">
																	  <option id="tipo_func21_<?php echo $b ?>" name="tipo_func21_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func21_<?php echo $b ?>" name="tipo_func21_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func21_<?php echo $b ?>" name="tipo_func21_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto21_<?php echo $b ?>" name="substituto21_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto21_<?php echo $b ?>" name="substituto21_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa21_<?php echo $b ?>" name="substitutorpa21_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa21_<?php echo $b ?>" name="substitutorpa21_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>																	 
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia21' name='dia21' value="<?php echo strtoupper(substr($func->dia21, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia22 == "DIA" || $func->dia22 == "NOITE")
																	 <select class="form-control" id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" style="width:120px" onchange="mudar22(<?php echo $b ?>)">
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia22_<?php echo $b ?>" name="dia22_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias22_<?php echo $b ?>" name="qtdDias22_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func22_<?php echo $b ?>" name="tipo_func22_<?php echo $b ?>" class="form-control" onchange="mudarFalta22(<?php echo $b ?>)">
																	  <option id="tipo_func22_<?php echo $b ?>" name="tipo_func22_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func22_<?php echo $b ?>" name="tipo_func22_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func22_<?php echo $b ?>" name="tipo_func22_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto22_<?php echo $b ?>" name="substituto22_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto22_<?php echo $b ?>" name="substituto22_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa22_<?php echo $b ?>" name="substitutorpa22_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa22_<?php echo $b ?>" name="substitutorpa22_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia22' name='dia22' value="<?php echo strtoupper(substr($func->dia22, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia23 == "DIA" || $func->dia23 == "NOITE")
																	 <select class="form-control" id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" style="width:120px" onchange="mudar23(<?php echo $b ?>)">
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia23_<?php echo $b ?>" name="dia23_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias23_<?php echo $b ?>" name="qtdDias23_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func23_<?php echo $b ?>" name="tipo_func23_<?php echo $b ?>" class="form-control" onchange="mudarFalta23(<?php echo $b ?>)">
																	  <option id="tipo_func23_<?php echo $b ?>" name="tipo_func23_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func23_<?php echo $b ?>" name="tipo_func23_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func23_<?php echo $b ?>" name="tipo_func23_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto23_<?php echo $b ?>" name="substituto23_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto23_<?php echo $b ?>" name="substituto23_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa23_<?php echo $b ?>" name="substitutorpa23_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa23_<?php echo $b ?>" name="substitutorpa23_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia23' name='dia23' value="<?php echo strtoupper(substr($func->dia23, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia24 == "DIA" || $func->dia24 == "NOITE")
																	 <select class="form-control" id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" style="width:120px" onchange="mudar24(<?php echo $b ?>)">
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia24_<?php echo $b ?>" name="dia24_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias24_<?php echo $b ?>" name="qtdDias24_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func24_<?php echo $b ?>" name="tipo_func24_<?php echo $b ?>" class="form-control" onchange="mudarFalta24(<?php echo $b ?>)">
																	  <option id="tipo_func24_<?php echo $b ?>" name="tipo_func24_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func24_<?php echo $b ?>" name="tipo_func24_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func24_<?php echo $b ?>" name="tipo_func24_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto24_<?php echo $b ?>" name="substituto24_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto24_<?php echo $b ?>" name="substituto24_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa24_<?php echo $b ?>" name="substitutorpa24_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa24_<?php echo $b ?>" name="substitutorpa24_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia24' name='dia24' value="<?php echo strtoupper(substr($func->dia24, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia25 == "DIA" || $func->dia25 == "NOITE")
																	 <select class="form-control" id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" style="width:120px" onchange="mudar25(<?php echo $b ?>)">
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia25_<?php echo $b ?>" name="dia25_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias25_<?php echo $b ?>" name="qtdDias25_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func25_<?php echo $b ?>" name="tipo_func25_<?php echo $b ?>" class="form-control" onchange="mudarFalta25(<?php echo $b ?>)">
																	  <option id="tipo_func25_<?php echo $b ?>" name="tipo_func25_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func25_<?php echo $b ?>" name="tipo_func25_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func25_<?php echo $b ?>" name="tipo_func25_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto25_<?php echo $b ?>" name="substituto25_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto25_<?php echo $b ?>" name="substituto25_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa25_<?php echo $b ?>" name="substitutorpa25_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa25_<?php echo $b ?>" name="substitutorpa25_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia25' name='dia25' value="<?php echo strtoupper(substr($func->dia25, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia26 == "DIA" || $func->dia26 == "NOITE")
																	 <select class="form-control" id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" style="width:120px" onchange="mudar26(<?php echo $b ?>)">
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia26_<?php echo $b ?>" name="dia26_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias26_<?php echo $b ?>" name="qtdDias26_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func26_<?php echo $b ?>" name="tipo_func26_<?php echo $b ?>" class="form-control" onchange="mudarFalta26(<?php echo $b ?>)">
																	  <option id="tipo_func26_<?php echo $b ?>" name="tipo_func26_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func26_<?php echo $b ?>" name="tipo_func26_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func26_<?php echo $b ?>" name="tipo_func26_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto26_<?php echo $b ?>" name="substituto26_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto26_<?php echo $b ?>" name="substituto26_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa26_<?php echo $b ?>" name="substitutorpa26_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa26_<?php echo $b ?>" name="substitutorpa26_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia26' name='dia26' value="<?php echo strtoupper(substr($func->dia26, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia27 == "DIA" || $func->dia27 == "NOITE")
																	 <select class="form-control" id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" style="width:120px" onchange="mudar27(<?php echo $b ?>)">
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia27_<?php echo $b ?>" name="dia27_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias27_<?php echo $b ?>" name="qtdDias27_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func27_<?php echo $b ?>" name="tipo_func27_<?php echo $b ?>" class="form-control" onchange="mudarFalta27(<?php echo $b ?>)">
																	  <option id="tipo_func27_<?php echo $b ?>" name="tipo_func27_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func27_<?php echo $b ?>" name="tipo_func27_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func27_<?php echo $b ?>" name="tipo_func27_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto27_<?php echo $b ?>" name="substituto27_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto27_<?php echo $b ?>" name="substituto27_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa27_<?php echo $b ?>" name="substitutorpa27_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa27_<?php echo $b ?>" name="substitutorpa27_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia27' name='dia27' value="<?php echo strtoupper(substr($func->dia27, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia28 == "DIA" || $func->dia28 == "NOITE")
																	 <select class="form-control" id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" style="width:120px" onchange="mudar28(<?php echo $b ?>)">
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia28_<?php echo $b ?>" name="dia28_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias28_<?php echo $b ?>" name="qtdDias28_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func28_<?php echo $b ?>" name="tipo_func28_<?php echo $b ?>" class="form-control" onchange="mudarFalta28(<?php echo $b ?>)">
																	  <option id="tipo_func28_<?php echo $b ?>" name="tipo_func28_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func28_<?php echo $b ?>" name="tipo_func28_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func28_<?php echo $b ?>" name="tipo_func28_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto28_<?php echo $b ?>" name="substituto28_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto28_<?php echo $b ?>" name="substituto28_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa28_<?php echo $b ?>" name="substitutorpa28_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa28_<?php echo $b ?>" name="substitutorpa28_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia28' name='dia28' value="<?php echo strtoupper(substr($func->dia28, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia29 == "DIA" || $func->dia29 == "NOITE")
																	 <select class="form-control" id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" style="width:120px" onchange="mudar29(<?php echo $b ?>)">
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia29_<?php echo $b ?>" name="dia29_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias29_<?php echo $b ?>" name="qtdDias29_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func29_<?php echo $b ?>" name="tipo_func29_<?php echo $b ?>" class="form-control" onchange="mudarFalta29(<?php echo $b ?>)">
																	  <option id="tipo_func29_<?php echo $b ?>" name="tipo_func29_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func29_<?php echo $b ?>" name="tipo_func29_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func29_<?php echo $b ?>" name="tipo_func29_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto29_<?php echo $b ?>" name="substituto29_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto29_<?php echo $b ?>" name="substituto29_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa29_<?php echo $b ?>" name="substitutorpa29_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa29_<?php echo $b ?>" name="substitutorpa29_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	  <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia29' name='dia29' value="<?php echo strtoupper(substr($func->dia29, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia30 == "DIA" || $func->dia30 == "NOITE")
																	 <select class="form-control" id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" style="width:120px" onchange="mudar30(<?php echo $b ?>)">
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia30_<?php echo $b ?>" name="dia30_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <input hidden value="" title="QTD DIAS" type="number" id="qtdDias30_<?php echo $b ?>" name="qtdDias30_<?php echo $b ?>" class="form-control" />
																	 <select hidden id="tipo_func30_<?php echo $b ?>" name="tipo_func30_<?php echo $b ?>" class="form-control" onchange="mudarFalta30(<?php echo $b ?>)">
																	  <option id="tipo_func30_<?php echo $b ?>" name="tipo_func30_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func30_<?php echo $b ?>" name="tipo_func30_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func30_<?php echo $b ?>" name="tipo_func30_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto30_<?php echo $b ?>" name="substituto30_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto30_<?php echo $b ?>" name="substituto30_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa30_<?php echo $b ?>" name="substitutorpa30_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa30_<?php echo $b ?>" name="substitutorpa30_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia30' name='dia30' value="<?php echo strtoupper(substr($func->dia30, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																	<td>
																	 @if($func->dia31 == "DIA" || $func->dia31 == "NOITE")
																	 <select class="form-control" id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" style="width:120px" onchange="mudar31(<?php echo $b ?>)">
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Presente">Presente</option>
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Folga">Folga</option>
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Desligamento">Desligamento</option>
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Falta">Falta</option>
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Suspensão">Suspensão</option>
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Atestado">Atestado</option>
																	  <option id="dia31_<?php echo $b ?>" name="dia31_<?php echo $b ?>" value="Permuta">Permuta</option>
																	 </select> 
																	 <select hidden id="tipo_func31_<?php echo $b ?>" name="tipo_func31_<?php echo $b ?>" class="form-control" onchange="mudarFalta31(<?php echo $b ?>)">
																	  <option id="tipo_func31_<?php echo $b ?>" name="tipo_func31_<?php echo $b ?>" value="0">Selecione...</option>
																	  <option id="tipo_func31_<?php echo $b ?>" name="tipo_func31_<?php echo $b ?>" value="func">FUNC.</option>
																	  <option id="tipo_func31_<?php echo $b ?>" name="tipo_func31_<?php echo $b ?>" value="rpa">RPA</option>
																	 </select>
																	 <select hidden id="substituto31_<?php echo $b ?>" name="substituto31_<?php echo $b ?>" class="form-control">
																	 @foreach($funcT as $fT)
																	   <option id="substituto31_<?php echo $b ?>" name="substituto31_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 <select hidden id="substitutorpa31_<?php echo $b ?>" name="substitutorpa31_<?php echo $b ?>" class="form-control">
																	 @foreach($funcRpa as $fT)
																	   <option id="substitutorpa31_<?php echo $b ?>" name="substitutorpa31_<?php echo $b ?>" value="<?php echo $fT->nome; ?>">{{ $fT->nome }} - {{ $fT->centro_custo }}</option>
																	 @endforeach
																	 </select>
																	 @else
																	 <center><input type="text" disabled="true" style="width:40px" class="form-control" id='dia31' name='dia31' value="<?php echo strtoupper(substr($func->dia31, 0, 1)); ?>" /></center>
																	 @endif
																	</td>
																@endforeach
																@endif
															   </tr>
															   <br>
															   <tr> 
															   @if($qtd > 0)
																<td colspan="35"><p align="right"><input type="submit" class="btn btn-success btn-sm" style="margin-top: 10px;" value="Salvar" id="Salvar" name="Salvar" /> </p></td>
															   @endif
															   </tr>
															  </table>
															  </thead>
                                                            </table>
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- Fim Frame Principal -->
			        </div>
			      </div>
            </div>
        </div>
    </div>
</body>
</html>