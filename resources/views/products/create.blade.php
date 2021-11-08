<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<style type="text/css">
		.mb-3{
			width: 500px;
			position: relative;
			left: 300px;
		}
		.mb-3 label{
              color: blue;
		}
	</style>
</head>
<body>
	<div class="container">
		<form method="POST" action="{{route('product-store')}}">
			@csrf
			<div class="mb-3">
			  <label for="name" class="form-label">Tên sản phẩm</label>
			  <input type="text" class="form-control" name="name" placeholder="">
			</div>
			<div class="mb-3">
			  <label for="price" class="form-label">Giá</label>
			  <input type="number" class="form-control" name="price" placeholder="">
			</div>
			<div class="mb-3">
			  <label for="main-image" class="form-label">Ảnh đại diện</label>
			  <input type="text" class="form-control" name="main-image" placeholder="">
			</div>
			<div class="mb-3">
			  <label for="description" class="form-label">Mô tả</label>
			  <textarea type="text" class="form-control" name="product-name" placeholder=""></textarea>
			</div>
			<div class="mb-3">
			  <label for="rate" class="form-label">Đánh giá</label>
			  <input type="text" class="form-control" name="rate" placeholder="">
			</div>
			<div class="mb-3">
			  <input style="color: white; background: #57C88A; font-weight: bold;" type="submit" class="form-control" placeholder="" value="Tạo">
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
