<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catch Your Dream</title>

    @include('partials.head')

</head>
<body>
    
<!-- header section starts  -->
@include('partials.nav')
<!-- header section ends -->


<!-- home section starts  -->
<section class="about" id="home">
    
    <div class="row">
    
        <div class="content">
            <h3>Catch Your Dream Event Management</h3>
            <p>Experience photography and videography in a new diamension </p>
            <a href="#" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="{{asset('frontend-assets/assets/images/hero-image.png')}}" alt="">
        </div>
    
    </div>
    
    </section>

<section class="home" id="home">

    <div class="content">
        <h3>its time to celebrate! the best <span> event organizers </span></h3>
        <a href="#" class="btn">contact us</a>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="{{asset('frontend-assets/assets/images/slide-1.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend-assets/assets/images/slide-2.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend-assets/assets/images/slide-3.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend-assets/assets/images/slide-4.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend-assets/assets/images/slide-5.jpg')}}" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('frontend-assets/assets/images/slide-6.jpg')}}" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>venue selection</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>invitation card</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>entertainment</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>photos and videos</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>custom food</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="{{asset('frontend-assets/assets/images/about-img.jpg')}}" alt="">
    </div>

    <div class="content">
        <h3>we will give a very special celebration for you</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam labore fugiat ut esse perferendis perspiciatis provident dolores fuga in facilis culpa possimus, quia praesentium itaque, sapiente quasi harum rem asperiores.</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero expedita incidunt provident quibusdam aut odit, numquam nesciunt similique nisi.</p>
        <a href="#" class="btn">contact us</a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-1.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-2.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-3.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-4.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-5.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-6.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-7.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-8.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('frontend-assets/assets/images/g-9.jpg')}}" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- review section starts  -->

<section class="reivew" id="review"> 
    
    <h1 class="heading">client's <span>review</span></h1>

    <div class="review-slider swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{asset('frontend-assets/assets/images/pic-1.png')}}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{asset('frontend-assets/assets/images/pic-2.png')}}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{asset('frontend-assets/assets/images/pic-3.png')}}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="{{asset('frontend-assets/assets/images/pic-4.png')}}" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->


<section class="service" id="service">

    <h1 class="heading">latest from our <span>blogs</span> </h1>

    <div class="box-container">

        @foreach ($blogs as $raw )
        <div class="box">
            <img class="blog-image" src="{{ URL::to('/') }}/images/blogs/{{ $raw->image }}" alt="">
            <h3>{{ $raw->title }}</h3>
            <p>{{ $raw->content }}</p>
        </div>
        @endforeach

        <div class="box">
            <img class="blog-image" src="{{asset('frontend-assets/assets/images/g-1.jpg')}}" alt="">
            <h3>This is a blog title 2</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <img class="blog-image" src="{{asset('frontend-assets/assets/images/g-1.jpg')}}" alt="">
            <h3>This is a blog title 3</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

        <div class="box">
            <img class="blog-image" src="{{asset('frontend-assets/assets/images/g-1.jpg')}}" alt="">
            <h3>This is a blog title 3</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, suscipit.</p>
        </div>

    </div>

</section>



<!-- footer section starts  -->

@include('partials.footer')

<!-- footer section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">

    <div class="toggle-btn">
        <i class="fas fa-cog"></i>
    </div>

    <h3>choose color</h3>

    <div class="buttons">
        <div class="theme-btn" style="background: #3867d6;"></div>
        <div class="theme-btn" style="background: #f7b731;"></div>
        <div class="theme-btn" style="background: #ff0033;"></div>
        <div class="theme-btn" style="background: #20bf6b;"></div>
        <div class="theme-btn" style="background: #fa8231;"></div>
        <div class="theme-btn" style="background: #FC427B;"></div>
    </div>

</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="{{asset('frontend-assets/assets/js/script.js')}}"></script>

</body>
</html>