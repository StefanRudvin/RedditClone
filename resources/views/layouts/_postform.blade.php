<form method="POST" action="/posts/">
                
    <div class="form-group">

        <h3>Title</h3>

        <textarea name="title" class="form-control" required></textarea>

    </div>

    <div class="form-group">

        <h3>Content</h3>

        <textarea name="content" class="form-control" rows="12" required></textarea>

    </div>
    <div class="form-group">

        <button type="submit" class="btn btn-primary">
        Update Post
        </button>

    </div>

    @if (count($errors))

    @include('layouts/_alert')

    @endif


    <input type="hidden" name="_token" value="{{ csrf_token() }}">

</form>