<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title>Dashboard</title>
</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="logout.php">
            <button type="button" class="btn btn-outline-info">Logout</button>
        </a>

    </div>
</nav>
<div class="row justify-content-center">
    <div id="showInfo" class="col-4">

    </div>
</div>

<!-- Login -->
<div class="login">
    <div class="container">
        <button type="button" class="btn btn-dark mb-5 btn-lg">User ID: {$id}</button>
        <div class="row">
            <div class="col-12">
                <span class="badge badge-info">Your private key: {$private_key}</span>
                <span class="badge badge-info">Your public key: {$public_key}</span>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header"><h5 class="card-title">Information</h5></div>
                    <div class="card-body text-info">
                        <h5 class="card-title">{$record0}</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header"><h5 class="card-title">Health</h5></div>
                    <div class="card-body text-info">
                        <h5 class="card-title">{$record1}</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header"><h5 class="card-title">Action</h5></div>
                    <div class="card-body text-info">
                        <h5 class="card-title">{$record2}</h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header"><h5 class="card-title">Latest</h5></div>
                    <div class="card-body text-info">
                        <h5 class="card-title">{$record3}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 p-4 text-center fixed-bottom">
        Copyright &copy; 2018 Master Mind
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            ></script>
    <script src="../libs/js/script.js"></script>
    <script src="../libs/js/onload.js"></script>
</body>
</html>