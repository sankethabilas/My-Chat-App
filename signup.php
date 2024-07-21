<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App |Sign up</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body class="bg-secondary">

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mt-4">
                <h1 class="text-light fw-bold">Sign Up</h1>
            </div>

            <div class="offset-2 offset-lg-4 col-8 col-lg-4 mt-4 mb-4">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <label for="fname" class="text-light fw-bold fs-5 form-label">First Name</label>
                        <input type="text" id="fname" class="form-control" />
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="lname" class="text-light fw-bold fs-5 form-label">Last Name</label>
                        <input type="text" id="lname" class="form-control" />
                    </div>

                </div>

                <div class="col-12 mt-3">
                    <label for="nname" class="text-light fw-bold fs-5 form-label">Nickname</label>
                    <input type="text" id="nname" class="form-control" />
                </div>

                <div class="col-12 mt-3">
                    <label for="email" class="text-light fw-bold fs-5 form-label">Email</label>
                    <input type="text" id="email" class="form-control" />
                </div>

                <div class="col-12 mt-3">
                    <label for="pw" class="text-light fw-bold fs-5 form-label">Password</label>
                    <input type="password" id="pw" class="form-control" />
                </div>

                <div class="col-12 d-grid mt-4">
                    <button class="btn btn-warning" onclick="signup();">Sign Up</button>
                </div>

            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>