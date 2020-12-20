<?php


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $_POST["email"] . "\r\n";

$message = "
  <table>
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
          <th style='text-align: left;'>" . $_POST["msg_subject"] . "</th>
      </tr>
      <tr>
          <td style='text-align: right;'>Mobile</td>
          <th style='text-align: left;'>" . $_POST["mobile"] . "</th>
      </tr>
      <tr>
          <td style='text-align: right;'>Message</td>
          <th style='text-align: left;'>" . $_POST["message"] . "</th>
      </tr>
  </table>";



if (mail("shameel.annotation@gmail.com", $_POST["msg_subject"], $message, $headers))
  echo "<script>alert('We will connect you soon!!!');</script>";
else
  echo "<script>alert('Sorry!!! Please try again');</script>";
