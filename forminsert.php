<!doctype html>
<html lang="en">
  <head>
    <title>Form Insert</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h2>Insert Form </h2>
      <form method="POST" action="db.php" class="col-6"> 
        <div class="form-group">
          <label for="">Name</label>
          <input id="" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
          <label for="">Phone</label>
          <input id="" class="form-control" type="text" name="phone">
        </div>
        <div class="form-group">
          <label for="">Age</label>
          <input id="" class="form-control" type="text" name="age">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>