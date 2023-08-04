@extends('layouts.frontend')

<style>
    .jumbotron {
  padding-top: 8rem;
  background-image: url('{{URL::asset('Gambar/bg.jpeg')}}');
  padding-bottom: 8rem;
}
#projects {
    
  background-color: #e2edff;
}
section {
  padding-top: 5rem;
  padding-bottom: 5rem;
}

</style>
@section('content')
      <body id="home">
           
        <!-- Jumbotron -->
        <section class="jumbotron text-center">
            <img src="{{ asset('/gambar/logo2.png')}}" alt="WrBarokah" width="300px"/>
            <h1 class="display-4"></h1>
            <p class="lead"></p>
          
        </section>
        <!-- Akhir Jumbotron -->
    
        <!-- About -->
        <section id="about">
          <div class="container">
            <div class="row text-center">
              <div class="col mb-3">
                <h2>Tentang Craneyson</h2>
              </div>
              <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p> Dunia thrift, atau lebih dikenal sebagai gerakan hemat atau ekonomi berbagi, adalah sebuah konsep sosial dan ekonomi yang mengedepankan prinsip-prinsip penghematan, efisiensi, dan pemakaian sumber daya yang bijaksana. Di tengah pertumbuhan kesadaran akan isu-isu lingkungan dan ketidaksetaraan sosial, gerakan thrift semakin mendapatkan popularitas dan pengikut di berbagai belahan dunia. 
                        </p>
                </div>
                <div class="col-md-4">
                Gerakan thrift berfokus pada upaya untuk mengurangi pemborosan dan konsumerisme berlebihan dengan menerapkan sikap hemat dalam gaya hidup sehari-hari. Prinsip utama dalam dunia thrift adalah membeli dan menggunakan barang-barang dengan bijak, menghindari pemborosan sumber daya, dan memaksimalkan manfaat dari apa yang dimiliki. Dalam konteks ini, kualitas dan ketahanan barang menjadi lebih diutamakan daripada sekadar mengikuti tren dan gaya konsumsi yang cepat berubah.
                
                </div>
                <div class="col-md-4">
                Dunia thrift adalah langkah menuju pola konsumsi yang lebih berkelanjutan, bertanggung jawab, dan bijaksana. Dengan semakin banyaknya individu yang terlibat dalam gerakan ini, diharapkan akan tercipta dunia yang lebih berimbang, berkelanjutan, dan memperhatikan keberlangsungan planet kita.
                </div>
              </div>
            </div>
          </div>
          
        </section>
        <!-- Akhir About -->
    
        <!-- Projects -->
        <section id="projects">
          <div class="container">
            <div class="row text-center mb-3">
              <div class="col mb-3">
                <h2>Our Recommended Style</h2>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ asset('/gambar/Img4.jpg')}}" class="card-img-top" alt="1" />
                    <div class="card-body">
                      <p class="card-text">Style by c.a.chou</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ asset('/gambar/Img2.jpg')}}" class="card-img-top" alt="2" />
                    <div class="card-body">
                      <p class="card-text">Style by cereal</p>
                   </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="{{ asset('/gambar/Img3.jpg')}}" class="card-img-top" alt="3" />
                    <div class="card-body">
                      <p class="card-text">Style by c.a.chou</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <footer class="bg-dark text-white text-center pb-5 pt-5">
      <img src="{{ asset('/gambar/Img1.png')}}" alt="WrBarokah" width="300px"/>
      </footer>
        

@endsection