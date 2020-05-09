@extends('panel.layout')

@section('content-panel')

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1>Citas</h1>

                </div>

                <div class="col-sm-6">

                    <ol class="breadcrumb float-sm-right">

                        <a href="{{route('appointment.add')}}" class="btn btn-block btn-primary"><i
                                class="fa fa-fw fa-plus"></i>Agendar cita</a>

                    </ol>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="card">

            <div class="card-body">

                <table class="table table-bordered table-hover tableAppointment">

                    <thead>

                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Cliente</th>
                            <th>Tipo de prueba</th>
                            <th>Tipo de muestra</th>
                            <th>Fecha de cita</th>
                            <th>Hora</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>

                    <tbody>

                        @foreach($items as $key => $value)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                @foreach($clients as $client)
                                @if($value->clientid == $client->id)
                                {{$client->name}} {{$client->lastname}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($testtypes as $testtype)
                                @if($value->testtypeid == $testtype->id)
                                {{$testtype->name}}
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($samplestypes as $samplestype)
                                @if($value->samplestypeid == $samplestype->id)
                                {{$samplestype->name}}
                                @endif
                                @endforeach
                            </td>
                            <td>{{$value->appointmentdate}}</td>
                            <td>{{$value->hour}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('appointment.edit',$value->id)}}" class="btn btn-warning"><i
                                            class="fa fa-eye"></i></a>
                                    <button id="delete" AppointmentId="{{$value->id}}" class="btn btn-danger"><i
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

<script src="{{ asset('js/appointment.js')}}"></script>

@stop