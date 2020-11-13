<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Fontawesome Kit -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <title>Comedia - Main</title>
    

    <link rel="stylesheet" href="css/main.css">
    <link rel="icon" href="https://raw.githubusercontent.com/RadikaBadra/Semicolon_repo/master/prototype/co%20media.png">
    
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="w-100 navbar navbar-expand-lg bg-light navbar-light ">
            <a class="navbar-brand" href="/">COMEDIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link fas fa-home mr-3 "></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fas fa-search mr-3"></a>
                    </li>
                    <li class="nav-item">
                        <a href ="/user-profile" class="nav-link fas fa-user mr-3"></a>
                    </li>
                    <li class="nav-item">
                        <a class="" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                             <i class="nav-link fas fa-sign-out-alt mr-3"></i>
                        </a>
            
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            
        </div>


        <div class="container mt-3">
            <h1 class =" font-weight-bold mt-5 name" style="font-size:50px">Hello {{ auth()->user()->username }}</h1>
            <p style="margin-bottom:40px">HERE RECOMMENDED POST FOR YOU <p>
            <div class="card post mt-3">
                <i class="far fa-bookmark fas fa-lg ml-auto px-3 mr-2 mt-4 mb-1"></i>
                <div class="card-body">
                    <div class="container-photo float-left">
                        <img src="https://meshle.com/content/uploads/2019/04/GamingLP2.jpg" alt="" width="100%" height="100%" >
                    </div>
                    <div class="container-desc float-right">
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat ullam delectus eaque nisi! Earum, hic amet, necessitatibus sunt optio tempora, quidem veritatis nostrum impedit commodi veniam? Laborum deserunt repudiandae incidunt?</p>
                    </div>
                </div>
                <div class="container d-flex">
                <!-- <div><img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="10%" height="30%"></div> -->
                    <div class="left-area mr-auto d-inline-flex flex-row">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle mt-1 mr-1 " alt="" width="10%" height="80%">
                        <div class="caption d-">
                            <h5>semicolon</h5>
                            <p class="text-muted">3 days ago</p>
                            <h6>Selamat Ulang Tahun Untuk Radika</h6>
                        </div>
                    </div>
                    <div class="right-area ml-auto d-flex">
                        <i class="fas fa-comment-alt fas fa-lg mr-5"></i>
                        <i class="fas fa-heart fas fa-lg mr-5"></i>
                        <i class="fas fa-share-alt fas fa-lg mr-5"></i>
                    </div>
                </div>
                
            </div>
            <div class="container text-center d-inline-flex flex-row justify-content-between ">
                <div class="card mt-4"style="width: 10rem;">
                    <div class="card-body">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="80%" height="35%">
                        <p class="text-center mt-3">Ronaldo</p>
                        <p class="text-center">UserRonaldo</p>
                        <button type="button" class="btn btn-sm px-3 btn-primary ">Follow</button>
                    </div>
                </div>
                <div class="card mt-4"style="width: 10rem;">
                    <div class="card-body">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="80%" height="35%">
                        <p class="text-center mt-3">Ronaldo</p>
                        <p class="text-center">UserRonaldo</p>
                        <button type="button" class="btn btn-sm px-3 btn-primary ">Follow</button>
                    </div>
                </div>
                <div class="card mt-4"style="width: 10rem;">
                    <div class="card-body">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="80%" height="35%">
                        <p class="text-center mt-3">Ronaldo</p>
                        <p class="text-center">UserRonaldo</p>
                        <button type="button" class="btn btn-sm px-3 btn-primary ">Follow</button>
                    </div>
                </div>
                <div class="card mt-4"style="width: 10rem;">
                    <div class="card-body">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="80%" height="35%">
                        <p class="text-center mt-3">Ronaldo</p>
                        <p class="text-center">UserRonaldo</p>
                        <button type="button" class="btn btn-sm px-3 btn-primary ">Follow</button>
                    </div>
                </div>
                <div class="card mt-4"style="width: 10rem;">
                    <div class="card-body">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="80%" height="35%">
                        <p class="text-center mt-3">Ronaldo</p>
                        <p class="text-center">UserRonaldo</p>
                        <button type="button" class="btn btn-sm px-3 btn-primary">Follow</button>
                    </div>
                </div>
            </div>

            <div class="card post mt-3">
                <i class="far fa-bookmark fas fa-lg ml-auto px-3 mr-2 mt-4 mb-1"></i>
                <div class="card-body">
                    <div class="container-photo float-left">
                        <img src="https://meshle.com/content/uploads/2019/04/GamingLP2.jpg" alt="" width="100%" height="100%" >
                    </div>
                    <div class="container-desc float-right">
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat ullam delectus eaque nisi! Earum, hic amet, necessitatibus sunt optio tempora, quidem veritatis nostrum impedit commodi veniam? Laborum deserunt repudiandae incidunt?</p>
                    </div>
                </div>
                <div class="container d-flex">
                <!-- <div><img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="10%" height="30%"></div> -->
                    <div class="left-area mr-auto d-inline-flex flex-row">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle mt-1 mr-1 " alt="" width="10%" height="80%">
                        <div class="caption d-">
                            <h5>semicolon</h5>
                            <p class="text-muted">3 days ago</p>
                            <h6>Selamat Ulang Tahun Untuk Radika</h6>
                        </div>
                    </div>
                    <div class="right-area ml-auto d-flex">
                        <i class="fas fa-comment-alt fas fa-lg mr-5"></i>
                        <i class="fas fa-heart fas fa-lg mr-5"></i>
                        <i class="fas fa-share-alt fas fa-lg mr-5"></i>
                    </div>
                </div>
            </div>

<div class="card post mt-3">
                <i class="far fa-bookmark fas fa-lg ml-auto px-3 mr-2 mt-4 mb-1"></i>
                <div class="card-body">
                    <div class="container-photo float-left">
                        <img src="https://meshle.com/content/uploads/2019/04/GamingLP2.jpg" alt="" width="100%" height="100%" >
                    </div>
                    <div class="container-desc float-right">
                        <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat ullam delectus eaque nisi! Earum, hic amet, necessitatibus sunt optio tempora, quidem veritatis nostrum impedit commodi veniam? Laborum deserunt repudiandae incidunt?</p>
                    </div>
                </div>
                <div class="container d-flex">
                <!-- <div><img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle " alt="" width="10%" height="30%"></div> -->
                    <div class="left-area mr-auto d-inline-flex flex-row">
                        <img src="https://devtalk.blender.org/uploads/default/original/2X/c/cbd0b1a6345a44b58dda0f6a355eb39ce4e8a56a.png" class=" text-center rounded-circle mt-1 mr-1 " alt="" width="10%" height="80%">
                        <div class="caption d-">
                            <h5>semicolon</h5>
                            <p class="text-muted">3 days ago</p>
                            <h6>Selamat Ulang Tahun Untuk Radika</h6>
                        </div>
                    </div>
                    <div class="right-area ml-auto d-flex">
                        <i class="fas fa-comment-alt fas fa-lg mr-5"></i>
                        <i class="fas fa-heart fas fa-lg mr-5"></i>
                        <i class="fas fa-share-alt fas fa-lg mr-5"></i>
                    </div>
                </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>