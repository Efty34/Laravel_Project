<x-user-profile-outer>

    <header class="header" data-header>
        <div class="container">

            <div class="overlay" data-overlay></div>

            <a href="{{ route('index.landing-page') }}" class="navbar-link1">
                InFoo
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <p class="navbar-title">Menu</p>

                    <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#dream11" class="navbar-link" data-navlink>Dream 11</a>
                    </li>

                    <li>
                        <a href="#explore" class="navbar-link" data-navlink>Products</a>
                    </li>

                    <li>
                        <a href="#order" class="navbar-link" data-navlink>Order</a>
                    </li>

                    <li>
                        <a href="#forum" class="navbar-link" data-navlink>Forum</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link" data-navlink>Contact</a>
                    </li>

                </ul>

            </nav>


            {{-- <a href="#" class="navbar-link" style="font-weight: 600; font-size: 2.5rem;">
                {{ Auth::user()->name }}
            </a> --}}



            <button class="menu-open-btn" aria-label="Open Menu" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <a href="/logout" class="btn" aria-labelledby="wallet">
                <ion-icon name="exit-outline"></ion-icon>

                <span id="wallet">Logout</span>
            </a>

        </div>
    </header>

    @if (session('message'))
        <div class="floating-alert">
            <div class="alert alert-success" id="flash-message" role="alert">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <main>
        <article>

            <section class="hero" id="home">

                <div class="container">

                    <p id="welcome" class="section-subtitle">Welcome Back {{ Auth::user()->name }}</p>

                    <h2 class="h1 hero-title">Kick Off Your Passion: Explore Everything Football</h2>

                    <p class="hero-text">
                        Explore on the world's best footbal website. Create your dream 11 team and order your favourite.
                    </p>

                    {{-- <div class="btn-group">

                        <button class="btn">
                            <ion-icon name="rocket-outline" aria-hidden="true"></ion-icon>

                            <a href="#explore"><span>Explore</span></a>
                        </button>

                        <button class="btn">
                            <ion-icon name="create-outline" aria-hidden="true"></ion-icon>

                            <a href="#dream11"><span>Create</span></a>
                        </button>

                    </div> --}}

                </div>

                <svg class="hero-bg-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 465" version="1.1">
                    <defs>
                        <linearGradient x1="49.7965246%" y1="28.2355058%" x2="49.7778147%" y2="98.4657689%"
                            id="linearGradient-1">
                            <stop stop-color="rgba(69,40,220, 0.15)" offset="0%"></stop>
                            <stop stop-color="rgba(87,4,138, 0.15)" offset="100%"></stop>
                        </linearGradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="" fill="url(#linearGradient-1)">
                            <animate id="graph-animation" xmlns="http://www.w3.org/2000/svg" dur="2s"
                                repeatCount="" attributeName="points"
                                values="0,464 0,464 111.6,464 282.5,464 457.4,464 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,323.3 282.5,373 457.4,423.8 613.4,464 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,336.6 457.4,363.5 613.4,414.4 762.3,464 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,323.3 613.4,340 762.3,425.6 912.3,464 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,290.4 762.3,368 912.3,446.4 1068.2,464 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,329.6 912.3,420 1068.2,427.6 1191.2,464 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,402.4 1068.2,373 1191.2,412 1328.1,464 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,336.6 1191.2,334 1328.1,404 1440.1,464 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,282 1328.1,314 1440.1,372.8 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,254 1440.1,236 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,144.79999999999998 1440.1,464 0,464; 0,464 0,367 111.6,263 282.5,282 457.4,263 613.4,216 762.3,272 912.3,376 1068.2,282 1191.2,204 1328.1,164 1440.1,8 1440.1,464 0,464;"
                                fill="freeze"></animate>
                        </polygon>
                    </g>
                </svg>

            </section>

            <section class="section top-seller" id="dream11">
                <div class="container">

                    <p class="section-subtitle">Dream 11</p>

                    <a href="{{ route('index.league-list-page') }}">
                        <h2 class="h2 section-title">Build your squad</h2>
                    </a>

                    <ul class="grid-list">

                        @foreach ($user->players as $player)
                            <li>
                                <div class="card top-seller-card">

                                    <form
                                        action="{{ route('player.remove', ['player_name' => $player->player_name, 'player_position' => $player->player_position]) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <button class="delete-button" type="submit">X</button> --}}
                                        <button class="dream11">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20"
                                                height="25" width="25">
                                                <path fill="#FF0000"
                                                    d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z"
                                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                                            </svg>

                                        </button>
                                    </form>


                                    <div>
                                        <h3 class="card-title">
                                            {{ $player->player_name }}
                                        </h3>
                                        <data>{{ $player->player_position }}</data>
                                    </div>

                                </div>

                            </li>
                        @endforeach


                        {{-- @foreach ($dream11Players as $dream11Player)
                            <li>
                                <div class="card top-seller-card">

                                    <button class="delete-button" type="submit">X</button>

                                    <div class="top-seller-card2">
                                        <h3 class="card-title">
                                            {{$dream11Player->player_name}}
                                        </h3>

                                        <data>{{$dream11Player->player_position}}</data>
                                    </div>

                                </div>
                            </li>
                        @endforeach --}}


                    </ul>

                </div>
            </section>

            <section class="section explore" id="explore">
                <div class="container">

                    <p class="section-subtitle">Products</p>

                    <div class="title-wrapper">
                        <h2 class="h2 section-title">Peruse our catalogue of products</h2>
                    </div>

                    <ul class="grid-list">
                        @foreach ($products as $product)
                            <li>
                                <div class="card explore-card">

                                    <figure class="card-banner">
                                        <img src="products_storage/{{ $product->product_image }}" width="600"
                                            height="600" loading="lazy" class="img-cover">
                                        </a>
                                    </figure>

                                    <h3 class="h3 card-title">
                                        {{ $product->product_name }}
                                    </h3>

                                    {{-- <div class="wrapper">
                                        <data class="wrapper-item" value="1.5">Product Id</data>

                                        <span class="wrapper-item">{{ $product->product_id }}</span>
                                    </div> --}}

                                    <div class="wrapper">
                                        <data class="wrapper-item" value="1.5">Price</data>

                                        <span class="wrapper-item">{{ $product->product_price }}$</span>
                                    </div>

                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </section>

            <section class="section explore" id="order">
                <div class="container">

                    <p class="section-subtitle">Order Section</p>

                    <div class="center">
                        <div class="login-box">
                            <p>Order</p>
                            <form method="POST" action="/user-profile/order-products">
                                @csrf
                                <div class="user-box">
                                    <input required="" name="name" type="text"
                                        value="{{ Auth::user()->name }}">
                                    <label>Your Name</label>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="user-box">
                                    <select id="product-select">
                                        <option value="">Select a product</option>
                                        @foreach ($products as $product)
                                            <option value="{{ $product->product_id }}"
                                                data-price="{{ $product->product_price }}">
                                                {{ $product->product_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="user-box">
                                    <input required="" name="product_quantity" id="product_quantity"
                                        type="number" min="0" value="{{ old('product_quantity') }}">
                                    <label>Quantity</label>
                                    @if ($errors->has('product_quantity'))
                                        <span class="text-danger">{{ $errors->first('product_quantity') }}</span>
                                    @endif
                                </div>
                                <h4 class="total-h4">Total Price($):</h4>
                                <div class="user-box">
                                    <input required="" name="product_total_price" id="product_total_price"
                                        type="number" value="{{ old('product_total_price') }}" readonly>
                                    @if ($errors->has('product_total_price'))
                                        <span class="text-danger">{{ $errors->first('product_total_price') }}</span>
                                    @endif
                                </div>
                                <input type="hidden" id="product_price" name="product_price">
                                <input type="hidden" id="product_id" name="product_id">
                                <a>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <button type="submit" style="color: rgb(68, 8, 189)">Order</button>
                                </a>

                            </form>
                        </div>

                        <script>
                            document.getElementById('product-select').addEventListener('change', function() {
                                var selectedOption = this.options[this.selectedIndex];
                                var productId = selectedOption.value;
                                var productPrice = selectedOption.getAttribute('data-price');

                                document.getElementById('product_id').value = productId;
                                document.getElementById('product_price').value = productPrice;
                                calculateTotalPrice();
                            });

                            document.getElementById('product_quantity').addEventListener('input', calculateTotalPrice);

                            function calculateTotalPrice() {
                                var quantity = document.getElementById('product_quantity').value;
                                var price = parseFloat(document.getElementById('product_price').value);

                                var totalPrice = quantity * price;
                                document.getElementById('product_total_price').value = totalPrice;
                            }
                        </script>

                    </div>

                </div>
            </section>

            <section class="section instruction" id="forum">
                <div class="container">


                    <a href="{{ route('forum.forum-page') }}">
                        <p class="section-subtitle">Forum </p>
                    </a>

                    <h2 class="h2 section-title">My Posts</h2>

                    <ul class="grid-list">

                        @foreach ($posts as $post)
                            @if ($post->user_id == Auth::user()->id)
                                <li class="instruction-item">

                                    <div class="instruction-icon">
                                        <ion-icon name="chatbox-outline"></ion-icon>
                                    </div>

                                    <h3 class="instruction-title">{{ $post->title }}</h3>

                                    <p class="instruction-text">
                                        {{ $post->body }}
                                    </p>

                                    @if (auth()->id() == $post->user_id)
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button class="dream11" type="submit"
                                                onclick="return confirm('Are you sure?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20" height="25" width="25">
                                                    <path fill="#FF0000"
                                                        d="M8.78842 5.03866C8.86656 4.96052 8.97254 4.91663 9.08305 4.91663H11.4164C11.5269 4.91663 11.6329 4.96052 11.711 5.03866C11.7892 5.11681 11.833 5.22279 11.833 5.33329V5.74939H8.66638V5.33329C8.66638 5.22279 8.71028 5.11681 8.78842 5.03866ZM7.16638 5.74939V5.33329C7.16638 4.82496 7.36832 4.33745 7.72776 3.978C8.08721 3.61856 8.57472 3.41663 9.08305 3.41663H11.4164C11.9247 3.41663 12.4122 3.61856 12.7717 3.978C13.1311 4.33745 13.333 4.82496 13.333 5.33329V5.74939H15.5C15.9142 5.74939 16.25 6.08518 16.25 6.49939C16.25 6.9136 15.9142 7.24939 15.5 7.24939H15.0105L14.2492 14.7095C14.2382 15.2023 14.0377 15.6726 13.6883 16.0219C13.3289 16.3814 12.8414 16.5833 12.333 16.5833H8.16638C7.65805 16.5833 7.17054 16.3814 6.81109 16.0219C6.46176 15.6726 6.2612 15.2023 6.25019 14.7095L5.48896 7.24939H5C4.58579 7.24939 4.25 6.9136 4.25 6.49939C4.25 6.08518 4.58579 5.74939 5 5.74939H6.16667H7.16638ZM7.91638 7.24996H12.583H13.5026L12.7536 14.5905C12.751 14.6158 12.7497 14.6412 12.7497 14.6666C12.7497 14.7771 12.7058 14.8831 12.6277 14.9613C12.5495 15.0394 12.4436 15.0833 12.333 15.0833H8.16638C8.05588 15.0833 7.94989 15.0394 7.87175 14.9613C7.79361 14.8831 7.74972 14.7771 7.74972 14.6666C7.74972 14.6412 7.74842 14.6158 7.74584 14.5905L6.99681 7.24996H7.91638Z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>

                                            </button>


                                        </form>
                                    @endif



                                </li>
                            @endif
                        @endforeach

                    </ul>

                </div>
            </section>

        </article>
    </main>

    </article>
    </main>


    <footer id="contact" class="footer">
        <div class="container">

            <div class="footer-top">

                <div class="footer-list">

                    <p class="section-subtitle">Contact Us</p>

                    <div class="center">
                        <div class="form-container">
                            <p class="title">Contact</p>
                            <form class="form" method="POST" action="/user-profile/send-message">
                                @csrf
                                <div class="input-group">
                                    <label for="username">Your Name</label>
                                    <input type="text" name="name" id="name" required=""
                                        value="{{ Auth::user()->name }}">
                                </div>
                                <div class="input-group">
                                    <label for="username">Email</label>
                                    <input type="email" name="email" id="email" required=""
                                        value="{{ Auth::user()->email }}">
                                </div>
                                <div class="input-group">
                                    <label for="password">Subject</label>
                                    <input type="text" name="subject" id="product" required=""
                                        value="{{ old('subject') }}">
                                </div>
                                <div class="input-group">
                                    <label for="password">Message</label>
                                    <textarea required="" name="message" cols="30" rows="10">{{ old('message') }}</textarea>
                                </div>
                                <button class="sign">Send</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </footer>

    <a href="#top" class="back-to-top" aria-label="Back to Top" data-back-top-btn>
        <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
</x-user-profile-outer>
