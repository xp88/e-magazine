<?php
    $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay', 'Ten', 'urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin','tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(4)->get();
?>

<section class="section mb-100">
            <div class="container">
                <div class="row">
                    <div class="new-steps">
                        <div class="item" data-hash="1">
                            <div class="col-md-12">
                                <div class="new-step-img">
                                    <img class="img-responsive" src=<?=$tinmoi[0]->urlHinh?>  alt="" >
                                    <div class="new-step-content text-center">
                                        <h3 class="text-uppercase d-black text-bold"><?=$tinmoi[0]->TieuDe?> </h3>
                                        <p class="mt-25"><?=$tinmoi[0]->Ten?> .</p>
                                        <div class="mt-25">
                                            <a href="{{route('tin',$tinmoi[0]->idTin)}}" class="btn btn-black text-uppercase text-bold ls-2">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item" data-hash="2">
                            <div class="col-md-12">
                                <div class="new-step-img">
                                    <img class="img-responsive" src="img/step2.jpg" alt="">
                                    <div class="new-step-content text-center">
                                        <h3 class="text-uppercase d-black text-bold">Take a step that is new</h3>
                                        <p class="mt-25">Could you be mine. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. The Brady Bunch the.</p>
                                        <div class="mt-25">
                                            <a href="#" class="btn btn-black text-uppercase text-bold ls-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-hash="3">
                            <div class="col-md-12">
                                <div class="new-step-img">
                                    <img class="img-responsive" src="img/step2.jpg" alt="">
                                    <div class="new-step-content text-center">
                                        <h3 class="text-uppercase d-black text-bold">Take a step that is new</h3>
                                        <p class="mt-25">Could you be mine. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. The Brady Bunch the.</p>
                                        <div class="mt-25">
                                            <a href="#" class="btn btn-black text-uppercase text-bold ls-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item" data-hash="4">
                            <div class="col-md-12">
                                <div class="new-step-img">
                                    <img class="img-responsive" src="img/step2.jpg" alt="">
                                    <div class="new-step-content text-center">
                                        <h3 class="text-uppercase d-black text-bold">Take a step that is new</h3>
                                        <p class="mt-25">Could you be mine. Just sit right back and you'll hear a tale a tale of a fateful trip that started from this tropic port aboard this tiny ship. The Brady Bunch the.</p>
                                        <div class="mt-25">
                                            <a href="#" class="btn btn-black text-uppercase text-bold ls-2">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <?php foreach ($tinmoi as $r) { ?>
                        <div class="url-hash">
                            <a href="{{route('tin',$r->idTin)}}">
                                <img class="img-responsive" src=<?=$r->urlHinh?>  alt="" style="height :300px; width :300px" >
                                <h5 class="text-uppercase white" style="width:300px;height:45px"> <?=$r->TieuDe?></h5>
                            </a>
                            <!-- <a href="#2">
                                <img class="img-responsive" src="img/new-thumb2.jpg" alt="">
                                <h5 class="text-uppercase white">Give us any rule to kill</h5>
                            </a>
                            <a href="#3">
                                <img class="img-responsive" src="img/new-thumb3.jpg" alt="">
                                <h5 class="text-uppercase white">Give us any rule to kill</h5>
                            </a>
                            <a href="#4">
                                <img class="img-responsive" src="img/new-thumb4.jpg" alt="">
                                <h5 class="text-uppercase white">Give us any rule to kill</h5>
                            </a> -->
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </section>