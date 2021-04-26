<?php
    $TenTL=  DB::table('theloai')->where("idTL",$idTL)->value("TenTL");
    $tinmoi = DB::table('tin')
    ->select('idTin', 'TieuDe', 'urlHinh','Ngay','Ten')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->orderby('Ngay','desc')->where('tin.AnHien','=','1')
    ->where('tin.idTL','=',$idTL)
    ->offset(0)->limit(8)->get();
?>

<section class="products-main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[0]->urlHinh?>  alt="">
                            <div class="product-p-content text-center white-bg">
                                <a href="#" class="btn btn-orange-t text-uppercase"><?=$TenTL?> </a>
                                <a href="{{route('tin',$tinmoi[0]->idTin)}}"><h5 class="title text-uppercase d-black text-bold mt-10"><?=$tinmoi[0]->TieuDe;?> </h5></a>
                                
                                <!-- <p class="mt-20 mb-20">Got a dream and we just know now we're gonna make our dream come true! Now the don't move.</p> -->
                                <span class="add v-light-gray text-uppercase">
                                <?=date('H:m',strtotime($tinmoi[0]->Ngay));?>   /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[1]->urlHinh?> alt="">
                            <div class="product-p-content text-center white-bg">
                                <a href="#" class="btn btn-pink text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[1]->idTin)}}"><h5 class="title text-uppercase d-black text-bold mt-10"><?=$tinmoi[1]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">Takin' a break from all your worries sure would help a lot. You wanna be where you can see.</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 mt-20">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[2]->urlHinh?> alt="">
                            <div class="product-p-content product-p-content-small text-center white-bg">
                                <a href="#" class="btn btn-violet-t text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[2]->idTin)}}"><h5 class="title text-uppercase d-black text-bold"><?=$tinmoi[2]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">The first mate and his Skipper too will do their very best to make</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-20">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[3]->urlHinh?> alt="">
                            <div class="product-p-content product-p-content-small text-center white-bg">
                                <a href="#" class="btn btn-pink text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[3]->idTin)}}"><h5 class="title text-uppercase d-black text-bold"><?=$tinmoi[3]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">The first mate and his Skipper too will do their very best to make</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-20">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[4]->urlHinh?> alt="">
                            <div class="product-p-content product-p-content-small text-center white-bg">
                                <a href="#" class="btn btn-green text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[4]->idTin)}}"><h5 class="title text-uppercase d-black text-bold"><?=$tinmoi[4]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">The first mate and his Skipper too will do their very best to make</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 mt-20">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[5]->urlHinh?> alt="">
                            <div class="product-p-content product-p-content-small text-center white-bg">
                                <a href="#" class="btn btn-green text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[5]->idTin)}}"><h5 class="title text-uppercase d-black text-bold"><?=$tinmoi[5]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">The first mate and his Skipper too will do their very best to make</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mt-20">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[6]->urlHinh?> alt="">
                            <div class="product-p-content product-p-content-small text-center white-bg">
                                <a href="#" class="btn btn-orange-t text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[6]->idTin)}}"><h5 class="title text-uppercase d-black text-bold"><?=$tinmoi[6]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">The first mate and his Skipper too will do their very best to make</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-4 col-sm-6 mt-20">
                        <div class="product-p-img">
                            <img onerror="this.src='/php3_asm/public/defaultimg.jpg'" class="img-responsive" src=<?= $tinmoi[7]->urlHinh?> alt="">
                            <div class="product-p-content product-p-content-small text-center white-bg">
                                <a href="#" class="btn btn-violet-t text-uppercase"><?=$TenTL?></a>
                                <a href="{{route('tin',$tinmoi[7]->idTin)}}"><h5 class="title text-uppercase d-black text-bold"><?=$tinmoi[7]->TieuDe;?></h5></a>
                                
                                <!-- <p class="mt-20 mb-20">The first mate and his Skipper too will do their very best to make</p> -->
                                <span class="add v-light-gray text-uppercase">
                                    Oct 12, 2015  /  5 Comments
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>