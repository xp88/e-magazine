
<?php
    $cactheloai = DB::table('theloai')->select('idTL', 'TenTL')
    ->orderby('ThuTu','asc')
    ->where('AnHien','=','1')->where('lang','=','vi')
    ->limit(5)->get();
?>
<div id="navbar" class="navbar-collapse collapse no-margin no-padding">
                                            <ul class="nav navbar-nav">
                                            <li><a class="pink-nav" href="http://localhost/php3_asm/public/"> Trang Chủ </a></li>
                                            @foreach ($cactheloai as $mottheloai)
                                              <li class="dropdown active">
                                                <a href="#" class="red-nav dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$mottheloai -> TenTL}} <i class="fa fa-bars"></i> <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                <?php
                                                    $caclt = DB::table('loaitin')
                                                    ->orderby('ThuTu','asc')
                                                    ->where('AnHien','=','1')->where('lang','=','vi')->where('idTL','=',$mottheloai->idTL)
                                                    ->limit(5)->get();
                                                ?>
                                                @foreach($caclt as $lt)
                                                    <li><a href="{{route('ttl',$lt->idLT)}}"><span>{{$lt->Ten}}</span></a></li>
                                                @endforeach
                                                </ul>
                                                
                                              </li>
                                              
                                               
                                              @endforeach
                                              <li><a class="green-nav" href="http://localhost/php3_asm/public/lienhe">Liên Hệ <i class="fa fa-bars"></i></a></li>
                                            </ul>
                                          </div>