<?php

return [

    /*
     * Specify certain columns to have different icons.
     * Uses Font Awesome icons by default.
     */
    'columns' => [
        'alpha' => [
            'rows' => [],
            'class' => 'fa fa-sort-alpha',
        ],
        'amount' => [
            'rows' => [],
            'class' => 'fa fa-sort-amount',
        ],
        'numeric' => [
            'rows' => [],
            'class' => 'fa fa-sort-numeric',
        ],
    ],

    // Whether icons should be enabled.
    'enable_icons' => true,

    // Defines icon set to use when sorted data is none above (alpha nor amount nor numeric).
    'default_icon_set' => '',

    // Icon that shows when generating sortable link while column is not sorted.
    'sortable_icon' => 'bi bi-arrow-down-up',

    // Generated icon is clickable non-clickable (default).
    'clickable_icon' => true,

    /*
     * Icon and text separator (any string) in case of 'clickable_icon' => true;
     * separator creates possibility to style icon and anchor-text properly.
     */
    'icon_text_separator' => ' ',

    // Suffix class that is appended when ascending direction is applied.
    'asc_suffix' => 'bi bi-arrow-up',

    // Suffix class that is appended when descending direction is applied.
    'desc_suffix' => 'bi bi-arrow-down',

    // Default anchor class, if value is null none is added.
    'anchor_class' => null,

    // Default active anchor class, if value is null none is added.
    'active_anchor_class' => null,

    // Default sort direction anchor class, if value is null none is added.
    'direction_anchor_class_prefix' => null,

    // Relation - column separator ex: detail.phone_number means relation "detail" and column "phone_number".
    'uri_relation_column_separator' => '.',

    // Formatting function applied to name of column, use null to turn formatting off.
    'formatting_function' => 'ucfirst',

    // Apply formatting function to custom titles as well as column names.
    'format_custom_titles' => true,

    /*
     * Inject title parameter in query strings, use null to turn injection off.
     * Example: 'inject_title' => 't' will result in ..user/?t="formatted title of sorted column".
     */
    'inject_title_as' => null,

    // Allow request modification, when default sorting is set but is not in URI (first load).
    'allow_request_modification' => true,

    // Default direction for: $user->sortable('id') usage.
    'default_direction' => 'asc',

    // Default direction for non-sorted columns.
    'default_direction_unsorted' => 'asc',

    /*
     * Use the first defined sortable column (Model::$sortable) as default.
     * Also applies if sorting parameters are invalid for example: 'sort' => 'name', 'direction' => ''.
     */
    'default_first_column' => false,

    /*
     * Join type: join vs leftJoin (default leftJoin).
     * For more information see https://github.com/Kyslik/column-sortable/issues/59.
     */
    'join_type' => 'leftJoin',
];
