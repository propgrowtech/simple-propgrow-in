<?php
if(isset($_POST['submit'])){
$to = "spreeti1501@gmail.com";
$subject = "Emaar Urban Oasis ";
$message = "<p><br> Please check the below details. <br>
<b>Name :</b>".$_POST['name']."<br><b>Email :</b>".$_POST['email']."<br><b>Contact :</b>".$_POST['mobile']."<br><b>Message :</b>".$_POST['message']."<br><b>Query :</b>".$_POST['query']."</p>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Google Lead <lead@emaarrealty.com>' . "\r\n";
mail($to, $subject, $message, $headers);
echo '<script>window.location="thanks.php"</script>';
}
?>