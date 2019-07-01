<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>

    <link href="{{ asset('asset/frontend/css/main.css') }}" rel="stylesheet">


    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container emp-profile">
    <div class="row">
        <div class="col-md-3">
            <div class="profile-img">
                <img src="{{asset('asset/frontend/image/avatar.png')}}" alt=""/>
            </div>
        </div>

        <div class="col-md-6">
            <div class="profile-head">
                <h5>
                    {{$user->fname.' '.$user->lname}}
                </h5>
                <h6>
                    {{$user->email}}
                </h6>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true"> {{$user->fname}}'s Profile Information</a>
                    </li>
                </ul>

            </div>
        </div>

        <div class="col-md-3">
            <a href="{{route('change.password')}}" class="btn btn-link" role="button">Change Your Password</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="profile-work">
                <hr>

                <ul class="nav">
                    <li class="nav-item ">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="material-icons"></i>
                            Logout
                        </a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                            @csrf
                        </form>
                    </li>
                </ul>

            </div>
        </div>
        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->fname}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Last Name :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->lname}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->email}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Phone :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->phone}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Address :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->address}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Date Of Birth :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->bdate}}</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Age :</label>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->age}} Years</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>
