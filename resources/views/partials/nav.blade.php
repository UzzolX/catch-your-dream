<header class="header">

    <a href="/">
        <img src="{{asset('frontend-assets/assets/images/logo.png')}}" class="logo" alt="Logo">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="{{ route('pricing.index') }}">price</a>
        <a href="#review">review</a>
        <a href="{{ route('contact.index') }}">contact</a>
        <a href="">Blogs</a>
        <a class="login-btn" href="{{ route('login') }}">Login</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>
