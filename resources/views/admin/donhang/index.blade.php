@extends('layout.admin')
@section('main')
<!-- Content Wrapper. Contains page content -->
 <div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Bảng Đơn Hàng</h3>
                
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class='breadcrumb-header'>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
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
                <a class="btn btn-primary" href="{{ route('donhang.create')}}">Thêm Mới Thông Tin Một Loại Mỹ Phẩm</a> <br>

                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Email</th>            
                                    <th>Sđt</th>
                                    <th>Địa chỉ</th>
                                    <th>Tên sản phẩm</th>

                                    <th>Số lượng</th>

                                    <th>Giá</th>
                                    <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                            	
                        @foreach($donhang as $sp)
                              <tr>
                                  <td>{{++$i}}</td>  
                            

                                  <td>{{ $sp->kh_ten }}</td>
                                  <td>{{ $sp->kh_email}}</td>
                                  <td>{{ $sp->kh_sdt}}</td>                                          
                                  <td>{{ $sp->kh_dia_chi}}</td>

                                  <td>{{ $sp->ten_san_pham}}</td>

                                  <td>{{ $sp->so_luong}}</td>

                                  <td>{{number_format( $sp->gia)}}đ</td>
                                  <td>{{ $sp->created_at}}</td>


                                  {{-- <td>
                                      <a class="btn btn-success glyphicon glyphicon-pencil" href="{{route('donhang.edit',$sp->id)}}"> sửa</a>
                                      <a class="glyphicon glyphicon-trash btndelete" href="{{route('donhang.destroy',$sp->id)}}"></a>
                                  </td> --}}
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
    $(document).ready(() => {

        const deleteForm = document.getElementById('formdelete');
        const destroyURL = "{{route('donhang.index')}}";
        $('.btndelete').click(function(ev) {
            ev.preventDefault();
            const val = $(this).next('input[type="hidden"]').val();
            deleteForm.action = destroyURL + '/'+ val;
            console.log(deleteForm);
            if (confirm("Bạn có chắc chắn muốn xóa nhân viên?"))
                deleteForm.submit();
        })
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
 </style>