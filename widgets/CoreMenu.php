<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/**
 * This is just an example.
 */
class CoreMenu extends PolymerWidget
{
	public $tag = 'core-menu';
	public $theme = "core-light-theme";
	public function init() {
		$this->htmlOptions['theme'] = $this->theme;
		return parent::init();
	}
}
