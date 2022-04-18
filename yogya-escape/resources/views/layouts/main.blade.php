<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogya Escape</title>
    <link rel="icon" type="image/x-icon" href="./asset/Escape white.png">
   @yield('bootstrap')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style-main.css')?>" type="text/css"> 

    @yield('styling')
</head>
<body>
    <header>
        <img class="navbar-brand" href="#" src="./asset/Escape copy.png">
        <nav class="navbar">
            <a href="home">Home</a>
            <a href="galeri">Gallery</a>
            <a href="tour-guide">Tour Guide</a>
            <a href="articles">Articles</a>
        </nav>
    </header>

    @yield('container')

    <!-- source footer: https://bbbootstrap.com/snippets/bootstrap-dark-website-footer-social-media-icons-46403047 -->
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 item">
                        <img class="navbar-brand" href="#" src="./asset/Escape white.png">
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