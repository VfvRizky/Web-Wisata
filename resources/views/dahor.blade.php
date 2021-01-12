@extends('layout/wisatanya')

@section('title', 'Wisata.IN')
@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
           <div class="card mb-3" style="width: 69rem;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="{{url('frontend/img/dahorr.jpg')}}" class="img-fluid" alt="manggar">
            </div>
            <div class="col-md-8">
              <div class="card-body bg-transparent">
                <h3 class="card-title ">Dahor Heritage</h3>
                <p class="card-text font" >Objek wisata di Balikpapan yang pertama ini tak lepas dari sejarah 
				Balikpapan sebagai Kota Minyak. Pada era 1920-an, para pekerja kilang minyak di Balikpapan kerap 
				mengakhiri harinya dengan bersantai dan beristirahat di sebuah kompleks perumahan dinas. Kini, 
				kompleks yang masih berdiri kokoh tersebut disulap jadi cagar budaya bernama Dahor Heritage.
				Masih dalam kondisi prima, rumah panggung dengan arsitektur khas Belanda tersebut menyimpan koleksi 
				buku serta foto-foto hitam-putih yang menangkap sejarah awal pendayagunaan minyak di Balikpapan.
			



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
      <h5 class="card-title">Lokasi: Pantai Kemala - Jl. Jende	Lokasi: Dahor Heritage - Jl. Dahor No.1, Baru Ilir</h5>
      <a href="/boking" class="btn btn-primary">Boking Dulu</a>
    </div>
    </div>
</div>
@endsection