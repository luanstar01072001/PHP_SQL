@extends('layout.admin')
@section('main')
<form role="form" action="{{route('NhanVien.update',$NhanVien->id)}}" method="post">
  

</form>
<form role="form" action="{{route('NhanVien.update',$NhanVien->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->ten_nhanvien}}" name="ten_nhanvien" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->gioitinh}}" name="gioitinh" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->ngaysinh}}" name="ngaysinh" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->quequan}}" name="quequan" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->sdt}}" name="sdt" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->email}}" name="email" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên Nhân Viên</label>
        <input type="text" class="form-control" id="" value="{{$NhanVien->capbac}}" name="capbac" placeholder="">
    </div>
   

    <button type="submit" name="" class="btn btn-primary">Lưu</button>
    <a class="btn btn-primary" href="{{route('NhanVien.index')}}">Quay lại<span></span></a>

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