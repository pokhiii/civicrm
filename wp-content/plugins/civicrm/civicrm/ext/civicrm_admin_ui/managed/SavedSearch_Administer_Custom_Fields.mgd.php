<?php
use CRM_CivicrmAdminUi_ExtensionUtil as E;

return [
  [
    'name' => 'SavedSearch_Administer_Custom_Fields',
    'entity' => 'SavedSearch',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Administer_Custom_Fields',
        'label' => E::ts('Administer Custom Fields'),
        'form_values' => NULL,
        'mapping_id' => NULL,
        'search_custom_id' => NULL,
        'api_entity' => 'CustomField',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'label',
            'data_type:label',
            'html_type:label',
            'is_required',
            'is_searchable',
            'is_active',
            'option_group_id:label',
          ],
          'orderBy' => [],
          'where' => [['custom_group_id.is_reserved', '=', FALSE]],
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
    'name' => 'SavedSearch_Administer_Custom_Fields_SearchDisplay_Table',
    'entity' => 'SearchDisplay',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Table',
        'label' => E::ts('Table'),
        'saved_search_id.name' => 'Administer_Custom_Fields',
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
          'sort' => [],
          'columns' => [
            [
              'type' => 'field',
              'key' => 'id',
              'dataType' => 'String',
              'label' => E::ts('ID'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'label',
              'dataType' => 'String',
              'label' => E::ts('Field Label'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'data_type:label',
              'dataType' => 'String',
              'label' => E::ts('Data Type'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'html_type:label',
              'dataType' => 'String',
              'label' => E::ts('Input Type'),
              'sortable' => TRUE,
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
              'text' => '',
              'style' => 'default',
              'size' => 'btn-xs',
              'icon' => 'fa-bars',
              'links' => [
                [
                  'entity' => 'CustomField',
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
                  'entity' => 'CustomField',
                  'action' => 'preview',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-eye',
                  'text' => E::ts('Preview'),
                  'style' => 'default',
                  'path' => '',
                  'condition' => [],
                ],
                [
                  'entity' => '',
                  'action' => '',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-list-ol',
                  'text' => E::ts('Multiple Choice Options'),
                  'style' => 'default',
                  'path' => 'civicrm/admin/custom/group/field/option?reset=1&action=browse&gid=[custom_group_id]&fid=[id]',
                  'condition' => [
                    'option_group_id:label',
                    'IS NOT EMPTY',
                  ],
                ],
                [
                  'task' => 'enable',
                  'entity' => 'CustomField',
                  'target' => 'crm-popup',
                  'icon' => 'fa-toggle-on',
                  'text' => E::ts('Enable'),
                  'style' => 'default',
                  'condition' => ['is_active', '=', FALSE],
                ],
                [
                  'task' => 'disable',
                  'entity' => 'CustomField',
                  'target' => 'crm-popup',
                  'icon' => 'fa-toggle-off',
                  'text' => E::ts('Disable'),
                  'style' => 'default',
                  'condition' => ['is_active', '=', TRUE],
                ],
                [
                  'entity' => 'CustomField',
                  'action' => 'detach',
                  'join' => '',
                  'target' => 'crm-popup',
                  'icon' => 'fa-random',
                  'text' => E::ts('Move'),
                  'style' => 'default',
                  'path' => '',
                  'condition' => [],
                ],
                [
                  'entity' => 'CustomField',
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
              'alignment' => 'text-right',
            ],
          ],
          'draggable' => 'weight',
          'cssRules' => [
            [
              'disabled',
              'is_active',
              '=',
              FALSE,
            ],
          ],
          'toolbar' => [
            [
              'entity' => 'CustomField',
              'action' => 'add',
              'target' => 'crm-popup',
              'style' => 'primary',
              'text' => E::ts('Add Custom Field'),
              'icon' => 'fa-plus',
              'autoOpen' => TRUE,
            ],
          ],
          'placeholder' => 5,
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
