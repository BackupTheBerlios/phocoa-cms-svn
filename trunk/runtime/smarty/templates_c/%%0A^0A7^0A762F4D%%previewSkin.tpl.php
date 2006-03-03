<?php /* Smarty version 2.6.12, created on 2006-02-28 14:12:22
         compiled from C:/web/helloworld/helloworld/modules/examples/skininfo/previewSkin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'WFURL', 'C:/web/helloworld/helloworld/modules/examples/skininfo/previewSkin.tpl', 5, false),)), $this); ?>
<p>This is an example of the skin <?php echo $this->_tpl_vars['skinName']; ?>
.</p>
<p>Available themes for this skin:</p>
<?php unset($this->_sections['themes_i']);
$this->_sections['themes_i']['name'] = 'themes_i';
$this->_sections['themes_i']['loop'] = is_array($_loop=$this->_tpl_vars['skinThemes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['themes_i']['show'] = true;
$this->_sections['themes_i']['max'] = $this->_sections['themes_i']['loop'];
$this->_sections['themes_i']['step'] = 1;
$this->_sections['themes_i']['start'] = $this->_sections['themes_i']['step'] > 0 ? 0 : $this->_sections['themes_i']['loop']-1;
if ($this->_sections['themes_i']['show']) {
    $this->_sections['themes_i']['total'] = $this->_sections['themes_i']['loop'];
    if ($this->_sections['themes_i']['total'] == 0)
        $this->_sections['themes_i']['show'] = false;
} else
    $this->_sections['themes_i']['total'] = 0;
if ($this->_sections['themes_i']['show']):

            for ($this->_sections['themes_i']['index'] = $this->_sections['themes_i']['start'], $this->_sections['themes_i']['iteration'] = 1;
                 $this->_sections['themes_i']['iteration'] <= $this->_sections['themes_i']['total'];
                 $this->_sections['themes_i']['index'] += $this->_sections['themes_i']['step'], $this->_sections['themes_i']['iteration']++):
$this->_sections['themes_i']['rownum'] = $this->_sections['themes_i']['iteration'];
$this->_sections['themes_i']['index_prev'] = $this->_sections['themes_i']['index'] - $this->_sections['themes_i']['step'];
$this->_sections['themes_i']['index_next'] = $this->_sections['themes_i']['index'] + $this->_sections['themes_i']['step'];
$this->_sections['themes_i']['first']      = ($this->_sections['themes_i']['iteration'] == 1);
$this->_sections['themes_i']['last']       = ($this->_sections['themes_i']['iteration'] == $this->_sections['themes_i']['total']);
?>
    <?php if ($this->_sections['themes_i']['first']): ?><ul><?php endif; ?>
    <li><a href="<?php echo smarty_function_WFURL(array('page' => 'previewSkin'), $this);?>
/<?php echo $this->_tpl_vars['currentSkinType']; ?>
/<?php echo $this->_tpl_vars['skinName']; ?>
/<?php echo $this->_tpl_vars['skinThemes'][$this->_sections['themes_i']['index']]; ?>
"><?php echo $this->_tpl_vars['skinThemes'][$this->_sections['themes_i']['index']]; ?>
</a></li>
    <?php if ($this->_sections['themes_i']['last']): ?></ul><?php endif;  endfor; else: ?>
    <p>No theme list available for this skin.</p>
<?php endif; ?>
<p>Default theme: <?php echo $this->_tpl_vars['skinDefaultTheme']; ?>
</p>
<p>Current theme: <?php echo $this->_tpl_vars['skinThemeName']; ?>
</p>
<p>Current Theme Variables:</p>
<pre><?php echo $this->_tpl_vars['skinThemeVars']; ?>
</pre>
<p><a href="<?php echo smarty_function_WFURL(array('page' => 'skinTypes'), $this);?>
">Return to skin list.</a></p>