<?php
return array(
	/* 模板相关配置 */
    'TMPL_PARSE_STRING' => array(
    	'__WEB_ROOT__'=>__ROOT__,
    	'__UPLOAD__' => __ROOT__.'/data/upload/',
        '__STATICS__' => __ROOT__.'/statics/',
        '__IMG__'    => __TMPL__ . 'Mall/Public/images',
        '__CSS__'    => __TMPL__ . 'Mall/Public/css',
        '__JS__'     => __TMPL__ . 'Mall/Public/js',
    	'__MALLPUBLIC__' => __TMPL__ . 'Mall/Public',
    ),
);