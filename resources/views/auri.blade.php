@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/pantaiauri.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Pantai Auri</h3>
                <p class="card-text font" >Alternatif destinasi tempat wisata di Balikpapan yang cocok untuk menikmati panorama 
				matahari terbenam lainnya selain Pantai Melawai adalah Pantai Sepinggan. Disini, Toppers bisa memandang indahnya 
				langit jingga dan pantulan cahaya matahari di atas tenangnya permukaan air laut dari dermaga kayu yang membentang
				panjang di sisi Pantai Sepinggan.

				</p>
                <p class="card-text"><small class="text-muted">Wisata.IN</small></p>
              </div>
            </div>
          </div>
        </div>       
          
      </div>
    </div>
  </div>
  <div class="card text-center">
    <div class="card-header">
      <div class="container">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="nav-link active" href="/balikpapan">Balikpapan</a>
          </li> 
        </ul>
        
      </div>
    </div>
	<div class="lokasi">
    <div class="card-body">
      <h5 class="card-title">Lokasi: Pantai Sepingan - Jl. Sepinggan Raya 1, Sepinggan, Balikpapan Selatan, Kota Balikpapan, Kaltim.</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection