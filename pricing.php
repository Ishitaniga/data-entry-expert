<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <?php 
        $page_title = "About Us";
        $page_keywords = "home, data entry, services";
        $page_description = "Welcome to the Home Page of Data Entry Expert, offering the best data entry services.";
        ?>
    <?php include("includes/header.php"); ?>
    
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include("includes/navbar.php"); ?>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
      <div class="container pt-5">
        <div class="row g-5 pt-5">
          <div
            class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5"
          >
            <h1 class="display-4 text-white mb-4 animated slideInRight">
              Pricing
            </h1>
            <nav aria-label="breadcrumb">
              <ol
                class="breadcrumb justify-content-center justify-content-lg-start mb-0"
              >
                <li class="breadcrumb-item">
                  <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a class="text-white" href="#">Pricing</a>
                </li>
                <!-- <li class="breadcrumb-item text-white active" aria-current="page">Our Projects</li> -->
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 align-self-end text-center text-lg-end">
            <img
              class="img-fluid"
              src="img/hero-img.png"
              alt=""
              style="max-height: 300px"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(20, 24, 62, 0.7)">
          <div class="modal-header border-0">
            <button
              type="button"
              class="btn btn-square bg-white btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div
            class="modal-body d-flex align-items-center justify-content-center"
          >
            <div class="input-group" style="max-width: 600px">
              <input
                type="text"
                class="form-control bg-transparent border-light p-3"
                placeholder="Type search keyword"
              />
              <button class="btn btn-light px-4">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Full Screen Search End -->
    <br><br>
    <div class="container">
        <h1 class="mb-4">Affordable/Cheap Data Entry Services</h1>
        <p class="mb-4">Om Data Entry India is your one-stop solution for all your data entry, data processing, web research, data collection, typing, transcription, and many more services as we offer all these outsourcing services at affordable prices with quality-driven results for more than 8 years to global clients across the world. Our outsourcing data entry services offer up to 60% cost savings on your operational costs compared to US-based or Europe-based services without compromising the quality of the work.</p>
        <p class="mb-4">Moreover, we have the expertise and experience in providing top-class quality services with high accuracy, fast turnaround time, and high data security. Our data entry process includes the best infrastructure and technology to save your budget and provide you with the best pricing services. This will help you focus your budget on the core functions and enhance overall productivity. Our pricing structure is aimed to lessen the burden upon both parties. Learn more about our data entry services pricing structure from our customer support with just a click of a button.</p>
        <h1>Services Pricing</h1>
      <br>
      <table class="table-fill">
        <thead>
          <tr>
            <th>Services</th>
            <th>HOURLY PRICING (USD)</th>
            <th>MAN-MONTH (USD)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Data Entry Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Data Processing Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Data Conversion Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Web Research Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Data Collection Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Typing Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Transcription Services</td>
            <td>0.60-1 ($) Per Audio Min.</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>OCR Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>CV Formatting Services</td>
            <td>1.5-2.5 ($) Per CV</td>
            <td>N/A</td>
          </tr>
          <tr>
            <td>Data Mining Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
          <tr>
            <td>Data Cleansing Services</td>
            <td>4-6 ($)</td>
            <td>750-1000 ($)</td>
          </tr>
        </tbody>
      </table>
      
    </div>

    <br><br>

    <?php include("includes/footer.php"); ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
