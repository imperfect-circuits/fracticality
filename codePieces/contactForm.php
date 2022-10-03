<!DOCTYPE html>
<html>
 <head>
  <title>PHP Contact Form</title>
  <link rel="stylesheet" type="text/css" href="../coreStylesheet.css" />
  <script type="text/javascript" src="../coreEvents.js"></script>
  <!--fav icon links-->
  <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="../favicons/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="../favicons/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="../favicons/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="../favicons/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="../favicons/manifest.json">
  <link rel="shortcut icon" href="../favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-TileImage" content="../favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="../favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
 </head>
 <body>
  <div id="nav">
   <ul>
    <li><a href="../index.htm">Home</a></li>
    <li><a href="../projects.htm">Projects</a></li>
    <li><a href="../codePieces.htm">Code Pieces</a></li>
    <li><a href="../resources.htm">Resources</a></li>
   </ul>
  </div>
  <div id="content">
   <h1>PHP Contact Form</h1>
   <p>Fill in the fields below then press submit. The page will refresh and show the data input below the form.</p>
 <?php
   // phpinfo();
   // function for wrapping input element with label
   function addInputHTML($label,$name,$inputElement) {
    echo '<label for="'.$name.'">'.$label.':</label>'.$inputElement;
   }
   // Add the form to the page
   echo '<form action="" method="post">';
   addInputHTML('First name','firstName','<input type="text" name="firstName" id="firstName" value="" />');
   addInputHTML('Last name','lastName','<input type="text" name="lastName" id="lastName" value="" />');
   addInputHTML('Email address','email','<input type="text" name="email" id="email" value="" />');
   addInputHTML('Subject','subject','<input type="text" name="subject" id="subject" value="" />');
   addInputHTML('Message body','message','<textarea name="message" id="message" /></textarea>');
   echo '<input type="submit"/>';
   echo '</form>';
   // if form has been submitted
   if (!empty($_POST)) {
      // get the contents of the submitted form
      $firstName = $_POST["firstName"];
      $lastName = $_POST["lastName"];
      $email = $_POST["email"];
      $subject = $_POST["subject"];
      $message = $_POST["message"];
      // display the contents to the page
      echo '<p>First name: '.htmlspecialchars($firstName).'</p>';
      echo '<p>Last name: '.htmlspecialchars($lastName).'</p>';
      echo '<p>Email address: '.htmlspecialchars($email).'</p>';
      echo '<p>Subject: '.htmlspecialchars($subject).'</p>';
      echo '<p>Message: '.nl2br(htmlspecialchars($message)).'</p>';
   }
 ?> 
  </div>
  <div id="footer">
   <p><a id="changeLogLink" href="../changeLog.htm">Change Log</a></p>
   <p>2022</p>
  </div>
 </body>
</html>
