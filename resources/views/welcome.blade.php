@extends('layouts.app')

@section('content')

{{-- carousel --}}
<section class="carouselControls">
    <div id="carouselCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselCaptions" data-slide-to="1"></li>
        <li data-target="#carouselCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/carousel/carousel1.jpg" class="d-block w-100 carousel-captionbody">
            <div class="carousel-captionW d-none d-md-block">
                <h1>First slide label</h1>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel/carousel2.jpg" class="d-block w-100 carousel-captionbody">
            <div class="carousel-captionW d-none d-md-block">
                <h1>Second slide label</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/carousel/carousel3.jpg" class="d-block w-100 carousel-captionbody">
            <div class="carousel-captionW d-none d-md-block">
                <h1>Third slide label</h1>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</section>
{{-- end carousel --}}

<section class="ftco-services ftco-no-pb">
    <div class="container-wrap">
      <div class="row no-gutters">
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 bg-primary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="fas fa-chalkboard-teacher"></span>
            </div>
            <div class="media-body p-2 mt-3 padding-img">
              <h3 class="heading">Certified Teachers</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 bg-tertiary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="fas fa-graduation-cap"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Special Education</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>    
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 bg-fifth">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="fas fa-book"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Book &amp; Library</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 bg-quarternary">
          <div class="media block-6 d-block text-center">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="fas fa-user-graduate"></span>
            </div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Certification</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>

<section style="background-image: url(img/parallax/1.jpg);" class="parallax" data-stellar-background-ratio="0.5">
    <div class="container">
            <div class="accordion" id="accordionExample">
                    <div class="card bg-red">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            China
                          </button>
                            <img align='right' src="img/gif/1.gif" height="40" width="40">
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="embed-responsive embed-responsive-21by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/u1WifuLb52g" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-auto text-center showcase-text">
                                    <h2>Historia de china</h2>
                                    <hr class="divider my-4 divider-color">
                                    <p class="lead mb-0 padding-img" >Se basa en la historia de china</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card bg-yellow">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                El primer emperador
                            </button>
                            <img align='right' src="img/gif/2.gif" height="40" width="40">
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="embed-responsive embed-responsive-21by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ne_MT1vgTM0" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-auto text-center showcase-text">
                                    <h2>Emperador de china</h2>
                                    <hr class="divider my-4 divider-color">
                                    <p class="lead mb-0 padding-img" >El primer empreador de china</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Dinastia
                            </button>
                            <img align='right' src="img/gif/3.gif" height="40" width="40">
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row no-gutters">
                                <div class="col-lg-6">
                                    <div class="embed-responsive embed-responsive-21by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cVkTMXrv57Q" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6 my-auto text-center showcase-text">
                                    <h2>Dinastia de china</h2>
                                    <hr class="divider my-4 divider-color">
                                    <p class="lead mb-0 padding-img" >Toda la dinastia de china</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
    </div>
</section>

<section id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box">
            <img class="img-fluid" src="img/portafolio/1.jpg" alt="">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                Category
                </div>
                <div class="project-name">
                Learn
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box">
            <img class="img-fluid" src="img/portafolio/2.jpg" alt="">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                Category
                </div>
                <div class="project-name">
                Play
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box">
            <img class="img-fluid" src="img/portafolio/3.jpg" alt="">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                Category
                </div>
                <div class="project-name">
                Practice
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box">
            <img class="img-fluid" src="img/portafolio/4.jpg" alt="">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                Category
                </div>
                <div class="project-name">
                Read
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box">
            <img class="img-fluid" src="img/portafolio/5.jpg" alt="">
            <div class="portfolio-box-caption">
                <div class="project-category text-white-50">
                Category
                </div>
                <div class="project-name">
                Class
                </div>
            </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box">
            <img class="img-fluid" src="img/portafolio/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
                <div class="project-category text-white-50">
                Category
                </div>
                <div class="project-name">
                Student
                </div>
            </div>
            </a>
        </div>
        </div>
    </div>
</section>

<section style="background-image: url(img/parallax/2.jpg);" class="parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="mb-5">
                    <h2 class="mb-4 text-white">Request your information</h2>
                    <p class="text-white">Send your email and all time give a notification every day the best item to buy.</p>
                </div>
            <form>
                <div class="row">
                    <div class="form-group col-6">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group col-6">
                        <input type="text" name="surname" class="form-control" placeholder="Surname">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-5">
                        <input type="text" name="nemail" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-2">
                        <div class="input-group-text">@</div>
                    </div>
                    <div class="form-group col-5">
                        <select name="email" class="custom-select form-control">
                            <option value="">gmail.com</option>
                            <option value="">hotmail.com</option>
                            <option value="">yahoo.com</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <input type="text" name="cp" class="form-control" placeholder="Cellphone">
                    </div>
                </div>
                    <button class="btn btn-secondary" type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-4">
            <a class="list-group-item"><h2>Club chino</h2></a>
            <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-historia-list" data-toggle="list" href="#list-historia" role="tab" aria-controls="historia">Historia</a>
                <a class="list-group-item list-group-item-action" id="list-fundadores-list" data-toggle="list" href="#list-fundadores" role="tab" aria-controls="fundadores">Fundadores</a>
                <a class="list-group-item list-group-item-action" id="list-maestro-list" data-toggle="list" href="#list-maestro" role="tab" aria-controls="maestro">Maestros</a>
                <a class="list-group-item list-group-item-action" id="list-about-list" data-toggle="list" href="#list-about" role="tab" aria-controls="about">Ensenanza</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-historia" role="tabpanel" aria-labelledby="list-historia-list">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <img class="img-fluid img-club-chino" src="img/clubchina/1.jpg">
                        </div>
                        <div class="col-lg-6 my-auto text-center showcase-text">
                            <div class="row">
                                <h2>Historia de club chino</h2>
                            </div>
                            <hr class="divider my-4 divider-color">
                            <p class="lead mb-0 padding-img" >El club chino de valencia </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-fundadores" role="tabpanel" aria-labelledby="list-fundadores-list">
                    <div class="row no-gutters">
                        <div class="col-lg-6 order-lg-2">
                            <img class="img-fluid img-club-chino" src="img/clubchina/2.jpg">
                        </div>
                        <div class="col-lg-6 order-lg-1 my-auto text-center showcase-text">
                            <h2>Fundadores de club chino</h2>
                            <hr class="divider my-4 divider-color">
                            <p class="lead mb-0 padding-img" >Fundadores de club chino valencia</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-maestro" role="tabpanel" aria-labelledby="list-maestro-list">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <img class="img-fluid img-club-chino" src="img/clubchina/3.jpg">
                        </div>
                        <div class="col-lg-6 my-auto text-center showcase-text">
                            <h2>Profesores</h2>
                            <hr class="divider my-4 divider-color">
                            <p class="lead mb-0 padding-img" >Profesores de club chino valencia</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="list-about" role="tabpanel" aria-labelledby="list-about-list">
                    <div class="row no-gutters">
                        <div class="col-lg-6 order-lg-2">
                            <img class="img-fluid img-club-chino" src="img/clubchina/4.jpg">
                        </div>
                        <div class="col-lg-6 order-lg-1 my-auto text-center showcase-text">
                            <h2>Estudiantes</h2>
                            <hr class="divider my-4 divider-color">
                            <p class="lead mb-0 padding-img" >Estudiantes de club chino valencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
