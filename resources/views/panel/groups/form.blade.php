@extends('panel.layout')

@section('content-panel')

<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>{{ $group->id? 'Editar':'Nuevo' }} Grupo</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="clientes">Grupos</a></li>
            <li class="breadcrumb-item active">{{ $group->id? 'Editar':'Nuevo' }} grupo</li>

          </ol>

        </div>

      </div>

    </div>

  </section>

  <section class="content">

    <div class="card">

      <form action="{{route('groups.save', $group)}}" method="post">

      	{{ csrf_field() }}

        <div class="card-body">

          <div class="row">

            <div class="col-md-6">

              <label class="label-style" for="group_name">Nombre del grupo</label>

              <div class="input-group mb-3">

                  <div class="input-group-prepend">

                    <span class="input-group-text" onclick="getFocus('group_name')"><i class="fas fa-user"></i></span>

                  </div>

                  <input type="text" id="group_name" name="group_name" placeholder="Nombre del grupo" class="form-control form-control-lg capitalize" required value="">
                  <input type="hidden" name="user_id" value="1">
                  <input type="hidden" name="count_field" value="1">
              </div>

            </div>

             <div class="col-md-6">

              <label class="label-style" for="typeTest_id">Tipo de prueba</label>

              <div class="input-group mb-3">

                  <div class="input-group-prepend">

                    <span class="input-group-text" onclick="getFocus('name_group')"><i class="fas fa-user"></i></span>

                  </div>

                  <select name="typeTest_id" id="typeTest_id" class="form-control form-control-lg">

                    @if(!$group->id)

                      <option value="">-- Seleccione la prueba --</option>

                    @else

                      <option value="{{$group->id}}">{{\Helper::getTest($group->id)->name }}</option>
                    
                    @endif

                    @foreach (\Helper::getTest(0) as $value)
                      <option value="{{ $value['id'] }}">{{ $value->name }}</option>
                    @endforeach

                  </select>

              </div>

            </div>            

          </div>

        </div>

        <div class="card-footer">

          <div class="row">

            <div class="col-md-6">

              <button type="button" destino="category" class="btn btn-block btn-danger float-left cancelar">
                <i class="fa fa-fw fa-plus"></i> Cancelar
              </button>

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