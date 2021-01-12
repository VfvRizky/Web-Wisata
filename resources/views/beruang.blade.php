@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/rumahberuang.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Rumah Beruang Balikpapan</h3>
                <p class="card-text font" >Kawasan Wisata Pendidikan Lingkungan Hidup (KWPLH)
				Ingin melihat sosok menggemaskan beruang madu secara langsung? Maka, kunjungi Pusat 
				eruang Madu yang terletak di Kawasan Wisata Pendidikan Lingkungan Hidup (KWPLH)! Destinasi 
				tempat wisata di Balikpapan ini akan berikan kamu gambaran mengenai gaya hidup dan sistem 
				konservasi untuk menjaga populasi beruang madu di Kalimantan yang jumlahnya kian menyusut.

			



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
      <h5 class="card-title">Lokasi: KWPLH - Jl. Soekarno-Hatta Km. 23, No. 185</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection