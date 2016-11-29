<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-theme.min.css" type="text/css" />
  	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" type="text/css" />


	<script charset="utf-8" src="<?php echo base_url();?>public/kindeditor/kindeditor-all-min.js"></script>
	<script charset="utf-8" src="<?php echo base_url();?>public/kindeditor/lang/zh-CN.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.upload.js"></script>
</head>
<body>

	<div class="container">
		<div class="page-header">
			<h1>添加文章</h1>
		</div>
		<div class="row">
			<div class="col-md-9 col-md-offset-1">
				<form  class="form-horizontal" action="" method="POST">
					<div class="form-group">
						<label  class="col-sm-2 control-label"><b class="error">*</b>标题:</label>
						<div class="col-sm-6">
							<input type="text"  class="form-control" name="title" value="<?php echo set_value('title')?>" size="50" />
						<?php echo form_error('title'); ?>
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-2 control-label"><b class="error">*</b>所属分类:</label>
						<div class="col-sm-3">
							<select class="form-control" name="catalog_id" >
								<option value="">请选择一个分类</option>
								<?php foreach($catalogs as $c){?>
									<option  <?php echo set_select('catalog_id', $c->id);?> value="<?=$c->id?>"><?=$c->name?></option>
								<?php }?>
							</select>
						<?php echo form_error('catalog_id'); ?>
						</div>
					</div>

					<div class="form-group">
						<label  class="col-sm-2 control-label"><b class="error">*</b>图片:</label>
						<div class="col-sm-5">
							<input type="text" id="img"  class="form-control" name="img" value="<?php echo set_value('img')?>" size="50" />
							<a id="upload" href="#">上传文件</a>
						<?php echo form_error('img'); ?>
						</div>
						<div class="col-sm-5" id="preview">
						</div>
					</div>

					<div class="form-group">
						<label  class="col-sm-2 control-label"><b class="error">*</b>描述:</label>
						<div class="col-sm-10">
							<textarea  class="form-control"  rows="5" name="desc"><?php echo set_value('desc')?></textarea>
							<?php echo form_error('desc'); ?>
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-sm-2 control-label"><b class="error">*</b>内容:</label>
						<div class="col-sm-10">
							<textarea  class="form-control" id="content" name="content"><?php echo set_value('content')?></textarea>
							<?php echo form_error('content'); ?>
						</div>
					</div>
					
					<div class="form-group">
						<label  class="col-sm-2 control-label"></label>
						<div class="col-sm-10">
							<input class="btn btn-primary" type="submit" />
							<a href="<?php echo site_url("admin/article/index")?>">返回</a>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	editor = KindEditor.create('#content', {
		allowFileManager : true
	});

	$("#upload").click(function(){
		$.upload({
	        url: '<?php echo site_url("admin/util/upload")?>', 
	        fileName: 'file', 
	        dataType: 'text',
	        onSend: function() {
	            return true;
	        },
	        onComplate: function(data) {
	        	$("#img").val(data);
	        	$("#preview").html('<img style="height:80px;" src="<?php echo base_url()?>'+data+'" />')
	        }
		});
	})
	
</script>
</html>