<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8" />
        <?php 
        $page_title = "Data Entry Expert";
        $page_keywords = "home, data entry, services,data entry specialist,data entry operator";
        $page_description = "Welcome to the Home Page of Data Entry Expert, offering the best data entry services.";
        ?>
        <?php include("includes/header.php"); ?>
    </head>
    <body>
    <?php include("includes/navbar.php"); ?>
        <!-- Hero Start -->
        <div class="container-fluid pt-5 bg-primary hero-header mb-5">
            <div class="container pt-5">
                <div class="row g-5 pt-5">
                    <div
                        class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5"
                        >
                        <p
                            class="display-4 text-white mb-4 animated slideInRight"
                            style= "font-size: 275%"
                            >
                            <b>Perfectionist at Every Level</b>
                        </p>
                        <p
                            class="text-white mb-4 animated slideInRight"
                            style="
                            font-size: 18px;
                            "
                            >
                            Believing in the possibility of attaining perfection. With our
                            customer-dedicated nature of working, we tend to develop long-term
                            business relations with our clients based on the roots of faith,
                            honesty and commitment.
                        </p>
                        <a
                            href=""
                            class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight"
                            >Read More</a
                            >
                        <a
                            href=""
                            class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"
                            >Contact Us</a
                            >
                    </div>
                    <div class="col-lg-6 align-self-end text-center text-lg-end">
                        <!-- <img class="img-fluid" src="" alt="" /> -->
                        <img
                            src="img/hero-img.png"
                            class="custom-animated img-fluid"
                            alt=""
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
        <!-- About Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div
                            class="about-img wow animate__animated animate__fadeInRight"
                            data-wow-delay="0.5s"
                            >
                            <img
                                class="img-fluid"
                                src="img/working_image.jpg"
                                alt="Working Image"
                                />
                        </div>
                        <br /><br />
                    </div>
                    <!-- Left Text -->
                    <div
                        class="col-lg-6 wow animate__animated animate__slideInLeft"
                        data-wow-delay="0.5s"
                        >
                        <h1
                            class="mb-4 text-dark"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            Make Your Business Data Easily Accessible
                        </h1>
                        <p
                            class="mb-4 text-dark"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            Welcome to Data Entry Expert India, a leading technology and data-centric outsourced services company. Founded in 2014 with over 5000 clients from various countries and over 1,500 full-time data entry operators. Data entry expert has a growing inclusive presence and is consistently rated among India's best data entry outsourcing companies. When you are looking for affordable data entry services in India then outsourcing to a data entry expert must be your one-stop solution. 
                        </p>
                        <p
                            class="mb-4 text-dark"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            We provide exceptional data entry services in the USA for diverse industry verticals. Our talented workforce has efficient expertise in using advanced software and technology tools for data capturing, processing, and management. 
                        </p>
                    </div>
                    <!-- Right Text -->
                    <div
                        class="col-lg-6 wow animate__animated animate__slideInRight"
                        data-wow-delay="0.5s"
                        >
                        <h1
                            class="mb-4 text-dark"
                            style="
                            font-family: Calibri;
                            ">
                            Comprehensive data entry services to our clients
                        </h1>
                        <p
                            class="mb-4 text-dark"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            Data entry expert is an ISO 9001:2014 certified company in India and the US for a quality management system. The combination of our well-developed data entry skills, vast data entry experience, detailed industry knowledge, and effective use of the latest technology provides a definite competitive edge to our clients. To ensure our service offerings you are welcome to exceed your expectations as we continuously refine our processes to acquire perfection. As a result, our skilled workforce provides top-notch data entry services creating long-lasting partnerships with our clients.
                        </p>
                    </div>
                    <!-- Right Image -->
                    <div
                        class="col-lg-6 wow animate__animated animate__fadeInLeft"
                        data-wow-delay="0.1s"
                        >
                        <div class="about-img">
                            <img
                                class="img-fluid"
                                src="img/working_image.jpg"
                                alt="Working Image"
                                />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Feature Start 1 -->
        <div class="container-fluid bg-primary feature pt-5 ">
            <div class="container pt-5">
           
                <div class="row g-5 hero-header ">
                    <div
                        class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow animate__animated animate__fadeInLeft"
                        data-wow-delay="0.3s"
                        >
                        <h1
                            class="text-white mb-4"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            Our dedicated outsource services include
                        </h1>
                        <ul
                            class="custom-list mb-4 text-white"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            <li>
                                Data entry services including catalogues, images, PDFs,
                                documents, and many more
                            </li>
                            <li>Offline / Online Data Processing</li>
                            <li>Data conversion</li>
                            <li>Web research</li>
                            <li>Data collection</li>
                            <li>Typing services</li>
                            <li>Transcription services</li>
                            <li>Real Estate business</li>
                            <li>ECommerce industry</li>
                            <li>Market research area</li>
                            <li>Financial and legal documentation</li>
                            <li>Insurance claiming field</li>
                            <li>Medical and healthcare industry</li>
                        </ul>
                        <p class="mb-4 text-white">
                            All of the above services are executed by expert data entry
                            operators to provide global business operations.
                        </p>
                        <p class="mb-4 text-white">
                            We work on the thumb rule of rendering premium and value-driven services. Data entry expert is here to help you manage your business data better, with an ever-growing pile of physical documents in digital formats. We believe in enhancing the operational efficiency of businesses while adhering to clients’ budgets. We provide utmost transparency in all our projects so clients may understand easily.
                        </p>
                    </div>
                    <div
                        class="col-lg-6 align-self-end text-center text-md-end wow animate__animated animate__fadeInLeft"
                        data-wow-delay="0.5s"
                        >
                        <img class="img-fluid" src="img/feature.png" alt="loading images" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Include Wow.js and Animate.css libraries -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
            />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- Feature End 1 -->
        <!-- About 2 Start -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div
                            class="about-img wow animate__animated animate__fadeInRight"
                            data-wow-delay="0.5s"
                            >
                            <img
                                class="img-fluid"
                                src="img/working_image.jpg"
                                alt="Working Image"
                                />
                        </div>
                        <br /><br />
                    </div>
                    <!-- Left Text -->
                    <div
                        class="col-lg-6 wow animate__animated animate__slideInLeft"
                        data-wow-delay="0.5s"
                        >
                        <br /><br />
                        <h1
                            class="mb-4 text-dark"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            Why Choose a Data Entry Expert Company For Data Entry In India and
                            the US
                        </h1>
                        <p
                            class="mb-4 text-dark"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            Each company's data is a valuable asset because it withholds prized information and the business blueprint. So it is always advisable to choose the best way to use data carefully. The internet is a vast space to make you more reachable with a specialised team on board. We as the best data entry service provider company empower diverse industries including:
                        </p>
                        <ul
                            class="custom-list mb-4 text-dark"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            <li>Real Estate business</li>
                            <li>ECommerce industry</li>
                            <li>Market research area</li>
                            <li>Financial and legal documentation</li>
                            <li>Insurance claiming field</li>
                            <li>Medical and healthcare industry</li>
                        </ul>
                    </div>
                    <!-- Right Text -->
                    <div
                        class="col-lg-6 wow animate__animated animate__slideInRight"
                        data-wow-delay="0.5s"
                        >
                        <h4
                            class="mb-4 text-dark"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            Here are the reasons why you must select a data entry expert company to enter your data into the database. 
                        </h4>
                        <ul
                            class="text-dark custom-list mb-4"
                            style="
                            text-align: justify;
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            font-size: 18px;
                            "
                            >
                            <li>
                                Best quality experience- We are a renowned data entry company to serves global clients with the finest quality of data entry and conversion. 
                            </li>
                            <li>
                                Immense Expertise- Our experienced data entry team has delivered a large amount of data entry projects all over the world including India and the US. 
                            </li>
                            <li>
                                Unparalleled security measures- We have certified security channels for checking clients' databases. 
                            </li>
                            <li>
                                Scalability- Providing extremely scalable data entry is our main concern and we listen to client's responses to make it much more accessible. You can rely on our dependable data entry service to focus on your business growth.  
                            </li>
                            <li>
                                Improved efficiency- Our workers are committed and trained to endow with the most excellent data entry service ever. 
                            </li>
                            <li>
                                Affordable data entry service- We offer cost-saving advantages to our clients for getting fast data entry and conversion services. Enterprises can nearly save 70% of the cost incurred by tying up with us.  
                            </li>
                            <li>
                                Customised service- You will get a personalised data entry service in the USA according to your requests. Our staff is well-qualified to understand all your business happenings to serve in an improvised way. 
                            </li>
                        </ul>
                    </div>
                    <!-- Right Image -->
                    <div
                        class="col-lg-6 wow animate__animated animate__fadeInLeft"
                        data-wow-delay="0.1s"
                        >
                        <div class="about-img">
                            <img
                                class="img-fluid"
                                src="img/working_image.jpg"
                                alt="Working Image"
                                />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About 2 End -->
        <div class="container-fluid">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- Left Image -->
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div
                            class="about-img wow animate__animated animate__fadeInRight"
                            data-wow-delay="0.5s"
                            >
                            <img
                                class="img-fluid"
                                src="img/working_image.jpg"
                                alt="Working Image"
                                />
                        </div>
                        <br /><br />
                    </div>
                    <!-- Left Text -->
                    <div
                        class="col-lg-6 wow animate__animated animate__slideInLeft"
                        data-wow-delay="0.5s"
                        >
                        <h1
                            class="mb-4 text-dark"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            Key service segments of our company!!
                        </h1>
                        <ul class="text-dark custom-list mb-4">
                            <li>Data entry services</li>
                            <li>Data processing services</li>
                            <li>Data conversion services</li>
                            <li>Web data extraction</li>
                            <li>Mortgage data entry</li>
                            <li>Web research</li>
                            <li>Image scanning and OCR</li>
                        </ul>
                    </div>
                    <!-- Right Text -->
                    <div
                        class="col-lg-6 wow animate__animated animate__slideInRight"
                        data-wow-delay="0.5s"
                        >
                        <h1
                            class="mb-4 text-dark"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            We offer a specialized data entry service along with plenty of
                            data conversion solutions
                        </h1>
                        <ul class="text-dark custom-list mb-4">
                            <li>100% transparency in every single data entry project</li>
                            <li>
                                Premium protection measures implemented for client data
                                confidentiality
                            </li>
                            <li>
                                Delivering the project in the least possible turnaround time
                                while providing elite data entry work
                            </li>
                            <br />
                            <li>Helpful in saving business costs around 65-75%</li>
                            <li>
                                Clientele will get multiple discounts for your various data
                                projects
                            </li>
                            <li>Customer support for all of your project-related queries</li>
                            <li>
                                Free Trial run with a cluster of data to understand our
                                company's services
                            </li>
                        </ul>
                        <p class="mb-4 text-dark">
                            Contact us today to learn how our data entry company can transform your data management challenges into business growth opportunities. Come and partner with us to harness the full potential of your business data. Whether you're running a small, medium or large enterprise, we are always committed to leveraging your data for success.
                        </p>
                    </div>
                    <!-- Right Image -->
                    <div
                        class="col-lg-6 wow animate__animated animate__fadeInLeft"
                        data-wow-delay="0.1s"
                        >
                        <div class="about-img">
                            <img
                                class="img-fluid"
                                src="img/working_image.jpg"
                                alt="Working Image"
                                />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Start 2-->
        <div class="container-fluid bg-primary feature pt-5">
            <div class="container pt-5">
                <div class="row g-5 hero-header">
                    <div
                        class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn"
                        data-wow-delay="0.3s"
                        >
                        <h1
                            class="text-white mb-4"
                            style="
                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                            'Trebuchet MS', sans-serif;
                            "
                            >
                            Our Statistics
                        </h1>
                        <div class="row g-4 pt-3">
                            <div
                                class="col-sm-6 wow animate__animated animate__slideInLeft"
                                data-wow-delay="0.3s"
                                >
                                <div
                                    class="d-flex rounded p-3"
                                    style="background: rgba(256, 256, 256, 0.1)"
                                    >
                                    <i class="fa fa-users fa-3x text-white"></i>
                                    <div class="ms-3">
                                        <h2 class="text-white mb-0" data-toggle="counter-up">
                                            1200
                                        </h2>
                                        <p
                                            class="text-white mb-0"
                                            style="
                                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                                            'Trebuchet MS', sans-serif;
                                            "
                                            >
                                            Happy Clients
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-6 wow animate__animated animate__slideInLeft"
                                data-wow-delay="0.4s"
                                >
                                <div
                                    class="d-flex rounded p-3"
                                    style="background: rgba(256, 256, 256, 0.1)"
                                    >
                                    <i class="fa fa-check fa-3x text-white"></i>
                                    <div class="ms-3">
                                        <h2 class="text-white mb-0" data-toggle="counter-up">
                                            1600
                                        </h2>
                                        <p
                                            class="text-white mb-0"
                                            style="
                                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                                            'Trebuchet MS', sans-serif;
                                            "
                                            >
                                            Project Completed
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-6 wow animate__animated animate__slideInLeft"
                                data-wow-delay="0.5s"
                                >
                                <div
                                    class="d-flex rounded p-3"
                                    style="background: rgba(256, 256, 256, 0.1)"
                                    >
                                    <i class="fa fa-folder fa-3x text-white"></i>
                                    <div class="ms-3">
                                        <h2 class="text-white mb-0" data-toggle="counter-up">90</h2>
                                        <p
                                            class="text-white mb-0"
                                            style="
                                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                                            'Trebuchet MS', sans-serif;
                                            "
                                            >
                                            Resource Strength
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-sm-6 wow animate__animated animate__slideInLeft"
                                data-wow-delay="0.6s"
                                >
                                <div
                                    class="d-flex rounded p-3"
                                    style="background: rgba(256, 256, 256, 0.1)"
                                    >
                                    <i class="fa fa-user fa-3x text-white"></i>
                                    <div class="ms-3">
                                        <h2 class="text-white mb-0" data-toggle="counter-up">10</h2>
                                        <p
                                            class="text-white mb-0"
                                            style="
                                            font-family: 'Gill Sans', 'Gill Sans MT', Calibri,
                                            'Trebuchet MS', sans-serif;
                                            "
                                            >
                                            Year of Experience
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 align-self-end text-center text-md-end wow fadeIn"
                        data-wow-delay="0.5s"
                        >
                        <img class="img-fluid" src="img/skills.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End 2-->
        <!-- FAQs Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div
                    class="mx-auto text-center wow fadeIn"
                    data-wow-delay="0.1s"
                    style="max-width: 500px"
                    >
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">
                        Popular FAQs
                    </div>
                    <h1
                        class="mb-4"
                        style="
                        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
                        sans-serif;
                        "
                        >
                        Frequently Asked Questions
                    </h1>
                </div>
                <p class="mb-4 text-dark text-center">
                    We have some of the frequently asked questions by the clients and companies who outsource data entry services to us, if you do not find your questions and have any queries regarding the data entry services please feel free to contact us.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionFAQ1">
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                                <h2 class="accordion-header" id="headingOne">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne"
                                        aria-expanded="false"
                                        aria-controls="collapseOne"
                                        >
                                    Since how long are you in the outsourcing field?
                                    </button>
                                </h2>
                                <div
                                    id="collapseOne"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingOne"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        Our company is experienced enough in outsourcing data entry to satisfy our clients globally. We offer numerous kinds of data entry projects.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo"
                                        >
                                    What are the services offered at Data Entry Expert India?
                                    </button>
                                </h2>
                                <div
                                    id="collapseTwo"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        We offer a variety of outsourcing data entry services related to:<br>
                                        • Data and image processing<br>
                                        • Data cleansing and conversion<br>
                                        • Web research<br>
                                        • OCR cleanup<br>
                                        • Transcription services<br>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                                <h2 class="accordion-header" id="headingThree">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseThree"
                                        >
                                    How can I send my files to Data Entry Expert India?
                                    </button>
                                </h2>
                                <div
                                    id="collapseThree"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        We use trusted and reliable FTP servers to receive your data files. In addition, you can also send your files through web-based applications, emails, couriers, or shipping.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                                <h2 class="accordion-header" id="headingFour">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseFour"
                                        >
                                    How much time does it take to complete the work?
                                    </button>
                                </h2>
                                <div
                                    id="collapseFour"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFour"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        Depending upon the volume of data, complexity, urgent requirements, and your expected turnaround time, we allocate the number of resources and employees to complete your work. We ensure to deliver the database in the stipulated timeframe.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                                <h2 class="accordion-header" id="headingFive">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive"
                                        aria-expanded="false"
                                        aria-controls="collapseFive"
                                        >
                                    What is the process of my project after being outsourced?
                                    </button>
                                </h2>
                                <div
                                    id="collapseFive"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFive"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        Our company follows a series of steps to provide quality checks within the estimated time. Moreover, we keep on interacting with the client at every processing stage to get your response and to suggest any changes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                                <h2 class="accordion-header" id="headingSix">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix"
                                        aria-expanded="false"
                                        aria-controls="collapseSix"
                                        >
                                    What is your Turnaround Time (TAT)?
                                    </button>
                                </h2>
                                <div
                                    id="collapseSix"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingSix"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        Our TAT is fast for delivering the projects in a fast turnaround time. We set specified TAT based on the density and complexity of data.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven"
                                        aria-expanded="false"
                                        aria-controls="collapseSeven"
                                        >
                                    How will I get the completed work files?
                                    </button>
                                </h2>
                                <div
                                    id="collapseSeven"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        We ensure the quality check of the final database is up to your standards and then send the files to you through your desired way including email, secure FTP server, or web-based applications. Sometimes the media is decided depending on the file size.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                                <h2 class="accordion-header" id="headingEight">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight"
                                        aria-expanded="false"
                                        aria-controls="collapseEight"
                                        >
                                    Do you offer a free trial of your services?
                                    </button>
                                </h2>
                                <div
                                    id="collapseEight"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingEight"
                                    data-bs-parent="#accordionFAQ1"
                                    >
                                    <div class="accordion-body">
                                        Yes, you can avail of our free trial run with a sample of data to get details of our high-quality services. Our team workers also revise till we get a satisfied client.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionFAQ2">
                            <div class="accordion-item wow fadeIn" data-wow-delay="0.9s">
                                <h2 class="accordion-header" id="headingNine">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine"
                                        aria-expanded="false"
                                        aria-controls="collapseNine"
                                        >
                                    What are your working hours?
                                    </button>
                                </h2>
                                <div
                                    id="collapseNine"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingNine"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        Our data entry expert company in India works from Monday to Saturday 07:00 AM (Morning) IST to 11:30 AM (Night) IST. Plus, we also work on Sundays in case of clients' emergency work conditions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.0s">
                                <h2 class="accordion-header" id="headingTen">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen"
                                        aria-expanded="false"
                                        aria-controls="collapseTen"
                                        >
                                    Are the infrastructure and facilities, efficient for all data management services?
                                    </button>
                                </h2>
                                <div
                                    id="collapseTen"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTen"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        We are equipped with the latest and advanced infrastructure required for all the outsourcing data entry services. Our experts also do regular system maintenance at regular intervals so as not to compromise on the work quality.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.1s">
                                <h2 class="accordion-header" id="headingEleven">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseEleven"
                                        aria-expanded="false"
                                        aria-controls="collapseEleven"
                                        >
                                    The security of my data is at what level?
                                    </button>
                                </h2>
                                <div
                                    id="collapseEleven"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingEleven"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        We have highly secured quality measures to keep your data secure and confidential. Besides this, our FTP servers are secure enough for file transfer.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.2s">
                                <h2 class="accordion-header" id="headingTwelve">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwelve"
                                        aria-expanded="false"
                                        aria-controls="collapseTwelve"
                                        >
                                    What are the payment options at Data Entry Expert India?
                                    </button>
                                </h2>
                                <div
                                    id="collapseTwelve"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwelve"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        After the completion of your data entry project, you can choose the desired payment method from credit or debit card, wire transfer, UPI, or PayPal. You can let our customer support team know about your comfortable payment mode.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.3s">
                                <h2 class="accordion-header" id="headingThirteen">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThirteen"
                                        aria-expanded="false"
                                        aria-controls="collapseThirteen"
                                        >
                                    What is the price structure of your company?
                                    </button>
                                </h2>
                                <div
                                    id="collapseThirteen"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThirteen"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        The price structure of data entry services is not hard on your pocket. Our offering services allow you to save a lot on your operating costs. Generally, the prices range from $3 to $4 per hour and are prone to change depending on certain parameters.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.4s">
                                <h2 class="accordion-header" id="headingFourteen">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFourteen"
                                        aria-expanded="false"
                                        aria-controls="collapseFourteen"
                                        >
                                    How can I get the quality assurance of your services?
                                    </button>
                                </h2>
                                <div
                                    id="collapseFourteen"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFourteen"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        You can trust our top-notch quality service for exceptional results. We are a certified data entry company in India with numerous satisfied customers across the globe. Moreover, you can also try our free trial run offer to avail of our service benefits.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.5s">
                                <h2 class="accordion-header" id="headingFifteen">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseFifteen"
                                        aria-expanded="false"
                                        aria-controls="collapseFifteen"
                                        >
                                    How can I save on the operational cost by outsourcing data entry services?
                                    </button>
                                </h2>
                                <div
                                    id="collapseFifteen"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingFifteen"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        Outsourcing data entry services to a reliable partner is the best way to save the operational costs of your business. You need not hire full-time employees for such activities and to occupy your valuable resources and time. With outsourcing such operations, you can focus on your core business operations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.6s">
                                <h2 class="accordion-header" id="headingSixteen">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSixteen"
                                        aria-expanded="false"
                                        aria-controls="collapseSixteen"
                                        >
                                    I want to outsource to Data Entry Expert India, how to proceed?
                                    </button>
                                </h2>
                                <div
                                    id="collapseSixteen"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingSixteen"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        To hire our company's services, you just have to fill out the contact form with the required details of your data project. Our expert team will get in touch with you shortly to explain the comprehensive process.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeIn" data-wow-delay="1.7s">
                                <h2 class="accordion-header" id="headingSeventeen">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeventeen"
                                        aria-expanded="false"
                                        aria-controls="collapseSeventeen"
                                        >
                                    What are the unique features of Data Entry Expert India?
                                    </button>
                                </h2>
                                <div
                                    id="collapseSeventeen"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingSeventeen"
                                    data-bs-parent="#accordionFAQ2"
                                    >
                                    <div class="accordion-body">
                                        The best features of Data Entry Expert India are:<br>
                                        • Customized solutions<br>
                                        • Best quality service<br>
                                        • A fully devoted team of skilled data entry operators<br>
                                        • Secure and confidential database delivery
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("includes/footer.php"); ?>
    </body>
</html>