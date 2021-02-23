@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header">Usuarios <a href='{{route('create')}}' class="btn btn-primary float-right">Crear</a></div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                        <tr>
                            <th>{{$usuario->nombre}}</th>
                            <td>{{$usuario->apellido}}</td>
                            <td>{{$usuario->correo}}</td>
                            <td>{{$usuario->telefono}}</td>
                            <td>
                                <a href="{{route('edit',$usuario->id)}}" class="btn btn-warning">Editar</a>
                                <form method="POST" action="{{ route('destroy',$usuario->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                  </form>

                            </td>
                        </tr>
                        @endforeach
                    
                    </tbody>
                  </table>
                </div>
            </div>
    </div>
</div>
@endsection
