<div class="container">
    @foreach($childs as $child)

        <b id="hideB{{$child->id}}">{{$child->value}}</b><br>
        <label>
            <form action="{{route('comment.store')}}" method="post" id="showForm{{$child->id}}" style="display: none">
                @csrf
                <input type="hidden" name="id" value="{{$chgit initild->id}}">
                <textarea name="value" class="form-control"
                          maxlength="255">{{$child->value}}</textarea><br>
                <input type="submit" class="btn btn-success" value="редактировать">
                <input type="button" class="btn btn-danger" onclick="hideForm({{$child->id}})" value="скрыть">
            </form>
        </label>
        <i>{{$child->author}}</i><br>
        <input type="button" class="btn-success" value="ответить" onclick="openForm({{$child->id}})">
        <input type="button" class="btn-warning" value="редактировать" onclick="redactValue({{$child->id}})">
        <form action="{{route('comment.destroy',$child->id)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn-danger" value="удалить">
        </form>
        <form id="answer{{$child->id}}" action="/comment/create" style="display: none">
            <br>
            <input type="hidden" name="parent_id" value="{{$child->id}}">
            <label>
                <textarea name="value" class="form-control" maxlength="255"></textarea>
            </label><br>
            <input type="submit" class="btn btn-success" value="send">
            <input type="button" class="btn btn-danger" value="скрыть" onclick="hideForm({{$child->id}})">
        </form>
        <hr>
        @includeIf('comments.answer',['childs'=>$child->childComment])

    @endforeach
</div>
