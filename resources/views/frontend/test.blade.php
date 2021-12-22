@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Contact Us'))

@push('after-styles')

<style>
 

.spacer {
    display: block;
    height: 500px;
    width: 500px;
    background-color: aqua;
}
</style>

     <!-- scripts -->

<script type="text/javascript" src="{{ url('js/scrollmagic/highlight.pack.js') }}"></script>
<script type="text/javascript" src="{{ url('js/scrollmagic/modernizr.custom.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/scrollmagic/examples.js') }}"></script>
	
<script type="text/javascript" src="{{ url('js/scrollmagic/gsap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/scrollmagic/ScrollMagic.js') }}"></script>
<script type="text/javascript" src="{{ url('js/scrollmagic/animation.gsap.js') }}"></script>
<script type="text/javascript" src="{{ url('js/scrollmagic/debug.addIndicators.js') }}"></script>
@endpush

@section('content')
<div class="spacer"></div>
    <script>
        // init controller
        var controller = new ScrollMagic.Controller();
    </script>		

    <div>
        <div id="imgTrigger"></div>
        <img id="animationImg" src="{{ url('js/scrollmagic/banner-two.png')}}" alt="" style="width: 350px;">

        <script>
            var scene = new ScrollMagic.Scene({
                triggerElement: "#imgTrigger"
            })
            .setTween("#animationImg", 0.2, {scale:2.5})
            .addIndicators({name: "3 (duration: 0)"})
            .addTo(controller);
            ;
        </script>
    </div>


<p>test page</p>



@endsection






