@extends('layouts.app')

@section('content')
    @if (Auth::check())
    <div class="row">
            <aside class="col-sm-4">
                    <div class="card-body">
                        {{-- 認証済みユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="rounded-circle" src="{{ Gravatar::get(Auth::user()->email, ['size' => 250]) }}" alt="">
                    </div>
            </aside>
            <div class="col-sm-7 pt-5 mt-5">
                    {{-- 投稿フォーム --}}
                    @include('wishfors.form')
            </div>
            <div class="offset-sm-2 col-sm-8 pt-4 mt-4">
                    {{-- 投稿一覧 --}}
                    @include('wishfors.wishfors')
            </div>
    @else
        <div class="center jumbotron">
            <div class="text-center font-weight-bolder">
                <h1>WishFor<br>Makes a list of</br>You want</br></h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn btn-lg btn-info']) !!}
            </div>
        </div>
     </div>
    @endif
@endsection