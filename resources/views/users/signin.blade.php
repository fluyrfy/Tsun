@extends('layouts.start')

@section('content')
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            <p></p>
        </div>
    @endif
    <div>
        <form action="{{ route('users.signin')}}" method="POST">
            <div id="title">
                手機線上點餐
            </div>   
            <div id="form1">
                    <img src="/images/account.png" width="30px" height="30px">電話號碼｜<input type="text" name="phone"><br><br>
                    <img src="/images/password.png" width="30px" height="30px">密　　碼｜<input type="password" name="password">                         
            </div><br>
            <div>
                <button type="submit" class="btn btn-primary">
                    登入
                </button>
            </div>
            <br>
            <a href="{{ route('users.signup') }}">帳號申請</a> ｜ <a href="忘記密碼頁面">忘記密碼</a>
            {{ csrf_field() }}  
        </form>
    </div>
@endsection
        
      
