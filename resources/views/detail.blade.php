@extends('layouts.main')
@section('main-contents')
    @extends('components.header')
<main class="container">
    <div class="mt-3 mb-3">
        @php
            $urlToHome = url("/");
        @endphp
        <a href="{{ $urlToHome }}" class="btn btn-light"><i class="bi bi-chevron-left pe-2"></i>一覧に戻る</a>
    </div>

    <div class="card">
        <div class="card-body row">
            <div class="col-md-4">
                <h5 class="card-title">{{ $details->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $details->prefecture }}</h6>
            </div>

            <div class="col-md-8 table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>都道府県管理番号</th>
                        <td>{{ $details->managementNo }}</td>
                    </tr>
                    <tr>
                        <th>公認コース管理番号</th>
                        <td>{{ $details->licenseNo }}</td>
                    </tr>
                    <tr>
                        <th>スタート地点</th>
                        <td>{{ $details->startPosition }}</td>
                    </tr>
                    <tr>
                        <th>地図取扱所</th>
                        <td>{{ $details->whereToGet }}</td>
                    </tr>
                    <tr>
                        <th>コース距離</th>
                        <td>{{ $details->distance }}km</td>
                    </tr>
                </table>
            </div>

            <div class="col-md-12">
                <div id="map" class="w-100" style="height: 300px;"></div>
            </div>

            <script type="text/javascript">
            //緯度,経度,ズーム
            var map = L.map('map').setView([{{ $details->latitude }}, {{ $details->longitude }}], 14);
            // OpenStreetMap から地図画像を読み込む
            L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, '
            }).addTo(map);
            //マーカーを置く
            L.marker([{{ $details->latitude }}, {{ $details->longitude }}]).addTo(map);
    </script>

        </div>
    </div>
</main>

@endsection