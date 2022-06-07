@extends('layout.admin')
@section('main')
<form role="form" action="{{route('LoaiMyPham.update',$LoaiMyPham->id)}}" method="post">
  

</form>
<form role="form" action="{{route('LoaiMyPham.update',$LoaiMyPham->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại mỹ phẩm</label>
        <input type="text" class="form-control" id="" value="{{$LoaiMyPham->TENLOAI}}" name="TENLOAI" placeholder="">
    </div>
 
    <div class="form-group">
        <label for="">Chi Tiết</label>
        <input type="text" class="form-control" value="{{$LoaiMyPham->CHITIET}}" id="" name="CHITIET" placeholder="">
    </div>
   

    <button type="submit" name="" class="btn btn-primary">Lưu</button>
    <a class="btn btn-primary" href="{{route('LoaiMyPham.index')}}">Quay lại<span></span></a>

</form>



@endsection
<style>
    .form-group {
    margin-left: 23px;
}
button.btn.btn-primary {
    margin-left: 23px;
}
</style>