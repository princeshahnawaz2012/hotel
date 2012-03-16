<!-- Start: Page Wrap -->

	<!-- Header Grid Container: Start -->
	<div class="login">

	<!-- Info Notice: Start -->

	
	<!-- Info Notice: End -->

		<!-- Header: Start -->
		<div id="header">


			<!-- Logo: Start -->
			<a href="#" id="logo">Admin JavaSmile</a>
			<!-- Logo: End -->

			<!-- Login: Start -->
                        <form action="<?php echo base_url();?>index.php/auth/cekLogin" method="post" id="login">

				<!-- Username Input: Start -->
				<label for="username" class="label_username">User</label>
				<input type="text" name="username" value="username" id="username" class="password tip-stay validate" title="Enter your username" onfocus="this.value=(this.value=='username') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'username' : this.value;" />

				<!-- Username Input: End -->

				<!-- Password Input: Start -->
				<label for="password" class="label_password">Password</label>
				<input type="password" name="password" value="password" id="password" class="password tip-stay validate" title="Enter your password" onfocus="this.value=(this.value=='password') ? '' : this.value;" onblur="this.value=(this.value=='') ? 'password' : this.value;" />
				<!-- Password Input: End -->

				<!-- Login Button: Start -->
				<input type="submit" value="login" class="tip" title="Login" />
				<!-- Login Button: End -->


			</form>
			<!-- Login: End -->

		</div>
		<!-- Header: End -->

		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">

			

		</div>

		<!-- Breadcrumb Bar: End -->

	</div>
	<!-- Header Grid Container: End -->


<!-- End: Page Wrap -->
