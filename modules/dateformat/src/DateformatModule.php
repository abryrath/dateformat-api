<?php

namespace abryrath\dateformat;

use Craft;
use yii\base\Module;

class DateformatModule extends Module
{
    public static $instance;
    
    /** @inheritdoc */
    public function __construct($id, $parent = null, array $config = [])
    {
        Craft::setAlias('@dateformat', $this->getBasePath());
        $this->controllerNamespace = 'abryrath\dateformat\controllers';

        // Translation category
        $i18n = Craft::$app->getI18n();
        /**
         * @noinspection UnSafeIsSetOverArrayInspection
         */
        if (!isset($i18n->translations[$id]) && !isset($i18n->translations[$id . '*'])) {
            $i18n->translations[$id] = [
                'class' => PhpMessageSource::class,
                'sourceLanguage' => 'en-US',
                'basePath' => '@dateformat/translations',
                'forceTranslation' => true,
                'allowOverrides' => true,
            ];
        }

        static::setInstance($this);

        parent::__construct($id, $parent, $config);
    }
    /** @inheritdoc */
    public function init()
    {
        parent::init();
        self::$instance = $this;

        if (Craft::$app instanceof \craft\console\Application) {
            $this->controllerNamespace = 'abryrath\dateformat\console\controllers';
        }

        // Event Listeners
    }
}
