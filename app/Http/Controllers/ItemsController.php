<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // アイテム一覧を取得
        $items = Item::all();         

        // アイテム一覧ビューでそれを表示
        return view('items.index', [     
            'items' => $items,        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Item;

        // メッセージ作成ビューを表示
        return view('items.create', [
            'item' => $item,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // アイテムを作成
        $item = new Item;
        $item->content = $request->content;
        $item->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // idの値でアイテムを検索して取得
        $item = Item::findOrFail($id);

        // アイテム詳細ビューでそれを表示
        return view('items.show', [
            'item' => $item,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // idの値でアイテムを検索して取得
        $item = Item::findOrFail($id);

        // アイテム編集ビューでそれを表示
        return view('items.edit', [
            'item' => $item,
        ]);
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
        // idの値でアイテムを検索して取得
        $item = Item::findOrFail($id);
        // メッセージを更新
        $item->content = $request->content;
        $item->save();

        // トップページへリダイレクトさせる
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // idの値でアイテムを検索して取得
        $item = Item::findOrFail($id);
        // アイテムを削除
        $item->delete();

        // トップページへリダイレクトさせる
        return redirect('/');
    }
}
