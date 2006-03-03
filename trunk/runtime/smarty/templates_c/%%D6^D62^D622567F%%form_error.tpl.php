<?php /* Smarty version 2.6.12, created on 2006-02-26 17:45:13
         compiled from C:/web/phocoa/phing/../smarty/templates/form_error.tpl */ ?>
<div style="margin: 5px 0; padding: 0;">
    <div class="phocoaWFMessageBox phocoaWFMessageBox_Error">
        <ul>
        <?php unset($this->_sections['error']);
$this->_sections['error']['name'] = 'error';
$this->_sections['error']['loop'] = is_array($_loop=$this->_tpl_vars['errorList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['error']['show'] = true;
$this->_sections['error']['max'] = $this->_sections['error']['loop'];
$this->_sections['error']['step'] = 1;
$this->_sections['error']['start'] = $this->_sections['error']['step'] > 0 ? 0 : $this->_sections['error']['loop']-1;
if ($this->_sections['error']['show']) {
    $this->_sections['error']['total'] = $this->_sections['error']['loop'];
    if ($this->_sections['error']['total'] == 0)
        $this->_sections['error']['show'] = false;
} else
    $this->_sections['error']['total'] = 0;
if ($this->_sections['error']['show']):

            for ($this->_sections['error']['index'] = $this->_sections['error']['start'], $this->_sections['error']['iteration'] = 1;
                 $this->_sections['error']['iteration'] <= $this->_sections['error']['total'];
                 $this->_sections['error']['index'] += $this->_sections['error']['step'], $this->_sections['error']['iteration']++):
$this->_sections['error']['rownum'] = $this->_sections['error']['iteration'];
$this->_sections['error']['index_prev'] = $this->_sections['error']['index'] - $this->_sections['error']['step'];
$this->_sections['error']['index_next'] = $this->_sections['error']['index'] + $this->_sections['error']['step'];
$this->_sections['error']['first']      = ($this->_sections['error']['iteration'] == 1);
$this->_sections['error']['last']       = ($this->_sections['error']['iteration'] == $this->_sections['error']['total']);
?>
            <li><?php echo $this->_tpl_vars['errorList'][$this->_sections['error']['index']]->errorMessage(); ?>
</li>
        <?php endfor; endif; ?>
        </ul>
    </div>
</div>