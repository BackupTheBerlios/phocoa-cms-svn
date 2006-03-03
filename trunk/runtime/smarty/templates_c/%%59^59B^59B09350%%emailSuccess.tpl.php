<?php /* Smarty version 2.6.12, created on 2006-03-01 11:58:08
         compiled from C:/web/helloworld/helloworld/modules/helloworld/emailSuccess.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFLabel', 'C:/web/helloworld/helloworld/modules/helloworld/emailSuccess.tpl', 3, false),)), $this); ?>
<p>Successfully sent email!</p>
Date Sent: <?php echo smarty_function_WFLabel(array('id' => 'timestamp'), $this);?>
<br />
To: <?php echo smarty_function_WFLabel(array('id' => 'email'), $this);?>
<br />
Subject: <?php echo smarty_function_WFLabel(array('id' => 'subject'), $this);?>
<br />
Message: <?php echo smarty_function_WFLabel(array('id' => 'message'), $this);?>
