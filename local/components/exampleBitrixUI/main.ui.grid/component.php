<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    $arResult['COLUMNS'] = [
        ['id' => 'ID', 'name' => 'ID', 'default' => true, 'editable' => false],
        ['id' => 'NAME', 'name' => 'Name', 'default' => true, 'editable' => true],
        ['id' => 'AGE', 'name' => 'Age', 'default' => true, 'editable' => true],
    ];
    $arResult['ROWS'] = [
        ['data' => ['ID' => 1, 'NAME' => 'Jxxxxohn Doe', 'AGE' => 28]],
        ['data' => ['ID' => 2, 'NAME' => 'Jane Smith', 'AGE' => 34]],
    ];

    $this->includeComponentTemplate();

?>
