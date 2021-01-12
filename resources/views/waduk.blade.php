@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/wadukmanggar.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Waduk Manggar</h3>
                <p class="card-text font" >Fungsi utama dari destinasi objek wisata di Balikpapan selanjutnya 
				ini adalah sebagai sumber air bersih PDAM untuk kebutuhan masyarakat. Tetapi, siapa sangka dibalik 
				fungsinya tersebut, Waduk Manggar juga menawarkan pemandangan yang tak kalah menawan. 
				Untuk bisa menyusuri segarnya atmosfer di kawasan wisata Balikpapan satu ini, kamu bisa menjelajahi 
				dek kayu yang mengelilingi kawasan waduk ini. Di sini juga kamu bisa melihat beberapa orang yang memancing 
				atau menebar jala untuk menangkap ikan yang hidup di Waduk Manggar.
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
      <h5 class="card-title">Lokasi: Kelurahan Karang Joang, Kecamatan Balikpapan Utara, Kalimantan Timur</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection