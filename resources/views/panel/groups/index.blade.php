@extends('panel.layout')

@section('content-panel')

<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>Grupos</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <a href="{{route('groups.add')}}" class="btn btn-block btn-primary"><i class="fa fa-fw fa-plus"></i>Agregar nuevo grupo</a>

          </ol>

        </div>

      </div>

    </div>

  </section>

  <section class="content">

    <div class="card">

      <div class="card-body">

        <table class="table table-bordered table-hover tableGruops">

          <thead>

            <tr>
              <th style="width: 10px">#</th>
              <th>Nombre de tabla</th>
              <th>Usuario</th>
              <th>Tipo de prueba</th>
              <th>Numero de campos</th>
              <th>Fecha de creacion</th>
              <th>Acciones</th>
            </tr>

          </thead>

          <tbody>
            
            @foreach($items as $key => $value)
              <tr>
                <td>{{($key+1)}}</td>
                <td>{{$value->table_name}}</td>
                <td>{{\Helper::getUsers($value->user_id)->name }}</td>
                <td>{{ \Helper::getTest($value->typeTest_id)->name }}</td>
                <td>{{$value->count_field}}</td>
                <td>{{$value->created_at}}</td>
                <td>
                  <div class="btn-group">

                    <a href="#" class="btn btn-danger"><i class="fa fa-times"></i></a>

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

<script src="{{ asset('js/groups.js')}}"></script>

@stop