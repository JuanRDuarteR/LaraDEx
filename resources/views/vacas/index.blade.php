@extends('layouts.app')
@section('title', 'Vacas | Create')
@section('content')
 <div class="container">
    <h1>Vacas</h1>
    <nav class="navbar navbar-light float-right">
  
</nav>
    <a href="{{route('vacas.create')}}" class="btn btn-success">Agragar Vaca</a>
    <table class="table">
        <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Raza</th>
                <th>Origen</th>
                <th>Fecha de incorporacion</th>
                <th>Fecha de nacimiento</th>
                <th>Edad</th> 
                <th>Estatus</th>
        </thead>
        <tbody>
            @foreach ($vacas as $vaca)
            <tr>
                <td>{{$vaca->id}}</td>
                <td>{{$vaca->nombre}}</td>
                <td>{{$vaca->raza}}</td>
                <td>{{$vaca->origen}}</td>
                <td>{{$vaca->fecha_inc}}</td>
                <td>{{$vaca->fecha_nac}}</td>
                <td>{{$vaca->edad}}</td>
                <td>{{$vaca->estatus}}</td>
                <td>
                    <a href="{{route('vacas.edit', $vaca->id)}}" class="btn btn-sm btn-outline-info">Editar</a>
                    <form action="{{route('vacas.destroy', $vaca->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('segurolas?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $vacas->links() }}
    
 </div>

@endsection     