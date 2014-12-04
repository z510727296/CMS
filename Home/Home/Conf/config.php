<?php
return array(
    //'配置项'=>'配置值'
    'DEFAULT_MODULE'		=> 'Index', //默认模块
    'URL_MODEL'				=> '0',		//URL模式（0，1，2，3）4中模式  使用伪静态路由方法
    'URL_CASE_INSENSITIVE'  => true,	//访问规则大小写控制

    'TMPL_PARSE_STRING'  =>array(
        '__PUBLIC__' => './Public/Home/', // 更改默认的__PUBLIC__ 替换规则
        '__JS__' => '/Public/Home/JS/', 	 		// 增加新的JS类库路径替换规则
        '__UPLOAD__' => '/Uploads/Home', 	 	// 增加新的上传路径替换规则

        //调试模式配置
        'SHOW_RUN_TIME'    => true, // 运行时间显示
        'SHOW_ADV_TIME'    => true, // 显示详细的运行时间
        'SHOW_DB_TIMES'    => true, // 显示数据库查询和写入次数
        'SHOW_CACHE_TIMES' => true, // 显示缓存操作次数
        'SHOW_USE_MEM'     => true, // 显示内存开销
        'SHOW_LOAD_FILE'   => true, // 显示加载文件数
        'SHOW_FUN_TIMES'   => true, // 显示函数调用次数
    )
);