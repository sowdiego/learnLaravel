@include('inc.header')

<div class="container">
    <div class="row">
        <div class="col-md-6"> 
                
       
<div class="card">
  <h3 class="card-header">Read Article</h3>
  <div class="card-body">
    
    <p class="card-text">{{$articles->title}}</p>
    <p class="card-text">{{$articles->description}}</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
  </div>
</div>
</div>
</div>
</div>


@include('inc.footer')