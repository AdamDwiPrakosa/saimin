@extends('tampil.app')

@section('content')


<hr>

<div class=" container  fixed">
	<div class="row">
		<div class="col-sm-2">
			
		</div>



	<div class="col-sm-8">
	 <h3> Artikel Buku </h3>
 		<a href="/artikel"> Artikel </a>
		<p>	{{$artikel -> title}} </p>
		{{$artikel -> created_at}}
<hr>
		<p>	{{$artikel -> content}} </p>


	</div>



	<div class="col-sm-2">
		
	</div> 
	</div>

<!-- untuk tampilkan 3 artikel di halaman pertama -->

  
</div>
<hr>
 @endsection