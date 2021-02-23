@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header">Editar</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{route('update',$usuario->id)}}" method="post">
                    @csrf
                    @method('put')

                    <div class="form-group">
                      <label>Nombre </label>
                      <input type="text" class="form-control" name="nombre" value="{{$usuario->nombre}}" required>
                    </div>
                    <div class="form-group">
                      <label>Apellido </label>
                      <input type="text" class="form-control" name="apellido"value="{{$usuario->apellido}}" required>
                    </div>
                    <div class="form-group">
                      <label>Email </label>
                      <input type="email" class="form-control" name="email" value="{{$usuario->correo}}"required>
                    </div>
                    <div class="form-group">
                      <label>Telefono </label>
                      <input type="number" class="form-control" name="tel" value="{{$usuario->telefono}}"required>
                     
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </form>
                </div>
            </div>
    </div>
</div>
@endsection
