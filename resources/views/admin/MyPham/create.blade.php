@extends('layout.admin')
@section('main')

{{-- <form action="{{ url('file')}}" method="post" enctype="multipart/form-data">
  Select image to upload:
  @csrf
  <input type="file" name="fileToUpload" id="fileToUpload"> 
  <input type="submit" value="Upload Image" name="submit">
</form> --}}
  

</form>
<form role="form" action="{{ route('MyPham.store') }}" method="post" enctype="multipart/form-data">
  @csrf
    
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Tên sản phẩm</label>
        <input type="text" class="form-control" id="" name="TENMYPHAM" placeholder="">
    </div>
   

    <div class="form-group">
      <label for="">hình ảnh</label>
      <input type="file" class="form-control" type = "file" id="" name="ANH_1" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Loại mỹ phẩm</label>
        <select name="id_LOAIMYPHAM" id="" class="form-control">
            <option value="">Chọn</option>
            @foreach ($LoaiMyPham as $item)
            <option value="{{$item->id}}">{{$item->TENLOAI}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nhà cung cấp</label>
        <select name="id_NCC" id="" class="form-control">
            <option value="">Chọn</option>
            @foreach ($NhaCungCap as $item)
            <option value="{{$item->id}}">{{$item->ten_ncc}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Chi tiết 1</label>

        <textarea id="editor1" name="CHITIET_1" rows="10" cols="80">
                                    
          </textarea>
    </div>
    <div class="form-group">
        <label for="">Chi tiết 2</label>

        <textarea id="editor2" name="CHITIET_2" rows="10" cols="80">
                                    
          </textarea>
    </div>

    <div class="form-group">
        <label for="">Chi tiết 3</label>

        <textarea id="editor3" name="CHITIET_3" rows="10" cols="80">
                                    
          </textarea>
    </div>

    <div class="form-group">
        <label for="">Chi tiết 4</label>

        <textarea id="editor4" name="CHITIET_4" rows="10" cols="80">
                                    
          </textarea>
    </div>

    <div class="form-group">
        <label for="">Chi tiết 5</label>

        <textarea id="editor5" name="CHITIET_5" rows="10" cols="80">
                                    
          </textarea>
    </div>

    <div class="form-group">
        <label for="">Chi tiết 6</label>

        <textarea id="editor6" name="CHITIET_6" rows="10" cols="80">
                                    
          </textarea>
    </div>

    <div class="form-group">
        <label for="">Chi tiết 7</label>

        <textarea id="editor7" name="CHITIET_7" rows="10" cols="80">
                                    
          </textarea>
    </div>
    <div class="form-group">
        <label for="">Chi tiết 8</label>

        <textarea id="editor8" name="CHITIET_8" rows="10" cols="80">
                                    
          </textarea>
    </div>
    <div class="form-group">
        <label for="">Thông tin thương hiệu</label>

        <textarea id="editor9" name="Thông tin thương hiệu" rows="10" cols="80">
                                    
          </textarea>
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input type="text" class="form-control" id="" name="GIAMYPHAM" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Giá khi giảm</label>
        <input type="text" class="form-control" id="" name="GIAMYPHAMGIAM" placeholder="">
    </div>




    <button type="submit" name="" class="btn btn-primary">Submit</button>
    <a class="btn btn-primary" href="{{route('MyPham.index')}}">Quay lại<span></span></a>
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