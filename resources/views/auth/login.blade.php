<!doctype html>
<html lang="en">
  <head>
      <link rel="stylesheet" href="css/login.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Another Library -->
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>

@import '~pretty-checkbox/src/pretty-checkbox.scss';

* {
    margin: 0;
    padding: 0;
    font-family: 'Verdana', sans-serif;
}

body {
    background-color: #fff;
    font-size: 14px;
}

.form-control:focus {
   box-shadow: none;
}

.text-small {
   font-size: 12px;
   line-height:20px;
   
}

.card {
   
   background-color: #fff;
   border-radius: 3px;
   border: none;
   width : 150%;
}

.card .card-header {
   
   border-bottom-color: #f9f9f9;
   line-height: 30px;
   align-self: center;
   width: 100%;
   min-height: 70px;
   padding: 15px 25px;
   display: flex;
   align-items: center;
   background-color: transparent;
   
}

.card.card-primary {
   margin-top: 20%;

}

.register {
   margin-bottom: 50px;
}

.form-control {
   border: 1px solid #0080ff;
   height: 2.7rem;
}

.form-control {
   border-radius: 10px;
}

.input-group-text, select.form-control:not([size]):not([multiple]), .form-control:not(.form-control-sm):not(.form-control-lg) {
   font-size: 12px;
}


.login-btn {
   font-size: 14px;
}

.custom-control-label {
   line-height: 26px;
   
}
.h3 {
   letter-spacing: 1px;
}
/* .side {
   width :66%;
   color : white;
   height : 100vh;
}
.side h1{
   margin-top: 20%;
   margin-left: 38%;
} */









    </style>

    <title>Semicolon-Login</title>
  </head>
  <body>
  <div class="d-flex">
    <div class="side">
    <h6 class = "mt-2 ml-2 font-weight-bold">COMEDIA</h6>
    <h1 class = "font-weight-bold">WELCOME</h1>
    <center><p class="text-justify mt-4">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p><center>
    </div>
    <div class="p-2">
    <div class="container">
        <div class="row ">
            <div class=" offset-md-1 ml-5 mt-5 ">
                <div class="card card-primary ">
                    <div class="card-header font-weight-bold">
                    <span class="mx-auto h3 mb-n3 font-weight-bold">LOGIN</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" class="needs-validation" method="post" novalidate >
                        @csrf
                            <div class="form-group">
                                
                                <input id="username" type="text" placeholder="Nama Pengguna, No HP , Email" class="form-control mt-1 @error('namaLengkap') is-invalid @enderror" name="username" required autofocus autocomplete="off">
                                
                            </div>
                            <div class="form-group">

                                <input type="password" placeholder="Kata Sandi" name="password" id="password" class="form-control mt-1 @error('namaLengkap') is-invalid @enderror" required>
                            </div>
                            
                            <div class="form-group mt-5">
                                <button type="submit" class="login-btn btn btn-outline-primary btn-lg btn-block">Login</button>
                            </div>
                            
                            <div class="mt-5 text-center">
                              @if (Route::has('password.request'))
                                 <a class="btn btn-link text-dark"  href="{{ route('password.request') }}">
                                    {{ __('Forgot Password ?') }}
                                 </a>
                              @endif
                            
                          </div>
                        </form>

                    </div>
                </div>
                <div class="card card-primary p-2  mt-4 register text-muted text-center">
                   <p class="mb-n1 p-2"> Belum Punya Akun ? <a href="/register" >Daftar</a></p>
                </div>
            </div>
        </div>
    </div>

    </div>
    

    </div>
    




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>