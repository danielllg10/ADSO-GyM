<form action="{{ url('/pag_dash_productos')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('other_views.submenudashboar.dashboarproductos.formulario',['modo'=>'Crear']);
    
    
    
    </form>