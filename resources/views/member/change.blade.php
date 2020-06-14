@foreach ($members as $member)
    <form action="/v1/user/pwd/change/{{ $member->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <p>ID:{{ $member->id}}
        <br>
            帳號：{{$member->Account}}
                <br>
                    <input type="text" placeholder="修改會員密碼" name="Password">
                        <input type="submit" value='確認修改'>
    </p>
</form>
@endforeach
