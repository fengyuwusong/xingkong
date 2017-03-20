<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>欢迎！</title>
</head>
<link rel="stylesheet" type="text/css" href="/home/Public/css/bootstrap/3.3.6/bootstrap.css">
<style type="text/css">
	/*清空样式*/
	html,body{
		height: 100%;
		padding: 0;
		margin:0;
	}
	.jumbotron{
		height: 100%;
		margin: 0;
	}
	.container{
		margin-top: 10%;
		height: 40%;
		width: 50%;
	}
	a{
		width: 200px;
	}
	#login{
		padding-top: 10%;
	}
	#resign{
		padding-top: 10%;
	}
	.radio span{
		display: inline-block;
		width: 80px;
		height: 20px;
	}
</style>
<body>

	<!-- 超大屏幕 -->
	<div class="jumbotron">
		<div class="container" align="center">
			<h2>后台管理</h2>	
			<br>
			<div class="text-muted">让你更好的掌控的页面!</div>
			<br>
			<br>
			<p><a href="#" class="btn btn-success" data-toggle="modal" data-target="#login">登录</a></p>
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
							<h4 class="modal-title text-muted">登录</h4>
						</div>
						<form action="<?php echo U('home/admin/checkin');?>" method="post">
							<div class="modal-body">
								<label>
									<span class="text-muted">用户名</span>
									<input type="text" name="name" placeholder="张三" class="form-control">
								</label>
								<br>
								<br>
								<label>
									<span class="text-muted">密码</span>
									<input type="password" name="password" placeholder="***********" class="form-control">
								</label>
							</div>
							<div class="modal-footer">
								<button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
								<button class="btn btn-primary" type="submit">登录</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="/home/Public/js/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="/home/Public/js/bootstrap/3.3.6/bootstrap.js"></script>
</html>