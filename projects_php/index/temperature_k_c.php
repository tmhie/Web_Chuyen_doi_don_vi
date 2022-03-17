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
		<a title="Convert Live" href="index3.php"><h3>Chuyển đổi <b>TRỰC TIẾP</b></h3></a>
		
	</div>
	<div id="main" class="row">
		<div id="left">
			<h1><i class="fa fa-thermometer"></i> Chuyển đổi nhiệt độ</h1><br>
			<section>
				<div style="font-size:20px;font-family: helvetica;">
					<b style="font-size: 25px;">Từ</b>: Kelvin (°K)  --<i class="fa fa-angle-right"></i> Celsius (°C) 
				</div>
			</section><br>
			<section>
				<form method="post">
				<input type="number" name="Kelvin" required="" min="0" value="1" style="width: 70%;height: 30px;">
				<input type="submit" value="Đổi" required="" style="height: 33px;width: 15%; margin-left: 20px;">
				</form>
			</section><br><br>
			<?php 
				if(isset($_POST['Kelvin'])):
				$Kelvin = $_POST['Kelvin'];
				$Celsius = $Kelvin - 273.15;
				echo "<strong style ='font-size: 20px'> $Kelvin Kelvin = $Celsius Celsius </strong> ";
 			?>
 			<?php endif; ?>
 			<section style="margin-top: 25%;">
 				<div style="font-size: 20px; font-family: arial;">
 					Chuyển đổi giữa các đơn vị <span style="text-decoration: underline; font-family: bold; font-size: 21px;">Nhiệt độ</span> bằng cách sử dụng máy tính trực tuyến của chúng tôi.<br> Nhập bất kỳ đơn vị nào bạn muốn chuyển đổi và nhấn nút Đổi.
 				</div>
 			</section>
 			<section style="margin-top: 5%;">
	 			<div class="list">
	 				<a style="display: block; width: 100%;" href="temperature.php">Fahrenheit (°F) --<i class="fa fa-angle-right"></i> Celsius (°C)</a>
	 			</div><br>
	 			<div class="list">
					<a style="display: block; width: 100%;" href="temperature_c_f.php">Celsius (°C) --<i class="fa fa-angle-right"></i> Fahrenheit (°F)</a>
	 			</div><br>
	 			<div class="list">
					<a style="display: block; width: 100%;" href="temperature_c_k.php">Celsius (°C) --<i class="fa fa-angle-right"></i> Kelvin (°K)</a>
	 			</div>
	 			<h1>Bảng ví dụ chuyển đổi</h1><br>
	 			<table border="1">
	 				<tr>
	 					<th rowspan="4" style="width: 130px;height: 80px">Nhiệt độ</th>
	 					<td style="width: 500px;height: 40px; text-align: center;">1 Celsius (°C) = 33.8 Fahrenheit (°F)</td>
	 				</tr>
	 				<tr>
   						<td style="width: 500px;height: 40px;text-align: center;">1 Fahrenheit (°F) = -17.222 Celsius (°C)</td>
   					</tr>
   					<tr>
   						<td style="width: 500px;height: 40px;text-align: center;">1 Celsius (°C) = 274.15 Kelvin (°K)</td>
   					</tr>
   					<tr>
   						<td style="width: 500px;height: 40px;text-align: center;">1 Kelvin (°K) = -272.15 Celsius (°C)</td>
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
			<a href="index3.php" style="font-size: 30px; font-family: cursive; margin-top: 50px;">	
				<script type="text/javascript">
				var text="Chuyển Đổi Trực Tiếp"
				var speed=80
				if (document.all||document.getElementById){
				document.write('<span id="highlight">' + text + '</span>')
				var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
				}
				else
				document.write(text)
				var hex=new Array("00","14","28","3C","50","64","78","8C","A0" ,"B4","C8","DC","F0")
				var r=1
				var g=1
				var b=1
				var seq=1
				function changetext(){
				rainbow="#"+hex[r]+hex[g]+hex[b]
				storetext.style.color=rainbow
				}
				function change(){
				if (seq==6){
				b--
				if (b==0)
				seq=1
				}
				if (seq==5){
				r++
				if (r==12)
				seq=6
				}
				if (seq==4){
				g--
				if (g==0)
				seq=5
				}
				if (seq==3){
				b++
				if (b==12)
				seq=4
				}
				if (seq==2){
				r--
				if (r==0)
				seq=3
				}
				if (seq==1){
				g++
				if (g==12)
				seq=2
				}
				changetext()
				}
				function starteffect(){
				if (document.all||document.getElementById)
				flash=setInterval("change()",speed)
				}
				starteffect()
				</script></a>	
		</div>
			<div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7297008861315!2d105.8469290148613!3d21.003469486012133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1619783335198!5m2!1svi!2s" width="400" height="200" style="border:0; margin-left: 55%;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		<div class="text2">
			<h4 style="font-size: 20px; font-family: verdana;">Trang web được sáng lập bởi <a href="https://www.facebook.com/aptechvietnam.com.vn/" style="color: pink; text-decoration: underline;"> Aptech</a></h4>
		</div><br>
		<div class="text3">
			© chuyển đổi trực tiếp 2021.
		</div>
	</div>
</body>
</html>