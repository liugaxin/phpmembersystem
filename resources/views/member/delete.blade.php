@foreach ($members as $member)
    <p>
        {{ 'User'.$member->id .' '.'帳號'. $member->Account .' '.'密碼'. $member->Password }}
        <form action="/v1/user/delete/{{ $member->id }}" method="POST"> 
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <input type="submit" value="Delete">
        </form>
    </p>
@endforeach