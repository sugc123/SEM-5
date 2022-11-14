<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php $cn = new mysqli("localhost","root","","student"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php 
  if (isset($_GET['id'])){
  $id = $_GET['id'];
  }
 ?>
 
<form action="pstud.php" method="post" name="form1" class="style1" id="form1">
  <label>Id :-
  <input name="txtid" type="text" id="txtid" value="<?php if(isset($_GET['id'])) echo $id; ?>" />
</label>
  <p>
    <label>Name :-
    <input name="txtname" type="text" id="txtname" />
    </label>
  </p>
  <p>
    <label>City :-    </label>
    <input name="txtcity" type="text" id="txtcity" />
  </p>
  <p>
    <label>Mobil No. :-
    <input name="txtno" type="text" id="txtno" />
    </label>
  </p>
  <p>
    <label>Email :-
    <input name="txtemail" type="text" id="txtemail" />
    </label>
</p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit" name="submit" value="insert" />
	<input type="submit" name="submit" value="update" />
    </label>
  </p>
  <p>&nbsp;</p>
  <table width="567" border="1">
    <tr>
      <td>Id</td>
      <td>Name</td>
      <td>City</td>
      <td>Mobil No. </td>
      <td>Email</td>
      <td>Update</td>
      <td>Delete</td>
    </tr>
	<?php
	$pako = "SELECT * FROM `stud`";
	$pako2 = $cn->query($pako);
	while($row = $pako2->fetch_row()){
	?>
    <tr>
      <td height="25"> <?php echo $row[0]; ?> </td>
      <td> <?php echo $row[1]; ?> </td>
      <td> <?php echo $row[2]; ?> </td>
      <td> <?php echo $row[3]; ?> </td>
      <td> <?php echo $row[4]; ?> </td>
      <td> <a href="stud.php?id=<?php echo $row[0]; ?>"> update </a> </td>
      <td> <a href="pstud.php?id=<?php echo $row[0]; ?>"> delete </a> </td>
    </tr>
	<?php } ?>
  </table>
  <p>&nbsp;</p>
  <p></p>
</form>
</body>
</html>
