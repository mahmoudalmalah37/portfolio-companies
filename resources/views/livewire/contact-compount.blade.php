<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('Contact.Contact')}}</h2>
                <ol>
                    <li><a href="{{'/'}}">{{ __('Contact.Home')}}</a></li>
                    <li>{{ __('Contact.Contact')}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="row justify-content-center" >

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>{{ __('Contact.Location')}}:</h4>
                                <p>{{ __('Contact.16 Company Street')}}<br>{{ __('Contact.EGYPT, DESOK')}}</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>{{ __('Contact.Email')}}:</h4>
                                <p>malmalah04@gmail.com<br>contact@example.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>{{ __('Contact.Call')}}:</h4>
                                <p>+20 102 647 5912<br>+1 5589 22475 14</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center" >
                <div class="col-lg-10">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @elseif (session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form role="form" class="php-email-form" wire:submit.prevent="sendMessage">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('Contact.Your Name')}}" wire:model="name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input  class="form-control" name="email" id="email" placeholder="{{ __('Contact.Your Email OR Phone')}}" wire:model="email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('Contact.Subject')}}" wire:model="subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="{{ __('Contact.Message')}}" wire:model="message" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">{{ __('Contact.Send Message')}}</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
