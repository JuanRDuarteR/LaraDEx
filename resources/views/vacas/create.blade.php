@extends('layouts.app')
@section('title', 'Vacas123|Crear')
@section('content')
<form  class="form-group" method="POST" action="/vacas">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputname">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputraza">Raza</label>
      <input type="text" class="form-control" name="raza">
    </div>
    <div class="form-group col-md-4">
      <label for="inputOrigen">Origen</label>
      <input type="text" class="form-control" name="origen">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputFecha_nac">Fecha Nacimiento</label>
      <input type="date" class="form-control" name="fecha_nac">
    </div>
    <div class="form-group col-md-4">
      <label for="inputFecha_inc">Fecha Incorporacion</label>
      <input type="date" class="form-control" name="fecha_inc">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEdad">Edad</label>
      <input type="text" class="form-control" name="edad">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEstatus">Estatus</label>
      <input type="text" class="form-control" name="estatus">
    </div>
    
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>


    
@endsection