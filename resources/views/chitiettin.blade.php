@extends('layout')
@section('titlepage')
{{$tin->TieuDe}} 
@endsection
@section('noidungchinh')
<section class="mb-116">
  <div class="container">
    <div class="row">
<div class="col-md-8 standard-post">
    <div class="tags mt-30">
      <a href="http://localhost/php3_asm/public" class="btn text-uppercase btn-pink">Trang chủ</a> >
      <a href="{{Route('ttl',$tin->idTL)}}" class="btn text-uppercase btn-pink">{{$tin->TenTL}}</a> >
      <a href="{{Route('ttl',$tin->idLT)}}" class="btn text-uppercase btn-pink">{{$tin->Ten}}</a>
    </div>
    <h4 class="title-t text-bold text-uppercase d-black mt-30">{{$tin->TieuDe}}</h4>
    <h5 class="post-tagline serif d-black text-uppercase ls-2 mt-20">Đăng bởi Phương Đỗ  /  <?= date('d/m/Y', strtotime($tin->Ngay)) ?>  /  <?php echo $dembinhluan. " bình luận"?>  /  <?php echo $tin->SoLanXem ." lần xem" ?> </h5>
    <p class="fz-15 mt-30"><?php echo $tin->Content?></p>
    <div class="mt-30 post-social">
      <a class="fb-bg" href="#"><i class="fa fa-facebook fa-lg"></i></a>
      <a class="twitter-bg" href="#"><i class="fa fa-twitter fa-lg"></i></a>
      <a class="google-plus-bg" href="#"><i class="fa fa-google-plus fa-lg"></i></a>
      <a class="pinterest-bg" href="#"><i class="fa fa-pinterest fa-lg"></i></a>
      <a class="en-bg" href="#"><i class="fa fa-envelope-o fa-lg"></i></a>

    </div>
    <div class="clearfix">  </div>
    <div class="written-by mt-30 clearfix">
      <div class="row">
        {{-- <div class="col-md-2"><img src="img/writer.jpg" alt=""></div> --}}
        <div class="col-md-10">
          <h5 class="title text-uppercase text-bold d-black">Đăng bởi <span class="orange">Phương Đỗ</span></h5>
          <p class="fz-13 lh-28 mt-20">Đây là một đoạn text bất kỳ</p>
          <div class="writer-social mt-20">
            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
            <a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="comments mt-30">
      <h4 class="title-t text-uppercase text-bold d-black mb-40">Bình luận</h4>
      @foreach ($ykien as $yk)
      <div class="comment mt-30">
        <img class="pull-left" src="img/comment1.png" alt="">
        <div class="comment-content bubble">
          <h5 class="fz-13 text-bold text-uppercase d-black">{{$yk->HoTen}}</h5>
          <h6 class="orange-light text-uppercase mt-10"><?= date('d/m/Y', strtotime($yk->Ngay)) ?></h6>
          <p class="fz-13 lh-28 mt-10">{{$yk->NoiDung}}</p>
          <div class="text-right mt-30">
            <a class="btn btn-trans text-uppercase ls-2" href="">Trả lời </a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      @endforeach
    <div class="leave-comment mt-50">
      <h4 class="title-t text-bold text-uppercase d-black">để lại bình luận</h4>
      
      <form action="" method="POST">
        <div class="row mt-30">
          <input type="hidden" name="idTin" value="{{$tin->idTin}}">
          <div class="col-md-6 mt-20">
            <input type="text" name="HoTen" class="form-control" placeholder="Họ tên">
          </div>
          <div class="col-md-6 mt-20">
            <input type="email" name="email" class="form-control" placeholder="email">
          </div>
        </div>
        <textarea id="important" name="NoiDung" rows="10" class="form-control mt-20" placeholder="Nội dung"></textarea>
        <div class="mt-30">
          <button type="submit"class="btn btn-orange-light text-uppercase">đăng bình luận</button>
        </div>
      </form>
    </div>
  </div>
</div>
@include('aside')
</div>
</div>
</section>
@endsection