@extends('blog.layout.single')
@section('titulo1')
<h1> Publicaciones BD</h1>
@endsection
@section('Contenido')

<table class ="table col-12 table-responsive">
	<thead>
		<tr>
			<td> ID </td>
			<td>titulo</td>
			<td> Autor </td>
			<td> fecha </td>
			
			<td> like </td>
        </tr>
</thead>
@foreach ($publicaciones as $publicaciones)
<tr>
	

			<td>{{$publicaciones->id}} </td>
			<td> {{$publicaciones -> titulo}} </td>
			<td> {{$publicaciones -> autor}}</td>
			<td> {{$publicaciones -> fecha}} </td>
			<td> {{$publicaciones -> like}}</td>

			
        </tr>	
	
		@endforeach</p>
<ul class="actions">
										<li><a href="{{route('perl')}}" class="button large">Regresar</a></li>
									</ul>
@endsection
