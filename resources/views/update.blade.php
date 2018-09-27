@include('inc.header')

<div class="container">
    <div class="row">
        <div class="col-md-6">

             <form methode="POST" action="{{url('/edit',array($articles->id))}}">
            
            {{csrf_field()}}
                <fieldset>
                    <legend>Laravel CRUD app</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <strong>{{$error}}</strong> 
                        </div>

                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $articles->title ?>" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        
                        <textarea class="form-control" name="description" placeholder="Description">
                        <?php echo $articles->description ?>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
                </fieldset>
            </form>

        </div>
    </div>
</div>

@include('inc.footer')