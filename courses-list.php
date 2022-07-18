<?php session_start();

require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ConceptLearning | Courses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                <!-- <h1 class="m-0 text-primary">courseEntry</h1> -->
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


        <!-- Header End -->
        <div class=" py-3 bg-dark page-header">
            <div class="container1 my-5" style="padding: 130px;">
                <div class="content">
                    <form>
                        <div class="row g-2 ">                    
                            <div class="col-md-10">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="text" class="form-control border-0" placeholder="Enter Course name" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control border-0" placeholder="Enter Location" />
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-select border-0" name="coursetype" id="coursetype">
                                              <option value="" disabled>Choose Course Type</option>
                                            <option value="Online">Online</option>
                                            <option value="Offline">Offline</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-secondary border-0 w-100">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Search Start -->
        <!-- <div class="container-fluid bg-light mb-2 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                
            </div>
        </div> -->
        <!-- Search End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <h1 class="text-center mb-2 wow fadeInUp" data-wow-delay="0.1s">Courses</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <?php
                      $sql = "SELECT * from courses where coursestatus=1 order by createdat desc ";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0) {
                        $i = 0;
                        while($row = $result->fetch_assoc()) {
                      ?>
                    <div class="tab-content">
                        <div class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row">
                                    <div class="col-md-8 ">
                                        
                                        <div class="text-start ps-4">
                                            <h5 role="button" data-bs-toggle="modal" data-bs-target="#exampleModal1<?php echo $row['id_coursepost'] ?>" class="mb-3"><?php echo $row['coursetitle']; ?></h5>

                                            <table class="table table-responsive-sm  table-borderless" style="display:inline;">
                                                <tr>
                                                 
                                                    
                                                    <td style="width: 120px !important;">
                                                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i> <?php echo $row['coursetype']; ?> </span>
                                                    </td>
                                                    <td style="width: 160px !important;">
                                                        <span class="text-truncate me-3"><i class="far fa-money-bill-alt text-primary me-2"></i> <?php echo $row['price']; ?> </span>
                                                    </td>
                                                     
                                                    <td>
                                                        <span class="text-truncate me-3"> <i class="fa fa-map-marker-alt text-primary me-2"></i> <?php echo $row['contactperson']; ?> </span>
                                                    </td>
                                          
                                                </tr> 
                                                
                                                    
                                                    <span class="text-truncate me-0"><i class="  text-primary me-2"></i> <?php echo $row['coursedesc']; ?> </span>
                                                     
                                        
                                            </table>
                                            
                                        </div>
                                        <div class=" d-flex flex-column align-items-start  justify-content-center">
                                        <div class=" mt-3">
                                            <!-- <a class="btn btn-light btn-square me-3" href=""><i class="far fa-edit text-primary"></i> </a> -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="<?php echo $row['courseid']; ?>">
                                           Inquire Now</button>
                                        </div>
                                        <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small> -->
                                    </div>  
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <iframe width="450" height="280" src="<?php echo $row['youtube']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                       </div>
                                </div>
                            </div> 
                                                     
                        </div>
                    </div>
                    <!-- Description Modal  Start -->
                    <div class="modal fade p-2" id="exampleModal1<?php echo $row['id_coursepost'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Course Details !!!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body1">
                            <p> <?php echo $row['coursedesc']; ?></p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Description Modal End -->
                     <?php } }  ?>
                </div>
            </div>
        </div>
        <!-- courses End -->     


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
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
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

        <!-- Apply Modal  Start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apply For This Course !</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="post" action="candidate-apply.php" id="modal-details">
                  <div class="mb-2">
                    <label for="recipient-name" class="col-form-label">course Id</label>
                    <input type="text" class="form-control" name="courseid" id="courseid" readonly>
                  </div>
                  <div class="mb-2">
                    <label for="name" class="col-form-label">Student/Parent Name</label>
                    <input type="text" class="form-control" name="name" required >
                  </div>
                  <div class="mb-2">
                    <label for="recipient-name" class="col-form-label">Contact Number</label>
                    <input type="text" class="form-control" name="number" required>
                  </div>
                  <div class="mb-2">
                    <label for="recipient-name" class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="modal-details" >Apply</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Apply Modal End -->

        


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

    <script >
        var exampleModal = document.getElementById('exampleModal')
        exampleModal.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var recipient = button.getAttribute('data-bs-whatever')
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          var modalTitle = exampleModal.querySelector('.modal-title')
          var modalBodyInput = exampleModal.querySelector('.modal-body input')

          //modalTitle.textContent = 'Apply For ' + recipient
          modalBodyInput.value = recipient
        })
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
</body>

</html>