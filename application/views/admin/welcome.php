<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo admin_images_url();?>favicon.png">
    <title>Real Estate Admin Dashboard</title>
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="<?php echo admin_css_js_url();?>morrisjs/morris.css" rel="stylesheet">
    <!--Toaster Popup message CSS -->
    <link href="<?php echo admin_css_js_url();?>toast-master/css/jquery.toast.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="<?php echo admin_css_js_url();?>c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo admin_dist_url();?>css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo admin_dist_url();?>css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

<?php $this->view($layout);?>


</div>

<!-- ============================================================== -->
                    <!-- End  Main Wrapper -->
<!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo admin_css_js_url();?>jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo admin_css_js_url();?>popper/popper.min.js"></script>
    <script src="<?php echo admin_css_js_url();?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo admin_dist_url();?>js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo admin_dist_url();?>js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo admin_dist_url();?>js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo admin_dist_url();?>js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="<?php echo admin_css_js_url();?>raphael/raphael-min.js"></script>
    <script src="<?php echo admin_css_js_url();?>morrisjs/morris.min.js"></script>
    <script src="<?php echo admin_css_js_url();?>jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--c3 JavaScript -->
    <script src="<?php echo admin_css_js_url();?>d3/d3.min.js"></script>
    <script src="<?php echo admin_css_js_url();?>c3-master/c3.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo admin_css_js_url();?>toast-master/js/jquery.toast.js"></script>
    <!-- Chart JS -->
    <script src="<?php echo admin_dist_url();?>js/dashboard1.js"></script>

</body>

</html>