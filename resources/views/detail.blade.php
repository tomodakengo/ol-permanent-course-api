@extends('layouts.main')
@section('main-contents')
    @extends('components.header')
<main class="container">
    <div class="mt-3 mb-3">
        <a href="javascript:history.back()" class="btn btn-light"><i class="bi bi-chevron-left pe-2"></i>一覧に戻る</a>
    </div>

    <div class="card">
        <div class="card-body row">
            <div class="col-md-4">
                <h5 class="card-title">{{ $details->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">北海道</h6>
            </div>

            <div class="col-md-8 table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>都道府県管理番号</th>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th>公認コース管理番号</th>
                        <td>120</td>
                    </tr>
                    <tr>
                        <th>スタート地点</th>
                        <td>札幌駅南口</td>
                    </tr>
                    <tr>
                        <th>地図取扱所</th>
                        <td>札幌駅構内観光センター</td>
                    </tr>
                    <tr>
                        <th>コース距離</th>
                        <td>10km</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection