<!--Header-->
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="Assets/logo.jpg" type="image/png">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 <link rel="stylesheet" href="grp2.css">
 <title>Group 2</title>
</head>

<body>
 <!-- Logo Image -->
 <div class="logo-container">
  <img src="Assets/logo.jpg" alt="Group Logo" class="logo">
 </div>
 <!-- Contact Us Button -->
 <button id="contactBtn" class="contactBtn">Contact Us</button>
 <!-- Contact Form -->
 <div id="contactForm" class="contactForm hidden">
  <div class="form-content">
   <span class="close" id="closeBtn">&times;</span>
   <h2>Contact Us</h2>
   <form id="contactFormElement" action="submit.php" method="post">
    <label for="name">Name:</label>
    <input class="name" type="text" id="name" name="name" required><br>
    <label type="email">Email:</label>
    <input class="email" type="email" id="email" name="email" required><br>
    <label for="message">Message:</label><br>
    <textarea class="message" id="message" name="message" rows="5" required></textarea><br>
    <button type="submit">Send</button>
   </form>
  </div>
 </div>