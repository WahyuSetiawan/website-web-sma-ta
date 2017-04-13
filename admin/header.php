<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>ADMIN SMA INSTITUT INDONESIA SLEMAN</title>
		<link rel="stylesheet" type="text/css" href="dist/css/bootstrap-theme.min.css"/>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
        <link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
        <!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]-->
        <link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
        <link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/switcher.js"></script>
        <script type="text/javascript" src="js/toggle.js"></script>
        <script type="text/javascript" src="js/ui.core.js"></script>
        <script type="text/javascript" src="js/ui.tabs.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".tabs > ul").tabs();
            });
        </script>
    </head>
    <body>
        <div id="main">
            <!-- Tray -->
            <div id="tray" class="box">
                <p class="f-left box">
                    <!-- Switcher -->
                    <span class="f-left" id="switcher"> <a href="javascript:void(0);" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a> <a href="javascript:void(0)" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="" /></a> </span> ADMIN: <strong>SMA INSTITUT INDONESIA SLEMAN</strong> </p>
                <p class="f-right">User: <strong><a href="#">Administrator</a></strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong><a href="logout.php" id="logout">Log out</a></strong></p>
            </div>
            <?php include "koneksi.php"; ?>