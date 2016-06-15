<?php

namespace app\components;

use Yii;

class WebApplication extends \yii\web\Application
{

    /**
     * Sets the directory that stores vendor files.
     * @param string $path the directory that stores vendor files.
     */
    public function setVendorPath($path)
    {
        $vendorPath = Yii::getAlias($path);
        Yii::setAlias('@vendor', $vendorPath);
        Yii::setAlias('@bower', $vendorPath . DIRECTORY_SEPARATOR . 'bower-asset');
        Yii::setAlias('@npm', $vendorPath . DIRECTORY_SEPARATOR . 'npm');
    }

}
