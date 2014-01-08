<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['institution']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }


			// PREPARE THE BODY OF THE MESSAGE

			$message = '<html><body>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
			$message .= "<tr><td><strong>Company:</strong> </td><td>" . htmlentities($_POST['company']) . "</td></tr>";
			$message .= "</table>";
			$message .= "</body></html>";



			//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
            $to  = 'chris.sammarco@gmail.com';

            //$to  = 'chris.sammarco@gmail.com' . ', ';
            //$to .= 'guyfriedman@gmail.com';

			$subject = "ExamHAwk Live Demo Form";

			$headers = "From: " . $_POST['email'] . "\r\n";
			$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

			mail($to, $subject, $message, $headers);


}
?>