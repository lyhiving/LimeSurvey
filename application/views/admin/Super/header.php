<?php echo"<?"?>xml version="1.0"?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html<?php echo $languageRTL;?>>
<head>
<?php echo $meta;?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="<?php echo $this->config->item('adminscripts');?>tabpane/js/tabpane.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('generalscripts');?>jquery/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('generalscripts');?>jquery/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('generalscripts');?>jquery/jquery.qtip.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('generalscripts');?>jquery/jquery.notify.js"></script>
<script type="text/javascript" src="<?php echo $this->config->item('adminscripts');?>admin_core.js"></script>
<?php echo $datepickerlang;?>
<title><?php echo $sitename;?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $baseurl;?>styles/admin/<?php echo $admintheme;?>/tab.webfx.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->config->item('generalscripts');?>jquery/css/start/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>styles/admin/<?php echo $admintheme;?>/printablestyle.css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php echo $baseurl;?>styles/admin/<?php echo $admintheme;?>/adminstyle.css" />
<?php if(isset($css_admin_includes)) { foreach ($css_admin_includes as $cssinclude)
{?>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo$cssinclude;?>" />
<?php } } ?>
<link rel="shortcut icon" href="<?php echo $baseurl;?>styles/admin/favicon.ico" type="image/x-icon" />
<link rel="icon" href="<?php echo $baseurl;?>styles/admin/favicon.ico" type="image/x-icon" />
<?php echo $firebug ?>
</head>
<body>
<?php if(isset($formatdata)) { ?>
<script type='text/javascript'>
   var userdateformat='<?php echo $formatdata['jsdate']; ?>';
   var userlanguage='<?php echo $adminlang; ?>';
</script>
<?php } ?>
<?php if(isset($flashmessage)) { ?>
<div id="flashmessage" style="display:none;">
 
        <div id="themeroller" class="ui-state-highlight ui-corner-all">
        <!-- close link -->
        <a class="ui-notify-close" href="#">
            <span class="ui-icon ui-icon-close" style="float:right"></span>
        </a>
 
        <!-- alert icon -->
        <span style="float:left; margin:2px 5px 0 0;" class="ui-icon ui-icon-info"></span>
 
        <h1></h1>
        <p><?php echo $flashmessage; ?></p>
    </div>
 
    <!-- other templates here, maybe.. -->
</div>
<?php } ?>
<div class='maintitle'><?php echo $sitename; ?></div>
<div id='wrapper'>