<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" href="vendor/popup.css">
<title>Nexpay</title>
</head>
<body>
<!-- Page Content -->
<div class="container mt-5">

    <div class="row">

        

        <div class="col-lg-9">

           	<div class="popup popup--icon -success js_success-popup popup--visible">
			<div class="popup__background"></div>
			<div class="popup__content">
				<h3 class="popup__content__title">
					Success !
				</h3>
				<p> Please Check Your Phone and Insert a 4 Digit PIN to Complete the Payment.</p>
				<p>
					<!--  <a href="index.php"><button class="button button--success" data-for="js_success-popup"></button></a> -->
					<?php echo "<script>setTimeout(\"location.href = '\index.html';\",5000);
             
                    </script>"; ?>
				</p>
			</div>
		</div>

	
        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>