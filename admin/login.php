
<?php session_start(); 
?>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Home</title>
	<link href="login_css/style.css" rel="stylesheet" type="text/css" media="all">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<script src="jquery/jquery.min.js"></script>
    <script>
		function login() {
			userName = document.getElementById("userName").value
			password = document.getElementById("password").value
			$.ajax({
				url: 'link-mysql.php',
				data: {
					type: 'login',
					userName: userName,
					password: password
				},
				type: 'post',
				dateType: 'json',
				success: function (data) {
					// console.log(data)
					window.location.href="index.php"
				}
			})
		}
    </script>

</head>

<body>
	<div class="login">
		<h2>后台登陆 </h2>
		<div class="login-top">
			<h1>登录</h1>
			<form>
				<input id="userName" type="text" value="用户名" onfocus="this.value = &#39;&#39;;" onblur="if (this.value == &#39;&#39;) {this.value = &#39;用户名&#39;;}">
				<input id="password" type="password" value="password" onfocus="this.value = &#39;&#39;;" onblur="if (this.value == &#39;&#39;) {this.value = &#39;password&#39;;}">
				<div class="forgot">
					<input onclick="login()" type="submit" value="登录">
				</div>
			</form>
		</div>
		<div class="login-bottom">
			<h3>广州美业美程网络科技有限公司</h3>
		</div>
	</div>
	<div class="copyright">
		<p>copyright (c) 广州美业美程网络科技有限公司</p>
	</div>



</body>

</html>