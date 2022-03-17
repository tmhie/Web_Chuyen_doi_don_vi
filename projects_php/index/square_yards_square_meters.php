<!DOCTYPE html>
<html>
<head>
	<title>Chuyển đổi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css10.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<section id="body">
	<div id="header">
		<a href="index3.php"><h3>Chuyển đổi <b>TRỰC TIẾP</b></h3></a>
		
	</div>
	<div id="main" class="row">
		<div id="left">
			<h1><i class="fa fa-arrows"></i> Chuyển đổi khu vực</h1><br>
			<section>
				<div style="font-size:20px;font-family: helvetica;">
					<b style="font-size: 25px;">Từ</b>: Square yards  --<i class="fa fa-angle-right"></i> Square meters 
				</div>
			</section><br>
			<section>
				<form method="post">
				<input type="number" name="square_yards" required="" min="0" value="1" style="width: 70%;height: 30px;">
				<input type="submit" value="Đổi" required="" style="height: 33px;width: 15%; margin-left: 20px;">
				</form>
			</section><br><br>
			<?php 
			if(isset($_POST['square_yards'])){
				$square_yards = $_POST['square_yards'];
				$square_meters = $square_yards * 0.83612736;
				echo "<strong style ='font-size: 20px'> $square_yards square yards = $square_meters square meters </strong> ";
			}
 			?>
 				<section style="margin-top: 25%;">
 				<div style="font-size: 20px; font-family: arial;">
 					Chuyển đổi giữa các đơn vị <span style="text-decoration: underline; font-family: bold; font-size: 21px;">Khu vực</span> bằng cách sử dụng máy tính trực tuyến của chúng tôi.<br> Nhập bất kỳ đơn vị nào bạn muốn chuyển đổi và nhấn nút Đổi.
 				</div>
 			</section>
 			<section style="margin-top: 5%;">
 				<div class="list">
	 				<a style="display: block; width: 100%;" href="area.php">Square inches --<i class="fa fa-angle-right"></i> Square millimeters </a>
	 			</div><br>
	 			<div class="list">
					<a style="display: block; width: 100%;" href="square_feet_square_meters.php">Square feet --<i class="fa fa-angle-right"></i>  Square meters</a>
	 			</div><br>
	 			<div class="list">
					<a style="display: block; width: 100%;" href="square_miles_square_kilometers.php">Square miles --<i class="fa fa-angle-right"></i> Square kilometers</a>
	 			</div>					
	 			<h1>Bảng ví dụ chuyển đổi</h1><br>
	 			<table border="1">
	 				<tr>
	 					<th rowspan="4" style="width: 130px;height: 80px">Khu vực</th>
	 					<td style="width: 500px;height: 40px; text-align: center;">1 square inches = 0.00155 square millimeters</td>
	 				</tr>
	 				<tr>
   						<td style="width: 500px;height: 40px;text-align: center;">1 square feet = 10.764 square meters</td>
   					</tr>
   					<tr>
   						<td style="width: 500px;height: 40px;text-align: center;">1 square yards = 0.83612736 square meters</td>
   					</tr>
   					<tr>
   						<td style="width: 500px;height: 40px;text-align: center;">1 square miles = 2.58998811 square kilometers</td>
   					</tr>
	 			</table>
 			</section>
		</div>
		<div id="right" >
			<div class="menu_right">
   				 <div class="sidebar">
  					 <header>LIST<b> Convert</b></header>
    					<ul>
							<li>
								<a href="area.php"><i class="fa fa-arrows"></i>Khu vực</a>
							</li>
							<li>
								<a href="length.php"><i class="fa fa-arrows-v"></i>Độ dài</a>
							</li>
							<li>
								<a href="volume.php"><i class="fa fa-balance-scale"></i>Âm lượng</a>
							</li>
							<li>
								<a href="mass.php"><i class="fa fa-database"></i>Khối lượng</a>
							</li>
							<li>
								<a href="temperature.php"><i class="fa fa-thermometer"></i>Nhiệt độ</a>
							</li>
							<li>
								<a href="curency.php"><i class="fa fa-money"></i>Tiền tệ</a>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</div>
	</section>
	<div id="footer">
		<div class="footer">
			<div class="text">
				<h2>Lưu ý khi sử dụng: </h2> <h5>Mặc dù chúng tôi rất cố gắng đảm bảo các bộ chuyển đổi chính xác nhất có thể, nhưng chúng tôi không thể đảm bảo điều đó. Trước khi bạn sử dụng bất kỳ công cụ hoặc dữ liệu chuyển đổi nào, bạn phải xác nhận tính đúng đắn của nó với một cơ quan có thẩm quyền.</h5>
			</div>
				<br><br>
			<div style="float: left;">
			
		</div>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7297008861315!2d105.8469290148613!3d21.003469486012133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1619783335198!5m2!1svi!2s" width="400" height="200" style="border:0; margin-left: 55%;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div><br>
		<div class="text2">
			<h4 style="font-size: 20px; font-family: verdana;">Trang web được sáng lập bởi <a href="https://www.facebook.com/aptechvietnam.com.vn/" style="color: pink; text-decoration: underline;"> Aptech</a></h4>
		</div><br>
		<div class="text3">
			© chuyển đổi trực tiếp 2021.
		</div>
	</div>
