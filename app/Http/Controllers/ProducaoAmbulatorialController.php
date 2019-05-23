<?php

namespace App\Http\Controllers;

use App\CeoUnidade;
use App\Municipio;
use App\Repositories\ProducaoAmbulatorialRepository;
use Illuminate\Http\Request;
use App\ProducaoAmbulatorial;
use App\TipoCeo;

class ProducaoAmbulatorialController extends Controller
{
    private $producaoAmbulatorialRepository;

    public function __construct(ProducaoAmbulatorialRepository $producaoAmbulatorialRepository)
    {
        $this->producaoAmbulatorialRepository = $producaoAmbulatorialRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      $ceoproducao = ProducaoAmbulatorial::take(100)->paginate(20);
        $municipios = Municipio::all();
        $unidades = CeoUnidade::all();
//        $relacaoTeste = CeoUnidade::find(1);
//        $relacaoTesteM = CeoUnidade::find(1);
        return view('ambulatorial.index',
            compact('unidades','municipios'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = request()->all();
        $data = $dados['ano'].$dados['mes'];
        $codigoUnidade = $dados['codigo_unidade'];
        $unidade = $this->producaoAmbulatorialRepository->dadosUnidade($codigoUnidade);
        $basicoUnidade = $this->producaoAmbulatorialRepository->totalBasico($codigoUnidade, $data);
        $periodontiaUnidade = $this->producaoAmbulatorialRepository->totalPeriodontia($codigoUnidade, $data);
        $endodontiaUnidade = $this->producaoAmbulatorialRepository->totalEndodontia($codigoUnidade, $data);
        $cirurgiaUnidade = $this->producaoAmbulatorialRepository->totalCirurgiaOral($codigoUnidade, $data);
        $restauradorUnidade = $this->producaoAmbulatorialRepository->totalRestaurador($codigoUnidade, $data);
        $molarUnidade = $this->producaoAmbulatorialRepository->totalMolar($codigoUnidade, $data);
        $metaEndo = $this->producaoAmbulatorialRepository->media($molarUnidade,$endodontiaUnidade);
        $metaAtencao = $this->producaoAmbulatorialRepository->media($restauradorUnidade,$basicoUnidade);
        return view('ambulatorial.resultado',
            compact( 'basicoUnidade',
             'periodontiaUnidade',
                'unidade',
                'endodontiaUnidade',
                'cirurgiaUnidade',
                'restauradorUnidade',
                'molarUnidade',
                'metaAtencao',
                'metaEndo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('ambulatorial.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
