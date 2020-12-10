@extends('layouts.app')
@section('title', 'Ganaderos Update')
@section('content')
<div class="row">
        <div class="container">
            <div class="col">
                <h1 class="text-center">Editando: {{$ganadero->nombre}}</h1>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('ganaderos.update', $ganadero->id)}}" method="post">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" value="{{$ganadero->nombre}}" type="text" name="nombre">
                            </div>
                            <div class="form-group">
                                <label>Apellido Paterno</label>
                                <input class="form-control" value="{{$ganadero->apellido_p}}" type="text" name="apellido_p">
                            </div>
                            <div class="form-group">
                                <label>Apellido Materno</label>
                                <input class="form-control" value="{{$ganadero->apellido_m}}" type="text" name="apellido_m">
                            </div>
                            <div class="form-group">
                                <label>RFC</label>
                                <input class="form-control" value="{{$ganadero->RFC}}" type="text" name="RFC">
                            </div>
                            <div class="form-group">
                                <label>Predio</label>
                                <input class="form-control" value="{{$ganadero->predio}}" type="text" name="predio">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" type="submit" value="Guardar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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