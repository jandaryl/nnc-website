<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services</title>
    <link rel="icon" type="image/ico" href="https://i.imgur.com/clby8dV.jpg">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
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
    <div class="flex flex-col items-center container mx-auto bg-white h-auto w-auto">
      <div class="inline-flex flex-row items-center h-64 w-auto m-4 bg-grey-light">
        <div class="h-32 w-32 rounded-full bg-grey-lighter m-4"></div>
        <div class="inline-flex flex-col h-auto w-auto">
            <div class="h-8 w-64 rounded-none bg-grey-lighter ml-4 mr-8 mt-12 mb-4"></div>
            <div class="h-32 w-64 rounded-none bg-grey-lighter ml-4 mr-4 mt-4 mb-8"></div>
        </div>
      </div>
      <div class="inline-flex flex-row h-auto w-auto bg-grey-light">
        <div class="h-48 w-48 bg-grey-lighter ml-4 mr-4 mt-4 mb-4"></div>
        <div class="h-48 w-48 bg-grey-lighter ml-4 mr-4 mt-4 mb-4"></div>
      </div>
      <div class="h-auto w-auto m-4 bg-grey-light">
        <div class="h-24 w-64 bg-grey-lighter m-4"></div>
      </div>
      <div class="h-auto w-auto m-4 bg-grey-light">
        <div class="h-12 w-32 bg-grey-lighter m-4"></div>
      </div>
    </div>
    <!-- End Service Info -->
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
  </body>
</html>
