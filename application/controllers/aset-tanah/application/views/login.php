<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Sistem</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <link rel="shortcut icon" href="" type="image/png" />
    <?php
    echo add_css(base_url().'assets/lte/bootstrap/css/bootstrap.min.css');
    echo add_css(base_url().'assets/lte/plugins/font-awesome/css/font-awesome.min.css');
    ?>
    <style type="text/css">
    	.container {
    		margin-top: 50px;
    	}
    </style>
</head>
<body>
	<div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
          
      </div>
    </div>
    <br>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-header">
						<legend>
              <center>
                <h2>Login Sistem</h2>
              </center>
            </legend>
					</div>
					<div class="panel-body">
						<?php echo form_open(base_url('login')); ?>
							<fieldset>
                <?php echo validation_errors(); ?>
                <div class="form-group">
                  <input class="form-control" placeholder="username" name="username" type="text" autofocus="" value="<?=set_value('username');?>" required>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Password" name="password" type="password" value="<?=set_value('password');?>" required>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" style="width: 100%;" name="login" type="submit">Masuk</button>
                </div>
              </fieldset>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
    echo add_js(base_url().'assets/lte/jquery-3.1.1.min.js');
    echo add_css(base_url().'assets/lte/bootstrap/js/bootstrap.min.js');
    ?>
</body>
</html>