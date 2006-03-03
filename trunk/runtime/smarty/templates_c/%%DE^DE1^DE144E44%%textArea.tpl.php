<?php /* Smarty version 2.6.12, created on 2006-02-26 17:41:16
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/textArea.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFTextArea', 'C:/web/helloworld/helloworld/modules/examples/widgets/textArea.tpl', 5, false),)), $this); ?>

<p>WFTextArea is a textarea widget.</p>

<?php echo smarty_function_WFTextArea(array('id' => 'bio'), $this);?>


<?php echo '
<hr>
<h3>.tpl file</h3>
<pre>
{WFTextArea id="bio"}
</pre>
    
<h3>.instances file</h3>
<pre>
$__instances = array(
	\'bio\' => array(\'class\' => \'WFTextArea\', \'children\' => array()),
);
</pre>
    
<h3>.config file</h3>
<pre>
$__config = array(
	\'bio\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'bio\',
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

