@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Digital')
@section('description',
    'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechdigital.co.uk')

@section('content')


    <!-- Intro Section -->
    <div class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-title">Portfolio</h1>
                    <!-- <h2 class="page-title">SEO Pricing for Restaurant & Local Business</h2> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Section -->
    <!-- Contact Section -->
    <section class="pt-50">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center pb-50">
                    <h1 class="contact-text-heading">General Enquiry</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 contact pb-50">
                    <div class="row text-center">
                        <div class="col-sm-4 col-sm-offset-2 pb-xs-30"> <i class="ion-ios-email icon-circle pos-s"></i>
                            <p class="mt-15">info@gtechdigital.co.uk</p>
                        </div>
                        <div class="col-sm-4 pb-xs-30"> <i class="ion-android-call icon-circle pos-s"></i>
                            <a href="tel:03303801000" class="mt-15 i-block">0330 380 1000</a> / <a href="tel:02035985956"
                                class="mt-15 i-block">0203 598 5956</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center pb-50">
                    <!-- Display success message -->
                    @if (session('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>



        <div class="container contact-form pt-xs-60 mt-up">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <form action="{{ route('send-mail') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- IF MAIL SENT SUCCESSFULLY -->
                        <div id="success">
                            <div role="alert" class="alert alert-success"> <strong>Thanks</strong>Your message has been
                                sent. </div>
                        </div>
                        <!-- END IF MAIL SENT SUCCESSFULLY -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="name" type="text" name="name"
                                        placeholder="Your Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="email" type="text" name="email"
                                        placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-field">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        maxlength="14" type="text" value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-field">
                                    <textarea class="form-full contect-height" id="message" rows="7" name="message" placeholder="Your Message"
                                        value="{{ old('message') }}"></textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-field">
                                    <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                    @endif
                                </div>
                            </div>


                            {{-- <div class="col-md-6">
                                <div class="form-field">
                                    <div class="capcha">
                                        <div id="err-captch" style="display: none; color: red;">Please complete the security
                                            check.</div>
                                        <div class="g-recaptcha" data-sitekey="6LeozRgaAAAAAP_CFSGlh_oHcXOdLpSt0IOmE_RZ">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-sm-6">
                                <button class="btn-text" id="btnContactSubmit"> Send Message </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Contact FORM -->
                </div>
            </div>
        </div>
    </section>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Check if the success alert exists
            var successAlert = document.getElementById('success-alert');
            if (successAlert) {
                // Set a timeout to remove the alert after 2 seconds
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 2000);
            }
        });
    </script>


@endsection
