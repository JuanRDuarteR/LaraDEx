@extends('layouts.app')
@section('title', 'Ganaderos Create')
@section('content')
<form  class="form-group" method="POST" action="/ganaderos">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" name="nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Apellido Paterno</label>
      <input type="text" class="form-control" name="apellido_p">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Apellido Materno</label>
      <input type="text" class="form-control" name="apellido_m">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">RFC</label>
    <input type="text" class="form-control" name="RFC" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Predio</label>
    <input type="text" class="form-control" name="predio" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Telefono</label>
      <input type="text" class="form-control" name="telefono">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Correo</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Durango</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>


    
@endsection