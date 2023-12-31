@extends('layouts.frontend')
<head>
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/home.js') }}" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .slide-container {
      display: flex;
      overflow: hidden;
    }

    .slide {
      min-width: 100%;
      transition: transform 0.3s ease-in-out;
    }
    img {
      width: 100%;
      height: auto;
    }
    </style>
  </head>
@section('content')
<body>
  <div class="slide-container">
    <div class="slide">
      <img src="{{ asset('Gambar/border1.jpg')}}" alt="Slide 1">
    </div>
    <div class="slide">
      <img src="{{ asset('Gambar/border3.jpg')}}" alt="Slide 2">
    </div>
    <div class="slide">
      <img src="{{ asset('Gambar/border4.jpg')}}" alt="Slide 3">
    </div>
  </div>

  <script src="script.js"></script>

  <script src="script.js"></script>
<div class="container-fluid" style="text-align: center;justify-content: center;">
      <div class="wrapper">
    
          <div class="judul2 fixed-top" style="z-index: 0;">
            <h1>Apparel</h1>
            <div class="links">
              <div class="category">
                <a class="btn clothing" href="/home/clothing" > Clothing </a>
                <a class="btn accessories" href="/home/accessories"> Accessories </a>
              </div>
              <ul>
                <li data-view="grid-view" class="li-grid" >
                  <i class="bx bx-grid-alt" ></i></li>
                <li data-view="list-view" class="li-list active">
                  <i class="bx bx-list-ul" ></i></li>
              </ul>
            </div>
          </div>

          <div class="view_main" >
            
            <div class="view_wrap list-view" style="display: block;">
              @foreach ($products as $product)
                <div class="view_item">
                  <div class="vi_left">
                    <img class="img1" src="{{ url($product->image) }}" alt="gambar-menu" > 
                </div>
                <div class="vi_right" style="text-align: left;">
                  <div class="name">
                    <a href="{{ route('product.detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                  </div>
                  <span class="price">Rp.{{ number_format($product->price, 0) }}</span>     
                  <br>
                  <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <input type="hidden" value="{{ $product->id }}" name="id">
                      <input type="hidden" value="{{ $product->name }}" name="name">
                      <input type="hidden" value="{{ $product->price }}" name="price">
                      <input type="hidden" value="{{ $product->image }}"  name="image">
                      <input type="hidden" value="1" name="quantity">
                      <button class="btn">Tambah<i class="fa fa-shopping-cart" style="margin-left: 5px" aria-hidden="true"></i></button> 
                    </form>
                </div>
              </div>
              @endforeach
            </div>



            <div class="view_wrap grid-view" style="display: none;">
              @foreach ($products as $product)
                <div class="view_item">
                  <div class="vi_left">
                    <img class="img1" src="{{ url($product->image) }}" alt="gambar-menu" > 
                  </div>
                    <div class="vi_right">
                      <div class="name">
                        <a href="#." style="font-size: 16px;">{{ $product->name }}</a>
                      </div>
                      <span class="price">Rp.{{ number_format($product->price, 0) }}</span>     
                      <br>
                      <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          <input type="hidden" value="{{ $product->id }}" name="id">
                          <input type="hidden" value="{{ $product->name }}" name="name">
                          <input type="hidden" value="{{ $product->price }}" name="price">
                          <input type="hidden" value="{{ $product->image }}"  name="image">
                          <input type="hidden" value="1" name="quantity">
                          <button class="btn">Tambah<i class="fa fa-shopping-cart" style="margin-left: 5px" aria-hidden="true"></i></button> 
                      </form>
                    </div>
                </div>
                @endforeach
            </div>
            
          </div>
      </div>
    </body>

        <div class="col-md-12 py-5">
          <div class="Judul">
            <h1> Apparel</h1>
          </div>
          
          <div class="kategoris">
            <a href="/home">Semua</a>
            |
            <a href="/home/clothing"><i class=''></i>Clothing</a>
            |
            <a href="/home/accessories"><i class='' ></i>Accessories</a>
         
          </div>
        

          <div class="view_wrap grid-view"  style="margin-top: 30px;" >

            @foreach ($products as $product)
            <div class="view_item" > 
               
                <div class="vi_left">
                  <img class="img1" src="{{ url($product->image) }}" style="width: 208px; margin-left: -10.1px;margin-top: -10px;" alt="gambar-menu" > 
                </div>

                <div class="vi_right">
                  <div class="name">
                  <a href="{{ route('product.detail_front', ['id' => $product->id]) }}"  style="font-size: 16px;">{{ $product->name }}</a>
                  </div>
                  <span class="price">Rp.{{ number_format($product->price, 0) }}</span>     
                  <br>
                  <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <input type="hidden" value="{{ $product->id }}" name="id">
                      <input type="hidden" value="{{ $product->name }}" name="name">
                      <input type="hidden" value="{{ $product->price }}" name="price">
                      <input type="hidden" value="{{ $product->image }}"  name="image">
                      <input type="hidden" value="1" name="quantity">
                      <button class="btn ">Tambah<i class="fa fa-shopping-cart" style="margin-left: 5px" aria-hidden="true"></i></button> 
                  </form>
                </div>

             </div>

            @endforeach
          </div>
        </div>
  </div>

  
<script>
var li_links = document.querySelectorAll(".links ul li");
var view_wraps = document.querySelectorAll(".view_wrap");
var list_view = document.querySelector(".list-view");
var grid_view = document.querySelector(".grid-view");

li_links.forEach(function(link){
	link.addEventListener("click", function(){
		li_links.forEach(function(link){
			link.classList.remove("active");
		})

		link.classList.add("active");

		var li_view = link.getAttribute("data-view");

		view_wraps.forEach(function(view){
			view.style.display = "none";
		})

		if(li_view == "list-view"){
			list_view.style.display = "block";
		}
		else{
			grid_view.style.display = "block";
		}
	})
})
const slideContainer = document.querySelector('.slide-container');
      const slides = document.querySelectorAll('.slide');

      let slideIndex = 0;

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.style.transform = `translateX(${100 * (i - index)}%)`;
        });
      }

      function nextSlide() {
        slideIndex = (slideIndex + 1) % slides.length;
        showSlide(slideIndex);
      }

      function prevSlide() {
        slideIndex = (slideIndex - 1 + slides.length) % slides.length;
        showSlide(slideIndex);
      }

      setInterval(nextSlide, 5000); // Ganti slide setiap 5 detik

      showSlide(slideIndex);
      
    </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      @endsection
    