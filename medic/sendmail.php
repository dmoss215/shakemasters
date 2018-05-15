<?php
if($_POST["message"]) {
    mail("danmoss215@gmail.com", "Form to email message", $_POST["message"], "From: danmoss215@yahoo.com");
}
?>