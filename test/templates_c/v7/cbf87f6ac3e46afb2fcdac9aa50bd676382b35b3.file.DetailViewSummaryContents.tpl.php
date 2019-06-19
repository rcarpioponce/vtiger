<?php /* Smarty version Smarty-3.1.7, created on 2019-06-17 04:21:54
         compiled from "C:\wamp64\www\vtigercrm\includes\runtime/../../layouts/v7\modules\Project\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19646268965d0715623cf276-88060251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbf87f6ac3e46afb2fcdac9aa50bd676382b35b3' => 
    array (
      0 => 'C:\\wamp64\\www\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Project\\DetailViewSummaryContents.tpl',
      1 => 1560662822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19646268965d0715623cf276-88060251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5d0715623e5b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0715623e5b8')) {function content_5d0715623e5b8($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>