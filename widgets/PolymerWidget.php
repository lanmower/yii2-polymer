<?php

namespace polymer\polymer\widgets;

use polymer\polymer\components\PolymerAssets;
class PolymerWidget extends \yii\base\Widget
{
	protected static $_assets;
<<<<<<< Updated upstream

    public function __construct(array $config) {
    	if(!self::$_assets) {
    		self::$_assets = PolymerAssets::register($view);
    	}
    }
    
    public function getAssets() {
    	return $_assets;
    }
=======
	public $htmlOptions=[];
	public function __construct(array $config = []) {
		if (! self::$_assets) {
			self::$_assets = PolymerAssets::register ( $this->getView () );
		}
		$tConfig = [];
		foreach($this->htmlOptions as $key => $value) {
			$tConfig[$key] = $value;
		}
		foreach($config as $key => $value) {
			$tConfig[$key] = $value;
		}
		parent::__construct ( $tConfig );
	}
	public function getAssets() {
		return self::$_assets;
	}
	
	/**
	 * Initializes the widget.
	 */
	public function init() {
		if(!isset($this->importPath)) $importPath = "$this->tag/$this->tag";
			else $importPath = $this->importPath;
			$this->view->registerLinkTag([
			    'rel' => 'import',
			    'href' => "{$this->assets->baseUrl}/$importPath.html",
			], $this->className());
		echo Html::beginTag ( $this->tag, $this->htmlOptions );
		return parent::init ();
	}
	
	public function run() {
		echo Html::endTag ( $this->tag );
		return parent::init ();
	}
>>>>>>> Stashed changes
}
