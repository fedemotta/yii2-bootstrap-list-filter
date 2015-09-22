<?php
/**
 * @copyright Federico Nicolás Motta
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 * @package yii2-bootstrap-list-filter
 */
namespace fedemotta\bootstraplistfilter;

use yii\base\InvalidCallException;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Bootstrap list filter Yii2 widget
 * @author Federico Nicolás Motta <fedemotta@gmail.com>
 */
class BootstrapListFilter extends Widget
{
    /**
     * @var string the type for the search input
     */
    public $type = 'search';
    
    /**
     * @var string the name for the search input
     */
    public $name = null;
    
    /**
     * @var string the value for the search input
     */
    public $value = null;
    
    /**
     * @var array the HTML attributes for the search input.
     */
    public $options = [];
    
    /**
     * @var string the list jquery selector
     */
    public $list_selector = null;
    
    /**
     * @var array the options for the Bootstrap List Filter widget.
     */
    public $clientOptions = [];
    
    /**
     * Initializes the widget.
     * This method will register the bootstrap asset bundle. If you override this method,
     * make sure you call the parent implementation first.
     */
    public function init()
    {
        
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        echo Html::input($this->type, $this->name, $this->value, $this->options);
    }
     
    /**
     * Runs the widget.
     * This registers the necessary javascript code and renders the search input.
     * @throws InvalidCallException if `beginWidget()` and `endWidget()` calls are not matching
     */
    public function run()
    {
        $list_selector = $this->list_selector;
        $id = $this->options['id'];
        $view = $this->getView();
        $options = Json::encode($this->clientOptions);
        BootstrapListFilterAsset::register($view);
        $view->registerJs("jQuery('$list_selector').btsListFilter('#$id', $options);");
    }
}