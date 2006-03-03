<?php /* Smarty version 2.6.12, created on 2006-02-26 17:41:53
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/select.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFSelect', 'C:/web/helloworld/helloworld/modules/examples/widgets/select.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_WFSelect(array('id' => 'city'), $this);?>


<?php echo '
<hr>
<h3>.tpl file</h3>
<pre>
{WFSelect id="city"}
</pre>
    
<h3>.instances file</h3>
<pre>
$__instances = array(
	\'city\' => array(\'class\' => \'WFSelect\', \'children\' => array()),
);
</pre>
    
<h3>.config file</h3>
<pre>
$__config = array(
	\'city\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'cityID\',
			),
			\'contentLabels\' => array(
				\'instanceID\' => \'cities\',
				\'controllerKey\' => \'arrangedObjects\',
				\'modelKeyPath\' => \'name\',
			),
			\'contentValues\' => array(
				\'instanceID\' => \'cities\',
				\'controllerKey\' => \'arrangedObjects\',
				\'modelKeyPath\' => \'id\',
			),
		),
	),
);
</pre>

<h3>Module Code</h3>
<pre>
none
</pre>
'; ?>
