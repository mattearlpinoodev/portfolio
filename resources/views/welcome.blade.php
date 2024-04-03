<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/qw.jpg" alt="" class="img-fluid rounded-circle">
        @foreach($user as $name)
        <h1 class="text-light"><a href="index.html">{{ ucwords($name->name) }}</a></h1>
     
        <div class="social-links mt-3 text-center">
          <a href="https://github.com/mattearlpinoodev" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.facebook.com/mattearl.pino" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/matte_arl/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="https://www.linkedin.com/in/mattearl-pinoo-632723261/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
          <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-brain"></i> <span>Skill</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Educational Attainment</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-cog"></i> <span>Blogs</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
          <li><a href="{{ route('login') }}" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Login</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>{{$name->name}}</h1>
      <p>Your Future <span class="typed" data-typed-items="Web Developer,   Graphic Designer"></span></p>
    </div>
  </section><!-- End Hero -->
  @endforeach
  <main id="main">

    <!-- ======= About Section ======= -->
    
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          @foreach($about as $abouts)
          <p>{{$abouts->description}}</p>
        <br>
        <br>
        <br>
          <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        
            <!-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <br></br>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$abouts->birthday}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Religion:</strong> <span>{{$abouts->religion}}</span></li>
                  
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$abouts->degree}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$abouts->city}}</span></li>
                  @endforeach
                </ul>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$abouts->age}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$abouts->phone_number}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$abouts->email}}</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <span>{{$abouts->gender}}</span></li>
                </ul>
              </div>
            </div>
            <!-- <li><i class="bi bi-chevron-right"></i> <strong></strong> <span>Description</span></li>
            <p>
            A dynamic and evolving document that should be regularly updated to reflect the creator's latest work, achievements, and skills. It's essential to keep the portfolio current and relevant by adding new projects, updating descriptions, replacing outdated materials, and removing irrelevant content. -->
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h1>Works</h1>
        </div>

        <!-- <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
            <img src="assets/img/land.gif" class="img-fluid" alt="">
            <div class="portfolio-info">
                <h4 class="text-center">Comics Inventory System</h4>
            </div>
            <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpgs" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="https://comicsinventory.webactivities.online" title="More Details"><i class="bx bx-link"></i></a>
            </div>
        </div>
    </div>
</div>

  <!-- End Portfolio Section -->

    <!-- ======= Skills Section ======= -->
    
    <section id="skills" class="skills section-bg">
      <div class="container">
       
        <div class="section-title">
          <h2>Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        @foreach($skill as $skills) 
        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
          
            <div class="progress">
              <span class="skill">{{$skills->skill_name}}<i class="val">{{$skills->percentage}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <!-- <div class="progress">
              <span class="skill">{{$skills->skill_name}} <i class="val">{{$skills->percentage}}%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$skills->skill_name}}<i class="val">{{$skills->percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">{{$skills->skill_name}} <i class="val">{{$skills->percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$skills->skill_name}}<i class="val">{{$skills->percentage}}"</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">{{$skills->skill_name}} <i class="val">{{$skills->percentage}}</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div> -->
<!-- 
          </div> -->

        </div>

      </div>
      @endforeach
    <!-- </section>End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
    <div class="container">
        <div class="section-title">
            <h2>Educational Attainment</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Education</h3>
                <div class="resume-item">
                    @if(!empty($educational_attainment))
                        @foreach($educational_attainment as $education)
                            <h4>{{$education->grade_level}}</h4>
                            <p><em>{{$education->name_school}}</em></p>
                            <h5>{{$education->year_graduate}}</h5>
                            <p><em>{{$education->description}}</em></p>
                            
                        @endforeach
                    @else
                        <p><em>No educational attainment found</em></p>
                    @endif
                </div>
            </div>
          
            <div class="col-lg-6" data-aos="fade-up">
                <h3 class="resume-title">Experience</h3>
                <div class="resume-item">
                @foreach($experience as $experiences)
                    <h4>{{$experiences->work_experience}}</h4>
                    <h5>{{$experiences->date_hired}}</h5>
                    <p><em>{{$experiences->address}}</em></p>
                    
                        <li>{{$experiences->description}}</li>
                        @endforeach
                        <!-- <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                        <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
                        <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
                    </ul>
                </div>
                <div class="resume-item">
                    <h4>Graphic design specialist</h4>
                    <h5>2017 - 2018</h5>
                    <p><em>Stepping Stone Advertising, New York, NY</em></p>
                    <ul>
                        <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>
                        <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                        <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                        <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
    
</section>

<!-- End Resume Section -->

   

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
    <div class="container">

        <div class="section-title">
            <h2>Blogs</h2>
            <h4>Leyte has many tourist spots that are worth visiting. Here are some of the must-see destinations in Leyte</h4>
        </div>

<section>
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                <img src="{{ asset('storage/'. $blog->image) }}" class="img-fluid" alt="{{$blog->title}}">
                <h4 class="title">{{$blog->title}}</a></h4>
                <p align="justify">{{$blog->content}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>



          <!-- <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div> -->
    <!-- </section>End Services Section -->

    <!-- ======= Testimonials Section ======= -->
 
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Hilongos, Leyte Philippines</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>mattearlpinoo@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+639356086388</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>iPortfolio</span></strong>
      </div>
      <div class="credits"> -->
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>