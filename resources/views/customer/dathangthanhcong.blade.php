@extends('layout.customer')
@section('main')

<section class="bg0 p-t-23 p-b-140">
<h1 class="L">
    ĐẶT HÀNG THÀNH CÔNG <br> <br>
    LN*STORE XIN CẢM ƠN BẠN ĐÃ MUA HÀNG
</h1>
<video controls loop autoplay muted src="/trangchu/vidieo/vd3.mp4"></video>
</section>
@stop
<style>
    section.bg0.p-t-23.p-b-140 {
    margin-top: 4cm;
    }
.L{
    text-align: center;
    color: black;
}
video {
    margin-top: 28px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    outline: none;
    border: none;
    border-radius: calc(var(--layer-corner-radius) * 1px);
  
    box-shadow: 0 0 calc((var(--elevation) * 0.225px) + 2px) rgba(0, 0, 0, calc(0.11 * (2 - var(--background-luminance, 1)))), 0 calc(var(--elevation) * 0.4px) calc((var(--elevation) * 0.9px)) rgba(0, 0, 0, calc(0.13 * (2 - var(--background-luminance, 1))));
    border-radius: 1px;
    --elevation: 4
}
</style>