<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>show</title>
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
  
    <div class="card">
        <h5 class="card-header">Post Info</h5>
        <div class="card-body">
          <h5 class="card-title">Title : {{$post['title']}}</h5>
          <p class="card-text">Discription : {{$post['Discription']}}</p>
        </div>
      </div>
      <div class="card">
        <h5 class="card-header">Post Creator info</h5>
        <div class="card-body">
          <h5 class="card-title">Name: Ahmed</h5>
          <p class="card-text">Email.ahmed@gmail.com</p>
          <p class="card-text">Created At: Thuresday 15th of December 1975 02:15:16 PM</p>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>