@extends('layout.admin')
@section('main')



<form role="form" action="{{route('MyPham.update',$MyPham->id)}}" method="post">
  

</form>

<form role="form" action="{{route('MyPham.update',$MyPham->id)}}" method="post" enctype="multipart/form-data">
    @csrf @method('put')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" id="" value="{{$MyPham->TENMYPHAM}}" name="TENMYPHAM" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại sản phẩm</label>
        <select name="id_LOAIMYPHAM" id="" value="{{$MyPham->id_LOAIMYPHAM}}" class="form-control">
            <option value="">chọn</option>
            @foreach ($LoaiMyPham as $item)
            <option value="{{$item->id}}">{{$item->TENLOAI}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nhà cung cấp</label>
        <select name="id_NCC" id="" value="{{$MyPham->id_NCC}}" class="form-control">
            <option value="">chọn</option>
            @foreach ($NhaCungCap as $item)
            <option value="{{$item->id}}">{{$item->ten_ncc}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group">
        <label for="">Hình ảnh</label>
        <input type="file" class="form-control" id="ANH_1" name="ANH_1" placeholder="">
    </div>
    
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_1}}" id="CHITIET_1" name="CHITIET_1" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_2}}" id="CHITIET_2" name="CHITIET_2" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_3}}" id="CHITIET_3" name="CHITIET_3" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_4}}" id="CHITIET_4" name="CHITIET_4" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_5}}" id="CHITIET_5" name="CHITIET_5" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_6}}" id="CHITIET_6" name="CHITIET_6" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_7}}" id="CHITIET_7" name="CHITIET_7" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Chi tiết</label>
        <input type="text" class="form-control" value="{{$MyPham->CHITIET_8}}" id="CHITIET_8" name="CHITIET_8" placeholder="">
    </div>
    <div class="form-group">
        <p class="help-block"></p>
    </div>

    <button type="submit" name="" class="btn btn-primary">Lưu</button>
    <a class="btn btn-primary" href="{{route('MyPham.index')}}">Quay lại<span></span></a>

</form>



@endsection

<style>
    label {
    color: black;
    font-size: 130%;
}
</style>