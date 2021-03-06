<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products List</title>
    <link rel="icon" type="image/ico" href="https://i.imgur.com/clby8dV.jpg">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma-carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.min.css">
  </head>
  <body class="bg-white">
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
              <li><a href="{{ route('about-us') }}">ABOUT US</a></li>
              <li><a href="{{ route('services') }}">SERVICES</a></li>
              <li class="is-active"><a href="{{ route('products') }}">PRODUCTS</a></li>
              <li><a href="{{ route('contact-us') }}">CONTACT US</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!-- End Header -->
    <!-- Start Main Content -->
    <!-- Start Product Cards -->
    <div class="flex flex-col container mx-auto">
      <div class="inline-flex flex-row justify-center h-auto w-auto text-center">
        <div class="inline-flex flex-col items-center h-auto w-1/3 mr-12 mt-12 rounded-lg shadow-lg font-mono font-medium">
          <a class="p-4 mb-6 text-2xl text-grey-darkest hover:underline" href="{{ route('everyday-lechon') }}">Everyday Lechon</a>
          <img class="h-32 w-64 rounded-none mb-4" src="https://i.imgur.com/51iKdWU.jpg" alt="Everyday Lechon Product">
          <button class="bg-green hover:bg-green-dark text-white text-md font-bold py-2 px-4 h-10 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('everyday-lechon') }}"><i class="fas fa-eye fa-1x mr-2"></i>See</a>
          </button>
        </div>
        <div class="inline-flex flex-col items-center h-auto w-1/3 mr-12 mt-12 rounded-lg shadow-lg font-mono font-medium">
          <a class="p-4 mb-6 text-2xl text-grey-darkest hover:underline" href="{{ route('gelato-de-naction') }}">Gelato De Naction</a>
          <img class="h-32 w-64 rounded-none mb-4" src="https://i.imgur.com/9ZrUcRr.jpg" alt="Gelato De Naction Product">
          <button class="bg-green hover:bg-green-dark text-white text-md font-bold py-2 px-4 h-10 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('gelato-de-naction') }}"><i class="fas fa-eye fa-1x mr-2"></i>See</a>
          </button>
        </div>
        <div class="inline-flex flex-col items-center h-auto w-1/3 mt-12 rounded-lg shadow-lg font-mono font-medium">
          <a class="p-4 mb-6 text-2xl text-grey-darkest hover:underline" href="{{ route('theophilia-flowerets-farm') }}">Theophilia Flowerets Farm</a>
          <img class="h-32 w-64 rounded-none mb-4 -mt-8" src="https://i.imgur.com/92HR5m2.png" alt="Theophilia Flowerets Farm Product">
          <button class="bg-green hover:bg-green-dark text-white text-1xl font-bold py-2 px-4 h-10 w-24 rounded mb-4">
                     <a class="text-white hover:text-white" href="{{ route('theophilia-flowerets-farm') }}"><i class="fas fa-eye fa-1x mr-2"></i>See</a>
          </button>
        </div>
      </div>
      <div class="inline-flex flex-row justify-center h-auto w-auto text-center">
        <div class="inline-flex flex-col items-center h-auto w-1/3 mr-12 mt-12 mb-12 rounded-lg shadow-lg font-mono font-medium">
          <a class="p-4 mb-4 text-2xl text-grey-darkest hover:underline" href="{{ route('universal-electronic-supply') }}">Universal Electronic Supply</a>
          <img class="h-32 w-64 rounded-none mb-4" src="https://i.imgur.com/KbSnsWi.jpg" alt="Universal Electronic Supply Product">
          <button class="bg-green hover:bg-green-dark text-white text-md font-bold py-2 px-4 h-10 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('universal-electronic-supply') }}"><i class="fas fa-eye fa-1x mr-2"></i>See</a>
          </button>
        </div>
        <div class="inline-flex flex-col items-center h-auto w-1/3 mr-12 mt-12 mb-12 rounded-lg shadow-lg font-mono font-medium">
          <a class="p-4 mb-2 text-2xl text-grey-darkest hover:underline" href="{{ route('native-chicken-food-hall') }}">Native Chicken Food Hall</a>
          <img class="h-32 w-64 mt-2 rounded-none mb-4" src="https://i.imgur.com/ZU5Td4L.jpg" alt="Native Chicken Food Hall Product">
          <button class="bg-green hover:bg-green-dark text-white text-md font-bold py-2 px-4 h-10 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('native-chicken-food-hall') }}"><i class="fas fa-eye fa-1x mr-2"></i>See</a>
          </button>
        </div>
        <div class="inline-flex flex-col items-center h-auto w-1/3 mt-12 mb-12 rounded-lg shadow-lg font-mono font-medium">
          <a class="p-4 mb-4 text-2xl text-grey-darkest hover:underline" href="{{ route('trendy-fashion-boutique') }}">Trendy Fashion Boutique</a>
          <img class="h-32 w-64 rounded-none mb-4" src="https://i.imgur.com/PVFlisR.jpg" alt="Trendy Fashion Boutique Product">
          <button class="bg-green hover:bg-green-dark text-white text-md font-bold py-2 px-4 h-10 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('trendy-fashion-boutique') }}"><i class="fas fa-eye fa-1x mr-2"></i>See</a>
          </button>
        </div>
      </div>
    </div>
    <!-- End Product Cards -->
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
              <p>Tel. nos. : 493-1178 | 493-0396</p>
          </div>
          <div class="ml-24 text-md text-left mb-8">
              <p>Email : ldmaricel21@gmail.com</p>
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
    <script type="text/javascript" src="/js/fontawesome.min.js"></script>
    <script>
      var carousels = bulmaCarousel.attach(); // carousels now contains an array of all Carousel instances.
    </script>
  </body>
</html>
