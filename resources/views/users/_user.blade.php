<div class="list-group-item">
    <a href="{{route('users.show',$user)}}"></a>
    {{$user->name}}

    @can('destroy',$user)
        <form action="{{route('users.destroy',$user->id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
</div>
