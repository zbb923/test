<?php /*a:1:{s:49:"E:\phpstudy_pro\WWW\tp6\app\view\index\index.html";i:1672300942;}*/ ?>
12121212
<ul>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
    <li> <?php echo htmlentities($user['name']); ?></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

<div><?php echo $list; ?></div>