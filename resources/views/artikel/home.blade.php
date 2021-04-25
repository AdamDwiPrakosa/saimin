@extends('tampil.app')


@section('title','selamat datang mas brooo')

@section ('content')


<section id="Mesin" class="portofolio">
  <div class="container">
    <h3 class="light center grey-text text-darken-3">Artikel Review Buku</h3>
    <div class="col m3 sm12">
      <img src="">
    </div>
  </div>
</section>

<!-- tampilan semua artikel tekait katagori -->
<div class="container">
  <div class="row">
    <div class="col-sm-10">
      @foreach ($artikel as $art)

        <li><a href="{{ url('artikel',$art->slug) }}"> {{$art->title}} </a></li>
        
        <p>{{$art->content}}</p>
        <hr>
      @endforeach
      @if(!empty($pesan))
            <div class="alert alert-danger">
          {{ $pesan }}
            </div>
              @endif
      <div class="d-flex justify-content-center">
     
      </div>
    </div>
  

    <div class="col-sm-2"> 
      <a href="">Tentang</a><br>
      <a href="">Contact </a><br>
      <a href="">GitHub</a>
      <form class="form" action="" method="get">
        <div>
          <label for="search" class="d-block mr-2"> Pencarian</label>
          <input type="text" name="search" id="search">
          <button type="submit"> Cari</button>
        </div>
      </form>
    </div>
  </div>
      
      <div class="d-flex justify-content-center">
      {!! $artikel->links() !!}
      </div>
<hr>

<!-- untuk tampilkan 3 artikel di halaman pertama -->
  <div class="row">
  @foreach ($kategorie as $kat)
    <div class="col-sm">
    <a href="{{ url('artikel',$art->slug) }}"> {{$kat->title}} </a>
    <p></p>
    <p>{{ Str::limit($kat->content,100 ,'' )}}</p>
    <p>{{$kat->kategori}}</p>
    </div>
  @endforeach
  </div>
  
</div>

 

@endsection