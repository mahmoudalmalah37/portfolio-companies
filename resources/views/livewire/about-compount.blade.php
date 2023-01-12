<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('About.About')}}</h2>
                <ol>
                    <li><a href="{{'/'}}">{{ __('About.Home')}}</a></li>
                    <li>{{ __('About.About')}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container">

            <div class="row no-gutters">
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
                <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
                    <div class="content d-flex flex-column justify-content-center">
                        <h3 data-aos="fade-up">{{ __('About.KeyStone Company')}}</h3>
                        <p data-aos="fade-up">
                            {{ __('About.We are a team of 5 people in various fields. Our goal is to advance technological development and help others keep pace with this change.')}}
                        </p>
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="bx bx-sitemap"></i>
                                <h4>{{ __('About.Web Development')}}</h4>
                                <p>{{ __('About.We create websites with a guarantee of quality and upload them to the best hosting companies.')}}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-mobile-alt"></i>
                                <h4>{{ __('About.Mobile Development')}}</h4>
                                <p>{{ __('About.We also create applications for the Android and iOS systems, with quality assurance
                                    and upgrading')}}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4>{{ __('About.UI/UX Design')}}</h4>
                                <p>{{ __('About.We also have a professional design team to help you find the best design for your website or application.')}}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-server"></i>
                                <h4>{{ __('About.BackEnd Development')}}</h4>
                                <p>{{ __('About.We also do back-end systems only if there is a complete design for the front-end.')}}</p>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->
    @if(count($teams) > 0)
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>{{ __('About.Our')}} <strong>{{ __('About.Team')}}</strong></h2>
                    <p>{{ __('About.MI want you to meet our success team that has brought us to this point.')}}</p>
                </div>
                <div class="row">
                    @foreach($teams as $team)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{ asset('storage/team/')}}/{{$team->image}}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href="{{$team->facebook_link ?? '/about'}}"><i class="bi bi-twitter"></i></a>
                                        <a href="{{$team->facebook_link ?? '/about'}}"><i class="bi bi-facebook"></i></a>
                                        <a href="{{$team->instagram_link ??'/about'}}"><i class="bi bi-instagram"></i></a>
                                        <a href="{{$team->linkedin_link ?? '/about'}}"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{$team->name}}</h4>
                                    <span>{{$team->job}}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Our Team Section -->
    @endif

    <!-- ======= Our Skills Section ======= -->
    <section id="skills" class="skills" >
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>{{ __('About.Our')}} <strong>{{ __('About.Skills')}}</strong></h2>
                <p>{{ __('About.These are some of the skills that our team possesses, and remember that we do not depend on this only, but we always strive for progress and development.')}}</p>
            </div>

            <div class="row skills-content" dir="ltr">

                <div class="col-lg-6" data-aos="fade-up">

                    <div class="progress">
                        <span class="skill">HTML <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">CSS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">JavaScript <i class="val">75%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Flutter <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Laravel <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                    <div class="progress">
                        <span class="skill">PHP <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill">Photoshop <i class="val">80%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                <div class="progress">
                        <span class="skill">Dart <i class="val">100%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section><!-- End Our Skills Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>{{ __('About.Our')}} <strong>{{ __('About.Clients')}}</strong></h2>
                <p>{{ __('About.These are some of our distinguished clients whose companies have become successful thanks to our services')}}</p>
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
