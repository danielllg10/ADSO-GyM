<form action="{{ url('/pag_dash_productos/'.$producto->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
     
    @include('other_views.submenudashboar.dashboarproductos.formulario',['modo'=>'Editar']);
    
    </form>