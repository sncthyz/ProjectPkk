@extends('components.layouts')

@section('content')
        <div class="left">
          <h2>💬 Diskusi</h2>
          <div class="card-grid">
            <a href="{{ route("postk") }}" style="text-decoration: none;">
@foreach ($posts as $item )
<a href="" class="text-decoration-none">

              <div class="card">
<img src="{{ asset('storage/' . $item->imagePath) }}" alt="Gambar">
              <div class="info">
  <p class="title">{{$item->title}}</p>
                <p>{{$item->description}}</p>
<p class="fw-bold" >📅 {{$item->created_at}}</p>
   </div>


            </div>

</a>
@endforeach
            </a>



        </div>


        <div class="right">
          <h3>Categories</h3>
          <ul class="categories">
            <a href="#" style="text-decoration: none;"><li class="cat career" >Career</li></a>
            <a href="#" style="text-decoration: none;"><li class="cat gaming">Gaming</li></a>
              <a href="#" style="text-decoration: none;"><li class="cat sports">Sports</li></a>
            <a href="#" style="text-decoration: none;"><li class="cat random">Random</li></a>
            <br><br>
            <br><br>
            <a href="#" style="text-decoration: none;"><li class="cat postingananda">Postingan Anda</li></a>
          </ul>
          <a href="postingananda.html"></a>
        </div>
@endsection
