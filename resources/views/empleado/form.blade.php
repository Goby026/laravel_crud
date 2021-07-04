
@if (isset($empleado))
    {{-- <h3 style="text-align: center;">Formulario de registro</h3> --}}

    <label for="nombre">Nombres</label>
    <input class="elemento" type="text" name="Nombre" id="nombre" value="{{ $empleado->Nombre }}">

    <label for="apellidop">Apellido Paterno</label>
    <input class="elemento" type="text" name="Apellido_pat" id="apellidop" value="{{ $empleado->Apellido_pat }}">

    <label for="apellidom">Apellido Materno</label>
    <input class="elemento" type="text" name="Apellido_mat" id="apellidom" value="{{ $empleado->Apellido_mat }}">

    <label for="email">Email</label>
    <input class="elemento" type="email" name="Correo" id="email" value="{{ $empleado->Correo }}">

    <label for="imagen">Imagen</label>
    <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="">
    <input class="elemento" type="file" name="Foto" id="imagen" value="{{ $empleado->Foto }}">

    <button type="submit">{{ $modo }}</button>
@else
    {{-- <h3 style="text-align: center;">Formulario de registro</h3> --}}

    <label for="nombre">Nombres</label>
    <input class="elemento" type="text" name="Nombre" id="nombre" value="">

    <label for="apellidop">Apellido Paterno</label>
    <input class="elemento" type="text" name="Apellido_pat" id="apellidop" value="">

    <label for="apellidom">Apellido Materno</label>
    <input class="elemento" type="text" name="Apellido_mat" id="apellidom" value="">

    <label for="email">Email</label>
    <input class="elemento" type="email" name="Correo" id="email" value="">

    <label for="imagen">Imagen</label>
    <input class="elemento" type="file" name="Foto" id="imagen" value="">

    <button type="submit">{{ $modo }}</button>

@endif

<a href="{{ url('empleado/') }}">Volver</a>
