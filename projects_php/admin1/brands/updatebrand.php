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
		$query="select*from brands where name='$name' and id!=".$_GET['id'];
		$result=$connect->query($query);
		if(mysqli_num_rows($result)==1){
			$alert="Tên đơn vị đã tồn tại. Đề nghị chọn 1 tên khác!";
		}else{
			$status=$_POST['status'];
			$query="update brands set name='$name',status='$status' where id=".$_GET['id'];
			$connect->query($query);
			header("location: ?option=brands");
		}
	}
 ?>
 <?php 
 	$query="select*from brands where id=".$_GET['id'];
 	$result=$connect->query($query);
 	$result=mysqli_fetch_array($result);
  ?>
  <div class="body">
  <h1>Sửa đơn vị chuyển đổi</h1><br>
  <section style="color: red"><?=isset($alert)?$alert:""?></section>
  <section>
  	<form method="post">
  		<section>
  			<label>Name: </label><input type="text" name="name" value="<?=$result['name']?>">
  		</section><br>
  		<section>
  			<label>Status: </label>
            <input value="1" type="radio" name="status" checked>Active 
            <input value="0" type="radio" name="status" style="margin-left: 1.5%;"> UnActive
  		</section>
  		<section style="padding-top: 8px;">
        <input style="width: 80px;margin-bottom: 1%;" type="submit" value="Update">
      </section>
  	</form>
  </section>
</div>