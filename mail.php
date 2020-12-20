<?php
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: ' . $_POST["email"] . "\r\n";
    $headers .= 'Cc: shafeemhasan555@outlook.com' . "\r\n";
    
    $to = "info@attceb.com";
    $subject = "Contact Submission - ATTC Website";
    $txt = " <table>
      <tr>
          <td style='text-align: right;'>Name</td>
          <th style='text-align: left;'>" . $_POST["name"] . "</th>
      </tr>
      <tr>
          <td style='text-align: right;'>Email</td>
          <th style='text-align: left;'>" . $_POST["email"] . "</th>
      </tr>
      <tr>
          <td style='text-align: right;'>Subject</td>
          <th style='text-align: left;'>" . $_POST["subject"] . "</th>
      </tr>
      <tr>
          <td style='text-align: right;'>Message</td>
          <th style='text-align: left;'>" . $_POST["message"] . "</th>
      </tr>
  </table>";
  

    if (mail($to, $subject, $txt, $headers))
        echo "<script>console.log('We will contact you soon!!!');</script>";
    else
        echo "<script>alert('Sorry!!! Please try again');</script>";
?>