<?php
namespace polymer\components;
use yii\web\AssetBundle;
class PolymerAssets extends AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @vendor alias used.
	public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
	public $sourcePath = '@polymer/vendor/bower';
	public $js = [
			'/webcomponentsjs/webcomponents.min.js',
	];
}