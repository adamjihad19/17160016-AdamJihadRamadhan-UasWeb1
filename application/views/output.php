<?php echO Tampil Data; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
  </head>
  <body>
    
   <div class="container">
   <div class="row">
   <div class="col-md-6 offset-md-3 mt-4">
   <div class="card bg-light mb-3" style="max-width: 200%;">
   <div class="card-header"><b>FORM</b></div>
   <div class="card-body">
   <h4 class="card-title">Form Classroom</h4>
   <table class="table">
   <thead>
   <tr>
            <th scope="col">#</th>
            <th scope="col">NAMA</th>
            <th scope="col">KELAS</th>
            <th scope="col">USIA</th>
            <th scope="col">DATE</th>
            <th scope="col">SEMESTER</th>
           
            </tr>
    </thead>
    <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $_POST['nama'];?></td>
            <td><?php echo $_POST['kelas']?></td>
            <td><?php echo $_POST['usia']?></td>
            <td><?php echo $_POST['date']?></td>
            <td><?php echo $_POST['semseter']?></td>
           </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
        <a class="navbar-brand" href="#">STMIK ANTAR BANGSA</a>
        </div>
        </nav>
 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>