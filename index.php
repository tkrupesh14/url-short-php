<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AK URL Shortner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form  ">
<form action="" method="POST">
    <div class="input-group flex-nowrap  ">


  <input type="text" name="long" class="form-control" placeholder="longurl.com" aria-label="Username" aria-describedby="addon-wrapping">
</div><br>
    <div class="input-group flex-nowrap">

    
  <input type="text" name="alias" class="form-control zee" placeholder="zee.gl/" aria-label="Username" aria-describedby="addon-wrapping"></div><br>
  
  <div class="col-12 d-grid gap-2">
   <input type="submit" name="s" id="" value="generate" class="btn btn-primary" >
   </form>
  </div>


  </div>
 
  <?php
if (isset($_POST['s'])){
    $long = $_POST['long'];
    $alias = $_POST['alias'];
    $long_url = urlencode($long);
$api_token = '77d2946c91d704249b98fa507b1fba3294bf9f7f';
$api_url = "https://za.gl/api?api={$api_token}&url={$long_url}&alias=$alias";
$result = @json_decode(file_get_contents($api_url),TRUE);
?>
 <center><b><input  type="text" value="<?php print_r($result["shortenedUrl"])?>"  id="linkcopy" target="blank" readonly style='border:none; text-align:center; font-weight:700; color:#0D6EFD; margin-bottom:30px;'></b><br>
  <button class="btn btn-primary" id="copy-btn"data-bs-toggle="tooltip" data-bs-placement="top" title="Click To Copy"  style='margin-bottom:30px;'>Copy</button>
</center>
<?php
}
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="clipboard.min.js"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});
const linkcopy = document.getElementById("linkcopy");
const copybtn = document.getElementById("copy-btn");

copybtn.onclick = function(){
    linkcopy.select();
    document.execCommand("copy");
    alert( "Copied");
}

</script>
<script>reff='krupeshvithlani'</script><script src="//za.gl/external/prizesmodule/js/prize.js" ></script>
</html>

