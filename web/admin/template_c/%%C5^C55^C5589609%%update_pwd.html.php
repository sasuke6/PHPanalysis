<?php /* Smarty version 2.6.25, created on 2016-06-20 17:18:17
         compiled from module/system/update_pwd.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['_lang']['left']['change_login_password']; ?>
</title>
<link rel="stylesheet" href="/web/admin/static/css/base.css" type="text/css">
<link rel="stylesheet" href="/web/admin/static/css/style.css" type="text/css">
<style type="text/css">

#all {text-align:left;margin-left:4px; line-height:1;}
#nodes {width:100%; float:left;border:1px #ccc solid;}
#result {width: 100%; height:100%; clear:both; border:1px #ccc solid;}

</style>
<script type="text/javascript" src="/web/admin/static/js/jquery.min.js"></script>
<script type="text/javascript">
</script>

<body>
	<div id="all">
	<div id="position"><?php echo $this->_tpl_vars['_lang']['left']['sys_manage']; ?>
：<?php echo $this->_tpl_vars['_lang']['left']['change_login_password']; ?>
</div>
                	<form  name=form action="" method="post">
					<input type='hidden' name='dopost' value='update'>
                	<table width="800"  border="0" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF">
                	   <tr bgcolor="#D2E9FF">
                	      <td colspan="2"><?php echo $this->_tpl_vars['_lang']['left']['change_password']; ?>
</td>
                	   </tr>
                       <tr bgcolor="#E0EEEE">
                           <td><?php echo $this->_tpl_vars['_lang']['left']['old_password']; ?>
</td>
                           <td><input type="password" name="password" value="" /></td>
                       </tr>
                       <tr bgcolor="#E0EEEE">
                           <td><?php echo $this->_tpl_vars['_lang']['left']['new_password']; ?>
</td>
                           <td><input type="password" name="pwd" value="" /></td>
                       </tr>
                       <tr bgcolor="#E0EEEE">
                           <td><?php echo $this->_tpl_vars['_lang']['left']['input_password_againt']; ?>
</td>
                           <td><input type="password" name="pwd1" value="" /></td>
                       </tr>
                       <tr bgcolor="#D2E9FF">
						   <td></td>
                           <td colspan="2"><div align="left">&nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['_lang']['left']['save']; ?>
" />
                                            &nbsp;&nbsp;<input type="reset" name="reset" value="<?php echo $this->_tpl_vars['_lang']['left']['modify']; ?>
" /></div></td>
						</tr>

                     </table>

                     </form>
                </div>
            </div>
</body>
</html>