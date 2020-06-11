<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxi Burger</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        
        <div id="app">
            <header class="with-background">
            <div class="top-nav container">
                <div class="logo">Home</div>
                <ul>
                    <li><a href="{{ route('shop.index2', ['category'=> 'burgers']) }}">Menu</a></li>
                    <li><a href="#">Reservation</a></li>
                    <li><a href="#">Blog</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="/cart">Cart</a></li>

                            <!--  logout -->
                            
                            <li>                                                  
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            </li>



                            <!--  logout -->
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                        @endauth
                     @endif
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Maxi Burger</h1>
                    <h2>BURGER</h2>
                    <h2>DONE</h2>
                    <h2>RIGHT</h2>
                    <p>Join us for your next meal. We get the juices flowing.</p>
                    <div class="hero-buttons">
                        <a href="{{ route('shop.index2', ['category'=> 'burgers']) }}" class="button button-white">Order now!</a>                        
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    
                </div>
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Samples From Ours Gallery</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

                <div class="text-center button-container">
                    <a href="{{ route('shop.index2', ['category'=> 'burgers']) }}" class="button">Burgers</a>
                    <a href="{{ route('shop.index2', ['category'=> 'beers']) }}" class="button">Brewery</a>
                </div>


                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="product">
                             <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                             <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product -> name}}</div></a>
                        <div class="product-price">{{ $product -> presentPrice() }}</div>
                    </div>
                    @endforeach
                    
                    
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="#" class="button">See Menu</a>
                </div>

            </div> <!-- end container -->

        </div> 

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="img/burger-image-1-2x_orig.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="img/beer-2x.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="img/Blackened-Fish-Tacos-with-Avocado.jpg" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                </div> <!-- end blog-posts -->

                



            </div> <!-- end container -->
        </div> <!-- end blog-section -->
     <div class="featured-section">
        <div class="container">
            <h1 class="text-center">MAKE A RESERVATION</h1>
           
                <p class="section-description text-center">Click bellow to make a online. </p>
                <p class="section-description text-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis. </p>
                <div class="text-center button-container">
                    <a href="#" class="button">FIND A TABLE </a>
                    
                </div>
                <h2 class="text-center">BY PHONE</h2>
                <p class="section-description text-center">Prefer to make your reservation via phone?</p>
                <p class="section-description text-center">Call (+48) 17 872 10 00 between 10am and noon.</p>



                </div>
</div>
        
@include('partials.footer')


        </div> <!-- end #app -->

    </body>
</html>