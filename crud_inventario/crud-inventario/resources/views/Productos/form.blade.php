Formulario que tendra los datos en comun con create y edit

<h1> {{ $modo}} producto </h1>

@if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
        @foreach ($errors->all as $error)
        {{ $error}}
        
    @endforeach
</ul>
    </div>
    
    
@endif

<div class="form-group">
<br>
<label for="NOMBRE"> Nombre del producto </label>
<input type="text" class="form-control" name="NOMBRE" value="{{ isset ($productos->NOMBRE)?$productos->NOMBRE:old('NOMBRE') }}" id="NOMBRE">
</div>

<div class="form-group">
<label for="DESCRIPCION"> Descripcion del producto </label>
<input type="text" class="form-control" name="DESCRIPCION" value="{{ isset($productos->DESCRIPCION)?$productos->DESCRIPCION: old('DESCRIPCION') }}" id="DESCRIPCION">
</div>

<div class="form-group">
<label for="PRECIO"> Precio del producto </label>
<input type="text" class="form-control" name="PRECIO" value="{{ isset($productos->PRECIO)?$productos->PRECIO: old('PRECIO')}}" id="PRECIO">
</div>

<div class="form-group">
<label for="STOCK"> Stock del producto </label>
<input type="text" class="form-control" name="STOCK" value="{{ isset ($productos->STOCK)?$productos->STOCK: old('STOCK')}}" id="STOCK">
</div>

<div class="form-group">
<label for="Foto"> Foto del producto </label>
@if (isset($producto->Foto))
<img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$producto->Foto}}" width="100" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>


<input class="btn btn-success" type="submit" value="{{ $modo }} producto">

<a class="btn btn-primary" href="{{ url('Productos/productos')}}"> Regresar </a>

<br>