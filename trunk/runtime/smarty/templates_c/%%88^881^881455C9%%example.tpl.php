<?php /* Smarty version 2.6.12, created on 2006-02-26 17:43:35
         compiled from C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFPaginatorPageInfo', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl', 3, false),array('function', 'WFPaginatorState', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl', 4, false),array('function', 'WFView', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl', 5, false),array('function', 'WFDynamic', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl', 9, false),array('function', 'WFURL', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl', 14, false),array('modifier', 'escape', 'C:/web/helloworld/helloworld/modules/examples/concepts/pagination/example.tpl', 31, false),)), $this); ?>

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
<p>Pagination is quite simple with PHOCOA. The WFPaginator class provides an interface to paged, sorted data. The data access is delegated to a class implementing WFPagedData. PHOCOA ships with WFPagedData implementations to provide paging for PHP arrays, Creole queries, and Propel criteria-based queries. It takes only a few minutes to convert any list view to support paging and sorting. Typically you need add only 4-6 lines of code to your module and configure several widgets for the GUI. A variety of widgets are available that provide navigation, current page info, and sort links that provide user interface for the the pagination system. The pagination system is compatible with forms as well, so if the data you're accessing is the result of a form-based query, you can have the pagination system interface with your form (via javascript) to provide paging that works seamlessly with the results of a form submission.</p>
<p>This example uses MODE_URL, which is the non-form mode. <a href="<?php echo smarty_function_WFURL(array('page' => 'exampleWithForm'), $this);?>
">Click here for a MODE_FORM example.</a></p>

<?php ob_start();  echo '
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
	\'personInfo\' => array(\'class\' => \'WFDynamic\', \'children\' => array()),
	\'pageSort\' => array(\'class\' => \'WFPaginatorSortLink\', \'children\' => array()),
	\'pageInfo\' => array(\'class\' => \'WFPaginatorPageInfo\', \'children\' => array()),
	\'pageNav\' => array(\'class\' => \'WFPaginatorNavigation\', \'children\' => array()),
);

<h3>.config File</h3>
<pre>
$__config = array(
	\'personInfo\' => array(
		\'properties\' => array(
			\'arrayController\' => \'#module#people\',
			\'widgetClass\' => \'WFLabel\',
			\'simpleBindKeyPath\' => \'name\',
		),
	),
	\'pageSort\' => array(
		\'properties\' => array(
			\'value\' => \'sort\',
			\'paginator\' => \'#module#paginator\',
		),
	),
	\'pageInfo\' => array(
		\'properties\' => array(
			\'paginator\' => \'#module#paginator\',
		),
	),
	\'pageNav\' => array(
		\'properties\' => array(
			\'paginator\' => \'#module#paginator\',
		),
	),
);
</pre>

<h3>Module Code</h3>
<pre>

require_once \'framework/WFPagination.php\';

class pagination extends WFModule
{
    protected $allPeople;
    protected $people;

    function defaultPage()
    {
        return \'example\';
    }

    // Uncomment additional functions as needed
    function sharedInstancesDidLoad()
    {
        for ($i = 1; $i <= 100; $i++) {
            $person = new Person;
            $person->setValueForKey($i, "id");
            $person->setValueForKey("Johnny #{$i}", "name");
            $this->allPeople[] = $person;
        }
        $this->paginator->setSortOptions(array(\'+sort\' => \'Ordered\', \'-sort\' => \'Ordered\'));
        $this->paginator->setDefaultSortKeys(array(\'+sort\'));
    }

    function example_ParameterList()
    {
        return array(\'paginatorState\');
    }
    function example_PageDidLoad($page, $params)
    {
        $this->paginator->setDataDelegate(new WFPagedArray($this->allPeople));
        $this->paginator->readPaginatorStateFromParams($params);
        $this->people->setContent($this->paginator->currentItems());
        $page->assign(\'people\', $this->people->arrangedObjects());
    }
}
</pre>
'; ?>
