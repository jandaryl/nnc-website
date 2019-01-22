<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trendy Fashion Boutique</title>
    <link rel="icon" type="image/ico" href="https://i.imgur.com/clby8dV.jpg">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma-carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome.min.css">
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
    <!-- Start Product Info -->
    <div class="flex flex-col items-center container mx-auto h-auto w-64 bg-grey-lighter rounded-none shadow-md">
      <div class="inline-flex flex-row h-auto w-auto">
          <img class="h-48 w-48 rounded-none mt-8 shadow-lg" src="https://i.imgur.com/x87Op6B.jpg" alt="Trendy Fashion Boutique Logo">
          <div class="h-16 w-auto rounded-lg shadow-lg bg-white ml-8 mr-8 mt-24 mb-4 text-center font-mono font-medium text-3xl">
            <p class="pt-2 pl-8 pr-8 pt-4 font-sans">Trendy Fashion Boutique</p>
          </div>
      </div>
      <div class="inline-flex flex-row h-auto w-auto">
        <div class="h-full w-1/3 mr-8 mt-8 mb-4 ml-8 rounded-lg shadow-lg">
          <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
            <div class='carousel-container'>
              <div class='carousel-item has-background is-active'>
                <img class="is-background" src="https://i.imgur.com/VKmPgRz.jpg" alt="Many Pants" width="640" height="310" />
              </div>
              <div class='carousel-item has-background'>
                <img class="is-background" src="https://i.imgur.com/UzVkxDc.jpg" alt="white clothes" width="640" height="310" />
              </div>
              <div class='carousel-item has-background'>
                <img class="is-background" src="https://i.imgur.com/T0uc15t.jpg" alt="double back" width="640" height="310" />
              </div>
              <div class='carousel-item has-background'>
                <img class="is-background" src="https://i.imgur.com/6B3i7sy.jpg" alt="Jeans Pants" width="640" height="310" />
              </div>
              <div class='carousel-item has-background'>
                <img class="is-background" src="https://i.imgur.com/ah5GTvc.jpg" alt="Gowns" width="640" height="310" />
              </div>
              <div class='carousel-item has-background'>
                <img class="is-background" src="https://i.imgur.com/Kvx4Uyn.jpg" alt="Jackets" width="640" height="310" />
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
        <div class="inline-flex flex-col h-auto w-auto mt-8">
            <div class="bg-white h-auto max-auto mr-8 text-center rounded-lg shadow-lg mb-8">
              <h1 class="text-2xl text-bold font-mono pt-4">Problem</h1>
              <p class="text-md font-mono p-4 tracking-tight">We are proposing this business because nowadays, people are conscious on what they wear, including the designs and styles of the clothes especially the millennials.
              </p>
            </div>
            <div class="bg-white h-auto max-auto text-center rounded-lg shadow-lg mb-8 mr-8">
              <h1 class="text-2xl text-bold font-mono pt-4">Objectives</h1>
              <p class="text-md font-mono pl-6 pr-4 pt-4 tracking-tight text-left">1. Establish a unique boutique in the City of Cadiz.
              </p>
              <p class="text-md font-mono pl-6 pr-4 tracking-tight text-left">2. Provide quality clothing and customer service at a reasonable price.
              </p>
              <p class="text-md font-mono pl-6 pr-4 tracking-tight text-left">3. To provide millennial with unique and inexpensive clothing.
              </p>
              <p class="text-md font-mono pl-6 pr-4 pb-4 tracking-tight text-left">4. Continually and consistently increase total number of customer per year.
              </p>
            </div>
      </div>
      </div>
      <div class="inline-flex flex-row h-auto w-auto">
         <div class="bg-white h-auto max-w-lg mr-8 text-center rounded-lg shadow-lg mb-12 ml-8 mt-4">
              <h1 class="text-2xl text-bold font-mono">Mission</h1>
              <p class="text-md font-mono p-4 tracking-tight">Trendy Fashion Boutique exist with the mission to give every people the means to STYLE HER OWN LIFE to make shopping a pleasant, yet inexpensive experience for millennial, while providing their lives with a sense of confidence and beauty.
              </p>
         </div>
        <div class="bg-white h-auto max-w-lg text-center rounded-lg shadow-lg mb-12 mr-8 mt-4">
              <h1 class="text-2xl text-bold font-mono">Vision</h1>
              <p class="text-md font-mono p-4 tracking-tight">The Trendy Fashion Boutique as one of business entity envisioning to create a global brand that provides fashionable product at affordable prices to people, while achieving the goal of becoming the NUMBER ONE VALUE TRENDY FASHION BOUTIQUE across the city.
              </p>
        </div>
      </div>
        <div class="h-auto w-auto mr-4 ml-4 mb-4">
          <div class="bg-white h-auto max-w-lg text-center rounded-lg shadow-lg mb-8">
              <h1 class="text-2xl text-bold font-mono pt-2">Contact Us</h1>
              <p class="text-md font-mono pl-4 pr-4 pt-4 tracking-tight text-left">Address : Cor. Villena - Lopes Jaena Sts., Cadiz City, 6121 Negros Occidental 6121</p>
              <p class="text-md font-mono pl-4 pr-4 pt-4 tracking-tight text-left">Tel. Nos. : xxx-xxxx | xxx-xxxx</p>
              <p class="text-md font-mono pl-4 pr-4 pt-4 pb-4 tracking-tight text-left">Email : example@gmail.com</p>
          </div>
        </div>
    </div>
    <!-- End Product Info -->
     <!-- Start Helper Buttons -->
      <div class="flex flex-row justify-between container mx-auto h-auto w-auto">
         <button class="mt-8 mb-8 bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-12 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('native-chicken-food-hall') }}"><i class="fas fa-arrow-left fa-1x mr-2"></i>Prev</a>
         </button>
         <button class="mt-8 mb-8 bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-12 w-24 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('products') }}"><i class="fas fa-arrow-right fa-1x mr-2"></i>Back</a>
         </button>
      </div>
      <!-- End Helper Buttons -->
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
