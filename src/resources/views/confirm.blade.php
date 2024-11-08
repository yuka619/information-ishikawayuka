@extends('layouts.app')

@section('content')
<div class="confirm-form">
    <h2 class="confirm-form__heading">確認画面</h2>
    <p>お名前: {{ $contacts['first_name'] }} {{ $contacts['last_name'] }}</p>
    <p>メールアドレス: {{ $contacts['email'] }}</p>
    <p>電話番号: {{ $contacts['tel_1'] }}-{{ $contacts['tel_2'] }}-{{ $contacts['tel_3'] }}</p>
    <p>住所: {{ $contacts['address'] }}</p>
    <p>建物名: {{ $contacts['building'] }}</p>
    <p>お問い合わせの種類: {{ $category->content }}</p>
    <p>お問い合わせ内容: {{ $contacts['detail'] }}</p>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="hidden" name="first_name" value="{{ $contacts['first_name'] }}">
        <input type="hidden" name="last_name" value="{{ $contacts['last_name'] }}">
        <input type="hidden" name="email" value="{{ $contacts['email'] }}">
        <input type="hidden" name="tel_1" value="{{ $contacts['tel_1'] }}">
        <input type="hidden" name="tel_2" value="{{ $contacts['tel_2'] }}">
        <input type="hidden" name="tel_3" value="{{ $contacts['tel_3'] }}">
        <input type="hidden" name="address" value="{{ $contacts['address'] }}">
        <input type="hidden" name="building" value="{{ $contacts['building'] }}">
        <input type="hidden" name="category_id" value="{{ $contacts['category_id'] }}">
        <input type="hidden" name="detail" value="{{ $contacts['detail'] }}">

        <button type="submit">送信</button>
    </form>
    
    <form action="{{ url('/') }}" method="GET">
        <button type="submit">戻る</button>
    </form>
</div>
@endsection