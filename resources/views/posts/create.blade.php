@extends ('layouts.master')

@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>Create a post.</h1>

        <hr>

        <form>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Title" title="name">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control" placeholder="Body"></textarea>
            </div>

            <hr>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection