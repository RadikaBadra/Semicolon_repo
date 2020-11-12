@extends('layouts.navbar')
@section('content')
<!DOCTYPE html>
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

    <!-- Fontawesome Kit -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
    integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/explore.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">

    <title>Semicolon-Explore</title>
</head>
<body>
    <div class="wrapper">
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="navbar">
                        <div class="col-6">
                            <div class="search">
                                <nav class="navbar navbar-light bg-light">
                                    <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                    </form>
                                </nav>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="user">
                                <h6>For you</h6>
                                <h1>JIN SAKAI</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-4">
                    <div class="kiri">
                        <div class="col-12">
                            <div class="atas">
                                
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="content">
    
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="content">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="tengah"></div>
                </div>
                <div class="col-4">
                    <div class="kanan"></div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
@endsection