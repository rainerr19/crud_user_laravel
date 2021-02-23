@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header">Crear</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form action="{{route('store')}}" method="post">
                    @csrf
                    <div class="form-group">
                      <label>Nombre </label>
                      <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="form-group">
                      <label>Apellido </label>
                      <input type="text" class="form-control" name="apellido" required>
                    </div>
                    <div class="form-group">
                      <label>Email </label>
                      <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                      <label>Telefono </label>
                      <input type="number" class="form-control" name="tel" required>
                     
                    </div>
                   
                   
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </form>
                </div>
            </div>
    </div>
</div>
@endsection
