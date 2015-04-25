<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * This is just an example.
 */
class CoreHeaderPanel extends PolymerWidget
{
	public $tag = "core-header-panel";
	public $navigation = true;
	public $flex = true;
	
	public function init() {
		$this->htmlOptions['navigation'] = $this->navigation;
		$this->htmlOptions['flex'] = $this->flex;
		$this->htmlOptions['mode'] = 'seamed';
		return parent::init();
    }

}
