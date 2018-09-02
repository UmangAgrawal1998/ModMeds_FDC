 <!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ModMeds</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">ModMeds</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Prescribe</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/doctorlogo.PNG" alt="">
        <h1 class="text-uppercase mb-0">Start Modernizing Medical</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Improving Lives - Convenient Health Care - Zero Corruption</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->


    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">About</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">ModMeds is a modernized secure developing platform for the Doctor-Patient-Chemist Interactions</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">We aim to rule out unauthorized doctors and chemists from the system and maintain a robust secure simple system !</p>
          </div>
        </div>

      </div>
    </section>




 <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Let Me Prescribe!</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label> Patient Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Enter Patient Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label> Doctor Name</label>
                  <input class="form-control" id="dname" type="text" placeholder="Enter Doctor Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>

              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Patient Age</label>
                  <input class="form-control" id="age" type="number" placeholder="Enter Patient Age" required="required" data-validation-required-message="Please enter patient age">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Patient ID</label>
                  <input class="form-control" id="pkey" type="text" placeholder="Id generate" required="required" data-validation-required-message="Please enter patient age">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Prescription ID</label>
                  <input class="form-control" id="presid" type="text" placeholder="Id generate" required="required" data-validation-required-message="Please enter patient age">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Disease Description</label>
                  <input class="form-control" id="describe" rows="10" placeholder="Describe the disease" required="required" data-validation-required-message="Please enter the description">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Medicines</label>
                  <textarea class="form-control" id="medicine" rows="5" placeholder="Enter The Required Medicines " required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
               <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Dosages</label>
                  <textarea class="form-control" id="dosages" rows="6" placeholder="Enter The Dosages As Same Medicine Sequence " required="required" data-validation-required-message="Please enter dosages in same sequence as medicine"></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendPrescriptionButton">Prescribe</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Vandalur Kelambakkam Road
              <br>VIT University</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About ModMeds</h4>
            <p class="lead mb-0">ModMeds is a free to use, modernized medical platform revolutionizing the smart community
              </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; ModMeds 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

<script>
;(function() {
    var randomString = function(length) {

      var text = "";

      var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

      for(var i = 0; i < length; i++) {

        text += possible.charAt(Math.floor(Math.random() * possible.length));

      }

      return text;
    }

    // random string length
    var random = randomString(10);

    // insert random string to the field
    var elem = document.getElementById("pkey").value = "Generated Patient ID is " + random;

  })();
</script>

<script>
;(function() {
    var randomString = function(length) {

      var text = "";

      var possible = "0123456789";

      for(var i = 0; i < length; i++) {

        text += possible.charAt(Math.floor(Math.random() * possible.length));

      }

      return text;
    }

    // random string length
    var random = randomString(7);

    // insert random string to the field
    var elem = document.getElementById("presid").value = "Generated Prescription Number is " + random;

  })();
</script>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <!-- <script src="main.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.4.1/firebase-auth.js"></script>
      <script>

      var config = {
      apiKey: "AIzaSyCYr9DfkoO2d7Nyx4MBcMgSGxPXTMymoqo",
      authDomain: "modmeds-427ae.firebaseapp.com",
      databaseURL: "https://modmeds-427ae.firebaseio.com",
      projectId: "modmeds-427ae",
      storageBucket: "modmeds-427ae.appspot.com",
      messagingSenderId: "1012459284320"
    };
    firebase.initializeApp(config);
   const firestore = firebase.firestore();
    const settings = {/* your settings... */ timestampsInSnapshots: true};
    firestore.settings(settings);
    	var output=firestore.collection("Prescription");

    //listen for form submit
    	document.getElementById('contactForm').addEventListener('submit',submitForm);
    	function submitForm(e)
    {
    	e.preventDefault();
    		//getting values
    		var Prescription_no=getInputVal('presid');
    		var DoctorName=getInputVal('dname');
    		var p_age=getInputVal('age');
    		var Patient_ID=getInputVal('pkey');
        var disease_desc=getInputVal('describe');
        var medicine=getInputVal('medicine');
        var dosage=getInputVal('dosages')
    		//Saving the data
    		saveMessage(Prescription_no,DoctorName,p_age,Patient_ID,disease_desc,medicine,dosage);
    }
    function getInputVal(id)
    {
    	return document.getElementById(id).value;
    }

    //Save message to firebase
    function saveMessage(Prescription_no,DoctorName,p_age,Patient_ID,disease_desc,medicine,dosage)
    {
    	output.add
    	(
    	{
    			Doctor_Name:DoctorName,
          Dosage:dosage,
          Medicine_1:medicine,
          Patient_ID:Patient_ID,
          Prescription_no:Prescription_no,
          disease:disease_desc

    	}
    );
    }

</script>

<!-- <script src="https://www.gstatic.com/firebase/5.4.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebase/5.4.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebase/5.4.2/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebase/init.js"></script> -->
  </body>

</html>
