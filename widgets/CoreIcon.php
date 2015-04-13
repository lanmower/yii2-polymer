<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * This is just an example.
 */
class CoreIcon extends PolymerWidget {
	public $tag = 'core-icon';
	public $icon;
	public $src = '/images/icons/android.svg';
	public function init() {
		$this->htmlOptions ['src'] = $this->src;
		return parent::init ();
	}
}
?>

