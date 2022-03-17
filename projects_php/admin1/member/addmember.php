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
		$query="select*from member where name='$name'"; 
		$result=$connect->query($query); 
		if(mysqli_num_rows($result)==1){ 
			$alert="Tên thành viên đã tồn tại. Đề nghị chọn 1 tên khác!"; 
		}else{ 
			$status=$_POST['status']; 
			$query="insert member(name,mobile,email , status) values('$name','$mobile' ,'$email','$status'  )"; 
			$connect->query($query); 
			header("location: ?option=member"); 
		}
	}
?> 
<div class="body">
<h1>Thêm thành viên</h1> <br>
<section style="color: red"><?=isset($alert)?$alert:""?></section> 
<section> 
	<form method="post"> 
		<table style="line-height: 30px;">
			<tr>
				<td><label>Name: </label></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><label>Phonenumber: </label></td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td><label>Email: </label></td>
				<td><input type="text" name="email"></td>
			</tr>
		</table>
		<section> 
			<label>Status: </label> 
				<input style="margin-left: 50px;" value="1" type="radio" name="status" checked> Active 
				<input type="radio" name="status" value="0" style="margin-left: 1.5%;"> UnActive 
		</section> 
		<section style="padding-top: 8px;">
			<input style="width: 80px; margin-left: 130px; margin-bottom: 1%;" type="submit" value="Add">
		</section> 
	</form> 
</section>
</div>