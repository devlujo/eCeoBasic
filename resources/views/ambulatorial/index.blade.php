@extends('adminlte::page')

@section('title', 'CeoProducoes')

@section('content_header')
    <h1>Ceo Ambulatorial 2018</h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box ">
        <div class="box-header">
            <div class="box-title">Filtros</div>
        </div>
        <form class="form-inline" action="{{ route('ambulatorial.store')  }}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
            <label for="">Codigo da Unidade</label>
            <select class="form-control" name="codigo_unidade">
                @foreach($unidades as $unidade)
                    <option value="{{ $unidade->codigo_unidade }}">{{ $unidade->codigo_unidade }}</option>
                @endforeach
            </select>
            </div>
        <div class="form-group">
            <label for="">Mês</label>
            <select class="form-control" name="mes">
            <option value="01">Janeiro</option>
            <option value="02">Fevereiro</option>
            <option value="03">Março</option>
            <option value="04">Abril</option>
            <option value="05">Maio</option>
            <option value="06">Junho</option>
            <option value="07">Julho</option>
            <option value="08">Agosto</option>
            <option value="09">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Ano</label>
            <select class="form-control" name="ano">
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            </select>
        </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
        <br>
        </div>
    </div>
</div>



{{--<div class="row">--}}
{{--    <div class="table">--}}
{{--        <table class="table">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>nome</th>--}}
{{--            <th>codigo</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($municipios as $muni)--}}
{{--            <tr>--}}
{{--                <td>{{ $muni->nome }}</td>--}}
{{--                <td>{{ $muni->codigo }}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="row">--}}
{{--    --}}
{{--    <div class="table">--}}
{{--            <table class="table" id="mytable">--}}
{{--                <thead>--}}
{{--                    <tr>--}}
{{--                        <th>Codigo Unidade 1</th>--}}
{{--                        <th>Procedimento</th>--}}
{{--                        <th>Data</th>--}}
{{--                        <th>UF Municipio</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    @foreach($ceoproducao as $ceop)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $ceop->PA_CODUNI }} </td>--}}
{{--                        <td>{{ $ceop->PA_PROC_ID }} </td>--}}
{{--                        <td>{{ $ceop->PA_CMP }} </td>--}}
{{--                        <td>{{ $ceop->PA_UFMUN }} </td>--}}
{{--                    </tr>--}}
{{--                    @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--              {{ $ceoproducao->links() }}--}}
{{--        </div>--}}

{{--</div>--}}


@stop
