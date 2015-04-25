<?php

namespace polymer\widgets;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
use frontend\widgets\Alert;
/**
 * This is just an example.
 */
class CoreScaffold extends PolymerWidget
{
	public $contentOptions = ['style'=>'background: white; padding: 1em'];
	public $tag = "core-scaffold";
	public $tool = "";
	public $_contents = "";
	
	public function run() {
		echo Html::tag('div', $this->tool, ['tool'=>true]);
		echo Html::beginTag('div', $this->contentOptions);
        echo Breadcrumbs::widget ( [ 'links' => isset ( $this->view->params ['breadcrumbs'] ) ? $this->view->params ['breadcrumbs'] : [ ] ] );
        echo Alert::widget();
        echo $this->_contents;
        echo Html::endTag('div');
		parent::run();
	}
}
