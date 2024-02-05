<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = htmlspecialchars($_POST["firstname"]);
            $lastname = htmlspecialchars($_POST["lastname"]);

            echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
        }





    ?>