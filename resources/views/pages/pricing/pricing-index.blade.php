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

        <h1 class="heading"><span>about</span> us </h1>

        <div class="row">

            <div class="content">
                <h3>we will give a very special celebration for you</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam labore fugiat ut esse perferendis
                    perspiciatis provident dolores fuga in facilis culpa possimus, quia praesentium itaque, sapiente
                    quasi harum rem asperiores.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero expedita incidunt provident
                    quibusdam aut odit, numquam nesciunt similique nisi.</p>
                <a href="#" class="btn">contact us</a>
            </div>

            <div class="image">
                <img src="{{asset('frontend-assets/assets/images/about-img.jpg')}}" alt="">
            </div>

        </div>

    </section>

    <!-- home section ends -->

    <!-- price section starts  -->

    <section class="price" id="price">

        <h1 class="heading"> our <span>price</span> </h1>

        <div class="box-container">

            <div class="box">
                <h3 class="title">for birthdays</h3>
                <h3 class="amount">$250.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for weddings</h3>
                <h3 class="amount">$450.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for concerts</h3>
                <h3 class="amount">$650.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

            <div class="box">
                <h3 class="title">for others</h3>
                <h3 class="amount">$850.99</h3>
                <ul>
                    <li><i class="fas fa-check"></i>full services</li>
                    <li> <i class="fas fa-check"></i> decorations </li>
                    <li> <i class="fas fa-check"></i> music and photos </li>
                    <li> <i class="fas fa-check"></i> food and drinks </li>
                    <li> <i class="fas fa-check"></i> invitation card </li>
                </ul>
                <a href="#" class="btn">check out</a>
            </div>

        </div>


    </section>

    <!-- price section ends -->


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
