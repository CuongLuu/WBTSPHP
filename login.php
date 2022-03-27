<!DOCTYPE html>
<html>


<?php
require('layout/header.php');
?>




<body>
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>Đăng Nhập</h3>

					<div class="d-flex justify-content-end social_icon" style="margin-top: 30px">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form method="post" action="spLogin.php" class="form-horizontal container-fluid">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" placeholder="email" class="form-control" id="username" path="email" />
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="password" id="password" path="matKhau" />
						</div>
						<div class="row align-items-center remember">
							<input type="checkbox">Nhớ Mật Khẩu
						</div>
						<div class="form-group">
							<input type="submit" value="Đăng Nhập" class="btn btn-warning" style="margin-left:120px">
						</div>
						</form:form>
				</div>
				<div class="card-footer" style="margin-top: -30px">
					<div class="d-flex justify-content-center links">
						Bạn chưa có tài khoản??<a href="register.php">Đăng Ký</a>
					</div>
					<div class="d-flex justify-content-center">
						<a href="#">Quên mật khẩu?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php
require('layout/footer.php');
?>