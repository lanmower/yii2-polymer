<?php

namespace polymer\polymer\widgets;

use polymer\polymer\components\PolymerAssets;
class PolymerWidget extends \yii\base\Widget
{
	protected static $_assets;

    public function __construct(array $config) {
    	if(!self::$_assets) {
    		self::$_assets = PolymerAssets::register($view);
    	}
    }
    
    public function getAssets() {
    	return $_assets;
    }
}
