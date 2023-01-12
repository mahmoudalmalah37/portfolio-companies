<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('Plan.Portfolio')}}</h2>
                <ol>
                    <li><a href="{{'/'}}">{{ __('Plan.Home')}}</a></li>
                    <li>{{ __('Plan.Portfolio')}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">{{ __('Plan.All')}}</li>
                        @foreach($categories as $categorie)
                        <li data-filter=".filter-{{$categorie->id}}">{{$categorie->name}}</li>
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

</main><!-- End #main -->
