<form action="{{ url('pag_dash_ventas') }}" method="post">
    @csrf
    @include('other_views.submenudashboar.dashboarventas.formulario',['modo'=>'Crear']);
</form>