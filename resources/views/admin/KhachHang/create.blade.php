@extends('layout.admin')
@section('main')
<form role="form" action="{{route('KhachHang.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('KhachHang.store')}}" method="post">
     @csrf
  
      <div class="form-group">
        <label for="">Tên khách hàng</label>
        <input type="text" class="form-control" id=""name="ten_kh" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" name="email" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Số điện thoại</label>
        <input type="text" class="form-control" id="" name="sdt" placeholder="">
      </div>
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('KhachHang.index')}}">Quay lại<span></span></a>
     
</form>
@stop()