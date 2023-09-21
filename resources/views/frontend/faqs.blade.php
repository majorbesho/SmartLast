@extends('frontend.layouts.master')


@section('content')
<div class="container  pt-200 pb-200"></div>
<div class="container " style="padding-top: 250px;padding-bottom: 250px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="container">
                <h2>Frequently Asked Questions</h2>
                <div class="accordion">

@foreach ($faqs as $faq )
<div class="accordion-item">
    <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">{{$faq->qu}}</span><span class="icon" aria-hidden="true"></span></button>
    <div class="accordion-content">
      <p>
        {!!$faq->discreption!!}
         .</p>
    </div>
  </div>
@endforeach





                </div>
              </div>
        </div>
    </div>
</div>


<script>
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
@endsection
