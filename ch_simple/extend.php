<?php

return array(

	'extend' => '扩展',

	'fields' => '自定义字段',
	'fields_desc' => '创建额外的字段',

	'pagetypes' => '网站页面类型',
	'pagetypes_desc' => '创建不同的页面类型',

	'variables' => '网站变量',
	'variables_desc' => '创建附加的数据',

	'create_field' => '创建新的字段',
	'editing_custom_field' => '编辑字段 &ldquo;%s&rdquo;',
	'nofields_desc' => '还没有创建字段',

	'create_variable' => '创建新的变量',
	'editing_variable' => '编辑变量 &ldquo;%s&rdquo;',
	'novars_desc' => '没有变量',

	'create_pagetype' => '创建一个新的页面类型',
	'editing_pagetype' => '编辑页面类型 &ldquo;%s&rdquo;',

	// form fields
	'type' => '类型',
	'type_explain' => '你想给这个字段添加的内容的类型.',
	'notypes_desc' => '还没有页面类型',

	'pagetype' => '页面类型',
	'pagetype_explain' => '你想给这个字段添加的页面的类型.',

	'field' => '字段',
	'field_explain' => '输入html类型',

	'key' => '唯一值',
	'key_explain' => '字段的唯一值',
	'key_missing' => '请输入一个唯一值',
	'key_exists' => '该值已经被使用',

	'label' => '标签',
	'label_explain' => '人类可读的字段名',
	'label_missing' => '请输入一个标签',

	'attribute_type' => '文件类型',
	'attribute_type_explain' => '以逗号分隔的可接受文件类型列表，所有文件都可为空.',

	// images
	'attributes_size_width' => '图像最大宽度',
	'attributes_size_width_explain' => '如果图像超出了可允许的最大尺寸，其大小会被重新调整',

	'attributes_size_height' => '图像最大高度',
	'attributes_size_height_explain' => '如果图像超出了可允许的最大尺寸，其大小会被重新调整',

	// custom vars
	'name' => '名称',
	'name_explain' => '一个唯一的名称',
	'name_missing' => '请输入一个唯一的名称',
	'name_exists' => '该名称已被使用',

	'value' => '值',
	'value_explain' => '你想存储的数据（最大64kb）',
	'value_code_snipet' => '插入代码段到你的模板:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => '变量已被创建',
	'variable_updated' => '变量已被更新',
	'variable_deleted' => '变量已被删除',

	'pagetype_created' => '页面类型已被创建',
	'pagetype_updated' => '页面类型已被更新',
	'pagetype_deleted' => '页面类型已被删除',

	'field_created' => '字段类型已被创建',
	'field_updated' => '字段类型已被更新',
	'field_deleted' => '字段类型已被删除'

);
