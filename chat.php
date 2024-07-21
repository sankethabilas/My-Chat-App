<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App | Home</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="bg-secondary">

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 text-center mt-4 mb-4">
                <h1 class="text-light fw-bold">My Chat App</h1>
            </div>

            <div class="offset-2 col-8  border border-2" style="height: 500px;">

                <!--msg box-->
                <div class="offset-2 col-8 border border-2" style="height: 400px; margin-top:50px;">

                    <!--Received massages-->

                    <div class="row">
                        <div class="col-5 bg-light mt-2 rounded ms-4">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label fs-5 fw-bold">Pasan</label>
                                </div>
                                <div class="col-12">
                                    <p class="text-primary">Received massage</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- sent msg -->

                    <div class="row d-flex flex-column align-content-end justify-content-end">

                        <div class="col-5 bg-primary rounded me-3 mt-2">

                            <div class="col-12">

                                <label class="form-label fs-5 fw-bold">Me</label>
                            </div>

                            <div class="col-12">

                                <p class="text-light">Sent Massage</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- msg area  -->
            <div class="offset-2 offset-lg-4 col-8 col-lg-4 mt-3 d-grid">
                <div class="row">

                    <div class="col-10">
                        <input type="text" class="form-control" placeholder="Write your massage">
                    </div>
                    <div class="col-2 d-grid">
                        <button class="btn btn-danger fw-bold fst-italic text-uppercase">send</button>
                    </div>

                </div>


            </div>

        </div>
    </div>

</body>

</html>