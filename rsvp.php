  <?php
       $name = $_POST['name'];
       $guests = $_POST['num-guests'];
       $email = $_POST['email'];
       $song = $_POST['song'];
       $from = 'From: My Contact Form';
       $to = 'lowlyherotech@gmail.com';
       $subject = 'RSVP';

       $body = "From: $name\n E-Mail: $email\n Message:\n $message";

       if ($_POST['submit']) {
           if (mail ($to, $subject, $body, $from)) {
           echo '<p>Message Sent Successfully!</p>';
           } else {
           echo '<p>Ah! Try again, please?</p>';
           }
       }
    ?>