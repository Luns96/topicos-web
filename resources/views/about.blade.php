@extends('layouts.app')

@section('content')

<header class="mastheadClass">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
            <h1 class="text-uppercase text-white font-weight-bold">Learn Chinese easy and fast.</h1>
            <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
            <p class="text-white-75 font-weight-light mb-5 ColorMastheadClass">Your can learn chinese!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="">Find more to click here</a>
        </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section class=" text-black mb-0">
    <div class="container">
        <h2 class="text-center text-uppercase text-center mt-1">About</h2>
        <hr class="mb-5">
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur quis elit. Perspiciatis commodi porro, cumque provident rem corporis odit, ut quas dolores</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
            </div>
        </div>
    </div>
</section>

<section class=" bg-about">
    <div class="container">
        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-lg-0">
        <div class="col-lg-6">
            <img class="img-fluid" src="img/about/1.jpg" alt="">
        </div>
        <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                <h1 class="text-white padding-img">Mision</h1>
                <p class="mb-0 text-white-50 padding-img">An example of where you can put an image of a project, or anything else, along with a description.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
            <img class="img-fluid" src="img/about/2.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                <h1 class="text-white padding-img">Vision</h1>
                <p class="mb-0 text-white-50 padding-img">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection