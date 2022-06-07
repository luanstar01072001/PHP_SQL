@extends('layout.admin')
@section('main')
<form role="form" action="{{route('NhaCungCap.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('NhaCungCap.store')}}" method="post">
     @csrf
  
      <div class="form-group">
        <label for="">Tên nhà cung cấp</label>
        <input type="text" class="form-control" id="" name="ten_ncc" placeholder="">
       
      </div>
     
    
      <button type="submit" name="" class="btn btn-primary">Lưu</button>
      <a class="btn btn-primary" href="{{route('NhaCungCap.index')}}">Quay lại<span></span></a>
     
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