<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\VarDumper;

/**
 * This is just an example.
 */
class CoreIcon extends PolymerWidget {
	public $tag = 'core-icon';
	public $icon;
	public $src = '/images/icons/';
	public function init() {
		//die(VarDumper::dump(self::, 10, true));
		$this->htmlOptions ['icon'] = $this->icon;
		$this->view->registerLinkTag([
				'rel' => 'import',
				'href' => "{$this->assets->baseUrl}/core-icons/core-icons.html",
				], $this->className().'-core-icons');
		return parent::init ();
	}
	
	public $src = '/images/icons/android.svg';
	public function init() {
		$this->htmlOptions ['src'] = $this->src;
		return parent::init ();
	}
}
?>

