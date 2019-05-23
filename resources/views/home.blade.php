@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="row ">
    <div class="col-sm-12">
        <div class="box box-success">
            <div class="box-header text-center">
                <h3 class="box-title ">Ceo Produção Manual</h3>
            </div>
            <div class="row ">
                <div class="col-md-3 col-sm-6 col-xs-12 col-sm-offset-1">
                    <div class="info-box">
                        <span class="glyphicon glyphicon-tasks info-box-icon bg-aqua"></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> Metas Cadastradas </span>
                            <span class="info-box-number" >50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="glyphicon glyphicon-tasks info-box-icon bg-lime"></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> Metas Alcançadas </span>
                            <span class="info-box-number">50%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="glyphicon glyphicon-tasks info-box-icon bg-navy"></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> Metas Alcançadas </span>
                            <span class="info-box-number">50%</span>
                        </div>
                </div>
            </div>
            </div>
        </div>
        <div class="box box-info">
            <div class="box-header text-center">
                <h3 class="box-title ">Ceo Ambulatorial Mês: <input type="text" value="Janeiro"></h3>
            </div>
            <div class="row ">
                <div class="col-md-3 col-sm-6 col-xs-12 col-sm-offset-3">
                    <div class="info-box">
                        <span class="glyphicon glyphicon-tasks info-box-icon bg-aqua"></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> Metas Alcançadas </span>
                            <span class="info-box-number">50%</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="glyphicon glyphicon-tasks info-box-icon bg-navy"></span>
                        <div class="info-box-content">
                            <span class="info-box-text"> Metas Alcançadas </span>
                            <span class="info-box-number">50%</span>
                        </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@stop