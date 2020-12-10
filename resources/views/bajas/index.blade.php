@extends('layouts.app')
@section('title', 'Vacas | Bajas')
@section('content')
 <div class="container">
    <h1>Bajas</h1>
    <nav class="navbar navbar-light float-right">
  
</nav>
    <a href="{{route('bajas.create')}}" class="btn btn-success">Dar de baja una Vaca</a>
    <table class="table">
        <thead>
                <th>Id</th>
                <th>Id_vaca</th>
                <th>Fecha baja</th>
                <th>Causa</th>
                <th>Id_enfermedad</th>
                <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($bajas as $baja)
            <tr>
                <td>{{$baja->id}}</td>
                <td>{{$baja->id_vaca}}</td>
                <td>{{$baja->fecha_baja}}</td>
                <td>{{$baja->causa}}</td>
                <td>{{$baja->id_enfermedad}}</td>
                <td>
                    
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
    {{ $bajas->links() }}
    
 </div>

@endsection  