@extends('layout.admin')
@section('main')
<form role="form" action="{{route('NhanVien.store')}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('NhanVien.store')}}" method="post">
     @csrf
  
      <div class="form-group">
        <label for="" class="L1">Tên Nhân Viên</label>
        <input type="text" class="form-control" id=""name="ten_nhanvien" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">Giới Tính</label>
        <input type="text" class="form-control" id="" name="gioitinh" placeholder="">
      </div>
      
  
        
        <div class="form-group">
            <label for="">Ngày Sinh</label>
            <input type="text" class="form-control" id="" name="ngaysinh" placeholder="">
          </div>
     
      <div class="form-group">
        <label for="">Quê Quán</label>
        <input type="text" class="form-control" id="" name="quequan" placeholder="">
      </div>
      <div class="form-group">
        <label for="">SĐT</label>
        <input type="text" class="form-control" id="" name="sdt" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" name="email" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Cấp Bậc</label>
        <input type="text" class="form-control" id="" name="capbac" placeholder="">
      </div>
      <button type="submit" name="" class="btn btn-primary">Lưu</button>
      <a class="btn btn-primary" href="{{route('NhanVien.index')}}">Quay lại<span></span></a>
     
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