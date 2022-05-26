<script src="{{ asset('public/assets/js/aos.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery.caret.js') }}"></script>
<script src="{{ asset('public/assets/js/jquery.mobilePhoneNumber.js') }}"></script>
<script src="{{ asset('public/assets/js/custom.js')}}"></script>
<script src="{{ asset('public/assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/assets/dist/js/materialize.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    //AOS.init({disable: 'mobile'});
    AOS.init();

    // document.getElementById("customRadio.1").disabled = true;
    $(function () {

        var $form = $(".require-validation");

        $('form.require-validation').bind('submit', function (e) {

            var $form = $(".require-validation"),

                inputSelector = ['input[type=email]', 'input[type=password]',

                    'input[type=text]', 'input[type=file]',

                    'textarea'].join(', '),

                $inputs = $form.find('.required').find(inputSelector),

                $errorMessage = $form.find('div.error'),

                valid = true;
            $form.find('button').prop('disabled', false);


            $errorMessage.addClass('hide');


            $('.has-error').removeClass('has-error');

            $inputs.each(function (i, el) {

                var $input = $(el);

                if ($input.val() === '') {

                    $input.parent().addClass('has-error');

                    $errorMessage.removeClass('hide');

                    e.preventDefault();
                }

            });


            if (!$form.data('cc-on-file')) {

                e.preventDefault();
                $form.find('button').prop('disabled', false);

                Stripe.setPublishableKey($form.data('stripe-publishable-key'));

                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }
        });
        function stripeResponseHandler(status, response) {

            var $form = $(".require-validation");
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
                $form.find('button').prop('disabled', false);
            } else {

                // token contains id, last4, and card type
                $form.find('button').prop('disabled', false);
                var token = response['id'];

                // insert the token into the form so it gets submitted to the server
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }
    });

    @php
        $currentTime = Carbon\Carbon::now('Europe/Paris');
    @endphp

    function Timer(duration) {
        var timer = duration, hours, minutes, seconds;
        setInterval(function () {
            hours = parseInt((timer / 3600) % 24, 10)
            minutes = parseInt((timer / 60) % 60, 10)
            seconds = parseInt(timer % 60, 10);

            hours = hours < 10 ? "0" + hours : hours;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            //display.text(hours +":"+minutes + ":" + seconds);

            document.getElementById("timer_hours").innerHTML = hours;

            document.getElementById("timer_mins").innerHTML = minutes;

            document.getElementById("timer_secs").innerHTML = seconds;

            --timer;

            if (timer <= 0) { //reset when 24 hrs complete and user didn't refresh the page.

                timer = 24 * 60 * 6
            }
        }, 1000);
    }

    // Timer({{$currentTime->diffInSeconds('23:59:59')}});

    /* Disabled button and sshow loader jquery ends here */
</script>

<script src="{{ secure_asset('public/assets/dist/js/materialize.js') }}"></script>
    <script>
    $(document).ready(function(){
    $('.images-carousel').owlCarousel({
        center: true,
        margin:0,
        loop: true,
        rewind: true,
        items:3,
        nav:false,
        dots:false,
    });

   let src_width = $(document).width();

   if(src_width < 512 ){

       $('#close-overlay , .box-container-overlay').click(function(){
        $('.box-container-overlay').remove();
    });

   }
   else{
        $('.box-container-overlay').remove();
   }

    });
</script>
<script>
$(document).ready( function () {
    $('.datatable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>