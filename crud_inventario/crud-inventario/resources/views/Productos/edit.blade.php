@extends('layouts.app')
@section('content')
<div class="container">

<form action="{{url('/productos/'.$productos->id)}}" method="post"></form>
@csrf
{{method_field('PATCH')}}
@include('Productos.form', ['modo'=>'Editar'])

</form>

</div>
@endsection