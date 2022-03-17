<style type="text/css">
    h1{
      padding-top: 0.5%;
    }
    .body{
      margin-left: 1%;
    }
    *{
      font-family: arial;
    }
</style>
<?php 
	if(isset($_POST['name'])){
		$name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
		$query="select*from member where name='$name' and id!=".$_GET['id'];
		$result=$connect->query($query);
		if(mysqli_num_rows($result)==1){
			$alert="Tên đơn vị đã tồn tại. Đề nghị chọn 1 tên khác!";
		}else{
			$status=$_POST['status'];
			$query="update member set name='$name',mobile='$mobile',email='$email',status='$status' where id=".$_GET['id'];
			$connect->query($query);
			header("location: ?option=member");
		}
	}
 ?>
 <?php 
 	$query="select*from member where id=".$_GET['id'];
 	$result=$connect->query($query);
 	$result=mysqli_fetch_array($result);
  ?>
  <div class="body">
  <h1>Sửa thông tin thành viên</h1><br>
  <section style="color: red"><?=isset($alert)?$alert:""?></section>
  <section>
  	<form method="post">
      <table style="line-height: 30px;">
        <tr>
          <td><label>Name: </label></td>
          <td><input style="width: 250px;" type="text" name="name" value="<?=$result['name']?>"></td>
        </tr>
        <tr>
          <td><label>Phonenumber: </label></td>
          <td><input style="width: 250px;" type="text" name="mobile" value="<?=$result['mobile']?>"></td>
        </tr>
        <tr>
          <td><label>Email: </label></td>
          <td><input style="width: 250px;" type="text" name="email" value="<?=$result['email']?>"></td>
        </tr>
      </table>
  		<section>
  			<label>Status: </label>
            <input style="margin-left: 50px;" value="1" type="radio" name="status" checked>Active 
            <input value="0" type="radio" name="status" style="margin-left: 1.5%;"> UnActive
  		</section>
  		<section style="padding-top: 8px;">
        <input style="width: 80px; margin-left: 150px;margin-bottom: 1%;" type="submit" value="Update">
      </section>
  	</form>
  </section>
</div>