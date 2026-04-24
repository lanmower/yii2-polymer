<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * This is just an example.
 */
class CoreItem extends PolymerWidget {
	public $tag = 'core-item';
	public $icon;
	public $label = '';
	public $url = false;
	public function init() {
		$this->htmlOptions ['icon'] = $this->icon;
		$this->htmlOptions ['label'] = $this->label;
		return parent::init ();
		if($this->url) echo Html::a('',$this->url);
	}
}
?>

