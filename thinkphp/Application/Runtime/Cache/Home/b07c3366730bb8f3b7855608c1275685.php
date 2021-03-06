<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Rivir's blog</title>

    <!-- Bootstrap -->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-xs-8 col-xs-offset-2 text-center">
    			<a href="javascript:history.back()"></a>
    		</div>
    	</div>
    	<div class="row">
	        <div class="col-xs-3 pull-right">
	          <ul class="nav nav-tabs">
	            <li class="/"><a href="/">Home</a></li>
	            <li><a href="http://workhard.top/api/">API</a></li>
	            <li><a href="http://ctf.s7star.cn">CTF</a></li>
	            <li><a href="http://xss.s7star.cn">XSS</a></li>
	          </ul>
	        </div>
    	</div>
    	<div class="row" style="padding:20px 0px 20px 20px;">
    		<div class="col-xs-8 col-xs-offset-2">
    			<h1><?php echo ($content["title"]); ?></h1>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-xs-8 col-xs-offset-2">
    			<code>Authod:rivir <?php echo (date("Y M d H:i",$content["publish"])); ?></code>
    		</div>
    	</div>
    	<div class="row" style="padding:20px 0px 20px 0px;">
    		<div class="col-xs-8 col-xs-offset-2">
    			<?php echo (htmlspecialchars_decode($content["content"])); ?>
    		</div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Public/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Public/js/bootstrap.min.js"></script>
    <script type="text/javascript"  opacity=1 color="255,0,255" count="100"  src="//cdn.bootcss.com/canvas-nest.js/1.0.0/canvas-nest.min.js"></script>
  </body>
</html>