
@extends('frontend.layouts.master')


@section('content')




<div id="popupcart" class="popup-container">
    <div class="popup-content">

        <div class="containerpop">

            <div class="container popupedit">
                <div class="row">
                    <a href="#participate" class="close">&times;</a>

                    <div class="col-lg-12 ">
                        <div class="col-lg-12  popupbtn ">
                            <a class="cmn-btn style--two pop-f-a"
                                style="
                                margin-top: 2%;
                                margin-bottom: 4%;
                                width: 100%;
                                text-align: center;
                                margin-top: 2%;
                                width: 100%;
                                padding: 2%;
                                background: linear-gradient(180deg, rgb(251, 185, 54) 0%, rgba(255,145,0,1) 100%);
                                font-style: italic;
                                font-size: 1.4rem;
                                text-shadow: 1px 1px 3px black;
                                font-weight: 900; "
                                href="{{ route('cach.emp')}}"> Cash  </a>
                            {{-- <a class="cmn-btn style--two d-flex align-items-center"
                                style="justify-content: center;margin-bottom: 4%;text-align: center;margin-top: 2%;width: 100%;padding: 2%;font-style: italic;font-size: 1.4rem;text-shadow: 1px 1px 3px black;font-weight: 900;"
                                href="{{route('stripe')}}"> Card </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="inner-hero-section">
    <!--<div class="bg-shape"><img src="{{asset('frontend4/assets/images/elements/inner-hero-shape.png')}}" alt="image"></div>-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
    </div>
</div>
 <!-- cart section start -->
 <section class="pb-120 mt-minus-300">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-wrapper">
                    <div class="row justify-content-lg-between">
                        <div class="col-lg-7" style="/*border: 1px solid #d5d5d5;border-radius: 25px;*/">
                            <div class="ticket-wrapper">
                                <div class="ticket-wrapper__header">
                                    <h3 style="color: #000;">Your tickets:</h3>
                                    <button type="button">clear all</button>
                                </div>
                                @if (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count() > 0)

                                @foreach (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                                <div class="ticket-wrapper__body">
                                    <div class="single-row" style=" border: 1px solid #cdcdcd; padding: 10px; display: flex; align-items: center; border-radius: 75px; ">
                                        <div class="cartimg">
                                            <h1>{{$item->producttypeid}}</h1>

                                            @php
                                            $photos = explode(',', $item->model->photo);
                                            @endphp

                                        <img src="{{$photos[0]}}" alt="" srcset="" />
                                    </div>
                                    <div class="cart-data">

                                        <span> {{$item->name}}</span>
                                        <h1>{{$item->producttypeid}}</h1>

                                        </div>
                                        <div class="action-btns">

                                            <button type="button" class="del-btn cart_delete"
                                            data-id="{{$item->rowId}}"
                                            >
                                            <i class="las la-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-4">
                            <div class="checkout-wrapper">
                                <div class="checkout-wrapper__header">
                                    <h3 style="color: #000">Your tickets:</h3>
                                </div>
                                <div class="checkout-wrapper__body">
                                    <ul class="price">
                                        <li>
                                            <div class="left">
                                                <h4 class="caption" style="color:#000">Ticket Price</h4>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right">
                                                <span class="price" style="color:#000;font-weight: 600;margin: 0;line-height: 1.4;">
                                                    {{Cart::subtotal()}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="checkout-wrapper__btn">
                                        <a  href="#popupcart" class=" amount__btn cmn-btn">
                                            <i class="las la-shopping-basket"></i>
                                            <span class="cart__num">
                                            </span>
                                            buy tickets

                                        </a>

                                    </div>
                                </div>
                            </div>
                            <!-- checkout-wrapper end -->
                            <div class="mt-30">
                                <img src="{{asset('frontend4/assets/images/elements/payment.png')}}" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col-lg-12 -->
        </div>
    </div>
</section>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $(document).on('click','.cart_delete',function(e){
        e.preventDefault();
        var cart_id = $(this).data('id');
        //alert(cart_id);
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

                if (data['status']) {
                    $('body #header-ajax').html(data['header']);
                    $('body #cart_counter').html(data['cart_count']);
                    console.log(data);
                    swal({
                        title: "Good job!",
                        text:  data['message'],
                        icon: "success",
                        button: "OK",
                        });
                } else {
                    //alert('false')
                }
            }
        });
    });
</script>
<script>
    $(document).on('click','.cart_delete', function(){
    location.reload(true);
});

</script>


{{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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


<!-- cart section end -->
@endsection


