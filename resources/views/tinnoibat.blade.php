<?php
    $tinmoi = DB::table('tin')
    ->select('idTin', 'TieuDe', 'Ngay','Ten','urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->Where("NoiBat","=","1")
    ->offset(0)->limit(6)->get();
?>

<section class="highlights no-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="title text-uppercase white text-bold">Tin Nổi Bật</h4>
                    </div>
                </div>
                <div class="high-slider">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 text-center mt-40">
                                <div class="high-slider-img">
                                    <img src=<?= $tinmoi[0]->urlHinh?> alt="" style="height:400px" class="img-responsive">
                                </div>
                                
                                <h6 class="title text-uppercase violet mt-20"><?= $tinmoi[0]->Ten?></h6>
                                <a href="{{route('tin',$tinmoi[0]->idTin)}}"><h4 class="text-uppercase dark-gray text-bold mt-20">{{ $tinmoi[0]->TieuDe }}</h4></a>
                                
                                <span class="sep"></span>
                                <span class="add v-light-gray text-uppercase">{{ $tinmoi[0]->Ngay }} /  5 Comments</span>
                            </div>
                            <div class="col-sm-4 text-center mt-40">
                                <div class="high-slider-img">
                                    <img src=<?= $tinmoi[1]->urlHinh?> alt="" style="height:400px" class="img-responsive">
                                </div>
                                <h6 class="title text-uppercase pink mt-20"><?= $tinmoi[1]->Ten?></h6>
                                <a href="{{route('tin',$tinmoi[1]->idTin)}}"><h4 class="text-uppercase dark-gray text-bold mt-20">{{ $tinmoi[1]->TieuDe }}</h4></a>
                                
                                <span class="sep"></span>
                                <span class="add v-light-gray text-uppercase">{{ $tinmoi[1]->Ngay }} /  5 Comments</span>
                            </div>
                            <div class="col-sm-4 text-center mt-40">
                                <div class="high-slider-img">
                                    <img src=<?= $tinmoi[2]->urlHinh?> alt="" style="height:400px" class="img-responsive">
                                </div>
                                <h6 class="title text-uppercase orange mt-20"><?= $tinmoi[2]->Ten?></h6>
                                <a href="{{route('tin',$tinmoi[2]->idTin)}}"><h4 class="text-uppercase dark-gray text-bold mt-20">{{ $tinmoi[2]->TieuDe }}</h4></a>
                                
                                <span class="sep"></span>
                                <span class="add v-light-gray text-uppercase">{{ $tinmoi[2]->Ngay }}  /  5 Comments</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4 text-center mt-40">
                                <div class="high-slider-img">
                                    <img src=<?= $tinmoi[3]->urlHinh?> alt="" style="height:400px" class="img-responsive">
                                </div>
                                <h6 class="title text-uppercase violet mt-20"><?= $tinmoi[3]->Ten?></h6>
                                <a href="{{route('tin',$tinmoi[3]->idTin)}}"><h4 class="text-uppercase dark-gray text-bold mt-20">{{ $tinmoi[3]->TieuDe }}</h4></a>
                                
                                <span class="sep"></span>
                                <span class="add v-light-gray text-uppercase">{{ $tinmoi[3]->Ngay }}  /  5 Comments</span>
                            </div>
                            <div class="col-sm-4 text-center mt-40">
                                <div class="high-slider-img">
                                    <img src=<?= $tinmoi[4]->urlHinh?> alt="" style="height:400px" class="img-responsive">
                                </div>
                                <h6 class="title text-uppercase pink mt-20"><?= $tinmoi[4]->Ten?></h6>
                                <a href="{{route('tin',$tinmoi[4]->idTin)}}"><h4 class="text-uppercase dark-gray text-bold mt-20">{{ $tinmoi[4]->TieuDe }}</h4></a>
                                
                                <span class="sep"></span>
                                <span class="add v-light-gray text-uppercase">{{ $tinmoi[4]->Ngay }}  /  5 Comments</span>
                            </div>
                            <div class="col-sm-4 text-center mt-40">
                                <div class="high-slider-img">
                                    <img src=<?= $tinmoi[5]->urlHinh?> alt="" style="height:400px" class="img-responsive">
                                </div>
                                <h6 class="title text-uppercase orange mt-20"><?= $tinmoi[5]->Ten?></h6>
                                <a href="{{route('tin',$tinmoi[5]->idTin)}}"><h4 class="text-uppercase dark-gray text-bold mt-20">{{ $tinmoi[5]->TieuDe }}</h4></a>
                                
                                <span class="sep"></span>
                                <span class="add v-light-gray text-uppercase">{{ $tinmoi[5]->Ngay }}  /  5 Comments</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>