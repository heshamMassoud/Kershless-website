<?php
    if($_POST["action"]=="deleteimage")
    {
        $imagefile = $_POST['imagefile'];
        $imagefileend = "/home4/together/public_html/uploads/" . $imagefile;

        unlink($imagefileend);
    }
?>