<?php

/**
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015
 * @package yii2-date-range
 * @version 1.6.1
 */

namespace kartik\daterange;

/**
 * DateRangePicker bundle for \kartik\daterange\DateRangePicker.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class DateRangePickerAsset extends \kartik\base\AssetBundle
{
    public $depends = [
        '\kartik\daterange\MomentAsset',
        '\kartik\daterange\DateRangePickerDefaultAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('css', ['css/daterangepicker-kv']);
        parent::init();
    }

}