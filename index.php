<?php 
    include 'config/configURL.php';
    include 'config/configDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo  $upload_url; ?>dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo  $upload_url; ?>dashboard/favicon.png" type="image/x-icon">
    <title>Multikart - Premium Admin Template</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/themify.css">

    <!-- slick icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/slick-theme.css">

    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/jsgrid.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $assets_url; ?>css/admin.css">

</head>
<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-0 card-left">
                   <img src="<?php echo $upload_url; ?>admin.jpeg" 
                    style="width: 300px;
                    height: 400px;">
                </div>
                <div class="col-md-7 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <form class="form-horizontal auth-form" id="login" method="POST" action="check_login.php">
                                        <div class="form-group">
                                            <input required="" name="username" type="text" class="form-control" placeholder="Username" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group">
                                            <input required=""  name="password" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                                <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" type="submit" name="login" value="login">Login</button>
                                        </div>
                                       
                                    </form>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
           
    </div>
</div>

<!-- latest jquery-->
<script src="<?php echo $assets_url; ?>js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="<?php echo $assets_url; ?>js/popper.min.js"></script>
<script src="<?php echo $assets_url; ?>js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="<?php echo $assets_url; ?>js/icons/feather-icon/feather.min.js"></script>
<script src="<?php echo $assets_url; ?>js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="<?php echo $assets_url; ?>js/sidebar-menu.js"></script>
<script src="<?php echo $assets_url; ?>js/slick.js"></script>

<!-- Jsgrid js-->
<script src="<?php echo $assets_url; ?>js/jsgrid/jsgrid.min.js"></script>
<script src="<?php echo $assets_url; ?>js/jsgrid/griddata-invoice.js"></script>
<script src="<?php echo $assets_url; ?>js/jsgrid/jsgrid-invoice.js"></script>

<!-- lazyload js-->
<script src="<?php echo $assets_url; ?>js/lazysizes.min.js"></script>

<!--right sidebar js-->
<script src="<?php echo $assets_url; ?>js/chat-menu.js"></script>

<!--script admin-->
<script src="<?php echo $assets_url; ?>js/admin-script.js"></script>
<script>
    $('.single-item').slick({
            arrows: false,
            dots: true
        }
    );
</script>

</body>
</html>
