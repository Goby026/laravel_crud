
<style>
    .form{
        align-items: center;

        display: flex;
        flex-direction: column;
        height: 100vh;
        justify-content: center;

        width: 100%;
    }

    .form form{
        display: flex;
        flex-direction: column;
        width: 350px;
    }
    .elemento{
        margin-bottom: 1rem;
    }
</style>

<h2>Formulario de edicion de empleado</h2>

<div class="form">
    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        @include('empleado.form', ['modo'=>'Actualizar'])
    </form>
</div>

