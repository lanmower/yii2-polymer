<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * This is just an example.
 */
class PaperShadow extends PolymerWidget {
	public $tag = 'paper-shadow';
	public $z = 1;
	public function init() {
		$this->htmlOptions ['z'] = $this->z;
		return parent::init ();
	}
}
?>

