<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" type="text/css" />
    <script src="https://kit.fontawesome.com/2cb74c4ba3.js" crossorigin="anonymous"></script>
    <title>IZAO Beats</title>
</head>

<body>
    <div id="page-wrapper">
        <header id="header">
            <div class="logo">
                <a class="logotop" href="{{ url('/') }}"><img id="header-img" src="{{ asset('images/izao v2.png') }}"
                        alt="izao" /></a>
            </div>

            <nav id="nav-bar">
                <ul>
                    <li><a class="nav-link" href="#features" id="underlineanimation">Features</a></li>
                    <li><a class="nav-link" href="#pricing" id="underlineanimation">Pricing</a></li>
                    <li><a class="nav-link" href="{{ url('/contact') }}" id="underlineanimation">Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <!-- <div class="container">
        <section id="hero">
          <h2>Get your beat now!</h2>
          <form id="form">
            <label for="email">Enter your email address:</label><br />
            <input
              type="email"
              id="email"
              name="email"
              autocomplete="off"
              required
            />
            <input id="submit" type="submit" value="Get Started" class="btn" />
          </form>
        </section>
      </div> -->

        <div class="container">
            <section id="features">
                <div class="grid">
                    <div class="icon">
                        <i class="fa-sharp fa-3x fa-solid fa-fire"></i>
                    </div>
                    <div class="desc">
                        <h2>Premium Quality</h2>
                        <p><strong>IZAO</strong> makes decent, production-ready beats for you.</p>
                    </div>
                </div>
                <div class="grid">
                    <div class="icon"><i class="fa-solid fa-3x fa-truck-fast"></i></div>
                    <div class="desc">
                        <h2>Fast Delivery</h2>
                        <p>
                            We make sure you recieve your beat
                            <strong>as soon as possible</strong>.
                        </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="icon">
                        <i class="fa-solid fa-comments-dollar fa-3x"></i>
                    </div>
                    <div class="desc">
                        <h2>Great Deal!</h2>
                        <p>
                            For every <strong>two</strong> beats you purchase, we will give
                            one <strong>free</strong> beat.
                        </p>
                    </div>
                </div>
            </section>
            <section id="how-it-works">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6lQORf4n428"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </section>
            <section id="pricing">
                <div class="product" id="tenor">
                    <div class="level">Beat</div>
                    <h2>RM100</h2>
                    <ol>
                        <li>High Quality</li>
                        <li>WAV and MP3</li>
                        <li>Including Stems</li>
                    </ol>
                    <!-- <button class="btn">Select</button> -->
                </div>
                <div class="product" id="bass">
                    <div class="level">Mixing and Mastering Service</div>
                    <h2>RM75</h2>
                    <ol>
                        <li>High Quality</li>
                        <li>Guaranteed Satisfaction</li>
                        <li>3 Songs for RM200</li>
                    </ol>
                    <!-- <button class="btn">Select</button> -->
                </div>
                <!-- <div class="product" id="valve">
          <div class="level">Drum Kits</div>
          <h2>RM50</h2>
          <ol>
            <li>Premium Quality</li>
            <li>Buy 2 Packs and get 1 Free</li>
            <li>Including Bonus Loops</li>

          </ol>
          <button class="btn">Select</button>
        </div> -->
            </section>
            <footer>
                <ul>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <span>Copyright 2023, IZAO</span>
            </footer>
        </div>
    </div>
</body>

</html>
