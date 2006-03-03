<?php /* Smarty version 2.6.12, created on 2006-02-26 17:41:36
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/htmlArea.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFHTMLArea', 'C:/web/helloworld/helloworld/modules/examples/widgets/htmlArea.tpl', 3, false),)), $this); ?>
<p>Our WYSIWYG control is <a href="http://fckeditor.com" target="_blank">FCKeditor</a>. It works in IE 6+ and Mozilla 7+ and FireFox. In other browsers it degrades nicely to a text area.</p>
<?php echo smarty_function_WFHTMLArea(array('id' => 'bio'), $this);?>


<?php echo '
<hr>
<h3>.tpl file</h3>
<pre>
{WFHTMLArea id="bio"}
</pre>
    
<h3>.instances file</h3>
<pre>
$__instances = array(
	\'bio\' => array(\'class\' => \'WFHTMLArea\', \'children\' => array()),
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

