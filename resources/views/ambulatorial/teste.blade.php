@extends('adminlte::page')

@section('title', 'CeoProducoes')

@section('content_header')
    <h1>CEO</h1>
    <span>Produção Ambulatoria Ministrério da Saúde.</span>
@stop

@section('content')

<div class="container">

    <form class="form-inline" action="index.html" method="post">
      <div class="form-group">
        <label for="">Filtro </label>
        <input  class="form-control" type="text" name="filtroum" value="">
      </div>

      <div class="form-group">
        <label for="">Filtro 2</label>
        <input class="form-control" type="text" name="filtrodois" value="">
      </div>

      <div class="form-group">
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Filtrar</button>
          </div>
          <div class="form-group">
              <a class="btn btn-default" href="{{route('ceoproducoes.index')}}">Limpar</a>
          </div>
      </div>
    </form>

<hr>

<div class="table">
        <table class="table" id="mytable">
            <thead>
                <tr>
                    <th>Codigo Unidade 1</th>
                    <th>Codigo Gestao</th>
                    <th>Condição</th>
                    <th>UF Municipio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ceoproducao as $ceop)
                <tr>
                    <td>{{ $ceop->PA_CODUNI }} </td>
                    <td>{{ $ceop->PA_GESTAO }} </td>
                    <td>{{ $ceop->PA_CONDIC }} </td>
                    <td>{{ $ceop->PA_UFMUN }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
          {{ $ceoproducao->links() }}
    </div>


  </div>
@stop















@extends('adminlte::page')
@section('title', 'Credenciados')

@section('content_header')
    <h1>Lista de Credenciados</h1>
@stop
@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{ Session::get('message') }}
</div>  
@endif
<div class="" style="background-color: #f9fafc; padding: 10px  ">
    <form class="form-horizontal">
            <div class="form-group">
                    <label class="control-label col-sm-2 col-sm-offset-1">Nome</label>
                    <div class="col-sm-7">
                    <input type="text" class=" form-control" name="nome" placeholder="Nome" value="{{ old('nome') }}">
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2 col-sm-offset-1">CPF</label>
                    <div class="col-sm-7">
                    <input type="text" class=" form-control" name="cpf"  placeholder="CPF">
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2 col-sm-offset-1">Graduação</label>
                        <div class="col-sm-7">
                        <select class="form-control" name="graduacao_id">
                            <option value="">Selecione</option>
                            @foreach($graduacao as $grad)
                                <option value="{{$grad->id}}">
                                    {{$grad->titulo}}
                                </option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2 col-sm-offset-1">Área de Conhecimento</label>
                        <div class="col-sm-7">
                        <select class="form-control" name="areaconhecimento_id">
                            <option value="">Selecione</option>
                            @foreach($areaconhecimento as $areac)
                                <option value="{{$areac->id}}">
                                    {{$areac->titulo}}
                                </option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-sm-2 col-sm-offset-1">Curso Técnico</label>
                        <div class="col-sm-7">
                        <select class="form-control" name="cursotecnico_id">
                            <option value="">Selecione</option>
                            @foreach($cursotecnico as $curso)
                                <option value="{{$curso->id}}">
                                    {{$curso->titulo}}
                                </option>
                            @endforeach
                        </select>
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-5  col-sm-1">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
                <div class=" col-sm-1">
                    <a class="btn btn-default" href="{{route('credenciados.index')}}">Limpar</a>
                </div>
            </div>
    </form>
</div>

<br>
    <div class="">
        <table class="table" id="mytable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CPF</th>
                    <th>Fone</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                <tr>
                    <td>{{ $registro->id }} </td>
                    <td>{{ $registro->nome }} </td>
                    <td>{{ $registro->email }} </td>
                    <td>{{ $registro->cpf }} </td>
                    <td>{{ $registro->fone_um }} </td>
                    <td>
                    <a href="{{ route('credenciados.editar', $registro->id) }}"><span class="glyphicon glyphicon-pencil"  aria-hidden="true" style="color:#6ed3d3"></span></a>
                    &ensp;
                    <a href="{{ route('credenciados.gerarpdf', $registro->id) }}"><span class="fa  fa-file-pdf-o"  aria-hidden="true" style="color: red"></span></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@stop



<!--  CONTROLLER
    
public function index()
    {
        $graduacao = Graduacao::all();
        $cursotecnico = Cursotecnico::all();
        $areaconhecimento = Areaconhecimento::orderBy('titulo', 'ASC')->get();
        $filtros = request()->all();
        $dados = Credenciado::orderBy('id', 'ASC');
        
        if (!empty($filtros["nome"])) {
            $dados->where("nome", "LIKE", "%" . $filtros["nome"] . "%");
        }
        if (!empty($filtros["cpf"])) {
            $dados->where("cpf", "LIKE", "%" . $filtros["cpf"] . "%");
        }
        if (!empty($filtros["graduacao_id"])) {
            $dados->where("graduacao_id",  $filtros["graduacao_id"] . "%");
        }
        if (!empty($filtros["cursotecnico_id"])) {
            $dados->where("cursotecnico_id",  $filtros["cursotecnico_id"] . "%");
        }
        if (!empty($filtros["areaconhecimento_id"])) {
            $dados->where("areaconhecimento_id",  $filtros["areaconhecimento_id"] . "%");
        }

        $registros = $dados->get();

        return view('credenciados.index', compact('registros', 'graduacao', 'cursotecnico', 'areaconhecimento') );
-->




<div class="container">

    <form class="form-inline" action="index.html" method="post">
      <div class="form-group">
        <label for="">Filtro </label>
        <input  class="form-control" type="text" name="filtroum" value="">
      </div>

      <div class="form-group">
        <label for="">Filtro 2</label>
        <input class="form-control" type="text" name="filtrodois" value="">
      </div>

      <div class="form-group">
          <div class="form-group">
              <button type="submit" class="btn btn-primary">Filtrar</button>
          </div>
          <div class="form-group">
              <a class="btn btn-default" href="{{route('ceoproducoes.index')}}">Limpar</a>
          </div>
      </div>
    </form>

<hr>

<div class="table">
        <table class="table" id="mytable">
            <thead>
                <tr>
                    <th>Codigo Unidade 1</th>
                    <th>Codigo Gestao</th>
                    <th>Condição</th>
                    <th>UF Municipio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ceoproducao as $ceop)
                <tr>
                    <td>{{ $ceop->PA_CODUNI }} </td>
                    <td>{{ $ceop->PA_GESTAO }} </td>
                    <td>{{ $ceop->PA_CONDIC }} </td>
                    <td>{{ $ceop->PA_UFMUN }} </td>
                </tr>
                @endforeach
            </tbody>
        </table>
          {{ $ceoproducao->links() }}
    </div>


  </div>