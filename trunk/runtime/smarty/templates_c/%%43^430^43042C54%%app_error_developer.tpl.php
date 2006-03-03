<?php /* Smarty version 2.6.12, created on 2006-02-28 14:14:56
         compiled from C:/web/phocoa/phing/../smarty/templates/app_error_developer.tpl */ ?>
<p>An uncaught exception has occurred:</p>
<p><?php echo $this->_tpl_vars['exception']->getMessage(); ?>
</p>
<p>Stack Trace:</p>
<pre>
<?php echo $this->_tpl_vars['exception']->getTraceAsString(); ?>

</pre>