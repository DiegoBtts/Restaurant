@extends('panel.layout')

@section('content-panel')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Inventario</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <a href="{{route('product.add')}}" class="btn btn-block btn-primary"><i
                                class="fa fa-fw fa-plus"></i>Agregar Producto</a>

                    </ol>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="card">

            <div class="card-body">

                <table class="table table-bordered table-hover tableProduct">

                    <thead>

                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nombre</th>
                            <th>Precio de Compra</th>
                            <th>Stock</th>
                            <th>Categoria</th>
                            <th>Fecha de Expiracion</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach($items as $key => $value)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$value->name}}</td>
                            <td>${{$value->purchase_price}}</td>
                            <td>{{$value->stock}}</td>
                            <td>{{\Helper::getCategories($value->id)->name}}</td>
                            <td>{{$value->expiration_date}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('product.edit',$value->id)}}" class="btn btn-warning"><i
                                            class="fa fa-eye"></i></a>
                                    <button id="delete" ProductId="{{$value->id}}" class="btn btn-danger"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                        @endforeach


                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>

<script src="{{ asset('js/product.js')}}"></script>

@stop