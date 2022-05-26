@extends('layouts.app')
@section('content')
<style>
.navbar{
    background:#000 !important;
}
@media(max-width:767px){
    .navbar{
        background:transparent !important;
    }
    .hompage_bg {
        background: #fff !important;
    }
}
</style>
    <main>
        <div style="background-color:#ffffff">
            <div class="contact-page-title">
                <span style="display:inline-block;"><span style="color:#000000">ACCÈS</span> <span
                        class="contact-bigger" style="color:#FFCF00">PARKME</span></span>
            </div>
            <div class="container-1">
                <div class="contact-body">
                    <div class="contact-left" style="text-align:right;">
                        <img src="https://parkme.fr/public/assets/images/footer-logo.png" class="img-fluid"
                            alt="parking aeroport toulouse">
                    </div>
                    <div class="contact-center">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.3070979313466!2d1.3684483157771548!3d43.64177866118673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aea55981cfabd1%3A0x2ce33d444bf854eb!2s32%20Rue%20Raymond%20Grimaud%2C%2031700%20Blagnac%2C%20France!5e0!3m2!1sen!2s!4v1594939341689!5m2!1sen!2s"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="contact-right">
                        <div class="contact-texts">
                            <div style="font-weight:bold;">PARKME</div>
                            <div>32 rue Raymond Grimaud, <br> 31700 Blagnac</div>
                            <div class="contact-call">
                                <img src="https://parkme.fr/public/assets/images/email-icon.png"
                                    alt="parking aeroport toulouse">&nbsp;&nbsp;&nbsp;contact@parkme.fr<span
                                    class="block-then">&nbsp;&nbsp;&nbsp;</span><img
                                    src="https://parkme.fr/public/assets/images/call-icon.png"
                                    alt="parking aeroport toulouse">&nbsp;&nbsp; 07 86 28 86 71
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-foot">
                <div class="contact-foot-title">LE PARKING</div>
                <div class="contact-foot-content">
                    <div class="contact-foot-img1">
                        <img src="https://parkme.fr/public/assets/images/car1.jpg" alt="">
                    </div>
                    <div class="contact-foot-img2">
                        <img src="https://parkme.fr/public/assets/images/car2.jpg" alt="">
                    </div>
                </div>
                <div class="contact-foot-dashes">
                    <div class="cf-dash cf-dash-l cf-dash1"></div>
                    <div class="cf-dash cf-dash-l cf-dash2"></div>
                    <div class="cf-dash cf-dash-l cf-dash3"></div>
                    <div class="cf-dash cf-dash-r cf-dash1"></div>
                    <div class="cf-dash cf-dash-r cf-dash2"></div>
                    <div class="cf-dash cf-dash-r cf-dash3"></div>
                </div>
            </div>
        </div>
            <section id="footer">
                @include('layouts.footer')
            </section>
    </main>
@endsection