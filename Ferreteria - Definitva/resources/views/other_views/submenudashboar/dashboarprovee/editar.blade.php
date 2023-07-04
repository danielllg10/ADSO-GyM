<form action="{{ url('/pag_dash_provee/' . $proveedor->id) }}" method="POST">
    @csrf
    {{ method_field('PATCH') }}
    @if (session()->has('mensaje'))
        <div class="alert alert-primary" role="alert">
            {{ session()->get('mensaje') }}
        </div>
    @endif

    @include('other_views.submenudashboar.dashboarprovee.formulario', ['modo' => 'Editar']);
</form>
