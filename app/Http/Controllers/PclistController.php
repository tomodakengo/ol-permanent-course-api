<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pclist;

class PclistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /** 
     * home.blade.php
     * 
     * @return array $pclists 全てのパーマネントコースの情報
     * @return array $prefectures 登録されている都道府県の情報
     * @return string $prefecture 絞り込み検索している都道府県 
     */
    public function index(Request $request)
    {
        // 都道府県絞り込み検索の内容を取得する
        $pref = $request->input('pref');

        // 絞り込み検索が無い場合は全件返す
        if (empty($pref)) {
            $pclists = Pclist::all();
        }else{
            $pclists = Pclist::where('prefecture',$pref)->get();
        }

        //登録されている都道府県リストを返す
        $prefectures = Pclist::groupBy('prefecture')->orderBy('id')->get(['prefecture']);

        //bladeに返す値
        return view(
            'home',
            compact(
                'pclists',
                'prefectures',
                'pref'
            )
        );
    }

    /* detail.blade.phpに返すパーマネントコース詳細 */
    public function detail($id)
    {
        $details = Pclist::find($id);

        return view(
            'detail',
            compact(
                'details'
            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
