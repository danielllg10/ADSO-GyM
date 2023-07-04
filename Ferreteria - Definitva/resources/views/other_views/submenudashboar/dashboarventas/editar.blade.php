<form action="{{ url('/pag_dash_ventas/'.$venta->id) }}" method="POST">
    @csrf
    {{ method_field('PATCH') }}

    @include('other_views.submenudashboar.dashboarventas.formulario',['modo'=>'Editar']);
</form> 