@extends('layouts.main')

@section('bootstrap')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection

@section('styling')
    <link rel="stylesheet" href="/css/style-guide.css">
   <link rel="stylesheet" href="/css/styleDetail.css">
@endsection

@section('container')
<!-- Tour Guide section starts  -->
<section class="tourGuide">
  <div class="card" style="width: 200rem; height: 50rem; rounded-lg:5cm;  ">
    <div class="row">
      <div class="col">
        <div class="text-section">
          <h1 class="large-title">
              Why Choose Our Guide Recommendation ?
          </h1>
          <h4 class="text-muted">
            The guides we recommend are trusted and experienced tour guides. 
            They will take you to escape in this small and beautiful city, Yogyakarta. 
            So immediately choose our recommended guide and contact them. 
            Don't forget to use the voucher code on this website to get a special bundle. 
            Go Contact Your choosen Guide!
          </h4>
        </div>
      </div>
      <div class="col">
        <div class="jumbotron-img">
          <img src="./asset/about tour guide.png" alt ="">
        </div>
      </div>
    </div>
  </div>
</section>>

    <div class="text-section">
        <h1 class="large-title">
            Our Favorite Guide
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 35rem;">
                    <img src="./asset/rm.png" alt="Image Error">
                    <h3>Kim Namjoon</h3>
                    <div class="stars ms-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>Let's Travel With Me</span>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 35rem;">
                    <img src="./asset/v.png" alt="">
                    <h3>Kim Taehyung</h3>
                    <div class="stars ms-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>I'll accompany you in Yogyakarta</span>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 35rem;">
                    <img src="./asset/jimin.png" alt="">
                    <h3>Park Jimin</h3>
                    <div class="stars ms-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>Let's Get lost in Yogya!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="text-section">
        <h1 class="large-title">
            Tour Guide List
        </h1>
    </div>
    
    <div class="container" id="potoBawah">
      @foreach ($posts as $key => $post)
        @if ($key % 3 == 0)
          @php echo '<div class = "row">';@endphp

  @endif
  @php echo "<div class='col'>
    <div class='card' style='width: 30rem;''>"; @endphp
        <img class="imgEmbuh" src="{{ asset('storage/' . $post->image) }}" alt="">
        @php echo "<div class='card-body'>"; @endphp
          <h5 class='card-title'>{{$post->nama}}</h5>
          @php echo "<div class='content'>
            <div class='stars'>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
            </div>
          </div>
         "; @endphp
          <a href='detailGuide/{{$post->id}}' class='btn btn-success' style='backgroundcolor: #00755e;'>Detail</a>
        @php echo "
        </div>
      </div>
      <br><br>
    </div>";
  @endphp
  @if ($key % 3 == 2)
      @php echo '</div>';@endphp
  @endif

@endforeach
</div>
</section>
<!-- Tour Guide section ends -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

@endsection