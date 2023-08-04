@extends('layouts.frontend')
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
<style>

    .container-fluid{
        margin-top:100px;
    }
    .card{
        width: 100%;
      
    }
    @media screen and (max-width: 600px) {
    span.logo.navLogo{
        display: none;
    }

    .searchBox{
        display: none;
    }
    font-family: Arial, sans-serif;
    }

    /* Atur tata letak sejajar dan perataan tengah */
    #services {
      display: flex;
      justify-content: center;
    }

    /* Atur elemen <article> menjadi sejajar */
    #services article {
      display: inline-block;
    }

    /* Ganti warna teks link jika perlu */
    .btn {
      color: #007bff; /* Misalnya warna biru */
      /* Ganti warna lain sesuai keinginan */
    }
}
</style>
@section('content')
<div class="container-fluid">
<div class="card">
    <div class="card-header">
    <footer class="text-center" style="background-image: url('{{URL::asset('Gambar/bg2.jpg')}}'); background-size: cover; backrgound-position: center; height:500px">
      <img src="{{ asset('/gambar/tentang.png')}}" style="padding-top:7rem" alt="WrBarokah" width="700px"/>
      </footer>
    </div>
    <div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="services">
    <ul class="nospace group">
        <article><i class="fab fa-whatsapp fa-4x"><a class="btn" href="https://wa.me/085173312823">Whatsapp</a></i>
          <footer></footer>
        </article>
      </li>
        <article><i class="fab fa-instagram fa-4x"><a class="btn" href="https://www.instagram.com/dandimrtno/">Instagram</a></i>
          <footer></footer>
        </article>
      </li>
    </ul>
  </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
</div>
</div>