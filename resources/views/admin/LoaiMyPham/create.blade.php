@extends('layout.admin')
@section('main')
<form role="form" action="{{route('LoaiMyPham.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('LoaiMyPham.store')}}" method="post">
     @csrf
  
      <div class="form-group">
        <label for="" class="L1">Tên Loại Mỹ Phẩm</label>
        <input type="text" class="form-control" id=""name="TENLOAI" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">Chi Tiết</label>
        <input type="text" class="form-control" id="" name="CHITIET" placeholder="">
      </div>
      
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Lưu</button>
      <a class="btn btn-primary" href="{{route('LoaiMyPham.index')}}">Quay lại<span></span></a>
     
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