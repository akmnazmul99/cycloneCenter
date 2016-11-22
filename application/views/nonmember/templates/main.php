<!DOCTYPE html>
<html lang="en" class="js no-flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <title>Cyclone Center</title>

        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>

        <link href="<?php echo base_url(); ?>resources/css/global/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/uniform.default.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/components-md-rtl.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/global/plugins-rtl.css" rel="stylesheet" type="text/css"/>

        <link href="<?php echo base_url(); ?>resources/css/admin/tasks-rtl.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/admin/layout-rtl.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>resources/css/admin/custom-rtl.css" rel="stylesheet" type="text/css"/>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>resources/js/global/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/excanvas.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url(); ?>resources/js/global/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/amcharts/amcharts.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>resources/js/global/amcharts/serial.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>resources/js/global/amcharts/pie.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>resources/js/global/amcharts/light.js" type="text/javascript" ></script>
        <script src="<?php echo base_url(); ?>resources/js/global/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/raphael-min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/global/metronic.js" type="text/javascript"></script>

        <script src="<?php echo base_url(); ?>resources/js/admin/layout.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/admin/quick-sidebar.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/admin/index.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>resources/js/admin/tasks.js" type="text/javascript"></script>

    </head>
    <body class="page-md page-quick-sidebar-over-content">
        <?php $this->load->view('nonmember/templates/sections/header'); ?>
        <div class="container-fluid ">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 form-group">
                    <?php echo $contents; ?>
                </div>
            </div>
        </div>
    </body>
</html>