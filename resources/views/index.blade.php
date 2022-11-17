@extends('layout')

@section('title')
    Home
@endsection

@section('content')

<header id="Header">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
            <div class="container-fluid">
                <div class="first-content w-50">
                    <a class="navbar-brand" href="#">Travelling</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="second-content collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="#packages">Packages</a></li>
                        <li class="active"><a href="#hotels">Hotels</a></li>
                        <li><a href="#blogs">Blogs</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="{{url('/admin')}}">Admin <ion-icon name="person-outline"></ion-icon></a></li>
                    </ul>
                    <div class="links">
                        <span class="icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                  </div>
                </div>
            </div>
        </nav>
        
        <section class="bground max-cont">
           
        </section>
        <footer class="dom">
            <p class="pppo"><ion-icon name="earth-outline"></ion-icon> TOUR PACKAGES</p>
        </footer>
    </header>

    <!--second section content-->
    <section id="packages">
       
        <div class="row no-gutters">
        @foreach($cat as $c)
            <div class="one col-12 col-md-4">
                <div class="innerone">
                <img src="{{asset('storage/'.$c->img)}}">
                    <div class="caption">
                        <h3>{{$c->title}}</h3>
                        <p>{{$c->smallDesc}}</p>
                        <div><a href="#">More Details</a></div>
                    </div>
                </div>
            </div>
         @endforeach
        </div>
       
    </section>

    <section id="hotels">
            <div class="testingone">
                <div class="container">
                    <div class="d-flex forIcon">
                        <ion-icon name="home-outline"></ion-icon><h3>Hotels</h3>
                    </div>
                    <div class="row upTesting">
                        @foreach($hotels as $hot)
                        <div class="col-md-3">
                            <div class="boxx">
                                <img class="w-100" src="{{asset('storage/'.$hot->img)}}">
                                <h4>{{$hot->name}}</h4>
                                <span>{{$hot->description}}</span>
                                <div class="rounded-circle forPosition">{{$hot->price}}$</div>
                                <div>
                                    @for($i = 0; $i <$hot->review; $i++ )
                                        <ion-icon name="star-outline"></ion-icon>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        <section id="blogs">
            <div class="blog">
                <div class="container">
                    <div class="d-flexx forIconn">
                        <ion-icon name="reader-outline"></ion-icon><h3>OUR BLOG</h3>
                    </div>
                    <div class="row downTesting">
                        @foreach($blogs as $blog)
                        <div class="col-md-4">
                            <div class="box">
                                <img class="w-100" src="{{asset('storage/'.$blog->img)}}">
                                <span>{{$blog->date}}</span>
                                <p>{{$blog->smallDescription}} <a href="#">ReadMore</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>

        <section>
            <div class="end">
                <h5>travelling</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab consequatur incidunt necessitatibus distinctio laudantium nemo earum error omnis, sit saepe. Quasi, beatae. In sit at, reiciendis doloremque veniam ipsam officia.</p>
                <ion-icon name="logo-facebook"></ion-icon><ion-icon name="logo-twitter"></ion-icon><ion-icon name="logo-google"></ion-icon>
            </div>
        </section>

@endsection