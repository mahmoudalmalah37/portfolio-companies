<!-- ======= Hero Section ======= -->
@if(count($sliders) > 0)
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                @foreach($sliders as $slider)
                    @if($loop->first)
                        <div class="carousel-item active" style="background-image: url({{ asset('storage/slide/'.$slider->image) }})">
                            <div class="carousel-container">
                                <div class="container">
                                    <h2 class="animate__animated animate__fadeInDown">{{ $slider->title }}</h2>
                                    <p class="animate__animated animate__fadeInUp">{{ $slider->subtitle }}</p>
                                    <a href="{{ $slider->link }}" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="color: #2c3034">{{ __('Body.Get Started')}}</a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item active" style="background-image: url({{ asset('storage/slide/')}}/{{$slider->image}})">
                            <div class="carousel-container">
                                <div class="carousel-content animate__animated animate__fadeInUp">
                                    <h2>{{$slider->title}}</h2>
                                    <p>{{$slider->subtitle}}</p>
                                    <div class="text-center"><a href="{{$slider->link}}" class="btn-get-started">{{ __('Body.Read More')}}</a></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @if(count($sliders) > 1)
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                </a>
            @endif
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        </div>
    </section><!-- End Hero -->
@endif

<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                    <h3>{{ __('Body.We\'ve created more than')}}<span>{{ __('Body.5 App & websites')}}</span> {{ __('Body.this year!')}}</h3>
                    <p>{{ __('Body.This success is due to the quality of the services that we provide thanks to our professional team, and we offer the lowest possible price with the best quality in the shortest time.')}}</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="{{'/contact'}}">{{ __('Body.Connect Us')}}</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">{{ __('Body.Team Work')}}</a></h4>
                        <p class="description">{{ __('Body.We have the best team that is capable of what it does with more than 3 years of experience')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">{{ __('Body.Accomplish Tasks')}}</a></h4>
                        <p class="description">{{ __('Body.One of the advantages we offer is the implementation of orders in the fullest way, with advice')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">{{ __('Body.SEO')}}</a></h4>
                        <p class="description">{{ __('Body.We also provide easy access and dealing for users and companies and the best SEO methods')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">{{ __('Body.Problem Solving')}}</a></h4>
                        <p class="description">{{ __('Body.Continuous search for errors while ensuring that there is no error that the customer may encounter')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bi bi-brightness-high"></i></div>
                        <h4 class="title"><a href="">{{ __('Body.Support Team')}}</a></h4>
                        <p class="description">{{ __('Body.We also provide a service throughout the day to solve the problem')}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                        <h4 class="title"><a href="">{{ __('Body.Order Required')}}</a></h4>
                        <p class="description">{{ __('Body.Delivery required on time without delay')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Services Section -->
    @if(count($categories) > 0)
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li class="filter-active">{{ __('Body.All')}}</li>
                            @foreach($categories as $category)
                                <li data-filter=".filter-{{$category->id}}" class="filter">{{$category->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    @foreach($protfolios as $protfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{$protfolio->category_id}}">
                            <img src="{{ asset('storage/portfolio/')}}/{{$protfolio->image}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$protfolio->name}}</h4>
                                <p>{{$protfolio->description}}</p>
                                <a href="{{ asset('storage/portfolio/')}}/{{$protfolio->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$protfolio->name}}"><i class="bx bx-plus"></i></a>
                                <a href="{{route('profile.details',['slug'=>$protfolio->slug])}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->
    @endif
    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>{{ __('Body.Our')}} <strong>{{ __('Body.Clients')}}</strong></h2>
                <p>{{ __('Body.These are some of our distinguished clients whose companies have become successful thanks to our services')}}</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="client-logo">
                        <img src="{{ asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Our Clients Section -->

</main><!-- End #main -->
