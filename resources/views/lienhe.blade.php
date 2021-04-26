<?php use App\Http\Controllers\TinController; ?>

@extends('layout')
@section('noidungchinh')
<section>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 contact-info text-center mt-70 ">
          <img src="img/c1.png" alt="">
          <h6 class="lh-24 mt-20">Công viên phần mềm Quang Trung<br>Thành phố Hồ Chí Minh</h6>
        </div>
        <div class="col-sm-3 contact-info text-center mt-70 ">
          <img src="img/c2.png" alt="">
          <h6 class="lh-24 mt-20">+01 123 456 78 <br> +01 123 456 78</h6>
        </div>
        <div class="col-sm-3 contact-info text-center mt-70 ">
          <img src="img/c3.png" alt="">
          <h6 class="lh-24 mt-20">Info@Ecota.Com <br> Info@Ecotanews.com</h6>
        </div>
        <div class="col-sm-3 contact-info text-center mt-70 ">
          <img src="img/c4.png" alt="">
          <h6 class="lh-24 mt-20">Thứ 2 - Thứ 7  <span>:</span>  7:00 sáng đến 7:30 chiều <br> Chủ nhật   <span>:</span>   7:00 sáng đến 2:30 chiều</h6>
        </div>
      </div>

      <div class="row mb-120">
        <div class="col-md-4 mt-100">
          <h2 class="title text-uppercase text-bold d-black">Liên hệ với chúng tôi</h2>
          <p class="mt-10">Chúng tôi là một công ty </p>
          <p class="mt-10">Cảm ơn các bạn đã đóng góp ý kiến</p>
        </div>
        <div class="col-md-8 leave-comment mt-50">
          <form action="#">
              <div class="row mt-30">
                <div class="col-md-6 mt-20">
                  <input type="text" class="form-control" placeholder="Họ tên">
                </div>
                <div class="col-md-6 mt-20">
                  <input type="email" class="form-control" placeholder="e-mail">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mt-20">
                  <input type="text" class="form-control" placeholder="Số điện thoại">
                </div>
                <div class="col-md-6 mt-20">
                  <input type="text" class="form-control" placeholder="Tiêu đề">
                </div>
              </div>
              <textarea rows="10" class="form-control mt-20" placeholder="Nội dung"></textarea>
              <div class="mt-30 text-center">
                <a href="#" class="btn btn-orange-t text-uppercase display-block fz-12 text-bold ls-2">Gửi thư</a>
              </div>
            </form>
        </div>
      </div>
    </div>
  </section>
@endsection