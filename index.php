<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App | Sign In</title>
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body class="bg-secondary">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 text-center mt-5">
                <h1 class="text-light fw-bold">Sign In</h1>
            </div>

            <div class="col-8 offset-2 col-lg-4 offset-lg-4 mt-4 mb-4">
                <label class="form-label fw-bold text-light fs-5" for="email">Email</label>
                <input type="text" class="form-control" id="email" />
            </div>

            <div class="col-8 offset-2 col-lg-4 offset-lg-4 mt-4 mb-4">
                <label class="form-label fw-bold text-light fs-5" for="pw">Password</label>
                <input type="password" class="form-control" id="pw" />
            </div>

            <div class="offset-2 offset-lg-4 col-8 col-lg-4 mt-4 mb-4">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-4 d-grid">
                        <button class="btn btn-dark" onclick="signin();">Sign In</button>
                    </div>

                    <div class="col-12 col-lg-6 mb-4 d-grid">
                        <button class="btn btn-warning" onclick="gotosignup();">Sign Up</button>
                    </div>
                </div>

            </div>


        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>