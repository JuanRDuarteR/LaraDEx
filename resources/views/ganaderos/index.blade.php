@extends('layouts.app')
@section('title', 'Ganaderos Create')
@section('content')
 <div class="container">
    <h1>Ganaderos</h1>
    <nav class="navbar navbar-light float-right">
  
</nav>
    <a href="{{route('ganaderos.create')}}" class="btn btn-success">Agragar ganadero</a>
    <table class="table">
        <thead>
                <th>Id</th>
                <th>RFC</th>
                <th>Nombre</th>
                <th>Apellido_P</th>
                <th>Apellido_M</th>
                <th>Predio</th>
                <th>Acciones</th> 
        </thead>
        <tbody>
            @foreach ($ganaderos as $ganadero)
            <tr>
                <td>{{$ganadero->id}}</td>
                <td>{{$ganadero->RFC}}</td>
                <td>{{$ganadero->nombre}}</td>
                <td>{{$ganadero->apellido_p}}</td>
                <td>{{$ganadero->apellido_m}}</td>
                <td>{{$ganadero->predio}}</td>
                <td>
                    <a href="{{route('ganaderos.edit', $ganadero->id)}}" class="btn btn-sm btn-outline-info">Editar</a>
                    <form action="{{route('ganaderos.destroy', $ganadero->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('segurolas?')" value="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $ganaderos->links() }}
    
 </div>

@endsection      
        
        
        
        
        
        