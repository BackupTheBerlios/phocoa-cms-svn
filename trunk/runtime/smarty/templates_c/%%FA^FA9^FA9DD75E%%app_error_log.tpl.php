<?php /* Smarty version 2.6.12, created on 2006-02-28 14:14:56
         compiled from C:/web/phocoa/phing/../smarty/templates/app_error_log.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'C:/web/phocoa/phing/../smarty/templates/app_error_log.tpl', 2, false),)), $this); ?>
----------------------------------------------------------
Date: <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%A, %B %e, %Y %H:%M:%S') : smarty_modifier_date_format($_tmp, '%A, %B %e, %Y %H:%M:%S')); ?>

Code: <?php echo $this->_tpl_vars['exception']->getcode(); ?>

Message: <?php echo $this->_tpl_vars['exception']->getMessage(); ?>

Stack Trace:
<?php echo $this->_tpl_vars['exception']->getTraceAsString(); ?>

----------------------------------------------------------