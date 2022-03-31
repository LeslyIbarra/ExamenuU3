@extends('blog.layout.single')
@section('titulo1')
<h1> Caracteristicas del lenguaje PERl </h1>
@endsection
@Section('Contenido')
<span class="image featured"><img src="images/code.jpg" alt="" /></span>
<p> El lenguaje Perl tiene licencia GPL, por lo tanto es gratuito y se puede descargar sin coste alguno. Como hemos dicho, puede funcionar en varios sistemas operativos, así que puedes decidir.
</p>
<p>Perl se utiliza sobretodo para crear aplicaciones CGI para entornos web. Si en nuestro servidor vemos una carpeta llamada cgi-bin, es que allí se encuentra el intérprete Perl, y podemos llamarlo para ejecutar nuestro código.
</p>
<p>Aunque fue muy popular en entornos web, todavía se usa para crear scripts de servidores. Ese es el motivo que sea uno de los lenguajes más usados del mundo.
</p>
<p>Es un lenguaje interpretado, como la mayoría de lenguajes de programación web , como PHP o JavaScript. Eso significa que el código fuente no se compila, para transformarlo a lenguaje máquina, sino que se va leyendo el código y se interpreta en cada línea de ejecución.
</p>
<p> Junto al intérprete tenemos un gran conjunto de librerías y módulos. También tiene una interficie para poder conectar con un amplio abanico de motores de bases de datos, ya que puedes consultar mediante SQL y procesar los registros devueltos gracias al módulo DBI, haciendo que el código mismo código sea reutilizable en cualquier tipo de gestor de base de datos..
</p>
<p>Una característica de Perl es la posibilidad de ejecutar código o subrutinas en otros lenguajes de programación.
</p>
<p>
</p>
<h2>Otra característica curiosa es que sólo tiene tres tipos de datos: los escalares, las listas y los hashes.</h2>
								<p><span class="image left">
									<img src="images/lap.jpg" alt="" />
								</span>
								 
								
									
									
									<br><b> 1.-Un tipo de datos escalar es un sólo valor, un entero, una cadena o una referencia. En este caso, es como los tipos de datos primitivos en otros lenguajes.
									<br> 2.- Un tipo de datos lista es una colección de escalares. Lo que comúnmente se llama array.
									<br> 3.- Un tipo de datos hash es una estructura de datos que asocia claves con valores. En Perl las claves serán un texto y los valores serán de tipo escalar.
									
									



                                   


								</p>
<ul class="actions">
										<li><a href="{{route('perl')}}" class="button large">Regresar</a></li>
									</ul>
@endsection
