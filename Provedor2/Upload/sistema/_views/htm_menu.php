<?php include_once('base.php'); ?>
<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      
      <li class="header">NAVEGAÇÃO</li>
      
      <?php
      foreach ($_base['menu_lateral'] as $key => $value) {
        
        if($value['ativo']){ $menu_ativo = "active"; } else { $menu_ativo = ""; }
        
        echo "
        <li class='treeview ".$menu_ativo."'>
        <a href='".DOMINIO.$value['endereco']."'>
        <i class='".$value['icone']."'></i> <span>".$value['titulo']."</span>
        </a>
        </li>
        ";
        
      }
      ?>
      
    </ul>
  </section>
</aside>