<?php

namespace devgroup\dropzone;

use yii\web\AssetBundle;

class DropZoneAsset extends AssetBundle
{
	public $sourcePath = '@npm/dropzone/dist';

	public $css = [
		'min/dropzone.min.css',
	];

	public $js = [
		'min/dropzone.min.js',
	];

	public $depends = [
		'yii\web\JqueryAsset',
		'yii\jui\JuiAsset',
	];

	public $publishOptions = [
		'forceCopy' => YII_DEBUG ? true : false,
	];
}
