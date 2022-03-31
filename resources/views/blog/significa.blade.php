@extends('blog.layout.single')
@section('titulo1')
<h1> Que es el lenguaje PERl? </h1>
@endsection
@Section('Contenido')
<span class="image featured"><img src="images/code.jpg" alt="" /></span>
<P> Perl es un lenguaje de programación, pero no es un lenguaje tal y como lo conocemos, sino es un lenguaje de script.

<p>significa Practical Extracting and Reporting Language. Como vemos, se suele usar para sacar información de ficheros de texto y poder generar informes.mezcla un poco las características de varios lenguajes, como puede ser C, Bourne Shell y AWK. Como estos son lenguajes que siempre han actuado en entornos Unix, en un principio también Perl sólo funcionaba en este sistema operativo, pero en la actualidad está presente en otras plataformas.
</p>
<p>El lenguaje lo creó Larry Wall en el año 1987, con la intención de hacer más simples  algunas tareas repetitivas cuando administraba servidores. Han pasado varios años y el lenguaje ha ido evolucionando con varias versiones, siendo Perl 5 la utilizada actualmente.
</p>

<ul class="actions">
										<li><a href="{{route('perl')}}" class="button large">Regresar</a></li>
									</ul>
@endsection
