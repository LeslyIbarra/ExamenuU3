@extends('blog.layout.single')
@section('titulo1')
<h1> Ventajas y Desventajas </h1>
@endsection
@Section('Contenido')
<span class="image featured"><img src="images/code.jpg" alt="" /></span>
<P> Una vez hemos visto sus características, podemos nombrar una serie de ventajas a la hora de elegir Perl como lenguaje de programación:

<span class="image left"><img src="images/ventaja.png" alt="" /></span>
<h2>Ventajas</h2>
								
								<p>
							    - Es un lenguaje de alto nivel, así que su curva de aprendizaje es suave.
</p>
	<p>
								- Es eficiente a la hora de tratar un gran volumen de datos. Un ejemplo es que se usa en el mercado de finanzas y bioinformática.
								</p>
								<p>
								- Es de propósito general: puede usarse en desarrollo web, pero también en otros entornos como la administración de sistemas.
</p>
	<p>
								- Es multiplataforma, además, viene con la propia instalación de cualquier sistema operativo Linux/Unix.	<p>
								
								</p>
								<p>
								- Es una buena alternativa a C, ya que no tienes que trabajar con punteros	<p>
							
								</p>	
								<span class="image right"><img src="images/desventaja.png" alt="" /></span>
<h2>Desventajas</h2>
								
								<p>
							    - Aunque es un lenguaje interpretado, un programa hecho en Perl se compila al principio de su ejecución, por lo que puede ser lento comparado con otros lenguajes similares (esto se soluciona si después trabajas con muchos datos).
</p>
	<p>
	Su código no es muy legible, comparado con otros lenguajes como Python (que también puede usarse para ejecutar scripts en servidores).
								</p>
								<p>
								- Es de propósito general: puede usarse en desarrollo web, pero también en otros entornos como la administración de sistemas.
</p>
	<p>
								- No tiene control de excepciones, y los posibles errores suelen tener una dificultad media encontrarlos.	<p>
								
								</p>
								
								</p>									
<ul class="actions">
										<li><a href="{{route('perl')}}" class="button large">Regresar</a></li>
									</ul>
@endsection
