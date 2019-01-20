<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Information</title>
    <link rel="icon" type="image/ico" href="https://i.imgur.com/clby8dV.jpg">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma-carousel.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body class="bg-white">
    <!-- Start Header -->
    <section class="hero is-success mb-12">
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
              <li><a href="{{ route('about-us') }}">ABOUT US</a></li>
              <li class="is-active"><a href="{{ route('services') }}">SERVICES</a></li>
              <li><a href="{{ route('products') }}">PRODUCTS</a></li>
              <li><a href="{{ route('contact-us') }}">CONTACT US</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- End Header -->
    <!-- Start Main Content -->
    <!-- Start Service Info -->
      <div class="flex flex-col items-center container mx-auto h-auto w-auto bg-grey-lighter rounded-none shadow-md">
        <div class="inline-flex flex-row items-center h-auto w-auto ml-12 mr-12 mt-4 mb-12">
          <img class="h-48 w-48 rounded-full shadow-lg ml-4 mr-8 mt-4 mb-4 " src="https://i.imgur.com/clby8dV.jpg" alt="Nexus Study Lounge Service Logo">
          <div class="inline-flex flex-col h-auto w-auto">
              <div class="h-16 w-auto rounded-lg shadow-lg bg-white ml-4 mr-8 mt-8 mb-4 text-center font-mono font-medium text-3xl">
                <p class="pt-2 pl-8 pr-8 pt-4">Nexus Study Lounge Service</p>
              </div>
              <div class="inline-flex flex-col h-auto w-auto rounded-lg shadow-lg bg-white ml-4 mr-4 mt-2 font-mono font-normal">
                  <p class="p-4 text-2xl text-bold text-left">Goals and Objectives</p>
                  <p class="p-4 text-md">1. Provide a spacious and comfortable personal area for co-
  working and study.</p>
                  <p class="p-4 text-md">2. Improve profitability and growth of business.</p>
                  <p class="p-4 text-md">3. Develop opportunities for collaboration between members.</p>
                  <p class="p-4 text-md">4. Provide a budget friendly price with good quality.</p>
                  <p class="p-4 text-md">5. Continuous improvement of product and service offered to
  achieve competitive &nbsp;&nbsp;&nbsp;&nbsp; advantage.</p>
                  <p class="p-4 text-md">6. Maintain a healthy working environment for employees.</p>
              </div>
          </div>
        </div>
        <div class="inline-flex flex-row h-auto w-auto">
            <div class="bg-white h-auto max-w-lg mr-8 text-center rounded-lg shadow-lg mb-8 ml-8">
              <h1 class="text-2xl text-bold font-mono">Mission</h1>
              <p class="text-md font-mono p-4 tracking-tight">Nexus Study Lounge aims to provide affordable workspace and business support services to help businessmen and students accomplish their task in a convenient place.
              </p>
            </div>
            <div class="bg-white h-auto max-w-lg text-center rounded-lg shadow-lg mb-8 mr-8">
              <h1 class="text-2xl text-bold font-mono">Vision</h1>
              <p class="text-md font-mono p-4 tracking-tight">To be the best study lounge business in Cadiz City that can increase productivity and satisfaction of customers.
              </p>
            </div>
        </div>
        <div class="inline-flex flex-row items-center h-auto w-auto mb-4">
          <div class="h-auto w-64 m-4 rounded-lg shadow-lg -mt-2">
            <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
              <div class='carousel-container'>
                <div class='carousel-item has-background is-active'>
                  <img class="is-background" src="https://wikiki.github.io/images/merry-christmas.jpg" alt="" width="640" height="310" />
                </div>
                <div class='carousel-item has-background'>
                  <img class="is-background" src="https://wikiki.github.io/images/singer.jpg" alt="" width="640" height="310" />
                </div>
                <div class='carousel-item has-background'>
                  <img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" width="640" height="310" />
                </div>
                <div class='carousel-item has-background'>
                  <img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" width="640" height="310" />
                </div>
              </div>
              <div class="carousel-navigation is-centered">
                <div class="carousel-nav-left">
                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>
                <div class="carousel-nav-right">
                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="h-auto w-auto m-4">
            <div class="bg-white h-auto max-w-lg text-center rounded-lg shadow-lg mb-8">
                <h1 class="text-2xl text-bold font-mono  pt-2">Services Offered</h1>
                <p class="text-md font-mono p-4 tracking-tight">The main goal of Nexus Study Lounge is to provide good ambiance and a cozy set up for study and doing some school and office works. The customers were also given the option to acquire additional services that will be included in the services offered. The customers can choose to obtain the following:
                </p>
                 <p class="text-1xl font-mono p-4 tracking-tight pb-4 pt-2"><em>Printing</em>, <em>computers</em>, <em>free wifi24/7 open</em>, <em>photocopying</em>, <em>book binding</em>, <em>scanners</em>, <em>unlimited coffee or ice tea</em>.
                </p>
              </div>
          </div>
        </div>
  <!--       <div class="h-auto w-auto m-4">
          <div class="h-12 w-32 bg-grey-light ml-4 mr-4"></div>
        </div> -->
      </div>
    <!-- End Service Info -->
    <!-- End Main Content -->
    <!-- Start Footer -->
    <div class="flex bg-grey-lighter mt-12" id="footer">
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
    <!-- Start Scripts -->
    <script type="text/javascript" src="/js/bulma-carousel.min.js"></script>
    <script>
      var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances.
    </script>
    <!-- End Scripts -->
  </body>
</html>
