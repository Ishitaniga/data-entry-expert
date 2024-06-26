<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php 
        $page_title = "Contact Us";
        $page_description = "Welcome to the Home Page of Data Entry Expert, offering the best data entry services.";
        $page_keywords = "home, data entry, services";
        
        ?>
        <?php include("includes/header.php"); ?>
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

        <div class="container-fluid pt-5 bg-primary hero-main-header mb-5">
        <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4 animated slideInRight">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                        <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-end text-center text-lg-end">
                <!-- *********** Here animated image ************ -->
               
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
        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-7">
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                                <h1 class="mb-4" style="font-family: 'Poppins', sans-serif;">
                                    <br>Get In Touch With Us !<br><br>
                                </h1>
                            </div>
                            <form id="contactForm" onsubmit="sendEmail(event); return false;">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                            <script>
                                function sendEmail(event) {
                                    event.preventDefault();
                                
                                    const formData = new FormData(document.getElementById("contactForm"));
                                
                                    fetch('contact.php', {  // Adjusted path to match your structure
                                        method: 'POST',
                                        body: formData
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status === 'SUCCESS') {
                                            alert(data.message);
                                            document.getElementById("contactForm").reset();
                                            setTimeout(function() {
                                                location.reload();  // Reload the page after a brief delay
                                            }, 100);  // Adjust the delay as needed
                                        } else {
                                            alert(data.message);
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Error:', error);
                                        alert('Failed to send message.');
                                    });
                                }
                            </script> 
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;"></div>
                        <div class="contact-info">
                            <div class="info-item">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span class="small-text" style="font-family: 'Roboto';">
                                    <br><br>Om Data Entry India Office-E, Third Floor, 4D Square,<br>
                                    Opp. Vishwakarma Engineering College, Motera,<br>
                                    Ahmedabad - 380005, Gujarat, India. Landmark: PVR Cinema
                                </span>
                            </div>
                            <hr>
                            <div class="info-item">
                                <i class="bi bi-envelope-fill"></i>
                                <a href="mailto:info@dataentryexpert.com" class="small-text" style="font-family: 'Roboto';">info@dataentryexpert.com</a>
                            </div>
                            <hr>
                            <div class="info-item">
                                <i class="bi bi-phone-fill"></i>
                                <span class="small-text" style="font-family: 'Roboto';">+91 79 4800 1664</span>
                            </div>
                            <hr>
                            <div class="info-item">
                                <i class="bi bi-skype"></i>
                                <span class="small-text" style="font-family: 'Roboto';">data_expert</span>
                            </div>
                            <hr>
                            <div class="info-item">
                                <i class="bi bi-clock-fill"></i>
                                <span class="small-text" style="font-family: 'Roboto';">Mon-Sat: 7 AM - 11:30 PM IST</span>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <br><br>
                <!-- <div class="map-area mt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.8481975264494!2d72.59304027437024!3d23.102652213336857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc1184386c05bf1%3A0xd0c5d48682f68c3b!2sOm%20Data%20Entry%20India!5e0!3m2!1sen!2sin!4v1717752391836!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0; width: 100%; height: 450px;"></iframe>
                </div> -->
            </div>
        </div>
        <!-- Contact End -->
        <!-- Footer Start -->
        <?php include("includes/footer.php"); ?>
        <!-- Footer End -->
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
        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    </body>
</html>