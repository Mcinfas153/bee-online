<div>
    <section class="page-title overflow-hidden text-center light-bg bg-contain animatedBackground" data-bg-img="{{ asset('assets/images/pattern/05.png') }}">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <h1 class="title">Contact Us</h1>
              <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Page:</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
        <div class="page-title-pattern"><img class="img-fluid" src="{{ asset('assets/images/bg/06.png') }}" alt=""></div>
      </section>
      
      <!--page title end-->
      
      
      <!--body content start-->
      
      <div class="page-content">
      
      <!--contact start-->
      
      <section class="contact-1" data-bg-img="{{ asset('assets/images/pattern/02.png') }}">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
              <div class="section-title mb-2">
                <h6>Get In Touch</h6>
                <h2 class="title">Contact Us</h2> 
              </div>
              <div class="contact-main">
                <form id="contact-form" class="row g-4 needs-validation" method="post" action="http://themeht.com/loptus/ltr/php/contact.php" novalidate>
                  <div class="messages"></div>
                  <div class="col-md-6">
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required>
                    <div class="invalid-feedback">Name is required.</div>
                  </div>
                  <div class="col-md-6">
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                    <div class="invalid-feedback">Valid email is required.</div>
                  </div>
                  <div class="col-md-12">
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required>
                    <div class="invalid-feedback">Phone is required</div>
                  </div>
                  <div class="col-md-12">
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required></textarea>
                    <div class="invalid-feedback">Please,leave us a message.</div>
                  </div>
                  <div class="col-md-12">
                    <button class="btn btn-theme btn-radius"><span>Send Message</span>
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 ms-auto mt-5 mt-md-0">
              <ul class="contact-info list-unstyled">
                <li class="mb-4"><i class="flaticon-location"></i><span>Address:</span>
                  <p>311/A Colombo 2, Sri Lanka.</p>
                </li>
                <li class="mb-4"><i class="flaticon-email"></i><span>Email</span><a href="mailto:contact@bee.com"> contact@bee.com</a>
                </li>
                <li class="mb-4"><i class="flaticon-call"></i><span>Phone:</span><a href="tel:+94764878633">+94-76-487-8633</a>
                </li>
                <li><i class="flaticon-user"></i><span>Fax:</span><a href="tel:+94764878633">+94-76-487-8633</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      
      <!--contact end-->
      
      <section class="overflow-hidden p-0">
        <div class="container-fluid p-0">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="map iframe-h-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      </div>
      
      <!--body content end-->
      <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
      <script>
        $(document).ready(function() {
            $('.active').removeClass('active');
            $('.contactNavLink').addClass('active');
        });
    </script>
</div>
