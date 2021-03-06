<!DOCTYPE html>
<html lang="en">
    <?php include'view/head.html' ?>
    <body>
        <header class="top-navbar">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="" />
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
                  <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                  <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                  <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <div id="slides" class="cover-slides">
          <ul class="slides-container">
            <li class="text-center">
              <img src="images/slider001.jpg" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="m-b-20"><strong>Selamat Datang Di<br> Maharani Coffee</strong></h1>
                    <p class="m-b-40">Silahkan mengisi data diri sebagai langkah awal penerapan new normal.  <br> 
                    Langkah awal ini berguna untuk melakukan tracing di masa pandemi COVID-19.</p>
                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="tracing.php">Isi Data</a></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="text-center">
              <img src="images/slider002.jpg" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="m-b-20"><strong>Selamat Datang Di<br> Maharani Coffee</strong></h1>
                    <p class="m-b-40">Silahkan mengisi data diri sebagai langkah awal penerapan new normal  <br> 
                    Langkah awal ini berguna untuk melakukan tracing di masa pandemi COVID-19</p>
                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="tracing.php">Isi Data</a></p>
                  </div>
                </div>
              </div>
            </li>
            <li class="text-center">
              <img src="images/slider003.jpg" alt="">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="m-b-20"><strong>Selamat Datang Di<br> Maharani Coffee</strong></h1>
                    <p class="m-b-40">Silahkan mengisi data diri sebagai langkah awal penerapan new normal  <br> 
                    Langkah awal ini berguna untuk melakukan tracing di masa pandemi COVID-19</p>
                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="tracing.php">Isi Data</a></p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="about-section-box">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="images/about.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                  <h1>Tentang <span>Maharani Coffee</span></h1>
                  <h4>Little Story</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
                  <p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar. <a class="link-a" href="about.php">Baca selengkapnya</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="qt-box qt-background">
          <div class="container">
            <div class="row">
              <div class="col-md-8 ml-auto mr-auto text-left">
                <p class="lead ">
                  " A bad day with coffee is better than a good day without it. "
                </p>
                <span class="lead">Coffee Lover</span>
              </div>
            </div>
          </div>
        </div>
        
        <?php include 'view/menubox.html' ?>

            <div class="row special-list">
              <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                  <img src="images/img-01.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Drinks 1</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $7.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                  <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Drinks 2</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $9.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                  <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Drinks 3</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $10.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                  <img src="images/img-04.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Lunch 1</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $15.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                  <img src="images/img-05.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Lunch 2</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $18.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                  <img src="images/img-06.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Lunch 3</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $20.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                  <img src="images/img-07.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Dinner 1</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $25.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                  <img src="images/img-08.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Dinner 2</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $22.79</h5>
                  </div>
                </div>
              </div>
              
              <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                  <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                  <div class="why-text">
                    <h4>Special Dinner 3</h4>
                    <p>Sed id magna vitae eros sagittis euismod.</p>
                    <h5> $24.79</h5>
                  </div>
                </div>
              </div>

            </div>
            <p class="text-center"><a class="btn btn-lg btn-circle btn-outline-new-black" href="menu.php">All Menu</a></p>
          </div>
        </div>
        
        <!-- Start Customer Reviews -->
        <div class="customer-reviews-box">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-title text-center">
                  <h2>Our Barista</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 mr-auto ml-auto text-center">
                <div id="reviews" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner mt-4">
                    <div class="carousel-item text-center active">
                      <div class="img-box p-1 border rounded-circle m-auto">
                        <img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
                      </div>
                      <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Ciway</strong></h5>
                      <h6 class="text-dark m-0">Head Barista</h6>
                      <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    </div>
                    <div class="carousel-item text-center">
                      <div class="img-box p-1 border rounded-circle m-auto">
                        <img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
                      </div>
                      <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong></h5>
                      <h6 class="text-dark m-0">Barista</h6>
                      <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    </div>
                    <div class="carousel-item text-center">
                      <div class="img-box p-1 border rounded-circle m-auto">
                        <img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
                      </div>
                      <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong></h5>
                      <h6 class="text-dark m-0">Barista</h6>
                      <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Customer Reviews -->

        <?php include 'view/footer.html'; ?>
        
        
        <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
      
        <!-- ALL JS FILES -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
          <!-- ALL PLUGINS -->
        <script src="js/jquery.superslides.min.js"></script>
        <script src="js/images-loded.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/baguetteBox.min.js"></script>
        <script src="js/form-validator.min.js"></script>
          <script src="js/contact-form-script.js"></script>
          <script src="js/custom.js"></script>
      </body>
    </body>
  </html>