<?php /* Smarty version 2.6.14, created on 2012-03-03 01:37:11
         compiled from admin_viewreports.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'admin_viewreports.tpl', 86, false),array('modifier', 'truncate', 'admin_viewreports.tpl', 90, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_viewreports1']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_viewreports2']; ?>


<br><br>

<table cellpadding='0' cellspacing='0' width='400' align='center'>
<tr>
<td align='center'>
<div class='box'>
  <table cellpadding='0' cellspacing='0' align='center'>
  <tr><form action='admin_viewreports.php' method='POST'>
  <td>
    <?php echo $this->_tpl_vars['admin_viewreports14']; ?>
<br>
    <select name='f_reason' class='text'>
    <option value=''<?php if ($this->_tpl_vars['f_reason'] == ""): ?> SELECTED<?php endif; ?>></option>
    <option value='1'<?php if ($this->_tpl_vars['f_reason'] == '1'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_viewreports8']; ?>
</option>
    <option value='2'<?php if ($this->_tpl_vars['f_reason'] == '2'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_viewreports9']; ?>
</option>
    <option value='3'<?php if ($this->_tpl_vars['f_reason'] == '3'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_viewreports10']; ?>
</option>
    <option value='0'<?php if ($this->_tpl_vars['f_reason'] == '0'): ?> SELECTED<?php endif; ?>><?php echo $this->_tpl_vars['admin_viewreports11']; ?>
</option>
    </select>&nbsp;
  </td>
  <td><?php echo $this->_tpl_vars['admin_viewreports12']; ?>
<br><input type='text' class='text' name='f_details' value='<?php echo $this->_tpl_vars['f_details']; ?>
' size='15' maxlength='50'>&nbsp;</td>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_viewreports15']; ?>
'></td>
  <input type='hidden' name='s' value='<?php echo $this->_tpl_vars['s']; ?>
'>
  </form>
  </tr>
  </table>
</div>
</td></tr></table>

<br>

<?php if ($this->_tpl_vars['total_reports'] == 0): ?>

  <table cellpadding='0' cellspacing='0' width='400' align='center'>
  <tr>
  <td align='center'>
  <div class='box'><b><?php echo $this->_tpl_vars['admin_viewreports4']; ?>
</b></div>
  </td></tr></table>
  <br>

<?php else: ?>

    <?php echo '
  <script language=\'JavaScript\'> 
  <!---
  var checkboxcount = 1;
  function doCheckAll() {
    if(checkboxcount == 0) {
      with (document.items) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = false;
      }}
      checkboxcount = checkboxcount + 1;
      }
    } else
      with (document.items) {
      for (var i=0; i < elements.length; i++) {
      if (elements[i].type == \'checkbox\') {
      elements[i].checked = true;
      }}
      checkboxcount = checkboxcount - 1;
      }
  }
  // -->
  </script>
  '; ?>


  <div class='pages'><?php echo $this->_tpl_vars['total_reports']; ?>
 <?php echo $this->_tpl_vars['admin_viewreports16']; ?>
 &nbsp;|&nbsp; <?php echo $this->_tpl_vars['admin_viewreports17']; ?>
 <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);
 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'):  echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page'];  else: ?><a href='admin_viewgroups.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_title=<?php echo $this->_tpl_vars['f_title']; ?>
&f_owner=<?php echo $this->_tpl_vars['f_owner']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>

  <form action='admin_viewreports.php' method='post' name='items'>
  <table cellpadding='0' cellspacing='0' class='list' width='100%'>
  <tr>
  <td class='header' width='1'><input type='checkbox' name='select_all' onClick='javascript:doCheckAll()'></td>
  <td class='header' width='1' style='padding-left: 0px;'><a class='header' href='admin_viewreports.php?s=<?php echo $this->_tpl_vars['i']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_object=<?php echo $this->_tpl_vars['f_object']; ?>
&f_reason=<?php echo $this->_tpl_vars['f_reason']; ?>
&f_details=<?php echo $this->_tpl_vars['f_details']; ?>
'><?php echo $this->_tpl_vars['admin_viewreports18']; ?>
</a></td>
  <td class='header' width='5%'><a class='header' href='admin_viewreports.php?s=<?php echo $this->_tpl_vars['u']; ?>
&p=<?php echo $this->_tpl_vars['p']; ?>
&f_object=<?php echo $this->_tpl_vars['f_object']; ?>
&f_reason=<?php echo $this->_tpl_vars['f_reason']; ?>
&f_details=<?php echo $this->_tpl_vars['f_details']; ?>
'><?php echo $this->_tpl_vars['admin_viewreports19']; ?>
</a></td>
  <td class='header' width='75%'><?php echo $this->_tpl_vars['admin_viewreports12']; ?>
</td>
  <td class='header' width='5%'><?php echo $this->_tpl_vars['admin_viewreports14']; ?>
</td>
  <td class='header' width='5%'><?php echo $this->_tpl_vars['admin_viewreports20']; ?>
</td>
  </tr>
  <?php unset($this->_sections['report_loop']);
$this->_sections['report_loop']['name'] = 'report_loop';
$this->_sections['report_loop']['loop'] = is_array($_loop=$this->_tpl_vars['reports']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['report_loop']['show'] = true;
$this->_sections['report_loop']['max'] = $this->_sections['report_loop']['loop'];
$this->_sections['report_loop']['step'] = 1;
$this->_sections['report_loop']['start'] = $this->_sections['report_loop']['step'] > 0 ? 0 : $this->_sections['report_loop']['loop']-1;
if ($this->_sections['report_loop']['show']) {
    $this->_sections['report_loop']['total'] = $this->_sections['report_loop']['loop'];
    if ($this->_sections['report_loop']['total'] == 0)
        $this->_sections['report_loop']['show'] = false;
} else
    $this->_sections['report_loop']['total'] = 0;
if ($this->_sections['report_loop']['show']):

            for ($this->_sections['report_loop']['index'] = $this->_sections['report_loop']['start'], $this->_sections['report_loop']['iteration'] = 1;
                 $this->_sections['report_loop']['iteration'] <= $this->_sections['report_loop']['total'];
                 $this->_sections['report_loop']['index'] += $this->_sections['report_loop']['step'], $this->_sections['report_loop']['iteration']++):
$this->_sections['report_loop']['rownum'] = $this->_sections['report_loop']['iteration'];
$this->_sections['report_loop']['index_prev'] = $this->_sections['report_loop']['index'] - $this->_sections['report_loop']['step'];
$this->_sections['report_loop']['index_next'] = $this->_sections['report_loop']['index'] + $this->_sections['report_loop']['step'];
$this->_sections['report_loop']['first']      = ($this->_sections['report_loop']['iteration'] == 1);
$this->_sections['report_loop']['last']       = ($this->_sections['report_loop']['iteration'] == $this->_sections['report_loop']['total']);
?>
    <tr class='<?php echo smarty_function_cycle(array('values' => "background1,background2"), $this);?>
'>
    <td class='item' nowrap='nowrap' style='padding-right: 0px;'><input type='checkbox' name='item_<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
' value='1'></td>
    <td class='item' nowrap='nowrap' style='padding-left: 0px;'><?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
 &nbsp;</td>
    <td class='item' nowrap='nowrap'><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_username']); ?>
' target='_blank'><?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_username']; ?>
</a> &nbsp;</td>
    <td class='item'><?php echo ((is_array($_tmp=$this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_details'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 90, "...", true) : smarty_modifier_truncate($_tmp, 90, "...", true)); ?>
 &nbsp;</td>
    <td class='item' nowrap='nowrap'><?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_reason']; ?>
 &nbsp;</td>
    <td class='item' nowrap='nowrap'>
      <a href='admin_loginasuser.php?user_id=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_user_id']; ?>
&return_url=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_url']; ?>
' target='_blank'><?php echo $this->_tpl_vars['admin_viewreports5']; ?>
</a> 
      | <a href='admin_viewreports_edit.php?report_id=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
'><?php echo $this->_tpl_vars['admin_viewreports3']; ?>
</a>
      | <a href='admin_viewreports.php?task=delete&report_id=<?php echo $this->_tpl_vars['reports'][$this->_sections['report_loop']['index']]['report_id']; ?>
'><?php echo $this->_tpl_vars['admin_viewreports6']; ?>
</a>
    </td>
    </tr>
  <?php endfor; endif; ?>
  </table>

  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
  <td>
    <br>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_viewreports7']; ?>
'>
    <input type='hidden' name='task' value='dodelete'>
    </form>
  </td>
  <td align='right' valign='top'>
    <div class='pages2'><?php echo $this->_tpl_vars['total_reports']; ?>
 <?php echo $this->_tpl_vars['admin_viewreports16']; ?>
 &nbsp;|&nbsp; <?php echo $this->_tpl_vars['admin_viewreports17']; ?>
 <?php unset($this->_sections['page_loop']);
$this->_sections['page_loop']['name'] = 'page_loop';
$this->_sections['page_loop']['loop'] = is_array($_loop=$this->_tpl_vars['pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['page_loop']['show'] = true;
$this->_sections['page_loop']['max'] = $this->_sections['page_loop']['loop'];
$this->_sections['page_loop']['step'] = 1;
$this->_sections['page_loop']['start'] = $this->_sections['page_loop']['step'] > 0 ? 0 : $this->_sections['page_loop']['loop']-1;
if ($this->_sections['page_loop']['show']) {
    $this->_sections['page_loop']['total'] = $this->_sections['page_loop']['loop'];
    if ($this->_sections['page_loop']['total'] == 0)
        $this->_sections['page_loop']['show'] = false;
} else
    $this->_sections['page_loop']['total'] = 0;
if ($this->_sections['page_loop']['show']):

            for ($this->_sections['page_loop']['index'] = $this->_sections['page_loop']['start'], $this->_sections['page_loop']['iteration'] = 1;
                 $this->_sections['page_loop']['iteration'] <= $this->_sections['page_loop']['total'];
                 $this->_sections['page_loop']['index'] += $this->_sections['page_loop']['step'], $this->_sections['page_loop']['iteration']++):
$this->_sections['page_loop']['rownum'] = $this->_sections['page_loop']['iteration'];
$this->_sections['page_loop']['index_prev'] = $this->_sections['page_loop']['index'] - $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['index_next'] = $this->_sections['page_loop']['index'] + $this->_sections['page_loop']['step'];
$this->_sections['page_loop']['first']      = ($this->_sections['page_loop']['iteration'] == 1);
$this->_sections['page_loop']['last']       = ($this->_sections['page_loop']['iteration'] == $this->_sections['page_loop']['total']);
 if ($this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['link'] == '1'):  echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page'];  else: ?><a href='admin_viewgroups.php?s=<?php echo $this->_tpl_vars['s']; ?>
&p=<?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
&f_title=<?php echo $this->_tpl_vars['f_title']; ?>
&f_owner=<?php echo $this->_tpl_vars['f_owner']; ?>
'><?php echo $this->_tpl_vars['pages'][$this->_sections['page_loop']['index']]['page']; ?>
</a><?php endif; ?> <?php endfor; endif; ?></div>
  </td>
  </tr>
  </table>
<?php endif; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>