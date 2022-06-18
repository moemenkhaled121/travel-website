<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<link rel="php" href="book_form.php">
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="contact.php">contact us</a>
      <a href="logout.php" class="logout">logout</a>
      </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>contact us</h1>
</div>

<!-- booking section starts  -->

<section class="booking">


   <?php

// Output messages
$responses = [];
// Check if the form was submitted
if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	// Validate email adress
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Make sure the form fields are not empty
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$responses[] = 'Please complete all fields!';
	} 
	// If there are no errors
	if (!$responses) {
		// Where to send the mail? It should be your email address
		$to      = 'moemenkhaled229@gmail.com';
		// Send mail from which email address?
		$from = 'contact@example.com';
		// Mail subject
		$subject = $_POST['subject'];
		// Mail message
		$message = $_POST['msg'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// Try to send the mail

		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';		
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
    // Subject of confirmation email.
$conf_subject = 'Your recent enquiry';

// Who should the confirmation email be from?
$conf_sender = 'travel <no-reply@email.co.es>';

$msg = $_POST['name'] . ",\n\nThank you for your recent enquiry. A member of our 
team will respond to your message as soon as possible.";

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );

}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Contact Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<style>

input,textarea,p {
    outline: 0;
}
h1 {
    margin: 0;
    padding: 20px;
    font-size: 22px;
    text-align: center;
    border-bottom: 1px solid #eceff2;
    color: #6a737f;
    font-weight: 600;
}
.contact {
    background-color: #fff;
    width: 500px;
    margin: 0 auto;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,.2);
}
.contact .fields {
    position: relative;
    padding: 15px;
}
.contact input[type="text"], .contact input[type="email"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
}
.contact input[type="text"]:focus, .contact input[type="email"]:focus {
    border: 1px solid #c6c7c7;
}
.contact input[type="text"]::placeholder, 
.contact input[type="email"]::placeholder, 
.contact textarea::placeholder {
    color: #858688;
}
.contact textarea {
    resize: none;
    margin-top: 15px;
    padding: 15px;
    border: 1px solid #dfe0e0;
    width: 100%;
    height: 150px;
}
.contact textarea:focus {
    border: 1px solid #c6c7c7;
}
.contact input[type="submit"] {
    display: block;
    margin-top: 15px;
    padding: 15px;
    border: 0;
    background-color: #518acb;
    font-weight: bold;
    color: #fff;
    cursor: pointer;
    width: 100%;
}
.contact input[type="submit"]:hover {
    background-color: #3670b3;
}
.contact input[name="email"] {
    position: relative;
    display: block;
}
.contact label {
    position: relative;

}
.contact label i {
    position: absolute;
    color: #dfe2e5;
    top: 31px;
    left: 15px;
    z-index: 10;
}
.contact label i ~ input {
    padding-left: 45px !important;
}
.contact .responses {
    padding: 15px;
    margin: 0;
}
    </style>
    </head>
	<body>
		<form class="contact" method="post" action="">
			<h1>fill in the Form  </h1>
			<div class="fields">
				<label for="email">
					<i class="fas fa-envelope"></i>
					<input id="email" type="email" name="email" placeholder="Your Email" required>
				</label>
				<label for="name">
					<i class="fas fa-user"></i>
					<input type="text" name="name" placeholder="Your Name" required>
				<label>
				<input type="text" name="subject" placeholder="Subject" required>
				<textarea name="msg" placeholder="Message" required></textarea>
			</div>
            <?php if ($responses): ?>
<p class="responses"><?php echo implode('<br>', $responses); ?></p>
<?php endif; ?>
			<input type="submit">
		</form>
	</body>
</html>

</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> moemenkhaled229@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Barcelona, Spain 08001 </a>

      </div>

    

   </div>

   <div class="credit"> created by <span>Moamen Attia</span> | all rights reserved! </div>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>