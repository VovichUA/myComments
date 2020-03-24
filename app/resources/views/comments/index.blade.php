<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container">
    <form action="/comment/create">
        <label>
            <textarea name="value" class="form-control" maxlength="255"></textarea>
        </label><br>
        <input type="submit" class="btn btn-success" value="send">
    </form>
</div>
<div class="container">
    <div class="alert alert-success">

        @includeIf('comments.answer',['childs'=>$comments])

    </div>
</div>

<script>
    function openForm(id) {
        $('#answer'+id).show()
    }
    function hideForm(id) {
        $('#answer'+id).hide()
    }
    function redactValue(id) {
        $('#hideB'+id).hide();
        $('#showForm'+id).show();
    }
    function hideForm(id) {
        $('#hideB'+id).show();
        $('#showForm'+id).hide();
    }
</script>
