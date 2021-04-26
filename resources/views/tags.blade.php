<?php
    $tag = DB::table('tags')
    ->select('idTag', 'TenTag')
    // ->orderby('Ngay','desc')
    // ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    // ->where('tin.AnHien','=','1')->where('tin.lang','=','vi')
    // ->Where("NoiBat","=","1")
    ->offset(0)->limit(9)->get();
?>



<div class="col-md-5 col-sm-6 col-md-offset-1">
                            <div class="fbt">   
                                <h3 class="white text-uppercase text-bold hr-b mt-30"> Thẻ Phổ Biến</h3>
                                <div class="popular-tags mt-50">
                                    <a href="#" class="btn btn-gray"><?= $tag[0]->TenTag?></a>
                                    <a href="#" class="btn btn-gray"><?= $tag[1]->TenTag?></a>
                                    <a href="#" class="btn btn-gray"><?= $tag[2]->TenTag?></a> 
                                    <a href="#" class="btn btn-gray"><?= $tag[3]->TenTag?></a>
                                    <a href="#" class="btn btn-gray"><?= $tag[4]->TenTag?></a>
                                    <a href="#" class="btn btn-gray"><?= $tag[5]->TenTag?></a><br>
                                    <a href="#" class="btn btn-gray"><?= $tag[6]->TenTag?></a>
                                    <a href="#" class="btn btn-gray"><?= $tag[7]->TenTag?></a><br>
                                    <a href="#" class="btn btn-gray"><?= $tag[8]->TenTag?></a>
                                </div>
                            </div>
                        </div>