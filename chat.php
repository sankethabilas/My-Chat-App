<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App | Home</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="bg-secondary" onload="loader();">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 text-center mt-4 mb-2">
                <h1 class="text-light fw-bold">My Chat App</h1>
            </div>

            <div class="offset-2 offset-lg-2 col-8 col-lg-8 mb-2">
                <select class="form-select" id="receiver">

                    <?php

                    session_start();

                    $con = new mysqli("localhost", "root", "Abi0021@", "d21", "3306");

                    if ($con->connect_error) {

                        die("connection failed:" . $con->connect_error);
                    }

                    // echo("connected succesfully!");

                    $q = "SELECT * FROM `user` ";

                    $r = $con->query($q);
                    $num = $r->num_rows;

                    for ($x = 0; $x < $num; $x++) {
                        $data = $r->fetch_assoc();
                        $all_id = $data["id"];
                        $all_names = $data["fname"];

                        if ($all_id != $_SESSION["u"]["id"]) {
                    ?>
                            <option value="<?php echo ($all_id); ?>"><?php echo($all_names);?></option>


                    <?php


                        }
                    }

                    ?>



                </select>
            </div>

            <div class="offset-2 col-8  border border-2" style="height: 500px;">

                <!--msg box-->
                <div class="offset-2 col-8 border border-2" style="height: 400px; margin-top:50px;" id="msg_box">

                    

                <!-- massage content load here   -->

                   
            </div>
            <!-- msg area  -->
            <div class="offset-2 offset-lg-4 col-8 col-lg-4 mt-3 d-grid">
                <div class="row">

                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Write your massage" id="text">
                    </div>
                    <div class="col-2 d-grid">
                        <button class="btn btn-danger fw-bold fst-italic text-uppercase" onclick="send();">send</button>
                    </div>

                </div>


            </div>

        </div>
        
    </div>

    <script src="script.js"></script>

</body>

</html>