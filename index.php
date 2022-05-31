<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Memoire</title>

    <!--Favicon-->
    <link
      rel="shortcut icon"
      href="assets/images/My project (1).png"
      type="image/x-icon"
    />

    <!--Core CSS-->
    <link rel="stylesheet" href="style.css" />

    <!--Bootstrap CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <!--Euclid font-->
    <link href="fontseuclid/stylesheet.css" rel="stylesheet" type="text/css" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="fontawesome/css/all.css" />

    <!--Animate on scroll-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    <div id="preloader"></div>
    <section class="header">
      <div class="color-overlay"></div>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div
          class="container-fluid"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-once="true"
        >
          <a class="navbar-brand logo" href="index.php"
            ><img
              src="assets/images/My project (1).png"
              alt="The Memoire"
              width="80"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto navitems">
              <a class="nav-link" href="index.php">Home</a>
              <a class="nav-link" href="#articles">Articles</a>
              <a class="nav-link" href="about.php">About</a>
              <a class="nav-link" href="#footer">Subscribe</a>
            </div>
          </div>
        </div>
      </nav>
      <h3 data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        Welcome to my Blog Site!
      </h3>
      <div
        class="btn-div2"
        data-aos="fade-up"
        data-aos-duration="1000"
        data-aos-once="true"
      >
        <button>
          <a href="#articles" style="text-decoration: none; color: white"
            >Look More</a
          >
        </button>
      </div>
    </section>

    <section class="second-sec pt-4" id="articles">
      <div class="container">
        <h4
          class="text-center pt-4"
          data-aos="fade-right"
          data-aos-duration="1000"
          data-aos-once="true"
        >
          ARTICLES
        </h4>
        <hr
          width="200"
          style="margin: auto"
          data-aos="fade-right"
          data-aos-duration="1000"
          data-aos-once="true"
        />

        <div class="row pt-5">
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="100"
            data-aos-once="true"
          >
            <h6>MAY 30, 2022</h6>
            <h3 style="font-size: 35px">The Philosophical Problem of Grace</h3>
            <p style="font-size: 22px; text-align: justify" class="pb-4">
              Imagine for an instance that you upload a video on YouTube and become an overnight star or
you make a tweet and that garners revenue generating attention. Fine-tuning these scenarios within
the frame of moral saliency, they can be described as instances of divine providence or grace.
According to a Guite and Soreng in their journal published in Research Gate, “Grace, in the
Christian understanding, is the unconditional love, the free and undeserved favour of God” (1). This
essay is a deep dive into the philosophy of this divine providence, whether it is identifiable
intellectually and if it can only be determined upon hindsight.
            </p>
            <a href="grace.php" style="color: white"
              >READ MORE <i class="fas fa-angle-double-right"></i
            ></a>
          </div>
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="150"
            data-aos-once="true"
          >
            <img
              src="assets/images/gracee.jpg"
              alt="Grace"
              class="nima-pic"
            />
            <!--For mobile-->
            <img
              src="assets/images/gracee.jpg"
              alt="Grace"
              class="nima-pic-mob"
            />
          </div>
        </div>

        <div class="row pt-5">
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="100"
            data-aos-once="true"
          >
            <h6>MAY 1, 2022</h6>
            <h3 style="font-size: 35px">Criminals and Rapists Do Not Deserve Punishment</h3>
            <p style="font-size: 22px; text-align: justify" class="pb-4">
              Everyone has heard their fair share of gory stories, ranging from unfortunate child abusers to school 
              shootings that cause needless suffering. These events evoke disdain, anger and public disapproval as 
              they should. I hasten to say that the telos of this essay does not assert that rapists, criminals and 
              the likes should not be secluded from society. This essay is an investigation into what it means for a 
              person to deserve punishment, the principles that govern our notion of retributive punishment, the coherency 
              of these principles and how we can more ethically go about them.
            </p>
            <a href="criminals.php" style="color: white"
              >READ MORE <i class="fas fa-angle-double-right"></i
            ></a>
          </div>
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="150"
            data-aos-once="true"
          >
            <img
              src="assets/images/jail.jpg"
              alt="Jail"
              class="nima-pic"
            />
            <!--For mobile-->
            <img
              src="assets/images/jail.jpg"
              alt="Jail"
              class="nima-pic-mob"
            />
          </div>
        </div>

        <div class="row pt-5">
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="100"
            data-aos-once="true"
          >
            <h6>JAN 19, 2022</h6>
            <h3 style="font-size: 35px">Nima Conflict</h3>
            <p style="font-size: 22px; text-align: justify" class="pb-4">
              In recent news, a clash between what appears to be two factions of
              local groups has ensued. As of 19th January, unconfirmed reports
              from “Myjoyonline” suggests that at least 4 persons have died as a
              result. While this is a horrendous event that mars the image of
              peace that Ghana has long been identified with, it may be a
              symptom of an under-arching exploitation of the social structure
              found in those communities.
            </p>
            <a href="nima.php" style="color: white"
              >READ MORE <i class="fas fa-angle-double-right"></i
            ></a>
          </div>
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="150"
            data-aos-once="true"
          >
            <img
              src="assets/images/conflict.jpg"
              alt="Nima Conflict"
              class="nima-pic"
            />
            <!--For mobile-->
            <img
              src="assets/images/conflict.jpg"
              alt="Nima Conflict"
              class="nima-pic-mob"
            />
          </div>
        </div>

        <div class="row pt-5">
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-aos-once="true"
          >
            <h6>JULY 20, 2021</h6>
            <h3 style="font-size: 35px">The Rastafarian Conundrum</h3>
            <p style="font-size: 22px; text-align: justify" class="pb-4">
              Before I delve into this issue, I would like to establish a
              premise. I argue that questions of virtue should not be argued
              from the lens of reasoning but can invoke it to buttress a point
              (not to establish it). An illustration of this effect is a
              contrast between a Muslim, who does not eat pork because it is
              inherently wrong to do so and a person who decides not to eat pork
              because it is a healthier alternative.
            </p>
            <a href="rasta.php" style="color: white"
              >READ MORE <i class="fas fa-angle-double-right"></i
            ></a>
          </div>
          <div
            class="col"
            data-aos="fade-right"
            data-aos-duration="1000"
            data-delay="100"
            data-aos-once="true"
          >
            <img
              src="assets/images/rasta.jpg"
              alt="The Rastafarian Conundrum"
              class="rasta-pic"
            />
            <!--For mobile-->
            <img
              src="assets/images/rasta.jpg"
              alt="The Rastafarian Conundrum"
              class="rasta-pic-mob"
            />
          </div>
        </div>
      </div>
    </section>

    <!--Footer-->
    <section class="footer-sec" id="footer">
      <div class="container">
        <div class="text-center">
          <h3>Subscribe to receive latest updates!</h3>
          <hr
          width="300"
          style="margin: auto"
        />
          <p class="pt-4">
            In order not to miss out on my latest articles, subscribe to The Memoire now.
          </p>
          <!--<div class="input-group mb-3 pt-4">
            <input
              type="text"
              class="form-control "
              placeholder="Email Address"
              required
              aria-describedby="button-addon2"
              style="width: 70px;"
            />
            <button
              class=" btn-outline-secondary"
              type="submit"
              id="button-addon2"
            >
              Subscribe <i class="fas fa-paper-plane"></i>
            </button>
          </div>-->
          <form action="index.php" method="POST">
            <?php
            $userEmail = ""; //first we leave this field blank
            if(isset($_POST['subscribe'])){ //if subscribe button clicked
               $userEmail = $_POST['email']; //getting user email
               if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user entered email
                 $subject = "Thanks for subscribing!";
                 $message = "Thanks for subscribing to The Memoire. You'll receive notifications on latest updates anytime I post!";
                 $sender = "From: thememoirebylarry@gmail.com";
                 if(mail($userEmail, $subject, $message, $sender )){ //php function to send mail
                    ?>
                    <!--Successful-->
                 <div class="alert"> Thanks for Subscribing!</div>
                 <?php
                 $userEmail = "";
                 }else{
                     ?>
                     <!-- Not Successful-->
                 <div class="alert"> Failed to send email.</div>
                 <?php
                 }
               }else{
                 ?>
                 <div class="alert"> <?php echo $userEmail?> is not valid.</div>
                 <?php
               }
            }
            ?>
            <div class="input-group mb-3 pt-4">
            <input
              type="text"
              class="form-control "
              placeholder="Email Address" required
              name="email"
              value="<?php echo $userEmail ?>"
              style="width: 70px;"
            />
            <button
              class=" btn-outline-secondary"
              type="submit"
              name="subscribe"
              value="subscribe"
            >
              Subscribe <i class="fas fa-paper-plane"></i>
            </button>
          </div>
          </form>
          <p>© The Memoire, 2022</p>
        </div>
      </div>
    </section>
    <!--For Bootstrap-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!--AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function () {
        loader.style.display = "none";
      });
    </script>
  </body>
</html>
