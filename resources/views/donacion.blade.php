@extends('layouts.plantilla')

@section('title', 'CADI EMAÚS | Donaciones')

@section('css')


@endsection

{{-- PÁGINA INICIO --}}

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

{{--CONTENIDO INICIO--}}

<section id="CONTENIDO-INICIO" class="px-5 pb-5 pt-3">
    
    <div class="container">
      
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading" >
                        <div class="row text-center" >
                            <div class="col-xs-12">
                                <h3 class="panel-title" >Payment Details</h3>
                            </div>
                            
                            
                        </div>                    
                    </div>
                    <div class="panel-body">
      
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
      
                        <form action="{{ route('payment.post') }}" method="POST" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_test_51LHtN0C7zHPe5nJ0ILSR88Nuef715ysxnP8ffE2QBZEpWi9uMJ6zbACqQj3BvGGLBj1LcZbXTzNxqLftYGZ4mMI3004eyk5IUw" id="payment-form">
                            @csrf
      
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Name on Card</label> <input
                                        class='form-control' size='4' type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-xs-12 form-group required'>
                                    <label class='control-label'>Card Number</label> <input
                                        autocomplete='off' class='form-control card-number' size='20'
                                        type='text'>
                                </div>
                            </div>
      
                            <div class='form-row row'>
                                <div class='col-xs-12 col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label> <input autocomplete='off'
                                        class='form-control card-cvc' placeholder='ex. 311' size='4'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label> <input
                                        class='form-control card-expiry-month' placeholder='MM' size='2'
                                        type='text'>
                                </div>
                                <div class='col-xs-12 col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label> <input
                                        class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                        type='text'>
                                </div>
                            </div>

                            <br>
      
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-block" type="submit">Pay ($500)</button>
                                </div>
                            </div>
                              
                        </form>
                    </div>
                </div>        
            </div>
        </div>
          
    </div>
</Section>
{{--CONTENIDO INICIO--}}

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  
<script type="text/javascript">
$(function() {
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
  
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
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
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            // token contains id, last4, and card type
            var token = response['id'];
            // insert the token into the form so it gets submitted to the server
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
  
});
</script>

@endsection
{{-- PÁGINA INICIO --}}