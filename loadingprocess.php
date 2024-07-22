<?php

session_start();

$user_id = $_SESSION["u"]["id"];

$reciever = $_POST["r"];

$con = new mysqli("localhost", "root", "Abi0021@", "d21", "3306");

if ($con->connect_error) {

    die("connection failed:" . $con->connect_error);
}

// echo("connected succesfully!");

$q = "SELECT FROM `chat` WHERE `sender` = '" . $user_id . "' OR `receiver` = '" . $user_id . "' AND 
`sender` = '" . $reciever . "' OR `reciever` = '" . $reciever . "'";

$r = $con->query($q);

$num = $r->num_rows;

for ($x = 0; $x < $num; $x++) {
    $data = $r->fetch_assoc();

    if ($user_id == $data["reciever"]) {
        # Msg receive
?>
        <!--Received massages-->
        <div class="row">
            <div class="col-5 bg-light mt-2 rounded ms-4">
                <div class="row">
                    <div class="col-12">

                        <?php
                        $q2 = "SELECT * FROM `user` WHERE `id` = '" . $data["sender"] . "'";
                        $r2 = $con->query($q2);
                        $data2 = $r2->fetch_assoc();


                        ?>
                        <label class="form-label fs-5 fw-bold"><?php echo $data2["nname"]; ?></label>
                    </div>
                    <div class="col-12">
                        <p class="text-primary"><?php echo $data["msg"]; ?></p>
                    </div>

                </div>
            </div>
        </div>

    <?php
    }
    if ($user_id == $data["sender"]) {
        # Msg sender

    ?>

        <!-- sent msg -->

        <div class="row d-flex flex-column align-content-end justify-content-end">

            <div class="col-5 bg-primary rounded me-3 mt-2">

                <div class="col-12">

                    <label class="form-label fs-5 fw-bold">Me</label>
                </div>

                <div class="col-12">

                    <p class="text-light"><?php echo $data["msg"]; ?></p>

                </div>
            </div>
        </div>
        </div>



<?php
    }
}

?>