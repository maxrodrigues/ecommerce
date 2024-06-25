@extends('adminlte::page')

@section('title', 'Products')

@section('content')
    <div class="row">
        <div class="col-12 my-3">
            <a href="#" class="btn btn-success">
                <i class="fas fa-plus"></i> Cadastrar Novo
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Produtos</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" id="name" placeholder="Nome do Produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="name">Preço</label>
                                <input type="text" class="form-control" id="name" placeholder="Nome do Produto">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <label for="name">Estoque</label>
                                <input type="text" class="form-control" id="name" placeholder="Nome do Produto">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Descricão</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="image">Imagem</label>
                                <div class="input-group">
                                    <input type="file" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Selecionar imagem</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@stop
