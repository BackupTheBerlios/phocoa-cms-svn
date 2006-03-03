<?php /* Smarty version 2.6.12, created on 2006-02-26 17:43:54
         compiled from C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'WFForm', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 3, false),array('function', 'WFPaginatorState', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 4, false),array('function', 'WFSelect', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 5, false),array('function', 'WFSubmit', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 5, false),array('function', 'WFPaginatorPageInfo', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 10, false),array('function', 'WFView', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 12, false),array('function', 'WFDynamic', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 16, false),array('function', 'WFURL', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 20, false),array('modifier', 'escape', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/exampleWithForm.tpl', 46, false),)), $this); ?>

<?php $this->_tag_stack[] = array('WFForm', array('id' => 'form')); $_block_repeat=true;smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php echo smarty_function_WFPaginatorState(array('id' => 'paginatorState'), $this);?>

    Select the number of people in the data set: <?php echo smarty_function_WFSelect(array('id' => 'numPeople'), $this);?>
 <?php echo smarty_function_WFSubmit(array('id' => 'submit'), $this);?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_WFForm($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<hr>

<?php echo smarty_function_WFPaginatorPageInfo(array('id' => 'pageInfo'), $this);?>
<br />
<?php echo smarty_function_WFPaginatorState(array('id' => 'pageNav'), $this);?>
<br />
Sort: <?php echo smarty_function_WFView(array('id' => 'pageSort'), $this);?>
<br />
<br />

<?php unset($this->_sections['peeps']);
$this->_sections['peeps']['name'] = 'peeps';
$this->_sections['peeps']['loop'] = is_array($_loop=$this->_tpl_vars['people']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['peeps']['show'] = true;
$this->_sections['peeps']['max'] = $this->_sections['peeps']['loop'];
$this->_sections['peeps']['step'] = 1;
$this->_sections['peeps']['start'] = $this->_sections['peeps']['step'] > 0 ? 0 : $this->_sections['peeps']['loop']-1;
if ($this->_sections['peeps']['show']) {
    $this->_sections['peeps']['total'] = $this->_sections['peeps']['loop'];
    if ($this->_sections['peeps']['total'] == 0)
        $this->_sections['peeps']['show'] = false;
} else
    $this->_sections['peeps']['total'] = 0;
if ($this->_sections['peeps']['show']):

            for ($this->_sections['peeps']['index'] = $this->_sections['peeps']['start'], $this->_sections['peeps']['iteration'] = 1;
                 $this->_sections['peeps']['iteration'] <= $this->_sections['peeps']['total'];
                 $this->_sections['peeps']['index'] += $this->_sections['peeps']['step'], $this->_sections['peeps']['iteration']++):
$this->_sections['peeps']['rownum'] = $this->_sections['peeps']['iteration'];
$this->_sections['peeps']['index_prev'] = $this->_sections['peeps']['index'] - $this->_sections['peeps']['step'];
$this->_sections['peeps']['index_next'] = $this->_sections['peeps']['index'] + $this->_sections['peeps']['step'];
$this->_sections['peeps']['first']      = ($this->_sections['peeps']['iteration'] == 1);
$this->_sections['peeps']['last']       = ($this->_sections['peeps']['iteration'] == $this->_sections['peeps']['total']);
 echo smarty_function_WFDynamic(array('id' => 'personInfo'), $this);?>
<br />
<?php endfor; endif; ?>

<hr>
<p>This example uses MODE_FORM, which is the mode that provides pagination for data returned as the result of a form submission. <a href="<?php echo smarty_function_WFURL(array('page' => 'example'), $this);?>
">Click here for a MODE_URL example.</a></p>
<p>This example demonstrates the PHOCOA pagination infrastructure interacting with a form. Try changing the number of items in the data set to see how the pagination infrastructure automatically handles various situations.</p>
<p>One particularly intersting thing that it does it support the notion of plural and singular forms. Try setting the data set size to 1 and see how the language changes. The language also updates automatically when the page size is set to 1.</p>

<?php ob_start();  echo '
{WFForm id="form"}
    {WFPaginatorState id="paginatorState"}
    Select the number of people in the data set: {WFSelect id="numPeople"} {WFSubmit id="submit"}
{/WFForm}

<hr>

{WFPaginatorPageInfo id="pageInfo"}<br />
{WFPaginatorState id="pageNav"}<br />
Sort: {WFView id="pageSort"}<br />
<br />

{section name=peeps loop=$people}
{WFDynamic id="personInfo"}<br />
{/section}
'; ?>

<?php $this->_smarty_vars['capture']['tplData'] = ob_get_contents(); ob_end_clean(); ?>

<h3>.tpl File</h3>
<pre>
<?php echo ((is_array($_tmp=$this->_smarty_vars['capture']['tplData'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

</pre>

<?php echo '
<h3>shared.instances File</h3>
<pre>
$__instances = array(
	\'paginator\' => \'WFPaginator\',
	\'people\' => \'WFArrayController\',
);
</pre>

<h3>shared.config File</h3>
<pre>
$__config = array(
	\'paginator\' => array(
		\'properties\' => array(
			\'itemPhraseSingular\' => \'Person\',
			\'itemPhrasePlural\' => \'People\',
			\'pageSize\' => \'10\',
		),
	),
	\'people\' => array(
		\'properties\' => array(
			\'classIdentifiers\' => \'id\',
			\'class\' => \'Person\',
		),
	),
);
</pre>

<h3>.instances File</h3>
<pre>
$__instances = array(
    \'pageSort\' => array(\'class\' => \'WFPaginatorSortLink\', \'children\' => array()),
    \'pageNav\' => array(\'class\' => \'WFPaginatorNavigation\', \'children\' => array()),
    \'pageInfo\' => array(\'class\' => \'WFPaginatorPageInfo\', \'children\' => array()),
    \'personInfo\' => array(\'class\' => \'WFDynamic\', \'children\' => array()),
    \'form\' => array(\'class\' => \'WFForm\', \'children\' => array(
        \'paginatorState\' => array(\'class\' => \'WFPaginatorState\', \'children\' => array()),
        \'numPeople\' => array(\'class\' => \'WFSelect\', \'children\' => array()),
        \'submit\' => array(\'class\' => \'WFSubmit\', \'children\' => array()),)
    ),
);
</pre>

<h3>.config File</h3>
<pre>
$__config = array(
	\'pageSort\' => array(
		\'properties\' => array(
			\'paginator\' => \'#module#paginator\',
			\'value\' => \'sort\',
		),
	),
	\'pageNav\' => array(
		\'properties\' => array(
			\'paginator\' => \'#module#paginator\',
		),
	),
	\'pageInfo\' => array(
		\'properties\' => array(
			\'paginator\' => \'#module#paginator\',
		),
	),
	\'personInfo\' => array(
		\'properties\' => array(
			\'simpleBindKeyPath\' => \'name\',
			\'arrayController\' => \'#module#people\',
			\'widgetClass\' => \'WFLabel\',
		),
	),
	\'paginatorState\' => array(
		\'properties\' => array(
			\'paginator\' => \'#module#paginator\',
		),
	),
	\'numPeople\' => array(
		\'properties\' => array(
			\'value\' => \'100\',
		),
	),
);
</pre>

<h3>Module Code</h3>
<p>Note that the module code for this example is exactly the same as the other pagination example, but with this code added:</p>
<pre>
    function exampleWithForm_ParameterList()
    {
        return array(\'paginatorState\');
    }
    function exampleWithForm_PageDidLoad($page, $params)
    {
        $this->paginator->enableModeForm(\'submit\');

        $page->outlet(\'numPeople\')->setContentValues(array(0,1,10,100));
        $somePeople = array_slice($this->allPeople, 0, $page->outlet(\'numPeople\')->value());

        $this->paginator->setDataDelegate(new WFPagedArray($somePeople));
        $this->paginator->readPaginatorStateFromParams($params);

        $this->people->setContent($this->paginator->currentItems());
        $page->assign(\'people\', $this->people->arrangedObjects());
    }
    function exampleWithForm_submit_Action($page)
    {
        // no-op
    }
</pre>
'; ?>
