<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/','App\Http\Controllers\UserController@telaLogin')->name('telaLogin');
Route::post('/', 'App\Http\Controllers\UserController@Login')->name('Login');
Route::get('/auth/register','App\Http\Controllers\UserController@telaRegistro')->name('telaRegistro');
Route::post('/auth/register/','App\Http\Controllers\UserController@store')->name('store');
Route::get('/telaReset','App\Http\Controllers\UserController@telaReset')->name('telaReset');
Route::post('/telaReset/','App\Http\Controllers\UserController@resetarSenha')->name('resetarSenha');

Route::middleware(['auth'])->group( function() {

Route::get('/index', function () {
    return view('index');
})->name('index');


//Centro de Custo
Route::get('/centro_custo/cadastro','App\Http\Controllers\CentroCusto_Controller@cadastroCentroC')->name('cadastroCentroC');
Route::get('/centro_custo/novoCentroCusto','App\Http\Controllers\CentroCusto_Controller@novoCentroC')->name('novoCentroC');
Route::post('/centro_custo/novoCentroCusto','App\Http\Controllers\CentroCusto_Controller@storeCentroCusto')->name('storeCentroCusto');
Route::get('/centro_custo/alterarCentroCusto/{id}','App\Http\Controllers\CentroCusto_Controller@alterarCentroC')->name('alterarCentroC');
Route::post('/centro_custo/alterarCentroCusto/{id}','App\Http\Controllers\CentroCusto_Controller@updateCentroCusto')->name('updateCentroCusto');
Route::get('/centro_custo/excluirCentroCusto/{id}','App\Http\Controllers\CentroCusto_Controller@excluirCentroC')->name('excluirCentroC');
Route::post('/centro_custo/excluirCentroCusto/{id}','App\Http\Controllers\CentroCusto_Controller@deleteCentroCusto')->name('deleteCentroCusto');

//Funcionário
Route::get('/funcionario/cadastro','App\Http\Controllers\Funcionario_Controller@cadastroFunc')->name('cadastroFunc');
Route::get('/funcionario/cadastro/pesquisar','App\Http\Controllers\Funcionario_Controller@pesqFunc')->name('pesqFunc');
Route::post('/funcionario/cadastro/pesquisar','App\Http\Controllers\Funcionario_Controller@pesqFunc')->name('pesqFunc');
Route::get('/funcionario/novoFuncionario','App\Http\Controllers\Funcionario_Controller@novoFunc')->name('novoFunc');
Route::post('/funcionario/novoFuncionario','App\Http\Controllers\Funcionario_Controller@storeFunc')->name('storeFunc');
Route::get('/funcionario/alterarFuncionario/{id}','App\Http\Controllers\Funcionario_Controller@alterarFunc')->name('alterarFunc');
Route::post('/funcionario/alterarFuncionario/{id}','App\Http\Controllers\Funcionario_Controller@updateFunc')->name('updateFunc');
Route::get('/funcionario/excluirFuncionario/{id}','App\Http\Controllers\Funcionario_Controller@excluirFunc')->name('excluirFunc');
Route::post('/funcionario/excluirFuncionario/{id}','App\Http\Controllers\Funcionario_Controller@deleteFunc')->name('deleteFunc');

//Escala
Route::get('/escala/cadastro','App\Http\Controllers\Escala_Controller@cadastroEscala')->name('cadastroEscala');
Route::get('/escala/novaEscalaMesAno','App\Http\Controllers\Escala_Controller@novaEscalaMesAno')->name('novaEscalaMesAno');
Route::post('/escala/novaEscalaMesAno','App\Http\Controllers\Escala_Controller@storeEscalaMesAno')->name('storeEscalaMesAno');
Route::get('/escala/visualizarEscala/{id}','App\Http\Controllers\Escala_Controller@visualizarEscala')->name('visualizarEscala');
Route::get('/escala/novaEscala/{id}','App\Http\Controllers\Escala_Controller@novaEscala')->name('novaEscala');
Route::post('/escala/novaEscala/{id}','App\Http\Controllers\Escala_Controller@storeEscala')->name('storeEscala');
Route::get('/escala/novaEscalaUTI/{id}','App\Http\Controllers\Escala_Controller@novaEscalaUTI')->name('novaEscalaUTI');
Route::get('/escala/novaEscalaUTI/{id}/novo/{id_escala}','App\Http\Controllers\Escala_Controller@novaEscalaUTI_novo')->name('novaEscalaUTI_novo');
Route::post('/escala/novaEscalaUTI/{id}/novo/{id_escala}','App\Http\Controllers\Escala_Controller@storeEscalaUTI')->name('storeEscalaUTI');
Route::get('/escala/visualizarEscalaUTI/{id}/{id_escala}','App\Http\Controllers\Escala_Controller@visualizarEscalaUTI')->name('visualizarEscalaUTI');
Route::get('/escala/excluirEscala/{id}','App\Http\Controllers\Escala_Controller@excluirEscala')->name('excluirEscala');
Route::post('/escala/excluirEscala/{id}','App\Http\Controllers\Escala_Controller@deleteEscala')->name('deleteEscala');
//frequencia
Route::get('/escala/frequenciaEscala/{id}','App\Http\Controllers\Frequencia_Controller@frequenciaEscala')->name('frequenciaEscala');
Route::get('/escala/frequenciaEscala/{id}/novo/{id_escala}/dia/{dia}','App\Http\Controllers\Frequencia_Controller@frequenciaEscala_novo')->name('frequenciaEscala_novo');
Route::post('/escala/frequenciaEscala/{id}/novo/{id_escala}/dia/{dia}','App\Http\Controllers\Frequencia_Controller@storeFrequenciaEscala_novo')->name('storeFrequenciaEscala_novo');
Route::post('/escala/frequenciaEscala/{id}','App\Http\Controllers\Frequencia_Controller@storeFrequencia')->name('storeFrequencia');

Route::get('/escala/frequenciaEscalaUTI/{id}','App\Http\Controllers\Frequencia_Controller@frequenciaEscalaUTI')->name('frequenciaEscalaUTI');
Route::get('/escala/frequenciaEscalaUTI/{id}/novo/{id_escala}','App\Http\Controllers\Frequencia_Controller@frequenciaEscalaUTI_novo')->name('frequenciaEscalaUTI_novo');
Route::get('/escala/frequenciaEscalaUTI/{id}/novo/{id_escala}/dia/{dia}','App\Http\Controllers\Frequencia_Controller@frequenciaEscalaUTI_novo_dia')->name('frequenciaEscalaUTI_novo_dia');
Route::post('/escala/frequenciaEscalaUTI/{id}/novo/{id_escala}/dia/{dia}','App\Http\Controllers\Frequencia_Controller@storeFrequenciaEscalaUTI_novo')->name('storeFrequenciaEscalaUTI_novo');
Route::get('/escala/frequenciaEscalaUTI/{id}/visualizarFrequenciaUTI/{id_escala}','App\Http\Controllers\Frequencia_Controller@visualizarFrequenciaUTI')->name('visualizarFrequenciaUTI');
//frequenciaRH
Route::get('/escala/frequenciaEscalaRH/cadastro','App\Http\Controllers\Frequencia_Controller@frequenciaEscalaRH_cadastro')->name('frequenciaEscalaRH_cadastro');
Route::get('/escala/frequenciaEscalaRH/{id}','App\Http\Controllers\Frequencia_Controller@frequenciaEscalaRH')->name('frequenciaEscalaRH');
Route::get('/escala/frequenciaEscalaRH/{id}/frequenciaEscalaExport','App\Http\Controllers\Frequencia_Controller@frequenciaEscalaExport')->name('frequenciaEscalaExport'); 

//Troca de Plantão
Route::get('/troca_plantao/cadastro','App\Http\Controllers\TrocaPlantao_Controller@cadastroTrocaP')->name('cadastroTrocaP');
Route::get('/troca_plantao/cadastro/visualizarTrocaPlantao','App\Http\Controllers\TrocaPlantao_Controller@visualizarTrocaP')->name('visualizarTrocaP');
Route::get('/troca_plantao/cadastro/novaTrocaPlantao','App\Http\Controllers\TrocaPlantao_Controller@novaTrocaP')->name('novaTrocaP');
Route::post('/troca_plantao/cadastro/novaTrocaPlantao','App\Http\Controllers\TrocaPlantao_Controller@storeTrocaP')->name('storeTrocaP');
Route::get('/troca_plantao/cadastro/cadastroTPSolicitante/{d}/{escala}','App\Http\Controllers\TrocaPlantao_Controller@cadastroTPSolicitante')->name('cadastroTPSolicitante');
});