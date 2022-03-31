@extends('blog.layout.single')
@section('titulo1')
<h1> El logo de Perl </h1>
@endsection
@Section('Contenido')
<span class="image featured"><img src="images/descargar.jpg" alt="" /></span>
<P> Como anécdota, comentar que el logo de Perl es una cebolla, pero suele relacionarse con un dromedario. ¿Cual es el motivo?
<p>Porque el primer libro de Perl, llamado Programming Perl de la editorial O’Reilly, eligió ese animal en la portada.</p>
<p>Si echas un vistazo a cualquier libro de programación de esta editorial, verás que cada lenguaje de programación lo relaciona con un animal.

Para evitar problemas de copyright, la fundación Perl decidió usar la cebolla como logotipo para el lenguaje.</p>

<ul class="actions">
										<li><a href="{{route('perl')}}" class="button large">Regresar</a></li>
									</ul>
@endsection
