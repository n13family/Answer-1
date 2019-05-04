<?php
include('config.php');
$query = "SELECT * from `candidates`";
$result = mysqli_query($connection, $query);
$arrays = array();
while ($array = mysqli_fetch_array($result)) {

$arrays[] = $array;

}
?>

<html>
<head>

  <title>Qucik Count</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
	.button {
  background-color: #FF0000;
  border: none;
  color: white;
  padding: 10px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 20px;
}

</style>
</head>
<body>
	<div class="container">

		<br>

      <table class="table table">

  <tbody>
    <?php
    foreach($arrays as $list){
      $id = $list[0];
      $name = $list[1];
      $earned = number_format($list[2], 0, ",", ".");
      echo "
    <tr class=\"border\">
      <td>$name</td>      
      <td class=\"border\" rowspan=\"2\" style=\"text-align: center; vertical-align: middle; \"><button onClick=\"add($id)\" class=\"button\">Tambah</button></td>
    </tr>
    <tr>
      <td class=\"border\" id=\"$id\">Perolehan suara: $earned</td>
    </tr>
    <tr>
      <td></td>
      <td style=\"border: none;\"></td>
    </tr>
";

}
?>
 </tbody>

</table>
	</div>
<script>
      function add(ids){
    $.ajax({
        type: "post",
        url: "ajax.php",
        data: "id="+ids,
        success:function(data)
        {
           var res = JSON.parse(data);
           var vote = res.msg;
           document.getElementById(ids).innerHTML = "Perolehan suara: " + vote;
        }
    });
}
</script>

</body>
</html>