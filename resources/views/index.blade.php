@extends('layout')
@section('noidungchinh')

@include("slider")
        
@include("tinnoibat")

@include("subscribe")

<!-- tin moi -->
@include ("tinmoi")

<?php  $idTL =3 ?> @include ("tinmoitheotheloai")
<?php  $idTL =7 ?> @include ("tinmoitheotheloai")

@include("tinthinhhanh")

{{-- @include('funfacts') --}}

<?php  $idTL =1 ?> @include ("tinmoitheotheloai")

@endsection
