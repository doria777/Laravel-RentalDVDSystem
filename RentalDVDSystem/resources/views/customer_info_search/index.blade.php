@extends('layouts.master')

@section('title' , '顧客情報検索')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header ">
                           <h4 class="card-title">顧客情報検索</h4>
                        </div>
                        <div class="card-body ">
                            <div class="card strpied-tabled-with-hover">
                                 <div class="card-body table-full-width table-responsive">
                                        <form action="customer_info_search_result" method="get">
                                        @csrf
                                        <input class="input" type="text" name="customer_name" placeholder="顧客名称を入力" autocomplete="off">
                                        <input class="button" type="submit" value="検索">
                                        </form>

                                        <form action="film_info_search" method="get">
                                        @csrf
                                        <input class="button" type="submit" value="映画情報検索画面">
                                        </form>

                                        <form action="dashboard" method="get">
                                        @csrf
                                        <input class="button" type="submit" value="ダッシュボード">
                                      </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection