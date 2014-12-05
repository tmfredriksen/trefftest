<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-05 20:38:34
         compiled from "html\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11695548209ba7b0776-42984945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcbb386d0e53922f7b51d40d55db79cd918b343' => 
    array (
      0 => 'html\\navbar.tpl',
      1 => 1417807300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11695548209ba7b0776-42984945',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548209ba7ba3b1_02919992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548209ba7ba3b1_02919992')) {function content_548209ba7ba3b1_02919992($_smarty_tpl) {?>  <!-- Static navbar -->
   <div class="navbar navbar-default navbar-fixed-top">
       <div class="text-right">
     
      </div>
      <div class="container">
      
        <div class="navbar-header">
    
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Bobiltreff</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Startside</a></li>
            <li><a href="om.php">Om</a></li>
            <li><a href="Login.php">Logg inn</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mer <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="https://www.studweb.no/as/WebObjects/studentweb2?inst=HiN">StudentWEB</a></li>
                <li><a href="https://web.timeedit.se/hin_no/timeplan_a/">TimeEdit</a></li>
                <li><a href="http://www.hin.no">HiN</a></li>
                <li class="dropdown-header">Rediger konto</li>
                <li><a href="edit.php">Kontoinnstillinger</a></li>
                <li><a href="password_reset.php">Resett passord</a></li>
                
              </ul>
            </li>
             <li><div class="input-lg">  <form action="search.php" method="post">
         <textarea cols="10" rows="1" type="text" name="query" placeholder="search"></textarea>
         <button type="submit" class="btn btn-primary btn-sm" value="search">Search</button>
</div>
    		  </form></li>
          </ul>
    
       
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </br><?php }} ?>
