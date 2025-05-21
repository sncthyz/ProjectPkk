@extends('components.layouts')

@section('content')
        <div class="left">
          <h2>💬 Diskusi</h2>
          <div class="card-grid">
            <a href="{{ route("postk") }}" style="text-decoration: none;">
              <div class="card">
              <img src="{{ asset('img/hitler jpg.jpeg') }}" alt="Hitler">
              <div class="info">
                <p class="date">📅 Rab, Jan 13, 7:00 PM</p>
                <p class="title">Hitler dimana?</p>
                <p class="location">205 attending • Induk, JKT</p>
              </div>
            </div>
            </a>
            <a href="" style="text-decoration: none;">
              <div class="card">
              <img src="{{ asset('img/hitler jpg.jpeg') }}" alt="Hitler">
              <div class="info">
                <p class="date">📅 Rab, Jan 13, 7:00 PM</p>
                <p class="title">Hitler dimana?</p>
                <p class="location">205 attending • Induk, JKT</p>
              </div>
            </div>  
            </a>
            
            <a href="" style="text-decoration: none;">
              <div class="card">
              <img src="{{ asset('img/bjorka jpg.jpeg') }}" alt="Girl">
              <div class="info">
                <p class="date">📅 Rab, Jan 13, 7:00 PM</p>
                <p class="title">Siapa sebenarnya tony?</p>
                <p class="location">205 attending • Induk, JKT</p>
              </div>
            </div>
            </a>
             <a href="" style="text-decoration: none;">
              <div class="card">
              <img src="{{ asset('img/bjorka jpg.jpeg') }}" alt="Girl">
              <div class="info">
                <p class="date">📅 Rab, Jan 13, 7:00 PM</p>
                <p class="title">Siapa sebenarnya björke?</p>
                <p class="location">205 attending • Induk, JKT</p>
              </div>
            </div>
             </a>
            
          </div>
          <br>
          
          
    
          <h2>🛒 Produk Jualan</h2>
          <div class="card-grid">
            <a href="" style="text-decoration: none;">
              <div class="card">
              <img src="{{ asset('img/chago handbag jpg.jpeg') }}" alt="Shoes">
              <div class="info">
                <p class="date">📅 Rab, Jan 13, 7:00 PM</p>
                <p class="title">Tas cagho ultra leon exclusive</p>
                <p class="location">205 attending • Induk, JKT</p>
              </div>
            </div>
            </a>
           
          </div>
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