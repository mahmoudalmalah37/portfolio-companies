<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('Deta.Portfolio Details')}}</h2>
                <ol>
                    <li><a href="{{'/'}}">{{ __('Deta.Home')}}</a></li>
                    <li>{{$portfolios->name}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="{{asset('storage/portfolio/')}}/{{$portfolios->image}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('storage/portfolio/')}}/{{$portfolios->images}}" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>{{ __('Deta.Project information')}}</h3>
                        <ul>
                            <li><strong>{{ __('Deta.Client')}}</strong>: {{$portfolios->Client}}</li>
                            <li><strong>{{ __('Deta.Project date')}}</strong>: {{$portfolios->created_at}}</li>
                            <li><strong>{{ __('Deta.Project URL')}}</strong>: <a href="{{$portfolios->ProjectURL}}">{{$portfolios->ProjectURL}}</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{$portfolios->name}}</h2>
                        <p>{{$portfolios->description}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
