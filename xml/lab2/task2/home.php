
<?php
session_start();
$xmlDoc = simplexml_load_file("data.xml");
$index = $_SESSION["index"] ?? 0;
if($xmlDoc->user[$index])
$id = $xmlDoc->user[$index]->id  ;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <form name="user-form" method="POST" action="index.php">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $xmlDoc->user[$index]->name ?? '';?>">
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" value="<?php echo $xmlDoc->user[$index]->phone ?? '';?>">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?php echo $xmlDoc->user[$index]->address ?? '';?>">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo $xmlDoc->user[$index]->email ?? '';?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <div class="row justify-content-center">
          <div class="col-sm-2">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Insert
            </button> 
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-primary btn-block" id="update-btn" name="update">Update</button>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-danger btn-block" id="delete-btn" name="delete">Delete</button>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-secondary btn-block" id="prev-btn" name="prev">Prev</button>
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-secondary btn-block" id="next-btn" name="next">Next</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include('addModal.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>