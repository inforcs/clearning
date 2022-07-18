<?php session_start();

require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ConceptLearning | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="PROSTAFF HIRE | Your Oracle Recruitment Partner">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon"   href="img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container sticky-top">
        <nav  class="navbar navbar-expand-lg  bg-white navbar-light   sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <!-- <h1 class="m-0 text-primary">JobEntry</h1> -->
                <img src="img/logo.jpeg" class="img-fluid">
             
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link"> Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a> 
                    <a href="courses-list.php" class="nav-item nav-link"> Courses</a>
                    <!-- <a href="#" class="nav-item nav-link">Services</a> -->
                    <a href="contact.php" class="nav-item nav-link"> Contact Us</a> 
                    
                    
                                       
                </div>
            </div>
        </nav>
       </div>
        <!-- Navbar End -->


        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .4);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-12 text-center" >
                                    <h2 class="display-2 text-white animated slideInDown mb-4"> </h2>
                                    <a href="#contactForm" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft " style="margin-right: 100px;" >Become A Tutor</a>
                                     <a href="courses-list.php" class="btn btn-secondary py-md-3 px-md-5  animated slideInRight" >Courses</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .4);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-12 text-center" >
                                    <h2 class="display-2 text-white animated slideInDown mb-4"> </h2>
                                    <a href="#contactForm" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft " style="margin-right: 100px;" >Become A Tutor</a>
                                     <a href="courses-list.php" class="btn btn-secondary py-md-3 px-md-5  animated slideInRight" >Courses</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-3.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .4);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-12 text-center" >
                                    <h2 class="display-2 text-white animated slideInDown mb-4"> </h2>
                                    <a href="#contactForm" class="btn btn-primary py-md-3 px-md-5 animated slideInLeft " style="margin-right: 100px;" >Become A Tutor</a>
                                     <a href="courses-list.php" class="btn btn-secondary py-md-3 px-md-5  animated slideInRight" >Courses</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Section One Start -->
        <section>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        
                        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="mb-4">Director Messages</h2>
                            <p class="mb-4">Dear Students,<br>Welcome to <b> CONCEPT LEARNING</b>.<br>Cracking any top level competative exam is all about your preservance quotient ,endurance, learning ability , managing time and stress and zeal to model the path of success drawn by the connoisseur.<br>To ensure your success is any competative exam , we have design our coaching programme in a scientific and systematic mammer that develops both your knowledge and your problem solving skills.</p> 
                           
                            <p class="mb-4">In our efforts to deliever quality education, we emphasis more on the need establish one to one contact every students and be attentive to their need so that the teacher can monitor individual's progress and guide them accordingly on the way to success.<br>Upon induction with <b>CONCEPT LEARNING</b>, you become a part of powerful force that propels you towrds success.</p>
                            <!-- <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                        </div>

                        <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="row g-0  rounded overflow-hidden">
                               
                                <div class=" text-end">
                                    <img class="img-fluid w-100" src="img/direct.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section One End -->

        <!-- Section One Start -->
        <section>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="row g-0  rounded overflow-hidden">
                                <!-- <div class="col-6 text-start">
                                    <img class="img-fluid w-100" src="img/about-1.jpg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                                </div> -->
                                <div class=" text-end">
                                    <img class="img-fluid w-100" src="img/10.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="mb-4">Our Teaching Methology</h2>
                            <p class="mb-4">Offering High Technical Classroom / Online / Live Classes coaching programmes for all. Coaching would be provided as exactly on new pattern & syllabus, Regular, Alternate Days and Weekend classes available. Free WIFI Internet Access to Digital Library with latest Tablet / PC Digital Technology. All type of Long, Medium and Short-Term Customized Coaching courses are available, Highly Experienced and brilliant Faculty members mostly are Ex Alumni from -AIIMS, KIMS, IIT, IISC, IIM, NIT, Medical Colleges. We apply Innovative Techniques to solve problems & questions, Regular Topic, Units, Subjects, Practice Tests, Mock Tests, Practice by MCQs & study material, Friendly atmosphere.</p> 
                            <!-- <p class="mb-4">We help you get the right talent for your team; we prioritise talent and skill which define a candidate for the job role. We have the well proven screening process to identify the major growth areas of experienced professionals, no matter the stage of your project, whether your programme is an implementation, rollout, migration, upgrade or support – we have the resources and experience in each area</p>
                            <p class="mb-4">Our dedicated support team has a unique network of Oracle career professionals, developed over many years of specialisation in Oracle e-Business and Oracle Fusion technologies.</p>  -->
                            <p class="mb-4">With passion and dedication, our trained and certified teacher partners help us build strong math foundation in children by efficiently facilitating the Cuemath program.</p>
                            
                            <!-- <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section One End -->


        <!-- Section Two Start -->
        <section>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="mb-4">Our Courses</h2>
                            <p class="mb-4">Concept Learning is  also offers coaching for 8th, 9th, 10th, 11th, 12th, IIT JEE Mains & Advanced .</p>  

                            <p class="mb-4">We ensure that the candidates fulfil expectations and grow with the organization. Don’t let the industry’s ups and downs bother your workforce. You can depend on us for your hirings.</p>
                            
                        </div>
                        <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="row g-0  rounded overflow-hidden">
                              
                               
                                <div class="text-end">
                                    <img class="img-fluid w-100"  src="img/admission.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Two End -->
        <!-- Section One Start -->
        <section>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                            <div class="row g-0  rounded overflow-hidden">
                                <!-- <div class="col-6 text-start">
                                    <img class="img-fluid w-100" src="img/about-1.jpg">
                                </div>
                                <div class="col-6 text-start">
                                    <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                                </div>
                                <div class="col-6 text-end">
                                    <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                                </div> -->
                                <div class=" text-end">
                                    <img class="img-fluid w-100" src="img/manish.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="mb-4">Our Comittement</h2>
                            <!-- <p class="mb-4">Our dedicated support team has a unique network of Oracle career professionals, developed over many years of specialisation in Oracle e-Business and Oracle Fusion technologies.</p> 
                            <p class="mb-4">We help you get the right talent for your team; we prioritise talent and skill which define a candidate for the job role. We have the well proven screening process to identify the major growth areas of experienced professionals, no matter the stage of your project, whether your programme is an implementation, rollout, migration, upgrade or support – we have the resources and experience in each area</p> -->
                            <p class="mb-4">We prepare students to crack CET,IIT main and advance. We are committed
                    to the success of our students. We offer CBSE integrated
                    curriculum. Our teaching techniques are related to
                    distinctive entrance patterns which are designed for
                    cracking IIT–JEE (Mains &amp; Advanced), KVPY etc. We
                    support and foster our students. We ensure that the visions
                    of our students get strong wings to fly. At our institute,
                    we believe in unifying the individual strength of each of
                    our students towards their success..</p> 
                    <div class=" text-end">
                                    <img class="img-fluid w-100" src="img/77.png">
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section One End -->


        <!-- Section Three Start -->
        <section>
            <div class="container-xxl py-5">
                <div class="container">
                    <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">WE UNDERSTAND YOUR WORLD</h1>
                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">                    
                        <div>
                            <div class="tab-pane fade show p-0 active">
                                <p class="mb-4">We have specilized team to handle student individually.</p>  
                                
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Three End -->


        <!-- Client Form Start -->
        <section id="contactForm">
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <h1 class="mb-2">BECOME A TUTOR! </h1><br/>
                            <h2 class="mb-2">LOOKING FOR A GREAT JOB? </h2>
                            <p style="font-size: 24px!important;">Book A Meeting ! </p>
                             
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="card">
                                <div class="card-header">
                                    <form class="row g-3" method="post" action="tutor-apply.php">
                                      <div class="col-md-6">
                                        <label for="name" class="form-label">Tutor Name*</label>
                                        <input type="text" class="form-control" id="Name" name="Name" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="name" class="form-label">Subject*</label>
                                        <input type="text" class="form-control" id="subject" name="subject" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email*</label>
                                        <input type="email" class="form-control" id="inputEmail4" name="inputEmail4" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="number" class="form-label">Phone*</label>
                                        <input type="text" class="form-control" id="number" name="number"required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="name" class="form-label">Location*</label>
                                        <input type="text" class="form-control" id="location" name="location" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="name" class="form-label">Qualification*</label>
                                        <input type="text" class="form-control" id="qualification" name="qualification" required>
                                      </div>
                                      <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Form End -->


        
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">School</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>yelahanka old town</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91-9886295648</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; 2022 <a class="border-bottom" href="#">ConceptLearning</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" target="_blank" href="https://rcsinfo.in">RCS Technology</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- Whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=13152153575&text=Hi%21%20There%20" class="Whatsapp-float" target="_blank"> <i class="fab fa-whatsapp Whatsapp-my-float"></i> </a>
    <!-- Whatsapp -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>