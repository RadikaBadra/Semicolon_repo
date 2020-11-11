<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Another Library -->
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <!-- Fontawesome Kit -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">

    <title>Semicolon-Login</title>
  </head>
  <body>
    <div class="profile-container">
    <nav class="w-100 navbar navbar-expand-lg bg-light navbar-light ">
            <a class="navbar-brand" href="/">COMEDIA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link fas fa-home mr-3 "></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fas fa-search mr-3"></a>
                    </li>
                    <li class="nav-item">
                        <a href ="/profile" class="nav-link fas fa-user mr-3"></a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="section-account">
            <span class="name">JINSAKAI</span>
            <a href="#"><i class="fas fa-cog"></i></a>
        </section>
        <main class="section-main">
            <div class="profile-section">
                <span class="logo"><i class="fas fa-user-circle"></i></span>
                <div class="account-desc">
                    <div class="count-desc">
                        <span class="post">0</span>
                        <span class="followers">0</span>
                        <span class="following">0</span>
                    </div>
                    <div class="label-desc">
                        <span class="post">POST</span>
                        <span class="followers">FOLLOWERS</span>
                        <span class="following">FOLLOWING </span>
                    </div>
                </div>
                <div class="account-bio">
                    <span class="main-bio">JINSAKAI</span>
                    <span class="second-bio">bio</span>
                </div>
            </div>
            <a href="#" class="btn btn-outline-secondary">Edit Profile</a>
            <div class="post-section">
                <div class="logo"><i class="fas fa-image"></i></div>
                <span class="desc">You have not post anything</span>
            </div>
        </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>