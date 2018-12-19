<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>My First Bootstrap Page</h1>


<div class="row">
    <div class="col-6">
    
    <div class="text-center p-5">

    <p class="h4 mb-4">Encrypter</p>

    

    <br>

    <!-- Name -->
    <input type="text" id="encrypter" class="form-control mb-4" placeholder="Encrypter">

    
    <!-- Sign in button -->
    <button onclick="getEncrypterText()" class="btn btn-info btn-block" type="submit">Encrypter</button>


</div>
    
    </div>
    
    <div class="col-6">
    
    <div class="text-center p-5">

    <p class="h4 mb-4">Decrypter</p>

    

    <br>

    <!-- Name -->
    <input type="text" id="decrypter" class="form-control mb-4" placeholder="Decrypter">

    
    <!-- Sign in button -->
    <button onclick="getDecrypterText()" class="btn btn-info btn-block" type="submit">Decrypter</button>


</div>
    
    </div>
    
      </div>



</div>
<script>
function getEncrypterText() {
    var x =(document.getElementById("encrypter").value);
    var y = btoa(x);
    alert(y);
}

function getDecrypterText() {
    var p =(document.getElementById("decrypter").value);
    var q = atob(p);
    alert(q);
}

</script>

</body>
</html>
