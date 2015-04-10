<?php

namespace polymer\polymer\widgets;

use yii\helpers\Html;
class CoreScaffold extends PolymerWidget
{
  public $htmlOptions = [];
  public $tag;
  public function init() {
  		echo Html::beginTag('core-scaffold', $this->htmlOptions);
  }
  public function run() {
  		echo Html::endTag('core-scaffold');
  }
}
