<?php
namespace Houtai\Common\help;
/**
 * 处理无限级分类
 */
class Category{
    /**
     * [递归一维数组]
     * @param  [type] $cate  [传递一个数组$cate]
     * @param  string $html  [标示符]
     * @param  [type] $pid   [所属哪个类]
     * @param  [type] $level [等级]
     * @return [type]        [把数组返回出去]
     */
    static function ff_bind_id($key){
	$bindcache = F('_cj/bind');
	
	return $bindcache[$key];
}
}
//http://www.thinkphp.cn/topic/13132.html