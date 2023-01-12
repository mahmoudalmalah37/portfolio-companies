<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('Test.Testimonials')}}</h2>
                <ol>
                    <li><a href="{{'/'}}">{{ __('Test.Home')}}</a></li>
                    <li>{{ __('Test.Testimonials')}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
@if(count($Testimonials) > 0)
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="row">
                @foreach($Testimonials as $Testimonial)
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="testimonial-item">
                        <img src="{{ asset('storage/testimonials/')}}/{{$Testimonial->image}}" class="testimonial-img" alt="{{$Testimonial->name}}">
                        <h3>{{$Testimonial->name}}</h3>
                        <h4>{{$Testimonial->job}}</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$Testimonial->description}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Testimonials Section -->
@endif

</main><!-- End #main -->
