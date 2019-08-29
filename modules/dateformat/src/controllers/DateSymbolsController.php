<?php

namespace abryrath\dateformat\controllers;

use craft\elements\Entry;
use craft\web\Controller;

class DateSymbolsController extends Controller
{
    protected $allowAnonymous = true;
    public $enableCsrfProtection = false;

    public function actionIndex()
    {
        $result = Entry::find()->section('dateSymbols')->all();
        // $result = ['tre' => 1];
        return $this->asJson($result);
    }

    protected function transform($entries)
    {
        $structure = [];
        foreach ($entries as $entry) {
            if ($entry->typeId === 1) {

            }
        }
    }
}
