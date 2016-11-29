<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <img id="logo" src="<?php echo base_url();?>public/img/logo.png"  />
      <a class="navbar-brand" href="<?php echo site_url()?>">
        朱沛然的Blog</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <?php foreach($catalogs as $c){?>
          <li <?php if($c->id == $catalog_id){?>class="active"<?php }?>><a href="<?php echo site_url("/article/lists/".$c->id);?>"><?=$c->name?></a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav>