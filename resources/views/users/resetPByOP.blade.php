@extends('layouts.default')
@section('title', '更新个人资料')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>修改密码</h5>
    </div>
      <div class="card-body">

        @include('shared._errors')
        <form method="POST" action="{{ route('users.resetP',$user->id) }}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
              <label for="oldPassword">原密码：</label>
              <input type="password" name="oldPassword" class="form-control" value="{{ old('oldPassword') }}">
            </div>

            <div class="form-group">
              <label for="password">新密码：</label>
              <input type="password" name="newPassword" class="form-control" value="{{ old('newPassword') }}">
            </div>

            <div class="form-group">
              <label for="newPassword_confirmation">确认新密码：</label>
              <input type="password" name="newPassword_confirmation" class="form-control" value="{{ old('newPassword_confirmation') }}">
            </div>

            <button type="submit" class="btn btn-primary">更新</button>
        </form>
      </div>
    </div>
  </div>
@stop
