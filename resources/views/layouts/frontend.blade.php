<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Craneyson </title>
  <!-- Bootstrap core CSS -->
    <link href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bootstrap/js/bootstrap.min.js') }}" rel="stylesheet">
    <link href="{{ asset('/css/frontend.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@500;600&family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="{{ asset('Navbar/style.css')}}">
        
        <!-- ===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
    <style>
          .logo img {
      width: 100px; /* Misalnya 100px */
      height: auto; /* Atau sesuaikan ukuran gambar yang diinginkan */
    }
    </style>
</head>
<header>
  <nav class="nav-bar bg-dark">
    <div class="nav-bar bg-dark" >
        <i class='bx bx-menu sidebarOpen'></i>
        <span class="logo navLogo "><a href="/home"><img src="{{ asset('/gambar/logo.png')}}"></a></span>

        <div class="menu" style="justify-content: center;justify-content: center; ">
            <div class="logo-toggle">
                <i class='bx bx-x siderbarClose'></i>
        </div>
            <ul class="nav-links" >
                <li><a href="/home">Home</a></li>
                <li class="cart"><a href="{{ route('cart.list')}}">Keranjang</a></li>
                <li class="cart"><a href="{{ route('invoice.list')}}">Pesanan</a></li>
                <li><a href="/tentang">Tentang</a></li>
                <li><a href="/kontak">Kontak</a></li>
                <li class="logout"><a href="{{ route('logout.perform') }}">Logout</a></li>
            </ul>
        </div>

        <div class="darkLight-searchBox">
          <div class="order">
            <a href="{{ route('invoice.list')}}">
            <i class='bx bx-shopping-bag' style='color:#fffdfd;'></i>
          </a>
          </div>

            <!-- <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div> -->


            <div class="cart">
              <a href="{{ route('cart.list')}}">
              <i class='bx bx-cart' style='color:#fffdfd'  ></i>
            </a>
            </div>

            <div class="user">
              {{-- <i class='bx bx-user' style='color:#fffdfd'></i> --}}
              <a href="{{ route('logout.perform') }}">
              <i class='bx bx-log-in-circle' style='color:#fcfbfb'  ></i>
              </a>
            </div>

        </div>
    </div>
</nav>

<script src="{{ asset('Navbar/script.js')}}"></script>

</header>

<body>
  
    <main>

    

       @yield('content')
      
    </main>
      <!-- <footer class="bg-dark text-white text-center pb-5 pt-5">
      <img src="{{ asset('/gambar/Img1.png')}}" alt="WrBarokah" width="300px"/>
      </footer> -->
        <!-- Footer -->
    
        <!-- Akhir Footer -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </body>

</html>


