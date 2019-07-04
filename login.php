
<div class="container" style="margin-top:80px">
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3>EO Yo.Lo</h3>
								<p>Masukkan Username dan Password:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-sign-in"></i>
							</div>
						</div>
						<div class="form-bottom">
							<form action="admin/proses_login.php" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only" for="form-username">Username</label>
									<input type="text" name="username" placeholder="Username" maxlength="15" required="" autocomplete="off" class="form-username form-control" id="form-username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Password</label>
									<input id="myInput" type="password" name="password" placeholder="Password" required="" autocomplete="off" class="form-password form-control" id="form-password">
								</div>
								<div class="form-group">
									<label> <input type="checkbox" class="form-checkbox"> Show Password </label>
								</div>
								<button type="submit" class="btn btn-success" name="login">Masuk</button>
								<div class="row">
									<br>
									<div class="col-sm-6 text-center"> <a href="index.php?page=daftar"> Daftar Akun </div>
									<div class="col-sm-6 text-center"> <a href="index.php?page=lupa_pass">Lupa Password</a> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Agar bisa lihat password -->
<script type="text/javascript">
	$(document).ready(function() {
	  var cek = $('.form-checkbox').val();
	  $('.form-checkbox').click(function() {
	    if ($(this).is(':checked')) {
	      $('.form-password').attr('type', 'text');
	    } else {
	      $('.form-password').attr('type', 'password');
	    }
	  });
	});
</script>