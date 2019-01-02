<?php
//数据库配置字段
define('DB_HOSTNAME','localhost');
define('DB_USER','root');
define('DB_PASSWORD','machinist14');
define('DB_DBNAME','babybeiv2');
define('TB_PREFIX','doc_');
//模板配置字段
define('WEBOPEN',true);
define('WEBSIZE','500');
define('WEBSIZECOUNTS','53');
define('WEBURL','');    //PC 域名
define('MOBILEURL','');  //移动域名
define('SITENAME','BABYBEI');
define('SITEKEYWORDS','123');
define('SITESUMMARY','');
define('HTMLPATH','');
define('UPLOADPATH','/upload/');
define('TIMEZONENAME','8');
define('STYLENAME','BABYBEI');      //PC 模板
define('MOBILENAME','BABYBEI_PHONE');      //移动模板
define('URLREWRITE',false);
define('CACHETIME','0');
define('DOCPING',false);
//评论审核
define('COMMENTAUDITING',false);
//留言审核
define('GUESTBOOKAUDITING',true);

define('SKINROOT','skins');
//系统开始运行时间
define('doccmsbirthday','2016-12-27');//此处如无需要请不要随意更改，否则将无法正常运行
//编辑器
define('EDITORSTYLE','kindeditor');
//默认设置
define('ABSPATH',dirname(__FILE__).'/../');
define('ROOTPATH',''); //类似于 /xmlol (注意后面不带 /)
define('VERSION','X2016 1.1.0101');
$fileIndex 	= 'index.html';
$fileCommon = 'common.html';
//水印图片
define('ISWATER',false);
define('WATERIMGS','/inc/img/system/doccms.png');
//缩略图背景颜色设置
define('paint_bgcolor','0xffffff');
//分页样式
define('PAGESTYLE','0'); 
//首页调用模板图片的默认尺寸
define('articleWidth','630');
define('articleHight','630');
define('listWidth','630');
define('listHight','630');
define('productWidth','630');
define('productHight','630');
define('pictureWidth','630');
define('pictureHight','630');
//列表模块页缩略图大小设置

define('moduleUserWidth','120');
define('moduleUserHight','120');
/*上传图片的大小设置*/
define('productMiddlePicWidth','630');
define('productMiddlePicHight','630');
define('productSmallPicWidth','630');
define('productSmallPicHight','630');
define('pictureMiddlePicWidth','630');
define('pictureMiddlePicHight','630');
define('pictureSmallPicWidth','630');
define('pictureSmallPicHight','630');
define('videoWidth','630');
define('videoHight','630');
define('userWidth','630');
define('userHight','630');
define('linkersWidth','90');
define('linkersHight','30');
//内容页列表模块单页显示默认条数
define('listCount','12');
define('pictureCount','12');
define('productCount','6');
define('videoCount','12');
define('guestbookCount','10');
define('commentCount','6');
define('jobsCount','20');
define('calllistCount','6');
define('downloadCount','10');
//后台登录绑定IP
define('LOGINIP','');
//SMTP邮箱设置
define('productISON',false);
define('orderISON',false);
define('guestbookISON',false);
define('smtpPort','');
define('smtpServer','');
define('smtpId','');
define('smtpPwd','');
define('smtpSender','');
define('smtpReceiver','');
//支付宝设置
define('PAY_ISPAY','0');
define('PAY_ISJS','1');
define('PAY_PARTNER','');
define('PAY_KEY','');
define('PAY_SELLER','');
define('PAY_SHOW_URL','');
define('PAY_MAINNAME','');
//财付通设置
define('PAY_ISPAY_TEN','0');
define('PAY_ISJS_TEN','1');
define('PAY_PARTNER_TEN','');
define('PAY_KEY_TEN','');
define('PAY_SELLER_TEN','');
define('PAY_SHOW_URL_TEN','');
define('PAY_MAINNAME_TEN','');

function get_skin_root()
{
	return ROOTPATH.'/'.SKINROOT.'/'.STYLENAME.'/';
}
function get_abs_skin_root()
{
	return ABSPATH.'/'.SKINROOT.'/'.STYLENAME.'/';
}
function get_root_path()
{
	return ROOTPATH;
}