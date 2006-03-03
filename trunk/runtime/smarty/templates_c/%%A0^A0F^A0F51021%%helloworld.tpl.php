<?php /* Smarty version 2.6.12, created on 2006-02-28 15:41:23
         compiled from C:/web/helloworld/helloworld/modules/helloworld/helloworld.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFShowErrors', 'C:/web/helloworld/helloworld/modules/helloworld/helloworld.tpl', 3, false),array('function', 'WFTextField', 'C:/web/helloworld/helloworld/modules/helloworld/helloworld.tpl', 5, false),array('function', 'WFTextArea', 'C:/web/helloworld/helloworld/modules/helloworld/helloworld.tpl', 7, false),array('function', 'WFSubmit', 'C:/web/helloworld/helloworld/modules/helloworld/helloworld.tpl', 8, false),array('block', 'WFForm', 'C:/web/helloworld/helloworld/modules/helloworld/helloworld.tpl', 4, false),)), $this); ?>
Hello, WORLD!
<?php echo smarty_function_WFShowErrors(array(), $this);?>

<?php $this->_tag_stack[] = array('WFForm', array('id' => 'form')); $_block_repeat=true;smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
Email: <?php echo smarty_function_WFTextField(array('id' => 'email'), $this);?>
<br /> <?php echo smarty_function_WFShowErrors(array('id' => 'email'), $this);?>

Subject: <?php echo smarty_function_WFTextField(array('id' => 'subject'), $this);?>
<br /> <?php echo smarty_function_WFShowErrors(array('id' => 'subject'), $this);?>

Message: <?php echo smarty_function_WFTextArea(array('id' => 'message'), $this);?>
<br />
<?php echo smarty_function_WFSubmit(array('id' => 'submit'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>