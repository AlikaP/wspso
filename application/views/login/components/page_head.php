
<!DOCTYPE html>
<html lang="en">
  <head>
    
	<meta charset='UTF-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	 <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $meta_title; ?></title>
    
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Custom CSS -->
    <link href="<?php echo site_url('assets/css/simple-sidebar.css'); ?>" rel="stylesheet">

	<!-- (Datepicker) -->
	<link href="<?php echo site_url('assets/css/datepicker.css'); ?>" rel="stylesheet">
	
	

<!-------------------------------------------------------------------------------->

	<link href="<?php echo site_url('assets/css/admin.css'); ?>" rel="stylesheet">

	<?php if(isset($sortable) && $sortable === TRUE): ?>
		<script src="<?php echo base_url('assets/js/jquery-ui-1.9.1.custom.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.mjs.nestedSortable.js'); ?>"></script>
	<?php endif; ?>


	<!-- TinyMCE 
	<script type="text/javascript" src="<?php echo site_url('assets/js/tiny_mce/tiny_mce.js'); ?>"></script>
	<script type="text/javascript">
		tinyMCE.init({

			
			// General options
			mode : "textareas",
			theme : "advanced",
			plugins : "autoresize,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
	
			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,

			width: 100,
  height: 400,
  autoresize_min_height: 40,
  autoresize_max_height: 80,
		});

 
  
	</script>
	 /TinyMCE -->



	

  </head>