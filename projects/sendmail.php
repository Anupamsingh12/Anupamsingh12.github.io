<?php
$email=$subject=$message='';
function send_email($to,$message){

   
$body = [
    'Messages' => [
        [
        'From' => [
            'Email' => "anupmkumar10@gmail.com",
            'Name' => "Anupam kumar"
        ],
        'To' => [
            [
                'Email' => (string)$to,
                'Name' => "jisko man tisko"
            ]
        ],
        'Subject' => "message from your site",
        'HTMLPart' => "$message"
        ]
    ]
];
  
$ch = curl_init();
  
curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json')
);
curl_setopt($ch, CURLOPT_USERPWD, "fdd71aefd8b6323b2d29d7baebd98714:0929fd36d4d25bff7ab1d752e8842beb");
$server_output = curl_exec($ch);
curl_close ($ch);
  
$response = json_decode($server_output);
if ($response->Messages[0]->Status == 'success') {
   // echo "Email sent successfully.";
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
//send_email("anupmkumar10@gmail.com","<h3>from: $email<br>subject: $subject<br>message: $message</h3");
 ?>
 
     <script>
     alert('message sent');
     </script>
<?php
}


?>

<html lang="en"><head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>sendmail</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.2.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body data-gr-c-s-loaded="true">

<!-- ======= Portfolio Details ======= -->
  <main id="main">
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-12 portfolio-info">
            <br>
            <center><h2 style="color:#12d640">send your messege here</h2><br></center>
            
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="w3-container">
  
  <center><input class="w3-input w3-animate-input" type="email" name='email' placeholder="Your email" style="width:40%"></center><br>
  <center><input class="w3-input w3-border w3-animate-input" placeholder='subject' name='subject' type="text" style="width:40%"></center><br>
  <textarea class="w3-input w3-border w3-animate-input" placeholder='message' name='message' type="text" style="width:100%; height:100px"></textarea> <br>
<center><button type='submit' style="width: 250px; height: 50px;  background-color:#283b59; color: #12d640;">send message</button></center>
</form>

            
           
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->
  </main><!-- End #main -->

<!-- Vendor JS Files -->
  <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script>if( window.self == window.top ) { (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', 'UA-55234356-4', 'auto'); ga('send', 'pageview'); } </script>

</body>
</html>





