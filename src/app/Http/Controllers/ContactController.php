<?php

namespace App\Http\Controllers;

use App\Models\Contact;//モデル作成したら記述する
use App\Http\Requests\ContactRequest;//FormRequest設定、バリデーション実装

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    //送信ボタン押した後に表示されるようにするアクション
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tel','address','building','content','detail']);
        return view('confirm', compact('contact'));
    }
    //storeアクションはデータを保存するときに使う
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name','first_name','gender','email','tel','address','building','category_id','detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
