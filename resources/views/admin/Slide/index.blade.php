@extends('layout.admin')
@section('main')
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Bảng Slide</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Slide</li>
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
                <a class="btn btn-primary" href="{{ route('Slide.create')}}">Thêm Mới Thông Tin Một Slide</a> <br>

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>Số Thứ Tự</th>
                            <th>Tên Slide</th>
                            <th>Ảnh Slide</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($Slide as $sp)
                        <tr>
                            <td>{{++$i}}</td>

                            <td>{{ $sp->ten_slide }}</td>
                            <td>
                                <img src="/{{ $sp->img_slide}}" alt="">
                             </td> 
                         
                
                           <td>
                                <span class="badge bg-success">Active</span>
                                <a class="btn btn-success glyphicon glyphicon-pencil" href="{{ route('Slide.edit',$sp->id) }}">Sửa</a>
                                <a class="btn btn-danger glyphicon glyphicon-trash btndelete" href="{{route('Slide.destroy',$sp->id)}}">Xóa</a>
                           
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
           
            // $('form#formdelete').attr('action',href);
            // if(confirm("bạn có muốn xóa?")){
            //     $('form#formdelete').submit();
               
            // }
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
}
a.btn.btn-danger.glyphicon.glyphicon-trash.btndelete{
    font-size: 105%;
    font-weight: 500;
}
img {
    width: 400px;

    border-radius: 5px;
}
 </style>