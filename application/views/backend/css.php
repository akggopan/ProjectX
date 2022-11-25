<!DOCTYPE html>
<html lang="en" dir="<?php if ($text_align == 'right-to-left') echo 'rtl';?>">

<head>
    <!--     NEW THEME     -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>/vm/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>/vm/assets/img/favicon.png">
    <title><?php echo $page_title;?>&nbsp;|&nbsp;<?php echo $system_title;?></title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?php echo base_url();?>/vm/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>/vm/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
     <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?php echo base_url();?>/vm/assets/css/nucleo-svg.css" rel="stylesheet" />
     <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo base_url();?>/vm/assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
    <style>
        .navbar-vertical.navbar-expand-xs .navbar-collapse {
        display: block;
        overflow: auto;
        height: calc(100vh - 160px);
        }
    .navbar-vertical .navbar-brand>img, .navbar-vertical .navbar-brand-img {
    max-width: 100%;
    max-height: 50px;
    }
    .navbar-vertical .navbar-nav {
    flex-direction: column !important;
    margin-top: 30px;
}

    </style>
  <?php 
		//////////LOADING SYSTEM SETTINGS FOR ALL PAGES AND ACCOUNTS/////////
		$system_title	=	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
		?>


<!--   Core JS Files   -->
<script src="<?php echo base_url();?>/vm/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>/vm/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>/vm/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>/vm/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo base_url();?>/vm/assets/js/plugins/chartjs.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>/vm/assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>


  <!-- Bootstrap Core CSS -->





<!-- color CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>optimum/plugins/bower_components/dropify/dist/css/dropify.min.css" >
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/dropzone-master/dist/dropzone.css" rel="stylesheet" type="text/css" / >


<link href="<?php echo base_url(); ?>optimum/css/colors/<?php echo $this->db->get_where('settings', array('type' => 'skin_colour'))->row()->description; ?>.css" id="theme" rel="stylesheet" >
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet" >
<link rel="stylesheet" href="<?php echo base_url(); ?>optimum/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" / >

<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" / >
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css" / >
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/switchery/dist/switchery.min.css" rel="stylesheet" / >
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/icheck/skins/all.css" rel="stylesheet">


<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/plugins/bower_components/gallery/css/animated-masonry-gallery.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>optimum/plugins/bower_components/fancybox/ekko-lightbox.min.css" />

<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/calendar/dist/fullcalendar.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">


<!--Owl carousel CSS -->
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>optimum/plugins/bower_components/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>js/font-awesome-icon-picker/fontawesome-four-iconpicker.min.css" type="text/css" />


              



<script src="<?php echo base_url(); ?>optimum/js/jquery-1.11.0.min.js"></script>


<!--<link href="<?php echo base_url(); ?>optimum/fullcalendar/css/style.css" rel="stylesheet">-->

<!--Amcharts-->
<script src="<?php echo base_url(); ?>optimum/js/amcharts/amcharts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/pie.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/serial.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/gauge.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/funnel.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/radar.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/amexport.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/rgbcolor.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/canvg.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/jspdf.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/filesaver.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>optimum/js/amcharts/exporting/jspdf.plugin.addimage.js" type="text/javascript"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


        
