@include('inc.header')
  <div class="container">
    <div class="row">
       <legend>Laravel CRUD Application</legend>
       @if(session('info'))
       <div class="alert alert-success">
            {{session('info')}}
       </div>
       @endif
       <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Titre</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($articles) >0)
                @foreach($articles->all() as $article)


                  <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>
                      <a href='{{ url("/read/{$article->id}") }}' class="badge badge-primary">Lire </a>|

                      <a href='{{ url("/update/{$article->id}") }}' class="badge badge-info">Modifier </a>|
                      
                      <a href='{{ url("/delete/{$article->id}") }}' class="badge badge-danger">Supprimer </a>|
                    </td>
                  </tr>
               @endforeach
            @endif
           
          </tbody>
        </table> 
    </div>
  </div>


@include('inc.footer')