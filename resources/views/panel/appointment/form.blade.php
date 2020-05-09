@extends('panel.layout')

@section('content-panel')

<div class="content-wrapper">

  <section class="content-header">

    <div class="container-fluid">

      <div class="row mb-2">

        <div class="col-sm-6">

          <h1>{{ $action }} Cita</h1>

        </div>

        <div class="col-sm-6">

          <ol class="breadcrumb float-sm-right">

            <li class="breadcrumb-item"><a href="">Citas</a></li>
            <li class="breadcrumb-item active">Editar Cita</li>

          </ol>

        </div>

      </div>

    </div>

  </section>

  <section class="content">

    <div class="card">

      <form action="{{route('appointment.save',$appointment)}}" method="post">

      	{{ csrf_field() }}

        <div class="card-body">

          <div class="row">

            <div class="col-md-6">

            <label class="label-style" for="expiration_date">Clientes</label>

              <div class="input-group mb-3">

                <div class="input-group-prepend">

                    <span class="input-group-text"><i class="fas fa-user"></i></span>

                </div>
                <select name="client" id="client" class="form-control form-control-lg">
                  <option value="">-- Seleccione un cliente --</option>
                  @foreach ($clients as $client)
                    @if($appointment->clientid == $client->id)
                      <option value="{{ $client['id'] }}" selected>{{ $client['name'] }} {{ $client['lastname'] }}</option>
                      
                      @else 
                      <option value="{{ $client['id'] }}">{{ $client['name'] }} {{ $client['lastname'] }}</option>
                    @endif
                  @endforeach
                </select>

              </div>
            </div>
            <div class="col-md-6">

            <label class="label-style" for="expiration_date">Tipos de prueba</label>

              <div class="input-group mb-3">

                <div class="input-group-prepend">

                    <span class="input-group-text"><i class="fas fa-vials"></i></span>

                </div>
                <select name="testtype" id="testtype" class="form-control form-control-lg">
                  <option value="">-- Seleccione una prueba --</option>
                  @foreach ($testtypes as $testtype)
                    @if($appointment->testtypeid == $testtype->id)
                    <option value="{{ $testtype['id'] }}" selected>{{ $testtype['name'] }}</option>
                    @else
                    <option value="{{ $testtype['id'] }}">{{ $testtype['name'] }}</option>
                    @endif
                  @endforeach
                </select>

              </div>
            </div>
           

            <div class="col-md-6">

            <label class="label-style" for="expiration_date">Tipos de muestra</label>

              <div class="input-group mb-3">

                <div class="input-group-prepend">

                    <span class="input-group-text"><i class="fas fa-syringe"></i></span>

                </div>
                <select name="samplestype" id="samplestype" class="form-control form-control-lg">
                  <option value="">-- Seleccione una muestra --</option>
                  @foreach ($samplestypes as $samplestype)
                    @if($appointment->samplestypeid == $samplestype->id)
                    <option value="{{ $samplestype['id'] }}" selected>{{ $samplestype['name'] }}</option>
                    @else
                    <option value="{{ $samplestype['id'] }}">{{ $samplestype['name'] }}</option>
                    @endif
                  @endforeach
                </select>

              </div>
            </div>

            <div class="col-md-6">

              <label class="label-style" for="appointmentdate">Fecha de cita</label>

              <div class="input-group mb-3">

                  <div class="input-group-prepend">

                    <span class="input-group-text" onclick="getFocus('appointmentdate')"><i class="fas fa-calendar"></i></span>

                  </div>
                   
                    <input type="date"  id="appointmentdate" name="appointmentdate" placeholder="appointmentdate" class="form-control form-control-lg" required value="{{$appointment->appointmentdate}}">
                   

              </div>

            </div>

            <div class="col-md-6">

              <label class="label-style" for="hour">Hora</label>

              <div class="input-group mb-3">

                  <div class="input-group-prepend">

                    <span class="input-group-text" onclick="getFocus('hour')"><i class="fas fa-clock"></i></span>

                  </div>

                  <input type="time" id="hour" name="hour" placeholder="hour" class="form-control form-control-lg" required value="{{$appointment->hour}}">

              </div>

            </div>

          </div>

        </div>

        <div class="card-footer">

          <div class="row">

            <div class="col-md-6">

            <a href="{{route('appointment')}}" class="btn btn-block btn-danger float-left cancelar">
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