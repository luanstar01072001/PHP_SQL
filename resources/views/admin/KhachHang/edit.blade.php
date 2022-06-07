@extends('layout.admin')
@section('main')
<form role="form" action="{{route('KhachHang.update',$KhachHang->id)}}" method="post">
  

</form>
<form role="form" action="{{route('KhachHang.update',$KhachHang->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="id" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên khách hàng</label>
        <input type="text" class="form-control" id="" value="{{$KhachHang->ten_kh}}" name="ten_kh" placeholder="">
    </div>
 
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" value="{{$KhachHang->email}}" id="" name="email" placeholder="">
    </div>
    <div class="form-group">
        <label for="">phone</label>
        <input type="text" class="form-control" value="{{$KhachHang->sdt}}" id="" name="sdt" placeholder="">
    </div>

    <div class="form-group">
        <p class="help-block">Example block-level help text here.</p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('KhachHang.index')}}">Quay lại<span></span></a>

</form>



@endsection