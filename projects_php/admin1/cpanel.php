<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background: #f0f2f5;
		}
		*{
			margin: 0;
			padding: 0;
			list-style: none;
			text-decoration: none;
		}
		.header{
			width: 100%;
			height: 45px;
			background: #77706c;
			display: flex;
		}		
		.header div{
			color: white;
			margin-left: 10%;
			font-size: 20px;
			font-family: arial;
			line-height: 42px;
		}
		h1{
			font-family: arial;
		}
	</style>
</head>
<body>
	<div class="header" >
		<div>
			Xin chào <span style="color: yellow;">Admin</span>
		</div>
		<div>
			<a href="index.php"  style="margin-left: 600px; color: white; font-family: verdana; width: 150px;font-size: 15px;"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
			<a href="?option=logoutadmin" style="color: white; font-family: verdana; width: 150px; font-size: 15px; margin-left: 100px; "><i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a>

		</div>
	</div><br>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
	<tr>
		<td width="20%;">
			<section style="margin-left: 2%;">
				<a style="text-decoration: none; font-size: 20px;font-family: arial;" href="?option=brands">Quản lý danh sách chuyển đổi</a>
			</section><br><br>
			<section style="margin-left: 2%">
				<a style="text-decoration: none; font-size: 20px;font-family: arial;" href="?option=member"> Quản lý thành viên</a>
			</section>

		</td>
		<td>
			<?php
				if(isset($_GET['option'])){
					switch ($_GET['option']) {
						case 'brands':
							include"brands/brands.php";
							break;
						case 'addbrand':
							include"brands/addbrand.php";
							break;
						case 'updatebrand':
							include"brands/updatebrand.php";
							break;
						case 'member':
							include"member/member.php";
							break;
						case 'addmember':
							include"member/addmember.php";
							break;
						case 'updatemember':
							include"member/updatemember.php";
							break;
						case 'deletemember':
							$query="select*from product2 where brandid=".$_GET['id'];
							$result=$connect->query($query);
							if(mysqli_num_rows($result)!=0){
								$connect->query("update member set status=0 where id=".$_GET['id']);
							}else{
								$connect->query("delete from member where id=".$_GET['id']);
							}
							header("location: ?option=member");
							break;		
						case 'deletebrand':
							$query="select*from product where brandid=".$_GET['id'];
							$result=$connect->query($query);
							if(mysqli_num_rows($result)!=0){
								$connect->query("update brands set status=0 where id=".$_GET['id']);
							}else{
								$connect->query("delete from brands where id=".$_GET['id']);
							}
							header("location: ?option=brands");
							break;
						case 'logoutadmin':
							unset($_SESSION['admin']);
							header("location: .");
							break;
					}
				}
			?>
		</td>
	</tr>
</table> 	
</body>
</html>	