@extends('adminlte::page')

@section('title', 'Products')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Teste</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Preco</th>
                            <th>Estoque</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center" colspan="3">Nenhum produto encontrado</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
