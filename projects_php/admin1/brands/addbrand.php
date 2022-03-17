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
    .section{
    	padding-top: 8px;
    	/*height: 200px;*/
    }
</style>
<?php 
	if(isset($_POST['name'])){ 
		$name=$_POST['name']; 
		$query="select*from brands where name='$name'"; 
		$result=$connect->query($query); 
		if(mysqli_num_rows($result)==1){ 
			$alert="Tên đơn vị đã tồn tại. Đề nghị chọn 1 tên khác!"; 
		}else{ 
			$status=$_POST['status']; 
			$query="insert brands(name, status) values('$name','$status')"; 
			$connect->query($query); 
			header("location: ?option=brands"); 
		}
	}
?> 
<div class="body">
<h1>Thêm đơn vị chuyển đổi</h1> <br>
<section style="color: red"><?=isset($alert)?$alert:""?></section> 
<section> 
	<form method="post"> 
		<section> 
			<label>Name: </label><input type="text" name="name"> 
		</section><br> 
		<section> 
			<label>Status: </label> 
				<input value="1" type="radio" name="status" checked> Active 
				<input type="radio" name="status" value="0" style="margin-left: 1.5%;"> UnActive 
		</section> 
		<section class="section">
			<input style="width: 80px; margin-bottom: 1%;" type="submit" value="Add">
		</section> 
	</form> 
</section>
</div>