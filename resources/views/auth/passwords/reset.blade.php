
<!DOCTYPE html>
<html lang="en">

<head>


@include('frontend.layouts.head')

	<!-- Document Title
	============================================= -->

</head>


<!-- scroll-to-top start -->
{{-- <div class="scroll-to-top">
    <span class="scroll-icon">
  <i class="las la-arrow-up"></i>
</span>
</div> --}}
<!-- scroll-to-top end -->


<body >


{{-- <body class="stretched">

	<!-- Document Wrapper
	============================================= -->--}}


        <div class="page-wrapper">



          {{-- <div id="header" class="full-header"> --}}
            <header class="header" id="header-ajax">
                @include('frontend.layouts.header')
            </header><!-- #header end -->
          {{-- </div> --}}

          <div class="container" style="padding-top: 250px; padding-bottom: 250px;">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Reset Password') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @include('frontend.layouts.footer')

        <!-- Go To Top
        ============================================= -->
        {{-- <div id="gotoTop" class="icon-angle-up"></div> --}}

    @include('frontend.layouts.script')


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{--
    <script>

    $(document).on('click','.cart_delete',function(e){
        e.preventDefault();
        var cart_id = $(this).data('id');

         //alert(cart_id);

        // alert(product_id);
        var token = "{{csrf_token()}}";
        var path = "{{route('cart.delete')}}";
        $.ajax({
            url:path,
            type:"POST",
            dataType:"JSON",
            data:{
                cart_id:cart_id,
                _token:token,
            },

            success: function(data){
                console.log(data);
                $('body #header-ajax').html(data['header'])
                 if (data['status']) {
                    swal({
                        title: "Good job!",
                        text:  data['message'],
                        icon: "success",
                        button: "Aww yiss!",
                        });
                 }
            },
            error:function(err){
                console.log(err);
            }
        });
    });

</script> --}}


</body>
</html>











