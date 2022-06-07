@extends('layout.admin')
@section('main')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Bảng Mỹ Phẩm</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mỹ Phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif            </div>
            <div class="card-body">
                <a class="btn btn-primary" href="{{ route('MyPham.create')}}">Thêm Mới Thông Tin Một Mỹ Phẩm</a> <br>

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Số Thứ Tự</th>
                            <th>Tên Mỹ Phẩm</th>
                            <th>Loại Mỹ Phẩm</th>
                            <th>Nhà Cung Cấp</th>
                            <th>Ảnh Mỹ Phẩm</th>
                            <th>Chi Tiết 1</th>
                            <th>Chi Tiết 2</th>
                            <th>Chi Tiết 3</th>
                            <th>Chi Tiết 4</th>
                            <th>Chi Tiết 5</th>
                            <th>Chi Tiết 6</th>
                            <th>Chi Tiết 7</th>
                            <th>Chi Tiết 8</th>
                            <th>Giá Sản Phẩm</th>
                            <th>Giá Sản Phẩm Giảm</th>
                            <th>TTTH</th>
                            <th>Hành Động</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($MyPham as $sp)
                        <tr>
                            <td>{{++$i}}</td>

                            <td>{{ $sp->TENMYPHAM }}</td> 
                             <td><?php
                                 if($sp->id_LOAIMYPHAM==1){
                                  ?>
                                  {{-- <a href="" class="btn-success">larot</a> --}}
                                  <?php
                                   } 
                                   elseif($sp->id_LOAIMYPHAM==2){
                                       
                                  ?>  
                                   {{-- <a href="" class="btn-danger">svr</span></a> --}}
                                  <?php
                                 }
                                ?> </td> 
                                 <td><?php
                                     if($sp->id_NCC==1){
                                      ?>
                                      {{-- <a href="" class="btn-success">kem hai</a> --}}
                                      <?php
                                       }else{
                                      ?>  
                                       {{-- <a href="" class="btn-danger">hai kem</span></a> --}}
                                      <?php
                                     }
                                    ?> </td>  
                                      <td>
                                        <img src="/{{ $sp->ANH_1}}" alt="">
                                     </td> 
                            <td class="L1">{{ $sp->CHITIET_1}}</td>
                            <td class="L1">{{ $sp->CHITIET_2}}</td>
                            <td class="L1">{{ $sp->CHITIET_3}}</td>
                            <td class="L1">{{ $sp->CHITIET_4}}</td>
                            <td class="L1">{{ $sp->CHITIET_5}}</td>
                            <td class="L1">{{ $sp->CHITIET_6}}</td>
                            <td class="L1">{{ $sp->CHITIET_7}}</td>
                            <td class="L1">{{ $sp->CHITIET_8}}</td>
                            <td>{{number_format($sp->GIAMYPHAM)}}đ</td>
                            <td>{{number_format($sp->GIAMYPHAMGIAM)}}đ</td>
                            <td class="L1">{{ $sp->TTTH}}</td>
                           <td>
                                <span class="badge bg-success">Hoạt Động</span>
                                <a class="btn btn-success glyphicon glyphicon-pencil" href="{{ route('MyPham.edit',$sp->id) }}">Sửa</a>
                                <a class="btn btn-danger glyphicon glyphicon-trash btndelete" href="{{route('MyPham.destroy',$sp->id)}}">Xóa</a>
                           
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                
                <form action="" method="POST" id="formdelete">
                        
                </form>
                <form action="" method="POST" id="formdelete">
                    @csrf @method('delete')
                    
                </form>
            </div>
        </div>

    </section>
</div>
@stop()

@section('js')
    <script>
        $('.btndelete').click(function(ev){
            ev.preventDefault();//không cho load lại trang
            var href=$(this).attr('href');
           
            $('form#formdelete').attr('action',href);
            if(confirm("bạn có muốn xóa?")){
                $('form#formdelete').submit();
               
            }
        })
    
    </script>
 @stop()

 <style>
     a.btn.btn-primary {
    margin-bottom: 0.5cm;
    font-size: 115%;
    font-weight: 500;
    width: 10cm;
}
input.dataTable-input {
    margin-top: 0.5cm;
    width: 10cm;
    border: 2px solid #dfe3e7;
}
select.dataTable-selector.form-select {
    width: 10cm;
    border: 2px solid #dfe3e7;
}

td {
    color: black;
    font-weight: 600;
}
a.btn.btn-success.glyphicon.glyphicon-pencil{
    font-size: 105%;
    font-weight: 500;
    margin-top: 0.5cm;
}
a.btn.btn-danger.glyphicon.glyphicon-trash.btndelete{
    font-size: 105%;
    font-weight: 500;
    margin-top: 0.5cm;
}
img{
    max-width: 3cm;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.L1{
    display: table-column;
}
 </style>