<?php

namespace abryrath\dateformat\controllers;

use craft\elements\Entry;
use craft\web\Controller;

class LanguagesController extends Controller
{
    protected $allowAnonymous = true;

    public function actionIndex()
    {
        $result = Entry::find()->section('dateSymbols')->level(1)->all();
        return $this->asJson($result);
    }
}
