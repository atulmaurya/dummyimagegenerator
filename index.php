<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dummy Image Generator</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="script.js"></script>
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <div class="row d-flex justify-content-center align-items-center">
    <div class="p-4 rounded rounded-2 shadow">

      <center>
        <h4>Dummy Image Generator</h4>
      </center><br>
      <div>
        <label for="height">Height <small>(Range: 100-3000)</small></label>
        <input type="number" name="height" class="height  form-control" id="height">
      </div>
      <br>
      <div>
        <label for="height">Width <small>(Range: 100-3000)</small></label>
        <input type="number" name="width" class="height  form-control" maxvalue="3000" minvalue="100" id="width">
      </div>
      <br><br>
      <div >
        <label for="color">Choose color</label>
        <input type="color" name="color" class="height color form-control" id="color">
      </div><br>
      <div>
        <label for="format">Format</label>
        <select name="format" id="format" class="form-control">
          <option value="png">PNG</option>
          <option value="jpeg">JPEG</option>
          <option value="bmp">BMP</option>
          <option value="gif">GIF</option>
        </select>
      </div><br>
      <button class="btn btn-success" id="generate-btn">Generate</button>


    </div>


</body>

</html>