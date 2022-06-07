@extends('layout.admin')
@section('main')
<form role="form" action="{{route('Slide.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('Slide.store')}}" method="post" enctype="multipart/form-data">
     @csrf
  
      <div class="form-group">
        <label for="">Tên slide</label>
        <input type="text" class="form-control" id="" name="ten_slide" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">hình ảnh</label>
        <input type="file" class="form-control" type = "file" id="" name="img_slide" placeholder="">
      </div>
     
    
      <button type="submit" name="" class="btn btn-primary">Lưu</button>
      <a class="btn btn-primary" href="{{route('Slide.index')}}">Quay lại<span></span></a>
     
</form>
@stop()
<style>
  .form-group {
      margin-left: 23px;
  }
  button.btn.btn-primary {
      margin-left: 23px;
  }
  </style>