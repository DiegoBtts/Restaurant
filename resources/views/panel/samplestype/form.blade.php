@extends('panel.layout')

@section('content-panel')

<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>{{ $action }} muestra</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="muestras">Tipos de Muestras</a></li>
            <li class="breadcrumb-item active">Crear Muestra</li>

          </ol>

        </div>

      </div>

    </div>

  </section>

  <section class="content">

    <div class="card">

      <form action="{{route('samplestype.save',$samplestype)}}" method="post">

      	{{ csrf_field() }}

        <div class="card-body">

          <div class="row">

            <div class="col-md-6">

              <label class="label-style" for="name">Nombre</label>

              <div class="input-group mb-3">

                  <div class="input-group-prepend">

                    <span class="input-group-text" onclick="getFocus('name')"><i class="fas fa-user"></i></span>

                  </div>

                  <input type="text" id="name" name="name" placeholder="Nombre" class="form-control form-control-lg capitalize" required value="{{$samplestype->name}}">
                  <input type="hidden" name="tipo" value="0">

              </div>

            </div>

            <div class="col-md-6">

              <label class="label-style" for="description">Descripcion</label>

              <div class="input-group mb-3">

                  <div class="input-group-prepend">

                    <span class="input-group-text" onclick="getFocus('description')"><i class="fas fa-user"></i></span>

                  </div>

                  <input type="text" id="description" name="description" placeholder="Descripcion" class="form-control form-control-lg" required value="{{$samplestype->description}}">

              </div>

            </div>


        <div class="card-footer">

          <div class="row">

            <div class="col-md-6">

            <a href="{{route('samplestype')}}" class="btn btn-block btn-danger float-left cancelar">
                <i class="fa fa-fw fa-plus"></i> Cancelar
              </a>

            </div>

            <div class="col-md-6">

              <button type="submit" class="btn btn-block btn-success float-right">
                <i class="fa fa-fw fa-plus"></i> Guardar
              </button>

            </div>

          </div>

        </div>

      </form>

    </div>

  </section>

</div>

@stop