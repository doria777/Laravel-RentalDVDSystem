@extends('layouts.master')

@section('title' , 'ダッシュボード')

@include('layouts.sidebar')

@include('layouts.header')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">映画情報検索結果</h4>
                        </div>
                        <div class="card-body ">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>タイトル</th>
                                            <th>説明</th>
                                            <th>カテゴリ</th>
                                            <th>役者（名）</th>
                                            <th>役者（姓）</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($film_info_search_results as $film_info_search_result)
                                            @if($loop->iteration < 6)
                                            <tr>
                                                <td>{{$film_info_search_result->title}}</td>
                                                <td>{{$film_info_search_result->description}}</td>
                                                <td>{{$film_info_search_result->name}}</td>
                                                <td>{{$film_info_search_result->first_name}}</td>
                                                <td>{{$film_info_search_result->last_name}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card  card-tasks">
                        <div class="card-header ">
                            <h4 class="card-title">顧客情報検索結果</h4>
                        </div>
                        <div class="card-body ">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                                <th>顧客ID</th>
                                                <th>顧客（名）</th>
                                                <th>顧客（姓）</th>
                                                <th>Eメール</th>
                                                <th>国</th>
                                                <th>都市</th>
                                                <th>住所1</th>
                                                <th>住所2</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($customer_info_search_results as $customer_info_search_result)
                                            @if($loop->iteration < 6)
                                            <tr>
                                                <td>{{$customer_info_search_result->customer_id}}</td>
                                                <td>{{$customer_info_search_result->first_name}}</td>
                                                <td>{{$customer_info_search_result->last_name}}</td>
                                                <td>{{$customer_info_search_result->email}}</td>
                                                <td>{{$customer_info_search_result->country}}</td>
                                                <td>{{$customer_info_search_result->city}}</td>
                                                <td>{{$customer_info_search_result->address}}</td>
                                                <td>{{$customer_info_search_result->address2}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('layouts.footer')