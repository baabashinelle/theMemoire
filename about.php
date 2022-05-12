<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Written By Larry - About Me</title>
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
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
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
            <a class="nav-link" href="index.php">Articles</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="#footer">Subscribe</a>
          </div>
        </div>
      </div>
    </nav>

    <section class="abt-sec">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>
              I am ecstatic to present my first blog- the mémoire. This medium
              is not a space within which I can opine more so than it is a
              platform for me to incite pure inquiry within the Ghanaian reader.
              I submit beforehand that I am certainly going to be wrong in some
              respects (not intentionally of course), however, the purpose of
              this endeavour is conserved if one person, at least, is moved to
              inquire more today than they did yesterday. I sincerely believe in
              the role guided curiosity and conversation have to play in
              technological, rational and moral progress. This is the nascence
              of my attempt to spark the change I believe is missing in Ghanaian
              conversation.
            </p>
            <div class="pt-3 btn-div">
              <button class="btn-linkedin">
                <a
                  href="https://www.linkedin.com/in/larry-afun-873506208?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BNdRZFo7qTK%2Bja8%2FXYv8QJw%3D%3D"
                  style="color: #fff; text-decoration: none"
                  >LinkedIn <i class="fab fa-linkedin-in"></i
                ></a>
              </button>
            </div>
          </div>
          <div class="col me-div">
            <img src="assets/images/me2.jpg" alt="Larry" class="larry-pic" />
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
  </body>
</html>
