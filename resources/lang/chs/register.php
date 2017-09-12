<?php

return [
	'title' => '注册新会员',
	'notice' => '<span class="theme-text bold">支付0-50%</span> 优惠积分, <span class="theme-text bold"> 并支付50-100%</span> 注册积分。', // don't remove the <span></span>
	'package' => '配套',
	'name' => '全名',
	'username' => '账号',
	'email' => '邮箱',
	'password' => '密码',
	'repassword' => '确认密码',
	'spassword' => '安全密码',
	'respassword' => '确认安全密码',
	'direct' => '推荐人',
	'nationality' => '国籍',
	'mobile' => '移动电话',
	'uplineNotice' => '请区分大小写',
	'uplineLink' => '培育人架构',
	'upline' => 'Upline ID',
	'registerPoint' => '选择用优惠积分支付',
	'checkID' => '检查ID',
	'registerNeed' => '需支付注册积分：',
	'promoNeed' => '需支付优惠积分：',
	'modal.title' => '会员资料',
	'modal.notFound' => '没有找到该会员',
	'modal.username' => '用户名',
	'modal.name' => '全名',
	'modal.join' => '自动加入',
	'security' => '您的安全密码',
	'agree' => '我同意 <a href="' . route('terms', ['lang' => \App::getLocale()]) . '" target="_blank">该条款和协议</a>',
	'registerNotice' => '将用优惠积分支付.' // like "90% will be used on promotion point"
];