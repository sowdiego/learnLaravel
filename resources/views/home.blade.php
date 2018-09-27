@include('inc.header')

<div class="container">
    <div class="row">
    <legend>Laravel CRUD app</legend>
        @if(session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
            </button>
            <strong>{{session('info')}}</strong> 
        </div>
                
        @endif
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @if(count($articles)>0)
            @foreach($articles->all() as $article)


                <tr class="table-active">
                <td>{{$article->id}}</td>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>
                    <a href='{{url("read/{$article->id}")}}' class="badge badge-primary">Read</a> |
                    <a href='{{url("update/{$article->id}")}}' class="badge badge-success">Update</a> |
                    <a href='{{url("delete/{$article->id}")}}' class="badge badge-danger">Delete</a>
                </td>
                </tr>
                @endforeach

            @endif 
            </tbody>
        </table> 
        {{ $articles->links() }}	
    </div>
</div>


@include('inc.footer')