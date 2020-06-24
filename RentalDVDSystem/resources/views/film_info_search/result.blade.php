@extends('layouts.master')

@section('title' , '映画情報検索結果')

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
                                        @foreach ($results as $result)
                                        <tr>
                                        <td>{{$result->title}}</td>
                                        <td>{{$result->description}}</td>
                                        <td>{{$result->name}}</td>
                                        <td>{{$result->first_name}}</td>
                                        <td>{{$result->last_name}}</td>
                                    </tr>
                                        @endforeach
                                    </tbody>
                                    </table>

                                    <form action="film_info_search" method="get">
                                    @csrf
                                    <input class="button" type="submit" value="戻る">
                                    </form>

                                    <form action="customer_info_search" method="get">
                                    @csrf
                                    <input class="button" type="submit" value="顧客情報検索画面">
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