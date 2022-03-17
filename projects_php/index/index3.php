<!DOCTYPE html>
<html>
<head>
	<title>Chuyển đổi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css10.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.button a button:hover {
			box-shadow: 0 2px 4px rgb(0 0 0 / 20%), 
					0 8px 16px rgb(0 0 0 / 20%);
			transition: .7s;
		}
		.header2{
			margin-left: 42%;
			margin-top: 1.5%;
			color: #68808f;
			font-family: arial;
		}
		.header2 b{
			font-size: 20px;
		}
	</style>
</head>
<body>
	<section id="body">
	<div id="header" style="display: flex;">
		<a title="Convert Live" href="index3.php" style="width: 22%; margin-top: 1%;margin-left: 2%;"><h3 >Chuyển đổi <b>TRỰC TIẾP</b></h3></a>
		<div class="header2">
			<b>Chuyển đổi </b>  uy tín hàng đầu Việt Nam.
		</div>
	</div>
	<div id="main" class="row">
		<div id="left">
			<b style="color: red; font-family: cursive;">Công cụ chuyển đổi đơn vị</b><br><br>
			<b>Chuyển đổi TRỰC TIẾP</b> là một chuyển đổi đơn vị, cho phép bạn chuyển đổi giữa số liệu đơn vị, đơn vị hoàng gia.<br>
			Đổi giữa các đơn vị bằng cách sử dụng công cụ chuyển đổi miễn phí của chúng tôi!<br>
			 Chọn loại chuyển đổi bạn muốn.
			<br><br><br><br>
			<div id="menu" style="float: left;">
				<div class="menu_top">
					<a href="area.php"><i class="fa fa-arrows"> Khu vực</i></a>
				</div>
				<div class="menu_bot">
					<a href="area.php">Square inches <i class="fa fa-angle-right"></i> Square millimeters</a><br>
					<a href="square_feet_square_meters.php">Square feet <i class="fa fa-angle-right"></i> Square meters</a><br>
					<a href="square_yards_square_meters.php">Square yards <i class="fa fa-angle-right"></i> Square meters</a><br>
					<a href="square_miles_square_kilometers.php">Square miles <i class="fa fa-angle-right"></i> Square kilometers</a>
				</div>				
			</div>
			<div id="menu" style="margin-left: 40px; float: left;">

				<div class="menu_top">
					<a href="length.php"><i class="fa fa-arrows-v"> Độ dài</i></a>
				</div>
				<div class="menu_bot">
					<a href="length.php">Inches <i class="fa fa-angle-right"></i> millimeters</a><br>
					<a href="feet_meters.php">Feet <i class="fa fa-angle-right"></i> Meters</a><br>
					<a href="yards_meters.php">Yards <i class="fa fa-angle-right"></i> Meters</a><br>
					<a href="miles_kilometers.php">Miles <i class="fa fa-angle-right"></i> Kilometers</a>
				</div>
			</div>
			<div id="menu" style="float: left; margin-top: 40px;">
				<div class="menu_top">
					<a href="volume.php"><i class="fa fa-balance-scale"> Âm lượng</i></a>
				</div>
				<div class="menu_bot">
					<a href="volume.php">Fluid ounces <i class="fa fa-angle-right"></i> Millimeters</a><br>
					<a href="gallons.php">Gallons <i class="fa fa-angle-right"></i> Liters</a><br>
					<a href="feet.php">Cubic feet <i class="fa fa-angle-right"></i> Cubic meters</a><br>
					<a href="yards.php">Cubic yards <i class="fa fa-angle-right"></i> Cubic meters</a>
				</div>
			</div>
			<div id="menu" style="margin-left: 40px; float: left; margin-top: 50px;">
				<div class="menu_top">
					<a href="mass.php"><i class="fa fa-database"> Khối lượng</i></a>
				</div>
				<div class="menu_bot">
					<a href="mass.php">Ounces (oz) <i class="fa fa-angle-right"></i> Grams (g)</a><br>
					<a href="mass_p_k.php">Pounds (lb) <i class="fa fa-angle-right"></i> Kilograms (kg)</a><br>
					<a href="mass_s_m.php">Short tons (tM) <i class="fa fa-angle-right"></i> Mega gram (t)</a><br>
					<a href="mass_s_mt.php">Short tons (tM) <i class="fa fa-angle-right"></i> Metric ton (mt)</a><br>
				</div>
			</div>
			<div id="menu" style="float: left; margin-top: 40px;">
				<div class="menu_top">
					<a href="temperature.php"><i class="fa fa-thermometer"> Nhiệt độ</i></a>
				</div>
				<div class="menu_bot">
					<a href="temperature.php">Fahrenheit (°F) <i class="fa fa-angle-right"></i> Celsius (°C)</a><br>
					<a href="temperature_c_f.php">Celsius (°C) <i class="fa fa-angle-right"></i> Fahrenheit (°F)</a><br>
					<a href="temperature_c_k.php">Celsius (°C) <i class="fa fa-angle-right"></i> Kelvin (°K)</a><br>
					<a href="temperature_k_c.php">Kelvin (°K) <i class="fa fa-angle-right"></i> Celsius (°C)</a>
				</div>
			</div>
			<div id="menu" style="margin-left: 40px; margin-top: 45px; float: left;">
				<div class="menu_top">
					<a href="curency.php"><i class="fa fa-arrows"> Tiền tệ</i></a>
				</div>
				<div class="menu_bot">
					<a href="curency.php">USD ($) <i class="fa fa-angle-right"></i> EUR (€)</a><br>
					<a href="curency_gbp_usd.php">GBP (£) <i class="fa fa-angle-right"></i> USD ($)</a><br>
					<a href="curency_usd_vnd.php">USD ($) <i class="fa fa-angle-right"></i> VND (₫)</a><br>
					<a href="curency_gbp_vnd.php">GBP (£) <i class="fa fa-angle-right"></i> VND (₫)</a>
				</div>
			</div><br>	
			<div class="button">
				<a href=""><button style=" border: none;width: 150px; height: 40px; cursor: pointer; margin-top: 30px; margin-left: 200px;">Xem thêm .....</button></a>
			</div>			
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
				var speed=70;
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
		</div><br><br><br>
			<div style="display: flex;">
				<a title="Hệ thống đào tạo lâp trình viên quốc tế Aptech" href="https://www.facebook.com/aptechvietnam.com.vn/">
				<img src="https://d2liqplnt17rh6.cloudfront.net/coverImages/281fe98f-697f-45d0-90f7-8009c5b022c4-442.jpeg" style="width: 300px ; height: 130px; margin-left: 5%;"></a>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7297008861315!2d105.8469290148613!3d21.003469486012133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1619783335198!5m2!1svi!2s" width="400" height="180" style="border:0; margin-left: 28%;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div><br>
		<div class="text2">
			<h4 style="font-size: 20px; font-family: verdana;">Trang web được sáng lập bởi <a href="https://www.facebook.com/aptechvietnam.com.vn/" target="_blank" style="color: pink; text-decoration: underline;"> Aptech</a></h4>
		</div><br>
		<div class="text3">
			© chuyển đổi trực tiếp 2021.
		</div>
	</div>
</body>
</html>