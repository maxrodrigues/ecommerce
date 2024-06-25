@extends('adminlte::page')

@section('title', 'Products')

@section('content')
    <div class="row">
        <div class="col-12 my-3">
            <a href="{{ route('admin.products.create') }}" class="btn btn-success">
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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th style="width: 20px;" class="text-center">#</th>
                            <th>Name</th>
                            <th>Preco</th>
                            <th>Estoque</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($products as $product)
                            <tr>
                                <td>
                                    <a href="#" class="mx-1">
                                        <i class="fa fas fa-trash text-danger"></i>
                                    </a>
                                    <a href="#" class="mx-1">
                                        <i class="fa fas fa-eye text-info"></i>
                                    </a>
                                    <a href="#" class="mx-1">
                                        <i class="fa fas fa-pen text-success"></i>
                                    </a>
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="3">Nenhum produto encontrado</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@stop
