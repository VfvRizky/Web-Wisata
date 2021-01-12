@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/bukitbengkirai.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Bukit Bengkirai</h3>
                <p class="card-text font" >Tak hanya pantai-pantai yang indah, Balikpapan juga menyimpan 
				pemandangan bentang alam Kalimantan lainnya berupa hutan tropis. Untuk bisa menlihat lebih 
				jelas keindahan hutan Kalimantan, Bukit Bangkirai adalah destinasi wisata di Balikpapan yang 
				tepat untuk kamu kunjungi. Tak hanya bisa menikmati indahnya hutan, di kawasan objek wisata 
				Balikpapan satu ini juga terdapat jembatan gantung yang menawarkan atmosfer panorama yang 
				tak kalah memukau. 
				Namun, untuk bisa mencapai tempat wisata alam ini, kamu setidaknya perlu menempuh jarak 1.5 jam dari pusat kota Balikpapan. 
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
      <h5 class="card-title">Lokasi: Bukit Bangkirai - Karya Merdeka, Semboja, Kutai Kartanegara, Kalimanta Timur</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection