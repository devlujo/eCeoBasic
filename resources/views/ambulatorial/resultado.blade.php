@extends('adminlte::page')

@section('title', 'ProducaoUnidade')

@section('content_header')
    <h1>Produção da unidade: </h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Resultado: {{ $unidade->tipo_id }} Teste Municipio: {{ $unidade->municipio->nome }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Endodontia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input type="text" value="{{ $unidade->tipo->endodontia }}" >
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value="{{ $endodontiaUnidade }}" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Periodontia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input value="{{ $unidade->tipo->periodontia }}" type="text">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value=" {{ $periodontiaUnidade }} " type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Cirurgia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input value="{{ $unidade->tipo->cirurgia }}" type="text">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value="{{ $cirurgiaUnidade }}" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <div class="box-title">
                                    Atenção Básica (Pacientes Especiais)
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Prodecimentos Minimos: <input value="{{ $unidade->tipo->basico }}" type="text">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Portaria 1464: <input value="{{ $basicoUnidade }}" type="text">
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Resultado:
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <div class="box-title">
                                    Atenção Básica Pacientes Especiais
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Procedimentos: <input type="text" class="text-center" value=" {{ $basicoUnidade }} ">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Proc. Restauradores <input type="text" class="text-center" value=" {{ $restauradorUnidade }} ">
                                        </label>
                                    </div>
                                </div>
                                <br>

                                <!-- RETIRAR O LABEL DE TODOS OS CAMPOS ENGLOBANDO TODO O INPUT-->

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <label for="">
                                            META:</label> <input type="text" class="text-center " value="{{ $metaAtencao }}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-solid box-primary">
                            <div class="box-header">
                                <div class="box-title">
                                    Endodontia
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Procedimentos: <input class="text-center" type="text" value="{{ $endodontiaUnidade }}">
                                        </label>
                                    </div>
                                    <div class="col-md-6 text-center">
                                        <label for="">
                                            Total Proc. Molares <input  class="text-center" type="text" value="{{ $molarUnidade }}">
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <label for="">
                                            META:</label> <input type="text" class="text-center " value="{{ $metaEndo }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
