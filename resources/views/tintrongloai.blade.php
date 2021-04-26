@extends('layout')
@section('titlepage')
{{$TenLT}} |
@endsection
@section('noidungchinh')
<section class="mb-116">
  
  <div class="container">
    <div class="ttl-topbar">
      <a href="http://localhost/php3_asm/public" class="btn text-uppercase btn-pink">Trang chủ</a> >
      <a href="{{Route('ttl',$idTL)}}" class="btn text-uppercase btn-pink">{{$TenTL}}</a> >
      <a href="{{Route('ttl',$idLT)}}" class="btn text-uppercase btn-pink">{{$TenLT}}</a>
  </div>
    <div class="row">
<div class="col-md-8 standard-post">
  @foreach ($listtin as $r)
        
          <div class="col-md-2 mt-10">
            <img onerror="this.src='defaultimg.jpg'" class="img-responsive" src="<?= $r->urlHinh ?>" alt="">
          </div>
          <div class="col-md-10">

              <h5 class="title-t white text-uppercase text-bold d-black lh-44 mb-10"><a href="tin/{{$r->idTin}}"><?= $r->TieuDe ?></a></h5>
              <span class="add v-light-gray text-uppercase"><?= date('d/m/Y', strtotime($r->Ngay)) ?>  </span> <span class="add v-light-gray text-uppercase"> ___ <?= $r->SoLanXem ?> lượt xem</span>
              <p class="mt-10 mb-10"><?= $r->TomTat ?></p>
            
          </div>
       
  @endforeach
  <?php echo $listtin->links('pagination::bootstrap-4'); ?>
</div>
@include('aside')
</div>
</div>
</section>

@endsection
