@extends('frontend.include.layout')

@section('title', 'Contact Us | GTech Solution')
@section('description', 'Contact GTech for your upcoming project via phone, email or filling up the contact form. Phone-
    0203 598 5956, 0330 380 1000, Email - info@gtechsolution.co.uk')

@section('content')


    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <p class="services-head"><span>Contact Us</span></p>
            </div>
        </div>
    </section>
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

        <div class="container contact-form pt-xs-60 mt-up">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <form id="contctForm" action="email/send_email.php" method="post">
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
                                        placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <input class="input-sm form-full" id="email" type="text" name="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-field">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone"
                                        maxlength="14" type="text" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-field">
                                    <textarea class="form-full contect-height" id="message" rows="7" name="message" placeholder="Your Message"
                                        required></textarea>
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
                                <button class="btn-text" id="btnContactSubmit" name="button"> Send Message </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Contact FORM -->
                </div>
            </div>
        </div>
    </section>


@endsection
