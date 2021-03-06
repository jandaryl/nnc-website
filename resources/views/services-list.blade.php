<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Services List</title>
    <link rel="icon" type="image/ico" href="https://i.imgur.com/clby8dV.jpg">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/bulma.css">
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
    <!-- Start Service Cards -->
    <div class="flex flex-col container mx-auto h-auto">
        <div class="inline-flex flex-row justify-center text-center">
            <div class="h-auto w-1/3 bg-grey-lightest mr-12 mt-12 mb-12 rounded-lg shadow-lg flex flex-col items-center font-mono font-semibold text-1xl">
                <img class="h-24 w-24 rounded-none mt-4" src="https://i.imgur.com/GhOuQqe.png" alt="Nexus Study Lounge Service Logo">
                <a class="p-8 mb-0 text-grey-darkest hover:underline text-lg" href="{{ route('nexus-study-lounge-service') }}">Nexus Study Lounge Service</a>
                <button class="bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-8 w-18 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('nexus-study-lounge-service') }}"><i class="fas fa-eye fa-1x mr-2"></i>View</a>
                </button>
            </div>
            <div class="h-auto w-1/3 bg-grey-lightest mr-12 mt-12 mb-12 rounded-lg shadow-lg flex flex-col items-center font-mono font-semibold text-1xl">
                <img class="h-24 w-24 rounded-none mt-4" src="https://i.imgur.com/bceuc1W.jpg" alt="On Call Maintenance and Repair Service Logo">
                <a class="p-8 mb-0 text-grey-darkest hover:underline text-lg" href="{{ route('on-call-maintenance-and-repair-service') }}">On Call Maintenance and Repair Service</a>
                <button class="bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-8 w-18 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('on-call-maintenance-and-repair-service') }}"><i class="fas fa-eye fa-1x mr-2"></i>View</a>
                </button>
            </div>
             <div class="h-auto w-1/3 bg-grey-lightest mt-12 mb-12 rounded-lg shadow-lg flex flex-col items-center font-mono font-semibold text-1xl">
                <img class="h-24 w-24 rounded-full mt-4" src="https://i.imgur.com/clby8dV.jpg" alt="Children's Private Hospital Logo">
                <a class="p-8 mb-0 text-grey-darkest hover:underline text-lg" href="{{ route('children-private-hospital') }}">Children's Private Hospital</a>
                <button class="bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-8 w-18 rounded mb-4">
                  <a class="text-white hover:text-white" href="{{ route('children-private-hospital') }}"><i class="fas fa-eye fa-1x mr-2"></i>View</a>
                </button>
            </div>
        </div>
        <div class="inline-flex flex-row justify-center">
            <div class="h-auto w-1/3 bg-grey-lightest mr-12 mb-12 rounded-lg shadow-lg flex flex-col items-center font-mono font-semibold text-1xl">
                <img class="h-24 w-24 rounded-full mt-4" src="https://i.imgur.com/clby8dV.jpg" alt="Coin Laundry Shop Logo">
                <a class="p-8 mb-0 text-grey-darkest hover:underline text-lg" href="{{ route('coin-laundry-shop') }}">Coin Laundry Shop</a>
                <button class="bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-8 w-18 rounded mb-4">
                   <a class="text-white hover:text-white" href="{{ route('coin-laundry-shop') }}"><i class="fas fa-eye fa-1x mr-2"></i>View</a>
                </button>
            </div>
            <div class="h-auto w-1/3 bg-grey-lightest mr-12 mb-12 rounded-lg shadow-lg flex flex-col items-center font-mono font-semibold text-1xl">
                <img class="h-24 w-24 rounded-none mt-4" src="https://i.imgur.com/adSLkmB.png" alt="Universal Electronic Supply and Service Center Logo">
                <a class="p-8 mb-0 text-grey-darkest hover:underline text-lg text-center" href="{{ route('universal-electronic-service-center') }}">Universal Electronic Service Center</a>
                <button class="bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-8 w-18 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('universal-electronic-service-center') }}"><i class="fas fa-eye fa-1x mr-2"></i>View</a>
                </button>
            </div>
            <div class="h-auto w-1/3 bg-grey-lightest mb-12 rounded-lg shadow-lg flex flex-col items-center font-mono font-semibold text-1xl">
                <img class="h-24 w-24 rounded-none mt-4" src="https://i.imgur.com/qJUKtRF.jpg" alt="Universal Electronic Supply and Service Center Logo">
                <a class="p-8 mb-0 text-grey-darkest hover:underline text-lg text-center" href="{{ route('pets-malu-animal-health-care-center') }}">Pets – Malu Animal Health Care Center</a>
                <button class="bg-green hover:bg-green-dark text-white text-sm font-bold py-2 px-4 h-8 w-18 rounded mb-4">
                    <a class="text-white hover:text-white" href="{{ route('pets-malu-animal-health-care-center') }}"><i class="fas fa-eye fa-1x mr-2"></i>View</a>
                </button>
            </div>
        </div>
    </div>
    <!-- End Service Cards -->
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
    <script type="text/javascript" src="/js/fontawesome.min.js"></script>
  </body>
</html>
