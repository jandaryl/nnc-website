<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="icon" type="image/ico" href="https://i.imgur.com/clby8dV.jpg">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma-carousel.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body class="bg-grey-lightest">
    <!-- Start Header -->
    <section class="hero is-success">
      <div class="hero-body">
        <div class="level">
          <div class="level-item">
                <figure class="image is-128x128 mr-4">
                    <img class="is-rounded" src="https://i.imgur.com/clby8dV.jpg">
                </figure>
                <h1 class="title has-text-centered is-size-1">
                    North Negros College
                </h1>
          </div>
        </div>
      </div>
      <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth is-size-5 has-text-weight-normal">
          <div class="container">
            <ul>
              <li class="is-active"><a href="{{ route('home') }}">HOME</a></li>
              <li><a href="#about-us">ABOUT US</a></li>
              <li><a>SERVICES</a></li>
              <li><a>PRODUCTS</a></li>
              <li><a href="#footer">CONTACT US</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- End Header -->
    <!-- Start Main Content -->
    <!-- Start Carousel -->
    <section class="hero is-medium has-carousel mb-12">
      <div class="hero-carousel carousel-animated carousel-animate-fade">
        <div class='carousel-container'>
          <div class='carousel-item has-background is-active'>
            <img class="is-background" src="https://wikiki.github.io/images/merry-christmas.jpg" alt="" />
          </div>
          <div class='carousel-item has-background'>
            <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" />
          </div>
          <div class='carousel-item has-background'>
            <img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" />
          </div>
          <div class='carousel-item has-background'>
            <img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" />
          </div>
        </div>
        <div class="carousel-navigation is-overlay">
          <div class="carousel-nav-left">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
          </div>
          <div class="carousel-nav-right">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="hero-body has-text-centered">
          <div class="columns is-mobile is-centered">
            <h1>Welcome to North Negros</h1>
          </div>
      </div>
    </section>
    <!-- End Carousel -->
    <!-- Start History -->
    <div id="about-us">
      <div class="flex container mx-auto justify-center h-auto mb-12 mt-4">
        <div class="bg-grey-lightest h-auto max-w-lg text-center rounded-lg shadow-lg mt-8 mb-12">
              <h1 class="text-2xl text-bold text-mono uppercase">History</h1>
              <p class="text-1xl text-sans tracking-tight text-left mt-1 p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>
      <!-- End History -->
      <!-- Start Mission and Vision -->
      <div class="flex flex-row container mx-auto justify-center h-48">
          <div class="bg-grey-lightest h-24 max-w-lg mr-8 text-center rounded-full shadow-lg mt-4">
            <h1 class="text-2xl text-bold text-mono uppercase">Mission</h1>
            <p class="text-1xl text-sans tracking-tight">Our Mission to produce socially conscientious, responsible, highly skilled and globally competitive graduates.
            </p>
          </div>
          <div class="bg-grey-lightest h-24 max-w-lg text-center rounded-full shadow-lg mt-4">
            <h1 class="text-2xl text-bold text-mono uppercase">Vision</h1>
            <p class="text-1xl text-sans tracking-tight">North Negros College is the foremost provider of holistic and God-centered quality education committed to contribute to the socio-economic development of Negros Island.
            </p>
          </div>
      </div>
      <!-- End Mission and Vision -->
      <!-- Start Programs Offered -->
      <div class="flex flex-col container mx-auto bg-grey-lightest">
        <h2 class="mb-2 text-3xl font-sans font-medium uppercase mt-2">Programs Offered :</h2>
        <div class="inline-flex flex-row justify-center mb-32">
          <div class="h-48 w-full mr-12 text-center text-2xl shadow-lg rounded-lg">
            <div class="ml-32 h-20 w-24 mt-8 mb-2 mr-2"><i class="fas fa-laptop-code fa-2x"></i>
            </div>
            Bachelor of Science in Computer Science
            </div>
          <div class="h-48 w-full mr-12 text-center text-2xl shadow-lg rounded-lg">
            <div class="ml-32 h-20 w-24 mt-8 mb-2 mr-2"><i class="fas fa-utensils fa-2x"></i>
            </div>
            Bachelor of Hotel Restaurant Management
          </div>
          <div class="h-48 w-full mr-12 text-center text-2xl shadow-lg rounded-lg">
            <div class="ml-32 h-20 w-24 mt-8 mb-2 mr-2"><i class="fas fa-briefcase fa-2x"></i>
            </div>
            Bachelor of Business Administration
          </div>
        </div>
      </div>
    </div>
    <!-- End Programs Offered -->
    <!-- End Main Content -->
    <!-- Start Footer -->
    <div class="flex bg-grey-lighter" id="footer">
      <div class="w-1/5 h-auto">
        <div class="inline-flex flex-col">
          <div class="ml-32 px-12 mt-8 text-md">
              <p>Our Location :</p>
          </div>
          <div class="ml-24 mt-4">
                <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=North%20Negros%20College%2C%20Cadiz%20City%2C%20Negros%20Occidental%20+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                height="150" frameborder="0" allowfullscreen>
                </iframe>
          </div>
          <div class="ml-24 text-md text-center">
              <p>Address : Cor. Villena - Lopes Jaena Sts., Cadiz City, 6121 Negros Occidental, Visayas, Philippines</p>
          </div>
          <div class="ml-24 text-md text-left">
              <p>Tel. nos. : xxx-xxxx | xxx-xxxx | xxx-xxxx</p>
          </div>
          <div class="ml-24 text-md text-left mb-8">
              <p>Email : example@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="w-3/5 h-64">
          <div class="inline-flex flex-col">
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark" href="{{ route('home') }}">HOME</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-0" href="#about-us">ABOUT US</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-0" href="{{ route('home') }}">SERVICES</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-0" href="{{ route('home') }}">PRODUCTS</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-0" href="#contact-us">CONTACT US</a>
          </div>
      </div>
      <div class="inline-flex items-center justify-start w-1/5 h-64">
            <div class="inline-flex flex-col">
              <div class="ml-1 mb-2 text-1xl">
                  <p>Connect With Us :</p>
              </div>
              <div class="inline-flex flex-row">
                  <div class="rounded-full h-8 w-8 flex items-center justify-center mr-1"><i class="fab fa-facebook-f"></i></div>
                  <div class="rounded-full h-8 w-8 flex items-center justify-center mr-1"><i class="fab fa-twitter"></i></div>
                  <div class="rounded-full h-8 w-8 flex items-center justify-center mr-1"><i class="fab fa-instagram"></i></div>
              </div>
        </div>
      </div>
    </div>
    <div class="bg-grey-light text-grey-darker text-center text-1xl text-semibold">
        <p>Copyright &copy; 2019 North Negros College</p>
    </div>
    <!-- End Footer -->
    <!-- Scripts -->
    <script type="text/javascript" src="/js/bulma-carousel.min.js"></script>
    <script>
      var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances.
    </script>
  </body>
</html>
