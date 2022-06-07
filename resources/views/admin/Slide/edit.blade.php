@extends('layout.admin')
@section('main')
<form role="form" action="{{route('Slide.update',$Slide->id)}}" method="post" enctype="multipart/form-data">
  

</form>
<form role="form" action="{{route('Slide.update',$Slide->id)}}" method="post">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên slide</label>
        <input type="text" class="form-control" id="" value="{{$Slide->ten_slide}}" name="ten_slide" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control" id="img_slide" name="img_slide" placeholder="">
    </div>

    <button type="submit" name="" class="btn btn-primary">Lưu</button>
    <a class="btn btn-primary" href="{{route('Slide.index')}}">Quay lại<span></span></a>

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