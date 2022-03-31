@extends('blog.layout.single')
@section('titulo1')
    <h1> API </h1>
    @endsection

    @Section('Contenido')

    @foreach($info as $item)
    <article>
        <p>Nombre: {{$item['nombre']}}.</p>
        @foreach($item['pais'] as $dato)
        <p>Pais: {{$dato['country_id']}}.</p>
        @endforeach
    </article>
    @endforeach

    <ul class="actions">
        <li><a href="{{route('perl')}}" class="button large">Regresar</a></li>
    </ul>

    @endsection
