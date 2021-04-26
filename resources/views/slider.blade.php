<?php
    $tinmoi = DB::table('tin')
    ->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->Where("NoiBat","=","1")
    ->offset(0)->limit(5)->get();
?>


<div class="main-slider" >
            <div class="item">
            <div class="row">
                    <div class="col-md-12">
                        <div class="m-slider-img">
                            <img class="img-responsive" src=<?= $tinmoi[0]->urlHinh?> alt="" style="max-height: 500px; object-fit:cover;">
                            <div class="m-slider-overlay">
                                
                            </div>
                            <div class="m-slider-content">
                                <a href="#" class="btn btn-pink text-uppercase">entertainment</a>
                                <h1 class="text-bold text-uppercase title white ls-2">{{ $tinmoi[0]->TieuDe }} </h1>
                                <a href="#" class="btn text-uppercase btn-trans ls-2 text-bold">Đọc Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
            <div class="row">
                    <div class="col-md-12">
                        <div class="m-slider-img">
                            <img class="img-responsive" src=<?= $tinmoi[3]->urlHinh?> alt=""style="max-height: 500px; object-fit:cover;" >
                            <div class="m-slider-overlay">
                                
                            </div>
                            <div class="m-slider-content">
                                <a href="#" class="btn btn-pink text-uppercase">entertainment</a>
                                <h1 class="text-bold text-uppercase title white ls-2">{{ $tinmoi[3]->TieuDe }}</h1>
                                <a href="#" class="btn text-uppercase btn-trans ls-2 text-bold">Đọc Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
            <div class="row">
                    <div class="col-md-12">
                        <div class="m-slider-img">
                            <img class="img-responsive" src=<?= $tinmoi[0]->urlHinh?> alt=""style="max-height: 500px; object-fit:cover;">
                            <div class="m-slider-overlay">
                                
                            </div>
                            <div class="m-slider-content">
                                <a href="#" class="btn btn-pink text-uppercase">entertainment</a>
                                <h1 class="text-bold text-uppercase title white ls-2">{{ $tinmoi[0]->TieuDe }} </h1>
                                <a href="#" class="btn text-uppercase btn-trans ls-2 text-bold">Đọc Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>

 