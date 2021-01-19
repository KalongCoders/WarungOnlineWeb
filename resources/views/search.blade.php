@extends('layouts.main-layout')

@push('css')
    <style>
        .content{
            display:flex;
        }
        .content #filter{
            width: 30%;
            max-width: 220px;
        }
        .content #content-filter{
            width: 100%;
            padding-left: 20px
        }
        .card-content-result{
            background: #ECECEC;
            border-radius: 50px;
        }
        .card-content-result:hover{
            background: #B4F5FF;
        }
        .card-content-result .card-cr-img{
            height: 100px;
            width: 100%;
            background: url("{{asset('img/shop.svg')}}") no-repeat;
            background-position: center;
            background-position-y: 10px;;
            background-origin: content-box;
            padding: 20px;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid" style="margin-top: 120px; margin-bottom: 20px">
        <div class="search-form">
            <form method="GET">
                <input type="text" name="q" class="form-control" value="{{old('q')}}">
                <button class="btn btn-info">cari</button>
            </form>
        </div>
        <section class="content">
            <div id="filter">
                <div class="card card-body shadow-none">
                    <input type="radio" name="type" checked>
                    <input type="radio" name="type">
                </div>
            </div>
            <div id="content-filter" class="row">
                @for ($i = 0; $i < 10; $i++)
                <div class="col-lg-3 col-md-4 col-sm-4 mb-3">
                    <div class="card shadow-none border-0 card-content-result">
                        <div class="card-cr-img"></div>
                        <div class="card-body">
                            <b>Warung Lorem</b>
                            <div class="text-muted">pemilik</div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </section>
    </div>
@endsection