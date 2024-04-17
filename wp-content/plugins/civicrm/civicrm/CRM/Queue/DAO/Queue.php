<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Queue/Queue.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:2a737be504b5ea96df0dbd924aa0f6ce)
 */

/**
 * Database access object for the Queue entity.
 */
class CRM_Queue_DAO_Queue extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '5.47';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_queue';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Name of the queue
   *
   * @var string
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * Type of the queue
   *
   * @var string
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $type;

  /**
   * Name of the task runner
   *
   * @var string
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $runner;

  /**
   * Maximum number of items in a batch.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $batch_limit;

  /**
   * When claiming an item (or batch of items) for work, how long should the item(s) be reserved. (Seconds)
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $lease_time;

  /**
   * Number of permitted retries. Set to zero (0) to disable.
   *
   * @var int|string
   *   (SQL type: int)
   *   Note that values will be retrieved from the database as a string.
   */
  public $retry_limit;

  /**
   * Number of seconds to wait before retrying a failed execution.
   *
   * @var int|string
   *   (SQL type: int)
   *   Note that values will be retrieved from the database as a string.
   */
  public $retry_interval;

  /**
   * Execution status
   *
   * @var string
   *   (SQL type: varchar(16))
   *   Note that values will be retrieved from the database as a string.
   */
  public $status;

  /**
   * Fallback behavior for unhandled errors
   *
   * @var string
   *   (SQL type: varchar(16))
   *   Note that values will be retrieved from the database as a string.
   */
  public $error;

  /**
   * Is this a template configuration (for use by other/future queues)?
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_template;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_queue';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Queues') : ts('Queue');
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('System Queue ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.id',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '5.47',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Name'),
          'description' => ts('Name of the queue'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.name',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.47',
        ],
        'type' => [
          'name' => 'type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Type'),
          'description' => ts('Type of the queue'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.type',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Queue_BAO_Queue::getTypes',
          ],
          'add' => '5.47',
        ],
        'runner' => [
          'name' => 'runner',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Runner'),
          'description' => ts('Name of the task runner'),
          'required' => FALSE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.runner',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.48',
        ],
        'batch_limit' => [
          'name' => 'batch_limit',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Limit'),
          'description' => ts('Maximum number of items in a batch.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.batch_limit',
          'default' => '1',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.48',
        ],
        'lease_time' => [
          'name' => 'lease_time',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Lease Time'),
          'description' => ts('When claiming an item (or batch of items) for work, how long should the item(s) be reserved. (Seconds)'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.lease_time',
          'default' => '3600',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.48',
        ],
        'retry_limit' => [
          'name' => 'retry_limit',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Retry Limit'),
          'description' => ts('Number of permitted retries. Set to zero (0) to disable.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.retry_limit',
          'default' => '0',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.48',
        ],
        'retry_interval' => [
          'name' => 'retry_interval',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Retry Interval'),
          'description' => ts('Number of seconds to wait before retrying a failed execution.'),
          'required' => FALSE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.retry_interval',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '5.48',
        ],
        'status' => [
          'name' => 'status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Status'),
          'description' => ts('Execution status'),
          'required' => FALSE,
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.status',
          'default' => 'active',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Queue_BAO_Queue::getStatuses',
          ],
          'add' => '5.51',
        ],
        'error' => [
          'name' => 'error',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Error Mode'),
          'description' => ts('Fallback behavior for unhandled errors'),
          'required' => FALSE,
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.error',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'pseudoconstant' => [
            'callback' => 'CRM_Queue_BAO_Queue::getErrorModes',
          ],
          'add' => '5.51',
        ],
        'is_template' => [
          'name' => 'is_template',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Template'),
          'description' => ts('Is this a template configuration (for use by other/future queues)?'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_queue.is_template',
          'default' => '0',
          'table_name' => 'civicrm_queue',
          'entity' => 'Queue',
          'bao' => 'CRM_Queue_BAO_Queue',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Is Template"),
          ],
          'add' => '5.51',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'queue', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'queue', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_name' => [
        'name' => 'UI_name',
        'field' => [
          0 => 'name',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_queue::1::name',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
