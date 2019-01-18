<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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
              <li><a href="{{ route('home') }}">HOME</a></li>
              <li class="is-active"><a href="{{ route('about-us') }}">ABOUT US</a></li>
              <li><a>SERVICES</a></li>
              <li><a>PRODUCTS</a></li>
              <li><a>CONTACT US</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- End Header -->
    <!-- Start Main Content -->
        <div class="flex flex-row container mx-auto h-auto w-auto">
          <div class="bg-grey-lightest h-auto max-w-lg text-center rounded-lg shadow-md mt-8 mr-8 mb-8">
            <h1 class="text-2xl text-bold text-mono uppercase">North Negros College History</h1>
            <p class="text-1xl text-sans tracking-tight text-left mt-4 p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.lorem</p>
          </div>
          <div class="inline-flex flex-col items-center">
            <div class="bg-grey-lightest h-auto max-w-sm text-center rounded-lg shadow-md mt-8 mr-8 mb-4">
              <h1 class="text-2xl text-bold text-mono uppercase">Mission</h1>
              <p class="text-1xl text-sans tracking-tight text-left mt-2 p-4">Our Mission to produce socially conscientious, responsible, highly skilled and globally competitive graduates.</p>
            </div>
            <div class="bg-grey-lightest h-auto max-w-sm text-center rounded-lg shadow-md mt-2 mr-8 mb-8">
              <h1 class="text-2xl text-bold text-mono uppercase">Vision</h1>
              <p class="text-1xl text-sans tracking-tight text-left mt-2 p-4">North Negros College is the foremost provider of holistic and God-centered quality education committed to contribute to the socio-economic development of Negros Island.</p>
            </div>
          </div>
        </div>
    <!-- End Main Content -->
    <!-- Start Footer -->
    <div class="flex bg-grey-lighter">
      <div class="w-1/5 h-64">
        <div class="inline-flex flex-col">
          <div class="ml-32 px-10 mt-2">
              <p>Our Location :</p>
          </div>
          <div class="ml-16 mt-4">
                <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=North%20Negros%20College%2C%20Cadiz%20City%2C%20Negros%20Occidental%20+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                height="120" frameborder="0" allowfullscreen>
                </iframe>
          </div>
          <div class="ml-16 text-sm text-center">
              <p>Cor. Villena - Lopes Jaena Sts., Cadiz City, 6121 Negros Occidental, Visayas, Philippines</p>
          </div>
        </div>
      </div>
      <div class="w-3/5 h-64">
          <div class="inline-flex flex-col">
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark" href="{{ route('home') }}">HOME</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-1" href="{{ route('about-us') }}">ABOUT US</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-1" href="{{ route('home') }}">SERVICES</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-1" href="{{ route('home') }}">PRODUCTS</a>
            <a class="ml-32 pl-12 py-1 mt-12 text-grey-darkest hover:text-grey-dark -mt-1" href="{{ route('home') }}">CONTACT US</a>
          </div>
      </div>
      <div class="inline-flex items-center justify-start w-1/5 h-64">
            <div class="inline-flex flex-col">
              <div class="ml-4 mb-2">
                  <p>Follow Us :</p>
              </div>
              <div class="inline-flex flex-row">
                  <div class="rounded-full h-8 w-8 flex items-center justify-center mr-1"><i class="fab fa-facebook-f"></i></div>
                  <div class="rounded-full h-8 w-8 flex items-center justify-center mr-1"><i class="fab fa-twitter"></i></div>
                  <div class="rounded-full h-8 w-8 flex items-center justify-center mr-1"><i class="fab fa-instagram"></i></div>
              </div>
        </div>
      </div>
    </div>
    <div class="bg-grey-light  text-grey-darker text-center text-sm text-semibold">
        <p>Copyright &copy; 2019 North Negros College</p>
    </div>
    <!-- End Footer -->
  </body>
</html>
