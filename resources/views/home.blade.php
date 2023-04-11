@extends('layouts.main')
@section('main-contents')
    @extends('components.header')

    <main class="container">
        {{-- <div class="mt-3 mb-3">
            <form action="#" method="get" class="row">
                @csrf
                <div class="col-auto">
                    <select name="pref" id="pref" class="form-select" aria-label="都道府県">
                        <option selected>都道府県を絞る</option>
                        @foreach ( as )
                            
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">検索</button>
                </div>
            </form>
        </div> --}}
        
        <div class="table-responsive">
            <table class="table table-sm text-nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>コース名</th>
                        <th>所在地</th>
                        <th>距離</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pclists as $pclist)
                        @php
                        $urlToDetail = url("/{$pclist->id}");
                        @endphp

                        <tr onclick="window.location='{{ $urlToDetail }}'">
                            <td>{{ $pclist->id }}</td>
                            <td>{{ $pclist->name }}</td>
                            <td>{{ $pclist->prefecture }}</td>
                            <td>{{ $pclist->distance }}km</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

@endsection