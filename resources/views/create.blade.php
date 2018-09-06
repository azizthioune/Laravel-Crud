@include('inc.header')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="form-horizontal"  method="POST" action="{{ url('/insert') }}">
             {{csrf_field()}}
             <fieldset>
              <legend>Laravel Crud Application</legend>
              @if(count($errors) >0 )
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                      {{$error}}
                    </div>
                @endforeach
              @endif
              <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <div class="col-lg-10">
                <input type="text" name="title" class="form-control" id="exampleInputEmail1"  placeholder="Title">
              </div>  
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <div class="col-lg-10">                                                         <textarea name="description" class="form-control" placeholder="Description"></textarea>
              </div>
              </div>

              <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                  
                  <a href="{{ url('/') }}" class="btn btn-primary"">Retour</a>
              </div>
                
              </div>
              
             </fieldset>
        </form>
      </div>
    </div>
  </div>
@include('inc.footer')