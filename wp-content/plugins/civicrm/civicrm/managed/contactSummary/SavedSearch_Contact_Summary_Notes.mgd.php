<?php

return [
  [
    'name' => 'SavedSearch_Contact_Summary_Notes',
    'entity' => 'SavedSearch',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Contact_Summary_Notes',
        'label' => ts('Contact Summary Notes'),
        'form_values' => NULL,
        'mapping_id' => NULL,
        'search_custom_id' => NULL,
        'api_entity' => 'Note',
        'api_params' => [
          'version' => 4,
          'select' => [
            'id',
            'subject',
            'note',
            'note_date',
            'modified_date',
            'contact_id.sort_name',
            'GROUP_CONCAT(UNIQUE Note_EntityFile_File_01.file_name) AS GROUP_CONCAT_Note_EntityFile_File_01_file_name',
            'COUNT(Note_Note_entity_id_01.id) AS COUNT_Note_Note_entity_id_01_id',
          ],
          'orderBy' => [],
          'where' => [],
          'groupBy' => [
            'id',
          ],
          'join' => [
            [
              'File AS Note_EntityFile_File_01',
              'LEFT',
              'EntityFile',
              [
                'id',
                '=',
                'Note_EntityFile_File_01.entity_id',
              ],
              [
                'Note_EntityFile_File_01.entity_table',
                '=',
                "'civicrm_note'",
              ],
            ],
            [
              'Note AS Note_Note_entity_id_01',
              'LEFT',
              [
                'id',
                '=',
                'Note_Note_entity_id_01.entity_id',
              ],
              [
                'Note_Note_entity_id_01.entity_table',
                '=',
                "'civicrm_note'",
              ],
            ],
          ],
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
    'name' => 'SavedSearch_Contact_Summary_Notes_SearchDisplay_Contact_Summary_Notes_Tab',
    'entity' => 'SearchDisplay',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Contact_Summary_Notes_Tab',
        'label' => ts('Contact Summary Notes Tab'),
        'saved_search_id.name' => 'Contact_Summary_Notes',
        'type' => 'table',
        'settings' => [
          'description' => NULL,
          'sort' => [
            ['note_date', 'DESC'],
          ],
          'limit' => 25,
          'pager' => [
            'hide_single' => TRUE,
            'show_count' => FALSE,
            'expose_limit' => TRUE,
          ],
          'placeholder' => 5,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'subject',
              'dataType' => 'String',
              'label' => ts('Subject'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'note',
              'dataType' => 'Text',
              'label' => ts('Note'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'note_date',
              'dataType' => 'Timestamp',
              'label' => ts('Note Date'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'modified_date',
              'dataType' => 'Timestamp',
              'label' => ts('Modified'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'contact_id.sort_name',
              'dataType' => 'String',
              'label' => ts('Created By'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'GROUP_CONCAT_Note_EntityFile_File_01_file_name',
              'dataType' => 'String',
              'label' => ts('Attachments'),
              'sortable' => TRUE,
              'link' => [
                'path' => '[GROUP_CONCAT_Note_EntityFile_File_01_url]',
                'entity' => '',
                'action' => '',
                'join' => '',
                'target' => '',
              ],
              'icons' => [
                [
                  'field' => 'Note_EntityFile_File_01.icon',
                  'side' => 'left',
                ],
              ],
              'cssRules' => [
                [
                  'crm-image-popup',
                  'Note_EntityFile_File_01.is_image',
                  '=',
                  TRUE,
                ],
              ],
            ],
            [
              'size' => 'btn-xs',
              'links' => [
                [
                  'path' => 'civicrm/note?action=add&reset=1&entity_table=civicrm_note&entity_id=[id]',
                  'icon' => 'fa-comment-o',
                  'text' => '0',
                  'style' => 'default',
                  'condition' => [
                    'COUNT_Note_Note_entity_id_01_id',
                    'IS EMPTY',
                  ],
                  'task' => '',
                  'entity' => '',
                  'action' => '',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
                [
                  'path' => 'civicrm/contact/view/note/comments#?parent_id=[id]',
                  'icon' => 'fa-comments',
                  'text' => '[COUNT_Note_Note_entity_id_01_id]',
                  'style' => 'info',
                  'condition' => [
                    'COUNT_Note_Note_entity_id_01_id',
                    'IS NOT EMPTY',
                  ],
                  'task' => '',
                  'entity' => '',
                  'action' => '',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
              ],
              'type' => 'buttons',
              'alignment' => '',
              'label' => ts('Comments'),
            ],
            [
              'size' => 'btn-xs',
              'links' => [
                [
                  'icon' => 'fa-external-link',
                  'text' => ts('View'),
                  'style' => 'default',
                  'condition' => [],
                  'task' => '',
                  'entity' => 'Note',
                  'action' => 'view',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
                [
                  'icon' => 'fa-pencil',
                  'text' => ts('Edit'),
                  'style' => 'default',
                  'condition' => [],
                  'task' => '',
                  'entity' => 'Note',
                  'action' => 'update',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
                [
                  'icon' => 'fa-trash',
                  'text' => ts('Delete'),
                  'style' => 'danger',
                  'condition' => [],
                  'task' => '',
                  'entity' => 'Note',
                  'action' => 'delete',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
              ],
              'type' => 'buttons',
              'alignment' => 'text-right',
            ],
          ],
          'actions' => FALSE,
          'classes' => [
            'table',
            'table-striped',
          ],
          'headerCount' => FALSE,
          'toolbar' => [
            [
              'text' => ts('Add Note'),
              'icon' => 'fa-plus',
              'style' => 'primary',
              'entity' => 'Note',
              'action' => 'add',
              'target' => 'crm-popup',
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
  [
    'name' => 'SavedSearch_Contact_Summary_Notes_SearchDisplay_Note_Comments',
    'entity' => 'SearchDisplay',
    'cleanup' => 'always',
    'update' => 'unmodified',
    'params' => [
      'version' => 4,
      'values' => [
        'name' => 'Note_Comments',
        'label' => ts('Note Comments'),
        'saved_search_id.name' => 'Contact_Summary_Notes',
        'type' => 'table',
        'settings' => [
          'description' => NULL,
          'sort' => [
            ['note_date', 'DESC'],
          ],
          'limit' => 25,
          'pager' => [
            'hide_single' => TRUE,
            'show_count' => TRUE,
            'expose_limit' => TRUE,
          ],
          'placeholder' => 5,
          'columns' => [
            [
              'type' => 'field',
              'key' => 'subject',
              'dataType' => 'String',
              'label' => ts('Subject'),
              'sortable' => TRUE,
              'editable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'note',
              'dataType' => 'Text',
              'label' => ts('Note'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'note_date',
              'dataType' => 'Timestamp',
              'label' => ts('Note Date'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'modified_date',
              'dataType' => 'Timestamp',
              'label' => ts('Modified'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'contact_id.sort_name',
              'dataType' => 'String',
              'label' => ts('Created By'),
              'sortable' => TRUE,
            ],
            [
              'type' => 'field',
              'key' => 'GROUP_CONCAT_Note_EntityFile_File_01_file_name',
              'dataType' => 'String',
              'label' => ts('Attachments'),
              'sortable' => TRUE,
              'link' => [
                'path' => '[GROUP_CONCAT_Note_EntityFile_File_01_url]',
                'entity' => '',
                'action' => '',
                'join' => '',
                'target' => '',
              ],
              'icons' => [
                [
                  'field' => 'Note_EntityFile_File_01.icon',
                  'side' => 'left',
                ],
              ],
              'cssRules' => [
                [
                  'crm-image-popup',
                  'Note_EntityFile_File_01.is_image',
                  '=',
                  TRUE,
                ],
              ],
            ],
            [
              'size' => 'btn-xs',
              'links' => [
                [
                  'icon' => 'fa-external-link',
                  'text' => ts('View'),
                  'style' => 'default',
                  'condition' => [],
                  'task' => '',
                  'entity' => 'Note',
                  'action' => 'view',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
                [
                  'icon' => 'fa-pencil',
                  'text' => ts('Edit'),
                  'style' => 'default',
                  'condition' => [],
                  'task' => '',
                  'entity' => 'Note',
                  'action' => 'update',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
                [
                  'icon' => 'fa-trash',
                  'text' => ts('Delete'),
                  'style' => 'danger',
                  'condition' => [],
                  'task' => '',
                  'entity' => 'Note',
                  'action' => 'delete',
                  'join' => '',
                  'target' => 'crm-popup',
                ],
              ],
              'type' => 'buttons',
              'alignment' => 'text-right',
            ],
          ],
          'actions' => FALSE,
          'classes' => [
            'table',
            'table-striped',
          ],
          'headerCount' => FALSE,
          'toolbar' => [
            [
              'text' => ts('Add Comment'),
              'icon' => 'fa-plus',
              'style' => 'primary',
              'entity' => 'Note',
              'action' => 'add',
              'target' => 'crm-popup',
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
