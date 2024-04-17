<?php
use CRM_CivicrmAdminUi_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Profile_Fields',
    'entity' => 'SavedSearch',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Profile_Fields',
        'label' => E::ts('Administer Profile Fields'),
        'form_values' => NULL,
        'mapping_id' => NULL,
        'search_custom_id' => NULL,
        'api_entity' => 'UFField',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'label',
            'visibility:label',
            'is_searchable',
            'is_required',
            'is_view',
            'is_reserved',
            'is_active',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [],
          'join' => [],
          'having' => [],
        ],
        'expires_date' => NULL,
        'description' => NULL,
      ],
      'match' => [
        'name',
      ],
    ],
  ],
  [
    'name' => 'SavedSearch_Profile_Fields_SearchDisplay_Profile_Fields',
    'entity' => 'SearchDisplay',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Profile_Fields',
        'label' => E::ts('Table'),
        'saved_search_id.name' => 'Profile_Fields',
        'type' => 'table',
        'settings' => [
          'actions' => TRUE,
          'limit' => 50,
          'classes' => [
            'table',
            'table-striped',
          ],
          'pager' => [
            'show_count' => TRUE,
            'expose_limit' => TRUE,
            'hide_single' => TRUE,
          ],
          'placeholder' => 5,
          'sort' => [],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'label',
              'dataType' => 'String',
              'label' => E::ts('Field Name'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'visibility:label',
              'dataType' => 'String',
              'label' => E::ts('Visibility'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_searchable',
              'dataType' => 'Boolean',
              'label' => E::ts('Searchable'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_required',
              'dataType' => 'Boolean',
              'label' => E::ts('Required'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_active',
              'dataType' => 'Boolean',
              'label' => E::ts('Enabled'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_view',
              'dataType' => 'Boolean',
              'label' => E::ts('View Only'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'is_reserved',
              'dataType' => 'Boolean',
              'label' => E::ts('Reserved'),
              'sortable' => TRUE,
              'rewrite' => ' ',
              'icons' => [
                [
                  'icon' => 'fa-lock',
                  'side' => 'left',
                  'if' => ['is_reserved', '=', TRUE],
                ],
              ],
            ],
            [
              'size' => 'btn-xs',
              'links' => [
                [
                  'entity' => 'UFField',
                  'action' => 'update',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-pencil',
                  'text' => E::ts('Edit'),
                  'style' => 'default',
                  'path' => '',
                  'condition' => [],
                ],
                [
                  'entity' => 'UFField',
                  'action' => 'preview',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-eye',
                  'text' => E::ts('Preview'),
                  'style' => 'default',
                  'condition' => ['is_active', '=', TRUE],
                ],
                [
                  'task' => 'enable',
                  'entity' => 'UFField',
                  'target' => 'crm-popup',
                  'icon' => 'fa-toggle-on',
                  'text' => E::ts('Enable'),
                  'style' => 'default',
                  'condition' => ['is_active', '=', FALSE],
                ],
                [
                  'task' => 'disable',
                  'entity' => 'UFField',
                  'target' => 'crm-popup',
                  'icon' => 'fa-toggle-off',
                  'text' => E::ts('Disable'),
                  'style' => 'default',
                  'condition' => ['is_active', '=', TRUE],
                ],
                [
                  'entity' => 'UFField',
                  'action' => 'delete',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-trash',
                  'text' => E::ts('Delete'),
                  'style' => 'danger',
                  'path' => '',
                  'condition' => [],
                ],
              ],
              'type' => 'menu',
              'icon' => 'fa-bars',
              'alignment' => 'text-right',
            ],
          ],
          'draggable' => 'weight',
          'button' => NULL,
          'toolbar' => [
            [
              'entity' => 'UFField',
              'action' => 'add',
              'target' => 'crm-popup',
              'style' => 'primary',
              'text' => E::ts('Add Field'),
              'icon' => 'fa-plus',
              'autoOpen' => TRUE,
            ],
          ],
          'cssRules' => [
            [
              'disabled',
              'is_active',
              '=',
              FALSE,
            ],
          ],
        ],
        'acl_bypass' => FALSE,
      ],
      'match' => [
        'name',
        'saved_search_id',
      ],
    ],
  ],
];
