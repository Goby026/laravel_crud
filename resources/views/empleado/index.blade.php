@extends('layouts.app')

@section('content')

@if (Session::has('mensaje'))
    <p>{{ Session::get('mensaje') }}</p>
@endif

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <h2>Hola esta es mi aplicación de laravel</h2>
            <a href="{{ url('empleado/create') }}">Registrar empleado</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellido Paterno</th>
                        <th scope="col">Apellido Materno</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Foto</th>
                        <th colspan="2" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->Nombre }}</td>
                            <td>{{ $empleado->Apellido_pat }}</td>
                            <td>{{ $empleado->Apellido_mat }}</td>
                            <td>{{ $empleado->Correo }}</td>
                            <td>
                                <img src="{{ asset('storage').'/'.$empleado->Foto }}" class="img img-fluid" style="width: 60px;" alt="">
                            </td>
                            <td><a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">Editar</a></td>
                            <td>
                                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" onClick="return confirm('¿Deseas eliminar el registro?')" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
