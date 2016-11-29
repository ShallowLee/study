		<div class="row" id="header">
			<div class="col-md-3">
				<a href="<?=site_url()?>"><img id="logo" src="<?php echo base_url("public/img/logo.png")?>" /></a>
			</div>
			<div class="col-md-6">
				<p id="contact"><i class="glyphicon glyphicon-phone-alt"></i>400-12345678910 <i class="glyphicon glyphicon-envelope"></i>shop@goodjobs.cn</p>
				<div class="input-group">
			      <input type="text" class="form-control" placeholder="请输入商品名称或编号...">
			      <span class="input-group-btn">
			        <button class="btn btn-danger" type="button">搜索</button>
			      </span>
			    </div>
			</div>
			<div class="col-md-3 header_right">
				<div class="login_info">
					<?php if($this->session->userdata('user_is_login')){?>
						<span>欢迎回来,<?=$this->session->userdata('user_name')?></span> <a href="<?=site_url('user/logout')?>">退出</a>
					<?php }else{?>
						<a href="<?=site_url("user/login")?>">欢迎登录</a>
						<a href="<?=site_url("user/regedit")?>">快速注册</a>
					<?php }?>
				</div>
				<a href="<?=site_url('shopping/cartlist')?>" id="shopcart" class="pull-right">
					<?php 
						$CI = &get_instance();
						$CI->load->model("User_model");
					?>
					<i class="glyphicon glyphicon-shopping-cart"></i>我的购物车
					<?php if($this->session->userdata('user_is_login')){?>
					<span><?=$CI->User_model->cart_count($this->session->userdata('user_id'))?></span>
					<?php }?>
				</a>
			</div>
		</div>