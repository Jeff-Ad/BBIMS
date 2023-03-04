<?php
session_start();
error_reporting(0);
ini_set('display_errors', '1');
include('layout/db_connect.php');
include('layout/links.php');
include('layout/header.php');
include('layout/top_nav.php');
?>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url(images/BLOOD.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Digital Blood Banking</span></h2>
            <p class="animate__animated animate__fadeInUp">Digital Blood Banking is Powered by General Hospital Minna, Niger State.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">What is Blood?</h2>
            <p class="animate__animated animate__fadeInUp">Blood is essential to life. Blood circulates through our body and delivers essential substances like oxygen and nutrients to the body’s cells. It also transports metabolic waste products away from those same cells. There is no substitute for blood.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url(images/indx.jpg)">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Blood Components</h2>
            <p class="animate__animated animate__fadeInUp">The four basic components that comprise human blood: plasma, red blood cells,
              white blood cells and platelets..</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>
</section>
<!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6">
          <h2 class="bg-danger text-white">What is Blood?</h2><br />

          <p class="text">
            Blood is essential to life. Blood circulates through our body and delivers essential
            substances like oxygen and nutrients to the body’s cells.
            It also transports metabolic waste products away from those same cells.
            There is no substitute for blood.
            It cannot be made or manufactured.
            Generous blood donors are the only source of blood for patients in need of a blood transfusion.
          </p>

          <br /><br /><br /><br />
          <h3 class="bg-white text-danger">Blood Components</h3>
          <p class="text">
            There are four basic components that comprise human blood: plasma, red blood cells,
            white blood cells and platelets.
          </p>
          <img class="img-responsive" src="images/Blood components.png" alt="">
          <h4 class="bg-white text-info">Red Blood Cells</h4>

          <p class="text">Red blood cells represent 40%-45% of your blood volume. They are generated from your bone marrow at a rate of four to five billion per hour. They have a lifecycle of about 120 days in the body.</p>

          <h4 class="bg-white text-info"> Platelets</h4>

          <p class="text">Platelets are an amazing part of your blood. Platelets are the smallest of our blood cells and literally look like small plates in their non-active form. Platelets control bleeding. Wherever a wound occurs, the blood vessel will send out a signal. Platelets receive that signal and travel to the area and transform into their “active” formation, growing long tentacles to make contact with the vessel and form clusters to plug the wound until it heals.</p>

          <h4 class="bg-white text-info">Plasma</h4>

          <p class="text">Plasma is the liquid portion of your blood. Plasma is yellowish in color and is made up mostly of water, but it also contains proteins, sugars, hormones and salts. It transports water and nutrients to your body’s tissues.</p>

          <h4 class="bg-white text-info">White Blood Cells</h4>

          <p class="text">Although white blood cells (leukocytes) only account for about 1% of your blood, they are very important.
            White blood cells are essential for good health and protection against illness and disease.
            Like red blood cells, they are constantly being generated from your bone marrow. </p>
          <p class="text">They flow through the bloodstream and attack foreign bodies, like viruses and bacteria.They can even leave the bloodstream to extend the fight into tissue.</p>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h2 class="bg-danger text-white">About Blood Types</h2>
          <p class="text">Your blood type is inherited and everyone’s blood type falls into one of eight types.
            The below chart shows the percentage of the population that has each blood type.</p>
          <img class="img-responsive" src="images/bloodperc.png" alt=""><br>
          <p class="text"> Type matters when it comes to blood transfusions. There are very specific ways in which blood types and blood components must be matched for a safe transfusion.
            This is why it is important that you Target Your Type® with the best donation method for you.</p>
          <img class="img-responsive" src="images/bloodcompatibility.png" alt=""><br>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->


</main><!-- End #main -->

<!-- Features Section -->
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2 text-align="justify" class="page-header text-primary">Why we need you to give blood ?</h2>
    </div>
    <div class="col-md-6">


      <ul>
        <li class="text">Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>
        <li class="text">Many people would not be alive today if donors had not generously given their blood.</li>
        <li class="text">We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>
        <li class="text">Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>
        <li class="text">Most people between the ages of 17-65 are able to give blood.</li>
        <li class="text">Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>
      </ul>
    </div>
    <div class="col-md-6">
      <img class="img-responsive" src="images/contact.jpg" alt="">
    </div>
  </div>
  <!-- /.row -->

  <hr>


  <!-- Call to Action Section -->
  <div class="well">
    <div class="row">
      <div class="col-md-8">
        <p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <img src='' width="100%" height="100%" id='ModalImg'>
      </div>
    </div>
  </div>
</div>


<hr>


<?php include "layout/scripts.php"; ?>

<!-- /.container -->


</body>

</html>



<!-- Footer -->
<?php include "layout/footer.php"; ?>