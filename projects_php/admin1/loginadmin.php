<body>
<style type="text/css">
	body{
		background: #f0f2f5;
	}
	.content{
		width: 450px;
		height: 350px;
		border-radius: 10px;
		box-shadow: 0 2px 4px rgb(0 0 0 / 50%), 
					0 8px 16px rgb(0 0 0 / 30%);
		margin: 0 auto;
		background: white;
		line-height: 30px;
	}
	h1{
		font-family: arial;
		text-align: center;
		margin-top: 10%;
		padding-top: 4%;
	}
	input{
		width: 385px;
		height: 40px;
		margin-left: 5.5%;
	/*	border-radius: 7px;*/
		border:2px solid #dddfe2;
	/*	outline: none;*/
		padding-left: 3%;
	}
	input:placeholder-shown{
		font-size: 18px;
		padding-left: 3%;
	}

	.submit input{
		font-size: 20px;
		color: white;
		background: #1877f2;
		cursor: pointer;
		transition: .7s;
	}
	.submit input:hover{
		background: #4267b2;
		box-shadow: 0 0 20px #1877f2;
		/*transition-delay: 0.5s;*/	 
	}
</style>
	<?php 
		if(isset($_POST['username'])){
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$query="select * from admin where username='$username' and password='$password'";
			$result=$connect->query($query);
			if(mysqli_num_rows($result)==0){			
				$alert="Sai tên đăng nhập hoặc mật khẩu !";
			}else{
				$result=mysqli_fetch_array($result);
				if($result['status']==0){
					$alert="Tài khoản của bạn đang bị vô hiệu hóa!";
				}else{
					$_SESSION['admin']=$username;
					//echo"<script>location='?option=home'</script>";
					header("location: .");
			}
		}
	}
	?>
	<div class="content">
		<h1>Login Admin</h1>
		<section>
			<form method="post">
				<section>
				<input type="text" name="username" required="" placeholder="Tài khoản" ><br><br>
				<input type="password" name="password" required="" placeholder ="Mật khẩu" id="password">
				</section><br>
				<section class="submit">
					<input style="width: 403px;" type="submit" value="Đăng nhập">
				</section>
			</form>
		</section>
		<section style="font-family: arial;font-size: 15px; text-align: center;">
			<?=isset($alert)?$alert:""?>
		</section>
	</div>
</body>