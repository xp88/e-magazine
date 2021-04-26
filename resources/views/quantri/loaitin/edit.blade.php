@extends('admin.qtlayout')
@section('pagetitle', 'CHỈNH THỂ LOẠI') 
@section('main')

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif

<form action="{{ route('quantriloaitin.update',$row->idLT) }}" method="post">
{{ csrf_field()}}
{!! method_field('patch') !!}
<div class="col-9 mg-l-30">
  <div class="d-flex flex-column">
    <div class="form-group mg-b-20">
      <label>Tên thể loại: <span class="tx-danger">*</span></label>
      <input name="Ten" value="{{ $row->Ten }}" placeholder="Nhập tên thể loại" class="form-control" required>
    </div>
    <div class="form-group mg-b-20">
      <label>Thứ tự:</label>
      <input type="number" name="ThuTu" value="{{ $row->ThuTu }}" placeholder="Nhập thứ tự" class="form-control">
    </div>
  </div>
  <div class="d-flex justify-content-around">
  <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="AnHien"  @if ($row->AnHien === 1)  checked @endif type="radio" value="1" checked>
            <span>Hiện</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="AnHien" @if ($row->AnHien === 0)  checked @endif type="radio" value="0" >
            <span>Ẩn</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" @if ($row->lang === "vi")  checked @endif type="radio" value="vi" checked>
            <span>Tiếng Việt</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="lang" @if ($row->lang === "en")  checked @endif type="radio" value="2" >
            <span>English</span>
        </label>
    </div>
    <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="HienMenu" @if ($row->HienMenu === 1)  checked @endif type="radio" value="1" checked>
            <span>Hiện trên menu</span>
        </label> &nbsp; 
        <label class="rdiobox">
            <input name="HienMenu" @if ($row->HienMenu === 0)  checked @endif type="radio" value="0" >
            <span>Ẩn trên menu</span>
        </label>
    </div>
    </div>
  <button type="submit" class="btn btn-default">LƯU DATABASE</button>
</div>

</form>
@endsection
