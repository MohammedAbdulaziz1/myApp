<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Display</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">All Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="mt-4">
    <div class="text-center">
      <button type="button" class="btn btn-success">Creat Post</button>
    </div>
      <table class="table mt-4 m-auto w-75"> 
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($posts as $post)
          
          <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['posted_by']}}</td>
            <td>{{$post['created_at']}}</td>
            <td><button type="button" class="btn btn-primary">View</button>
                <button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
              </td>
          </tr>

              
          @endforeach

          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>