<?php /* Smarty version 2.6.12, created on 2006-02-26 17:40:54
         compiled from C:/web/helloworld/helloworld/modules/examples/skininfo/skinTypes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFURL', 'C:/web/helloworld/helloworld/modules/examples/skininfo/skinTypes.tpl', 4, false),)), $this); ?>
<p>Installed Skin Types:</p>
<ul>
<?php unset($this->_sections['skin_i']);
$this->_sections['skin_i']['name'] = 'skin_i';
$this->_sections['skin_i']['loop'] = is_array($_loop=$this->_tpl_vars['skinTypes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['skin_i']['show'] = true;
$this->_sections['skin_i']['max'] = $this->_sections['skin_i']['loop'];
$this->_sections['skin_i']['step'] = 1;
$this->_sections['skin_i']['start'] = $this->_sections['skin_i']['step'] > 0 ? 0 : $this->_sections['skin_i']['loop']-1;
if ($this->_sections['skin_i']['show']) {
    $this->_sections['skin_i']['total'] = $this->_sections['skin_i']['loop'];
    if ($this->_sections['skin_i']['total'] == 0)
        $this->_sections['skin_i']['show'] = false;
} else
    $this->_sections['skin_i']['total'] = 0;
if ($this->_sections['skin_i']['show']):

            for ($this->_sections['skin_i']['index'] = $this->_sections['skin_i']['start'], $this->_sections['skin_i']['iteration'] = 1;
                 $this->_sections['skin_i']['iteration'] <= $this->_sections['skin_i']['total'];
                 $this->_sections['skin_i']['index'] += $this->_sections['skin_i']['step'], $this->_sections['skin_i']['iteration']++):
$this->_sections['skin_i']['rownum'] = $this->_sections['skin_i']['iteration'];
$this->_sections['skin_i']['index_prev'] = $this->_sections['skin_i']['index'] - $this->_sections['skin_i']['step'];
$this->_sections['skin_i']['index_next'] = $this->_sections['skin_i']['index'] + $this->_sections['skin_i']['step'];
$this->_sections['skin_i']['first']      = ($this->_sections['skin_i']['iteration'] == 1);
$this->_sections['skin_i']['last']       = ($this->_sections['skin_i']['iteration'] == $this->_sections['skin_i']['total']);
?>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'skinTypes'), $this);?>
/<?php echo $this->_tpl_vars['skinTypes'][$this->_sections['skin_i']['index']]; ?>
"><?php echo $this->_tpl_vars['skinTypes'][$this->_sections['skin_i']['index']]; ?>
</a></li>
<?php endfor; endif; ?>
</ul>
<p>Click a skin type to preview it and see more information.</p>

<hr />
<p>Current Skin Delegate Information:</p>
<p>Delegate Class Name: <?php echo $this->_tpl_vars['skinDelegateClassName']; ?>
</p>
<p>Installed Skins:</p>
<ul>
<?php unset($this->_sections['skin_i']);
$this->_sections['skin_i']['name'] = 'skin_i';
$this->_sections['skin_i']['loop'] = is_array($_loop=$this->_tpl_vars['skins']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['skin_i']['show'] = true;
$this->_sections['skin_i']['max'] = $this->_sections['skin_i']['loop'];
$this->_sections['skin_i']['step'] = 1;
$this->_sections['skin_i']['start'] = $this->_sections['skin_i']['step'] > 0 ? 0 : $this->_sections['skin_i']['loop']-1;
if ($this->_sections['skin_i']['show']) {
    $this->_sections['skin_i']['total'] = $this->_sections['skin_i']['loop'];
    if ($this->_sections['skin_i']['total'] == 0)
        $this->_sections['skin_i']['show'] = false;
} else
    $this->_sections['skin_i']['total'] = 0;
if ($this->_sections['skin_i']['show']):

            for ($this->_sections['skin_i']['index'] = $this->_sections['skin_i']['start'], $this->_sections['skin_i']['iteration'] = 1;
                 $this->_sections['skin_i']['iteration'] <= $this->_sections['skin_i']['total'];
                 $this->_sections['skin_i']['index'] += $this->_sections['skin_i']['step'], $this->_sections['skin_i']['iteration']++):
$this->_sections['skin_i']['rownum'] = $this->_sections['skin_i']['iteration'];
$this->_sections['skin_i']['index_prev'] = $this->_sections['skin_i']['index'] - $this->_sections['skin_i']['step'];
$this->_sections['skin_i']['index_next'] = $this->_sections['skin_i']['index'] + $this->_sections['skin_i']['step'];
$this->_sections['skin_i']['first']      = ($this->_sections['skin_i']['iteration'] == 1);
$this->_sections['skin_i']['last']       = ($this->_sections['skin_i']['iteration'] == $this->_sections['skin_i']['total']);
?>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'previewSkin'), $this);?>
/<?php echo $this->_tpl_vars['currentSkinType']; ?>
/<?php echo $this->_tpl_vars['skins'][$this->_sections['skin_i']['index']]; ?>
"><?php echo $this->_tpl_vars['skins'][$this->_sections['skin_i']['index']]; ?>
</a></li>
<?php endfor; endif; ?>
</ul>
<p>Available content:
<ul>
<?php $_from = $this->_tpl_vars['namedContentInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['contentName'] => $this->_tpl_vars['contentValue']):
?>
    <li><?php echo $this->_tpl_vars['contentName']; ?>
:
        <pre>
            <?php echo $this->_tpl_vars['contentValue']; ?>

        </pre>
    </li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</p>