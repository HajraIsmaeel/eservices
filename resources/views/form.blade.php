<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
<form class="container" action="{{route('index.post')}}" method="post" enctype="multipart/form-data">
@csrf
  <h2>Add Companies</h2>
  <div class="input-container">
    <input class="input-field" type="text" placeholder="id" name="id" required >
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="Name" name="name" required >
  </div>

  <div class="input-container">
    <input class="input-field" type="file" name="image" id="logo">
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="542 W. 15th Street" name="address" required >
  </div>

  <div class="input-container">
    <input class="input-field" type="text" placeholder="+92 |" name="contact" required >
  </div>

  <div class="input-container">
    <input class="input-field" type="url" placeholder="https://" name="website" id="website" required >
  </div>

  <div class="input-container">
    <input class="input-field" type="Email" placeholder="Email" name="email" required >
  </div>
  <button type="submit" name="submit" class="btn">Add Company</button>
</form>
</body>
</html>