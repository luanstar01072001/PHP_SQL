@extends('layout.admin')
@section('main')
<form role="form" action="{{route('NhaCungCap.update',$NhaCungCap->id)}}" method="post">
  

</form>
<form role="form" action="{{route('NhaCungCap.update',$NhaCungCap->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên nhà cung cấp</label>
        <input type="text" class="form-control" id="" value="{{$NhaCungCap->ten_ncc}}" name="ten_ncc" placeholder="">
    </div>

    <button type="submit" name="" class="btn btn-primary">Lưu</button>
    <a class="btn btn-primary" href="{{route('NhaCungCap.index')}}">Quay lại<span></span></a>

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