@extends('layouts.app')
@section('title', 'Vacas | Update')
@section('content')
<div class="row">
        <div class="container">
            <div class="col">
                <h1 class="text-center">Editando: {{$vaca->nombre}}</h1>
            </div>
            
                        <form action="{{route('vacas.update', $vaca->id)}}" method="post">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputname">Nombre</label>
      <input type="text" class="form-control" name="nombre" value="{{$vaca->nombre}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputraza">Raza</label>
      <input type="text" class="form-control" name="raza" value="{{$vaca->raza}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputOrigen">Origen</label>
      <input type="text" class="form-control" name="origen" value="{{$vaca->origen}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputFecha_nac">Fecha Nacimiento</label>
      <input type="date" class="form-control" name="fecha_nac" value="{{$vaca->fecha_nac}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputFecha_inc">Fecha Incorporacion</label>
      <input type="date" class="form-control" name="fecha_inc" value="{{$vaca->fecha_inc}}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEdad">Edad</label>
      <input type="text" class="form-control" name="edad" value="{{$vaca->edad}}">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEstatus">Estatus</label>
      <input type="text" class="form-control" name="estatus" value="{{$vaca->estatus}}">
    </div>
    <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Guardar">
                            </div>
                        </form>
            @if($errors->any()) 
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>
    </div>
    
@endsection