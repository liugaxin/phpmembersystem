@if ($errors->has('Account'))
    <strong>{{ $errors->first('Account')  }}</strong>
@endif

<form action="/v1/user/create" method="POST">
    {{ csrf_field() }}
    <input type="text" placeholder="新增帳號" name="Account">
    <input type="text" placeholder="輸入密碼" name="Password">
    <input type="submit" value='submit'>
</form>