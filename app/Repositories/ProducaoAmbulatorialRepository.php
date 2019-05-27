<?php

namespace App\Repositories;

use App\CeoUnidade;
use App\Municipio;
use App\ProducaoAmbulatorial;
use App\Utils\ProcedimentosUtil;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ProducaoAmbulatorialRepository.
 */
class ProducaoAmbulatorialRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return ProducaoAmbulatorial::class;
    }
    public function totalUnidade($coduni){
        return ProducaoAmbulatorial::get()->where('PA_CODUNI','=', $coduni)->count();
    }
    public function totalBasico($coduni, $data){
        return ProducaoAmbulatorial::get()
            ->where('PA_CODUNI','=', $coduni)
            ->where('PA_CMP', '=', $data)
            ->whereIn('PA_PROC_ID', ProcedimentosUtil::basicos())
            ->count();
    }
    public function totalPeriodontia($coduni, $data){
        return ProducaoAmbulatorial::get()
            ->where('PA_CODUNI','=', $coduni)
            ->where('PA_CMP', '=', $data)
            ->whereIn('PA_PROC_ID', ProcedimentosUtil::periodontia())
            ->count();
    }
    public function totalEndodontia($coduni, $data){
        return ProducaoAmbulatorial::get()
            ->where('PA_CODUNI','=', $coduni)
            ->where('PA_CMP', '=', $data)
            ->whereIn('PA_PROC_ID', ProcedimentosUtil::endodontia())
            ->count();
    }
    public function totalCirurgiaOral($coduni, $data){
        return ProducaoAmbulatorial::get()
            ->where('PA_CODUNI','=', $coduni)
            ->where('PA_CMP', '=', $data)
            ->whereIn('PA_PROC_ID', ProcedimentosUtil::cirurgiaOral())
            ->count();
    }
    public function totalRestaurador($coduni, $data){
        return ProducaoAmbulatorial::get()
            ->where('PA_CODUNI','=', $coduni)
            ->where('PA_CMP', '=', $data)
            ->whereIn('PA_PROC_ID', ProcedimentosUtil::restauradores())
            ->count();
    }
    public function totalMolar($coduni, $data){
        return ProducaoAmbulatorial::get()
            ->where('PA_CODUNI','=', $coduni)
            ->where('PA_CMP', '=', $data)
            ->whereIn('PA_PROC_ID', ProcedimentosUtil::molares())
            ->count();
    }
    public function media($num1, $num2){
        if($num1 && $num2){
            $calculo = number_format(($num1/$num2)*100,2,'.','' )."%";
            return $calculo;
        }return 0;
    }
    public function dadosUnidade($coduni){
        return CeoUnidade::where('codigo_unidade','=', $coduni)->first();
    }
}
