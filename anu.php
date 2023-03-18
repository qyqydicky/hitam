<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow bg-warning ">
            <div class="container">
            <a class="navbar-brand" href="#"><span>sini lo</span> maju lo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <div class="input-group mx-auto mt-3 mt-lg-0  ">
                    <input type="text" class="form-control" placeholder="AWOKAWOK LAGI APA?" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class='bx bx-terminal'></i></button>
                </div>


                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-accessibility'></i></a>
                </li>

                <div class="dropdown d-lg-none ">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">UMA</a></li>
                    <li><a class="dropdown-item" href="#">BESELR</a></li>
                    <li><a class="dropdown-item" href="#">KATAGORI</a></li>
                    <li><a class="dropdown-item" href="#">KOMU</a></li>
                    <li><a class="dropdown-item" href="#">BLOK</a></li>
                    </ul>
                </div>
                <!-- dah -->
                <li class="nav-item me-5 ">
                    <a class="nav-link" href="#"><i class='bx bx-male'></i><span class="badge rounded-pill bg-secondary POSITION-ABSOULUTE">1</span></a>
                </li>
                <li class="nav-item mt-5 mt-lg-0">
                    <a class="nav-link btn-secon text-center" href="#">login</a>
                </li>
                <li class="nav-item mt-3 mt-lg-0">
                    <a class="nav-link btn-first text-center" href="#">regist</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>

     
        
        
    <div class="jumbotron">
        
        <video width="320" height="240" controls>
            <source src="fle.mp4" type="video/mp4">
        </video>

    </div>

    
    
    
    
        <a href="logout.php">logout</a>
        <script src="./aset/js/bootstrap.bundle.min.js"></script>
</body>
</html>