<div class="container" style="margin-top:80px;">
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3>EO Yo.Lo</h3>
								<p>Ubah Password:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-sign-in"></i>
							</div>
						</div>
						<div class="form-bottom">
							<form action="admin/proses_lupapass.php" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only" for="form-username">Username</label>
									<input type="text" name="username" placeholder="Username" maxlength="15" autocomplete="off" required="" class="form-username form-control" id="form-username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Password</label>
									<input id="myInput" type="password" name="password" placeholder="Password  Baru" autocomplete="off" required="" class="form-password form-control" id="form-password">
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Konfirmasi Password</label>
									<input id="myInput2" type="password" name="repassword" placeholder="Ulangi Password Baru" autocomplete="off" required="" class="form-password form-control" id="form-password">
								</div>
								<button type="submit" class="btn btn-success" name="btnReset">Ubah</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>