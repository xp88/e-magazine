<?php
    $tinmoi = DB::table('tin')->select('idTin', 'TieuDe', 'Ngay', 'Ten', 'urlHinh')
    ->orderby('Ngay','desc')
    ->join('loaitin','tin.idLT', '=', 'loaitin.idLT')
    ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    ->offset(0)->limit(4)->get();
?>
<div class="fbt">   
                                <h3 class="white text-uppercase text-bold hr-b mt-30">Tin Gần Đây</h3>
                                <div class="r-post mt-50">
                                    <img class="pull-left" src=<?= $tinmoi[0]->urlHinh?> alt="" style="height:80px">
                                    <div class="r-post-content pull-right">
                                        <span class="foo text-uppercase f-gray"><?= $tinmoi[0]->TieuDe?></span>
                                        <span class="add f-gray mt-10"><?= $tinmoi[0]->Ngay?></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="r-post mt-20">
                                    <img class="pull-left" src=<?= $tinmoi[1]->urlHinh?> alt="" style="height:80px;width:80px">
                                    <div class="r-post-content pull-right">
                                        <span class="foo text-uppercase f-gray"><?= $tinmoi[1]->TieuDe?></span>
                                        <span class="add f-gray mt-10"><?= $tinmoi[1]->Ngay?></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="r-post mt-20">
                                    <img class="pull-left" src=<?= $tinmoi[2]->urlHinh?> alt=""style="height:80px;width:80px">
                                    <div class="r-post-content pull-right">
                                        <span class="foo text-uppercase f-gray"><?= $tinmoi[2]->TieuDe?></span>
                                        <span class="add f-gray mt-10"><?= $tinmoi[2]->Ngay?></span>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>