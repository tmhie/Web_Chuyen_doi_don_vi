<style type="text/css">
	*{
		padding: 0;
		margin: 0;
		font-family: arial;
	}
	.tbody tr td{
		padding-left: 1%;
		font-size: 18px;
	}
	h1{
		padding-top: 0.5%;
		margin-left: 1%;
	}
	.thead tr{
		height: 40px;
	}
	.tbody tr{
		height: 50px;
	}
	.section{
		height: 200px;
		text-align: center;
		margin-bottom: 10px;
	}
	.section a{
		background: #ccc9c6;
		color: #000000;
		text-decoration: none;
		padding: 5px;
		border-radius: 5px;	
	}
</style>
<?php 
	$query="select*from brands"; 
	$result=$connect->query($query); 
?> 
<h1>Danh sách chuyển đổi</h1> 
<br>
<table width="100%" border="1" cellspacing="0" cellpadding="0"> 
	<thead class="thead"> 
		<tr> 
			<th>ID</th> 
			<th>Name</th> 
			<th>Status</th> 
			<th>Action</th> 
		</tr> 
	</thead> 
	<tbody class="tbody"> 
		<?php foreach($result as $item):?> 
			<tr> 
				<td><?=$item['id']?></td> 
				<td><?=$item['name']?></td> 
				<td><?=$item['status']==1?'Active':'UnActive'?></td> 
				<td><a href="?option=updatebrand&id=<?=$item['id']?>">Sửa</a> | <a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?');" href="?option=deletebrand&id=<?=$item['id']?>">Xóa</a></td> 
			</tr> 
		<?php endforeach;?> 
	</tbody> 
</table><br>
<section class="section"><a href="?option=addbrand">Thêm </a></section>
