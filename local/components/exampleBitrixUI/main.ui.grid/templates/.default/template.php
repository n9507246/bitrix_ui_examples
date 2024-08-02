<?php
    $APPLICATION->IncludeComponent(
        'bitrix:main.ui.grid',
        '',
        [
            'GRID_ID' => 'MY_GRID_ID',
            'COLUMNS' =>  $arResult ['COLUMNS'],
            'ROWS' => $arResult ['ROWS'],
            'SHOW_ROW_CHECKBOXES' => false,  // Убирает чекбоксы
            'SHOW_SELECTED_COUNTER' => false,  // Убирает счетчик выбранных элементов
            'SHOW_TOTAL_COUNTER' => false,  // Убирает счетчик всех элементов
            'SHOW_GRID_SETTINGS_MENU' => false,  // Убирает настройки таблицы

        ]
    );
?>