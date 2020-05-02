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
        <form action="{{ route('users.signup') }}" method="POST"><br>
            <img src="/images/account.png" width="30px" height="30px">姓　　名｜<input type="text" id="name" name="name">
            <br>
            <br>
            <img src="/images/phone.png" width="30px" height="30px">電　　話｜<input type="text" id="phone" name="phone">
            <br>
            <br>
            <img src="/images/password.png" width="30px" height="30px">密　　碼｜<input type="password" id="password" name="password">
            <br><br>
            <button type="submit" class="btn btn-primary">
                註冊
            </button>
            {{ csrf_field() }}
        </form>
    </div>       
    
@endsection
        
      
