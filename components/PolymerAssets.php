<?php
namespace polymer\polymer\PolymerAssets;
use yii\web\AssetBundle;
class PolymerAssets extends AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @vendor alias used.
	public $sourcePath = '@vendor/polymer/vendor/bower';
	public $js = [
			'/webcomponentsjs/webcomponents.min.js',
	];
}