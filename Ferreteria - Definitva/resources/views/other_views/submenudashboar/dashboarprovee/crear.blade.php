<form action="{{ url('pag_dash_provee') }}" method="post">
    @csrf
    @include('other_views.submenudashboar.dashboarprovee.formulario',['modo'=>'Crear'])
</form>