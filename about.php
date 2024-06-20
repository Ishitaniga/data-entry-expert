<head>
<?php 
        $page_title = "About Us";
        $page_keywords = "home, data entry, services";
        $page_description = "Welcome to the Home Page of Data Entry Expert, offering the best data entry services.";
        ?>
    <?php include("includes/header.php"); ?>
    <style>
        @keyframes slide-in {
    from {
      transform: translateX(-100%);
      opacity: 0;
    }
    to {
      transform: translateX(0);
      opacity: 1;
    }
  }

  .animated-card {
    visibility: hidden; /* Start with hidden cards */
  }

  .card-container {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
  }

  .card {
    width: 18rem;
  }

  .arrow {
    font-size: 2rem;
    visibility: hidden; /* Start with hidden arrows */
  }
        </style>
</head>

<body>
    <!-- Spinner Start -->
     <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
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
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-img.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                    <h1 class="mb-4">About Om Data Entry India</h1>
                    
                    <p class="mb-4">
                        Founded by Anita Khatavkar in Ahmedabad, Gujarat, Data Entry Expert is an umbrella website of Om Data Entry India which is an ISO 9001:2015 certified outsourcing company in India. Being a leading global data entry outsourcing company delivering business solutions for over a decade. We aim to provide the best quality services and fast turnaround to the clients. We have a dedicated and experienced professional team ready to handle your data entry in all fields including healthcare, insurance, finance & accounting. We offer data entry to all business sizes with a reliable staff at significant savings! Moreover, we have ample satisfied customers from various countries across the globe including Italy, New Zealand, Australia, Canada, the US, Brazil, Spain, Germany, Austria, and many more. We use cutting-edge technologies and offer the latest in hardware, software, and trained staff.
                    </p>

                    <p class="mb-4" style="text-align: justify">
                        In the arena of outsourcing data entry services, Data Entry Exert stands apart from the crowd. Why? The simple answer is our expertise in data entry services and the trust our clients have placed in us. We work with numerous clients and with our exceptional services we build a strong network of loyalty with our clients. If you want to know more contact us today!!
                    </p>
                    

                </div>



                <div class="container mt-5">
                    <div class="card-container">
                      <div class="card animated-card" id="card1">
                        <img class="card-img-top" src="a.avif" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Our Origin</h5>
                          <p class="card-text">As a 10+ years old data entry outsourcing, support, and IT company, Data Entry Expert is the one-stop destination where all your data entry, processing, and analysis needs are met. We are dedicated to empowering your organization with intelligent decision-making capabilities and improved operational efficiency with time, effort, and cost-saving while multiplying your outcomes. We provide 99-95% accuracy with fast TAT. </p>
                        </div>
                      </div>
                      <div class="arrow animated-card" id="arrow1">
                        <i class="bi bi-arrow-right"></i>
                      </div>
                      <div class="card animated-card" id="card2">
                        <img class="card-img-top" src="c.jfif" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Our Vision</h5>
                          <p class="card-text">
                            As a data entry expert, we are committed to achieving business and financial success through world-class performance. We also devote time to adding value to the company’s stakeholders. 	We aim to be at the forefront of the global market and foster our client’s economic growth. With an employee-friendly environment, we dream of becoming a top-performing company in the world. </p>
                        </div>
                      </div>
                      <div class="arrow animated-card" id="arrow2">
                        <i class="bi bi-arrow-right"></i>
                      </div>
                      <div class="card animated-card" id="card3">
                        <img class="card-img-top" src="b.jpg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Our Mission</h5>
                          <p class="card-text">We aim to invest in people and practices to work for the sustainable, long-term growth of your company by fulfilling all of your service needs. Our services are transparent in all aspects to clients to constantly achieve operational excellence. We use a motivated team of professionals and execute every project with distinction and efficiency. Trust and precision in our main parts of service providing. </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5 ">
            <div class="row g-5 hero-header">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn " data-wow-delay="0.3s">
                    <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Choose Us</div> -->
                    <h1 class="text-white mb-4">Our Affordable Services</h1>
                    <ul class="mb-4 text-white">
                        <li>Data entry and processing services</li>
                        <li>Data conversion services</li>
                        <li>Web research services</li>
                        <li>OCR & OCR cleanup services</li>
                        <li>Photo editing services</li>
                        <li>Data collection and transcription services</li>
                    </ul>
                    <br>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/feature.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5 hero-header">
                <div class="col-lg-6 align-self-end text-center text-md-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/feature.png" alt="loading images">
                </div>
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4 text-white">Come on Board with a Data Entry Expert and fulfill your Data Entry 	Requirements!</h1>
                    <p class="text-light mb-4">As a premier data entry company in India, Data entry experts own experienced incumbents required for back-office support and data entry services. We emphasize that our team has delivered a lot of projects and ensures our clientele with data entry accuracy, effectiveness, and timely delivery of the project. Our committed team uses an optimistic approach to handle your assignments with a focus on providing the utmost quality.</p>

                    <p class="text-light mb-4">Our concerned workforce is a perfect blend of proficiency and support services. We are customary to deal with a variety of data entry projects catalog processing, and all basic level back office support services. We have adequate infrastructure to make separate divisions for diverse services to handle large volumes with a quality result. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Our Focus Points </h1>
                    <ul class="text-dark custom-list mb-4">
                        <li>Truthfulness - We provide elevated correctness to our clients for their better business productivity.</li><br>
                        <li>Speedy Delivery - Services completed at Data Entry Expert are delivered within the stipulated timeframe without quality negotiation.</li><br>
                        <li>Discretion - Protection of your valuable data is our priority and we use highly secured servers to maintain that.</li><br>
                        <li>Tailored Solutions - We at Data Entry Expert are always ready with clients' suggestions for innovative personalized solutions for your business.</li><br>
                        <li>Affordable Services - You can save up to 60% of operational costs while partnering with us for your business data entry services.</li><br>
                        <li>Best Infrastructure - We have an ideal infrastructure equipped with advanced technical tools to provide the desired results with high-speed connectivity.</li><br>
                        <li>Firm Services and Relations - We strive to build profitable and long-term relationships with our clients utilizing highly developed technology and methodologies to give the best output at low pricing.</li><br>
                    </ul>
                    <p class="text-white">We are the trusted outsourcing partner for your data entry services to accelerate your business!</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-img.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


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




<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const elements = [
      document.getElementById('card1'),
      document.getElementById('arrow1'),
      document.getElementById('card2'),
      document.getElementById('arrow2'),
      document.getElementById('card3')
    ];

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const delay = entry.target.dataset.delay;
          setTimeout(() => {
            entry.target.style.visibility = 'visible';
            entry.target.style.animation = 'slide-in 1s ease-out forwards';
          }, delay);
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });

    let delay = 0;

    elements.forEach((element, index) => {
      element.dataset.delay = delay;
      observer.observe(element);
      delay += index % 2 === 0 ? 1000 : 500; // 1 second delay for cards, 0.5 second for arrows
    });
  });
</script>
<?php include("includes/footer.php"); ?>

</body>
</html>