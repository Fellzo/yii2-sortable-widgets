<?php

namespace kotchuprik\sortable\grid;

use kotchuprik\sortable\assets\SortableAsset;
use yii\helpers\Html;

class Column extends \yii\grid\Column
{
    public $headerOptions = ['style' => 'width: 30px;'];

    public function init()
    {
        SortableAsset::register($this->grid->view);
    }

    protected function renderDataCellContent($model, $key, $index)
    {
        return Html::tag('div', '&#9776;', [
            'class' => 'sortable-widget-handler',
            'data-id' => $model->id,
        ]);
    }
}
