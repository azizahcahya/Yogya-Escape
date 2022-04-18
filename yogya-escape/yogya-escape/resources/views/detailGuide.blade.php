<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogya Escape</title>
    <link rel="icon" type="image/x-icon" href="/asset/Escape white.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style-main.css')?>" type="text/css"> 
    <link rel="stylesheet" href="/css/styleDetail.css">
</head>
<body>
    <header>
        <img class="navbar-brand" href="#" src="/asset/Escape copy.png">
        <nav class="navbar">
            <a href="home">Home</a>
            <a href="galeri">Gallery</a>
            <a href="tour-guide">Tour Guide</a>
            <a href="articles">Articles</a>
        </nav>
    </header>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <div class="container d-flex justify-content-center" style="margin-top: 10%">
      <div class="card mb-3" style="width: 80%">
        <img class="imgEmbuh col-sm-5" src="{{ asset('storage/' . $posts->image) }}" alt="">
        <div class="card-body">
          <h5 class="card-title">{{$posts->nama}}</h5>
          <p class="card-text">{{$posts->noHp}}</p>
          <p class="card-text">{!!$posts->deskripsi!!}</p>
          {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
          {{-- <a href='tour-guide' class='btn btn-success' style='backgroundcolor: #00755e;'>Back</a> --}}
        </div>
      </div>
    </div>

    <!-- source footer: https://bbbootstrap.com/snippets/bootstrap-dark-website-footer-social-media-icons-46403047 -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 item">
                        <img class="navbar-brand" href="#" src="/asset/Escape white.png">
                    </div>
                    <div class="col-md-3 item">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 item"></div>
                    <div class="col-md-3 item">
                        <div class="col item social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-youtube"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-google"></i></a></div>
                    </div>
                </div>
                <p class="copyright">Yogya Escape © 2022</p>
            </div>
        </footer>
    </div>
</body>
</html>