@extends('layouts.master')

@section('title' , '顧客情報検索結果')

@include('layouts.sidebar')

@include('layouts.header')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
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
                                            @foreach ($results as $result)
                                            <tr>
                                                <td>{{$result->customer_id}}</td>
                                                <td>{{$result->first_name}}</td>
                                                <td>{{$result->last_name}}</td>
                                                <td>{{$result->email}}</td>
                                                <td>{{$result->country}}</td>
                                                <td>{{$result->city}}</td>
                                                <td>{{$result->address}}</td>
                                                <td>{{$result->address2}}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                    </table>

                                    <form action="customer_info_search" method="get">
                                        @csrf
                                        <input class="button" type="submit" value="戻る">
                                    </form>

                                    <form action="film_info_search" method="get">
                                        @csrf
                                    <input class="button" type="submit" value="映画情報検索画面">
                                </form>

                                {!! $results->links() !!}
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