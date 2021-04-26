<div class="main-page">
    <div class="container-fluid">
        <div class="row page-title-div">
            <div class="col-md-6">
                <h2 class="title">Danh sách tin</h2>
                <!-- <p class="sub-title">One stop solution for perfect admin dashboard!</p> -->
            </div>
            <!-- /.col-md-6 -->
            <!-- <div class="col-md-6 right-side">
                <a class="btn bg-black toggle-code-handle" role="button">Toggle Code!</a>
            </div> -->
            <!-- /.col-md-6 text-right -->
        </div>
        <!-- /.row -->
        <div class="row breadcrumb-div">
            <div class="col-md-6">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Trang chủ </a></li>
                    <li class="active">Danh sách tin</li>
                </ul>
            </div>
            <!-- /.col-md-6 -->
            {{-- <div class="col-md-6 text-right">
                <a href="#"><i class="fa fa-comments"></i> Talk to us</a>
                <a href="#" class="pl-20"><i class="fa fa-cog"></i> Settings</a>
            </div> --}}
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->

    <section class="section">
        <div class="container-fluid">

            {{-- <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="alert alert-info" role="alert">
                        <strong>Datatables!</strong> This is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. For official documentation, <a href="https://datatables.net/" target="_blank" class=" ml-5"><i class="fa fa-hand-o-right"></i> click here <i class="fa fa-hand-o-left"></i></a>.
                    </div>
                    <!-- /.alert alert-info -->
                </div>
                <!-- /.col-md-12 -->
            </div> --}}
            <!-- /.row -->

            <div class="row">
                
                        


                            <table id="table_tin" class="nowrap" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>ID tin</th>
                                        <th>Ngôn Ngữ</th>
                                        <th>Tiêu đề</th>
                                        <th>Tóm tắt</th>
                                        <th>Hình</th>
                                        <th>Ngày</th>
                                        <th>id user</th>
                                        <th>Content</th>
                                        <th>ID loại tin</th>
                                        <th>ID thể loại</th>
                                        <th>Sô lần xem</th>
                                        <th>Nổi bật</th>
                                        <th>Ẩn hiện</th>
                                        <th>tags</th>
                                        <th>Chỉnh</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ds as $row)
                                    <tr>
                                        <td>{{$row->idTin}}</td>
                                        <td>{{($row->lang=='vi')? "Tiếng Việt":"English"}}</td>
                                        <td>{{$row->TieuDe}}</td>
                                        <td>
                                            {{$row->TomTat}}
                                        </td>
                                        <td>{{$row->urlHinh}}</td>
                                        <td>{{$row->Ngay}}</td>
                                        <td>{{$row->idUser}}</td>
                                        <td>{{$row->Content}}</td>
                                        <td>{{$row->idLT}}</td>
                                        <td>{{$row->idTL}}</td>
                                        <td>{{$row->SoLanXem}}</td>
                                        <td>{{$row->NoiBat}}</td>
                                        <td>{{$row->AnHien}}</td>
                                        <td>{{$row->tags}}</td>
                                        <td>
                                            <a href="{{route('quantritin.edit',$row->idTin)}}" class="btn btn-primary">Chỉnh</a>
                                        </td>
                                        <td>
                                            <form action="{{route('quantritin.destroy',$row->idTin)}}" method="post">
                                                {{csrf_field()}}
                                                {!! method_field('delete') !!}
                                                <button onclick="return confirm('Xóa hả?');" class="btn btn-danger" type="submit">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>

                            {{-- <table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID tin</th>
                                        <th>Tên</th>
                                        <th>Thứ Tự</th>
                                        <th>Ẩn Hiện</th>
                                        <th>Ngôn Ngữ</th>
                                        <th>Hiện Menu</th>
                                        <th>ID thể loại</th>
                                        <th>Chỉnh</th>
                                        <th>Xóa</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($ds as $row)
                                    <tr>
                                        <td>{{$row->idLT}} </td>
                                        <td>{{$row->Ten}} </td>
                                        <td>{{$row->ThuTu}} </td>
                                        <td>{{($row->AnHien)? "Đang hiện":"Đang ẩn"}} </td>
                                        <td>{{($row->lang=='vi')? "Tiếng Việt":"English"}}</td>
                                        <td>{{($row->HienMenu==1)? "Hiện trên menu":"Ẩn trên menu"}}</td>
                                        <td>{{$row->idTL}}</td>
                                        <td>
                                            <a href="{{route('quantriloaitin.edit',$row->idLT)}}" class="btn btn-primary">Chỉnh</a>
                                        </td>
                                        <td>
                                            <form action="{{route('quantriloaitin.destroy' , $row->idLT)}}" method="post">
                                                {{csrf_field()}}
                                                {!! method_field('delete') !!}
                                                <button onclick="return confirm('Xóa hả?');" class="btn btn-danger" type="submit">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}

                            <div class="col-md-12 mt-15 src-code">
                                <pre class="language-html"><code class="language-html">
&lt;table id="example" class="display table table-striped table-bordered" cellspacing="0" width="100%"&gt;
&lt;thead&gt;
&lt;tr&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;/tr&gt;
&lt;/thead&gt;
&lt;tfoot&gt;
&lt;tr&gt;
&lt;th&gt;Name&lt;/th&gt;
&lt;th&gt;Position&lt;/th&gt;
&lt;/tr&gt;
&lt;/tfoot&gt;
&lt;tbody&gt;
&lt;tr&gt;
&lt;td&gt;Tiger Nixon&lt;/td&gt;
&lt;td&gt;System Architect&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
&lt;td&gt;Garrett Winters&lt;/td&gt;
&lt;td&gt;Accountant&lt;/td&gt;
&lt;/tr&gt;
...
&lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- ========== JS ========== --&gt;
&lt;script&gt;
$(function($) {
$('#example').DataTable();
});
&lt;/script&gt;
                                </code></pre>
                            </div>
                            <!-- /.col-md-12 -->
                        
                    
                
                <!-- /.col-md-6 -->
</div>
