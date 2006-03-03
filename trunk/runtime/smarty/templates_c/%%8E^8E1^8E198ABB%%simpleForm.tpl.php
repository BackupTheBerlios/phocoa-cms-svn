<?php /* Smarty version 2.6.12, created on 2006-02-26 17:42:54
         compiled from C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'WFForm', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 3, false),array('function', 'WFTextField', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 5, false),array('function', 'WFLabel', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 6, false),array('function', 'WFSelect', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 7, false),array('function', 'WFTextArea', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 9, false),array('function', 'WFView', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 10, false),array('function', 'WFSubmit', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 12, false),array('modifier', 'escape', 'C:/web/helloworld/helloworld/modules/examples/widgets/simpleForm.tpl', 40, false),)), $this); ?>
<p>This is a simple form example. Notice that there is NO CODE that needs to be written to support this form. It is linked to the data object without any code. PHOCOA automatically grabs the data from the object and puts it in the form, and then puts all data back into the object when the form is submitted. Also, note how the widgets maintain their state perfectly across requests.</p>

<?php $this->_tag_stack[] = array('WFForm', array('id' => 'form')); $_block_repeat=true;smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<table border="1" cellpadding="5" cellspacing="0">
    <tr><td>Name</td><td><?php echo smarty_function_WFTextField(array('id' => 'name'), $this);?>
</td></tr>
    <tr><td>Creation DTS</td><td><?php echo smarty_function_WFLabel(array('id' => 'creationDTS'), $this);?>
</td></tr>
    <tr><td>Favorite Colors</td><td><?php echo smarty_function_WFSelect(array('id' => 'selectMultiple'), $this);?>
</td></tr>
    <tr><td>City</td><td><?php echo smarty_function_WFSelect(array('id' => 'selectOne'), $this);?>
</td></tr>
    <tr><td>Bio</td><td><?php echo smarty_function_WFTextArea(array('id' => 'textarea'), $this);?>
</td></tr>
    <tr><td>Gender</td><td><?php echo smarty_function_WFView(array('id' => 'radioOne'), $this);?>
 <?php echo smarty_function_WFView(array('id' => 'radioTwo'), $this);?>
</td></tr>
</table>
<?php echo smarty_function_WFSubmit(array('id' => 'action1'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<hr>
<h3>Person data</h3>
<p>Notice how the data of the Person object is updated automatically when you submit the form WITHOUT ANY CODE.</p>
<pre>
<?php echo $this->_tpl_vars['personData']; ?>

</pre>

<?php ob_start();  echo '
{WFForm id="form"}
<table border="1" cellpadding="5" cellspacing="0">
    <tr><td>Name</td><td>{WFTextField id="name"}</td></tr>
    <tr><td>Creation DTS</td><td>{WFLabel id="creationDTS"}</td></tr>
    <tr><td>Favorite Colors</td><td>{WFSelect id="selectMultiple"}</td></tr>
    <tr><td>City</td><td>{WFSelect id="selectOne"}</td></tr>
    <tr><td>Bio</td><td>{WFTextArea id="textarea"}</td></tr>
    <tr><td>Gender</td><td>{WFView id="radioOne"} {WFView id="radioTwo"}</td></tr>
</table>
{WFSubmit id="action1"}
{/WFForm}
'; ?>

<?php $this->_smarty_vars['capture']['tplData'] = ob_get_contents(); ob_end_clean(); ?>

<h3>.tpl File</h3>
<pre>
<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['tplData'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

</pre>

<?php echo '
<h3>.instances File</h3>
<pre>
$__instances = array(
    \'form\' => array(\'class\' => \'WFForm\', \'children\' => array(
        \'name\' => array(\'class\' => \'WFTextField\', \'children\' => array()),
        \'creationDTS\' => array(\'class\' => \'WFLabel\', \'children\' => array()),
        \'selectOne\' => array(\'class\' => \'WFSelect\', \'children\' => array()),
        \'radioButtons\' => array(\'class\' => \'WFRadioGroup\', \'children\' => array(
            \'radioTwo\' => array(\'class\' => \'WFRadio\', \'children\' => array()),
            \'radioOne\' => array(\'class\' => \'WFRadio\', \'children\' => array()),)
            ),
        \'selectMultiple\' => array(\'class\' => \'WFSelect\', \'children\' => array()),
        \'textarea\' => array(\'class\' => \'WFTextArea\', \'children\' => array()),
        \'action1\' => array(\'class\' => \'WFSubmit\', \'children\' => array()),)
    ),
);
</pre>

<h3>.config File</h3>
<pre>
$__config = array(
	\'form\' => array(
		\'properties\' => array(
			\'method\' => \'post\',
		),
	),
	\'name\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'name\',
			),
		),
	),
	\'creationDTS\' => array(
		\'properties\' => array(
			\'formatter\' => \'#module#creationDTSFormatter\',
		),
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'creationDTS\',
			),
		),
	),
	\'selectOne\' => array(
		\'bindings\' => array(
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
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'cityID\',
			),
		),
	),
	\'radioButtons\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'gender\',
			),
		),
	),
	\'selectMultiple\' => array(
		\'properties\' => array(
			\'multiple\' => true,
			\'visibleItems\' => 6,
		),
		\'bindings\' => array(
			\'values\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'favoriteColors\',
			),
			\'contentValues\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'colorValues\',
			),
		),
	),
	\'textarea\' => array(
		\'bindings\' => array(
			\'value\' => array(
				\'instanceID\' => \'person\',
				\'controllerKey\' => \'selection\',
				\'modelKeyPath\' => \'bio\',
			),
		),
	),
	\'action1\' => array(
		\'properties\' => array(
			\'label\' => \'Submit Form and Re-Display\',
		),
	),
	\'radioTwo\' => array(
		\'properties\' => array(
			\'selectedValue\' => \'male\',
			\'label\' => \'Male\',
		),
	),
	\'radioOne\' => array(
		\'properties\' => array(
			\'label\' => \'Female\',
			\'selectedValue\' => \'female\',
		),
	),
);
</pre>

<h3>Module Code</h3>
<pre>
none
</pre>
'; ?>
