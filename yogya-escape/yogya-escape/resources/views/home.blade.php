@extends('layouts.main')

@section('bootstrap')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('styling')
<link rel="stylesheet" href="<?php echo asset('/css/style.css')?>" type="text/css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('container')
    <br>
    <br>

    <div class="slider">
        <div class="slide">
            <img src="./asset/image-1.jpg" alt="">
            <div class="info">
                <h2> Ratu Boko </h2>
                <p>Ratu Boko is Located about 3 km south of Prambanan. Ratu Boko is situated atop of a hill ± 195.97 m above sea level. Ratu Boko is not a temple, but a remains of a palace. Ratu Baka is often called Kraton Ratu Boko. Legend said that Ratu Boko once a palace for Ratu Boko, the father of Lara Jonggrang.</p>
            </div>
        </div>
        <div class="slide">
            <img src="./asset/image-2.jpg" alt="">
            <div class="info">
                <h2> Ngetun Beach </h2>
                <p>It is one among many beaches lined up in the southern part of Yogyakarta, to be exact in the regency of Gunung Kidul. Compared to those more popular beaches, this one can be considered a ‘rising star’ although it can also be thought of as a hidden gem. </p>
            </div>
        </div>
        <div class="slide">
            <img src="./asset/image-3.jpg" alt="">
            <div class="info">
                <h2> Tugu Yogyakarta </h2>
                <p>Tugu Yogyakarta is an important historical landmark in the city of Yogyakarta, Indonesia. Tugu means monument, which is usually built as a symbol of an area conceptualising characteristics of that region. Because of its historical background, Tugu Yogyakarta has become a historical icon of the city.</p>
            </div>
        </div>
        <div class="slide">
            <img src="./asset/image-4.jpg" alt="">
            <div class="info">
                <h2> Prambanan Temple </h2>
                <p>Built in the 10th century, this is the largest temple compound dedicated to Shiva in Indonesia. Rising above the centre of the last of these concentric squares are three temples decorated with reliefs illustrating the epic of the Ramayana, dedicated to the three great Hindu divinities (Shiva, Vishnu and Brahma) and three temples dedicated to the animals who serve them.</p>
            </div>
        </div>
        <div class="slide">
            <img src="./asset/Malioboro.jpeg" alt="">
            <div class="info">
                <h2> Malioboro </h2>
                <p>Jalan Malioboro is a major shopping street in Yogyakarta, Indonesia; the name is also used more generally for the neighborhood around the street. It lies north–south axis in the line between Yogyakarta Kraton and Mount Merapi. The street is the centre of Yogyakarta's largest tourist district surrounded with many hotels, restaurants, and shops nearby. Sidewalks on both sides of the street are crowded with small stalls selling a variety of goods. In the evening several open-air street side restaurants, called lesehan, operate along the street.</p>
            </div>
        </div>
        <div class="navigation">
            <i class="fas fa-chevron-left prev-btn"></i>
            <i class="fas fa-chevron-right next-btn"></i>
        </div>
        <div class="navigation-visibility">
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
            <div class="slide-icon"></div>
        </div>
    </div>
    <br>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bundle">BUNDLE 1 
                    <div class="info">
                        <ul>
                            <li> 2 x 24 jam</li>
                            <li> Tour to Merapi</li>
                            <li> free snack </li>
                        </ul>
                        <p> use this voucher : HJKSGWLAIW</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bundle">BUNDLE 2
                    <div class="info">
                        <ul>
                            <li> 2 x 24 jam</li>
                            <li> Tour to Merapi</li>
                            <li> free snack </li>
                        </ul>
                        <p> use this voucher : HJKSGWLAIW</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bundle">BUNDLE 3
                    <div class="info">
                        <ul>
                            <li> 2 x 24 jam</li>
                            <li> Tour to Merapi</li>
                            <li> free snack </li>
                        </ul>
                        <p> use this voucher : HJKSGWLAIW</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="step">
                    <p>HOW TO USE THE VOUCHER</p>
                    <ol>
                        <li>Choose you tour guide</li>
                        <li>Contact the tour guide</li>
                        <li>Give the voucher you had to the tour guide</li>
                        <li>And tada! the bundle is yours</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <hr>
    

    <script type="text/javascript">
        const nextBtn = document.querySelector(".next-btn");
        const prevBtn = document.querySelector(".prev-btn");
        const slides = document.querySelectorAll(".slide");
        const slideIcons = document.querySelectorAll(".slide-icon");
        const numberOfSlides = slides.length;
        var slideNumber = 0;

        //image slider next btn
        nextBtn.addEventListener("click", () =>{
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber++;

            if(slideNumber > (numberOfSlides - 1)){
                slideNumber = 0;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });

        prevBtn.addEventListener("click", () =>{
            slides.forEach((slide) => {
                slide.classList.remove("active");
            });
            slideIcons.forEach((slideIcon) => {
                slideIcon.classList.remove("active");
            });

            slideNumber--;

            if(slideNumber < 0){
                slideNumber = numberOfSlides - 1;
            }

            slides[slideNumber].classList.add("active");
            slideIcons[slideNumber].classList.add("active");
        });
    </script>
@endsection