<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/Dashboard.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1794407b4bd25c2c73eb6ea55162e2b8)
 */

/**
 * Database access object for the Dashboard entity.
 */
class CRM_Core_DAO_Dashboard extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '3.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_dashboard';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'label';

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
   * Domain for dashboard
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $domain_id;

  /**
   * Internal name of dashlet.
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * dashlet title
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $label;

  /**
   * url in case of external dashlet
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $url;

  /**
   * Permission for the dashlet
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $permission;

  /**
   * Permission Operator
   *
   * @var string|null
   *   (SQL type: varchar(3))
   *   Note that values will be retrieved from the database as a string.
   */
  public $permission_operator;

  /**
   * fullscreen url for dashlet
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $fullscreen_url;

  /**
   * Is this dashlet active?
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_active;

  /**
   * Is this dashlet reserved?
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_reserved;

  /**
   * Number of minutes to cache dashlet content in browser localStorage.
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $cache_minutes;

  /**
   * Element name of angular directive to invoke (lowercase hyphenated format)
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $directive;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_dashboard';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Dashboards') : ts('Dashboard');
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
          'title' => ts('DashletID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.id',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '3.1',
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain ID'),
          'description' => ts('Domain for dashboard'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.domain_id',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Domain',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Domain"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_domain',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ],
          'add' => '3.1',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Name'),
          'description' => ts('Internal name of dashlet.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.name',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Title'),
          'description' => ts('dashlet title'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.label',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 1,
          'add' => '3.1',
        ],
        'url' => [
          'name' => 'url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet URL'),
          'description' => ts('url in case of external dashlet'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.url',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'add' => '3.1',
        ],
        'permission' => [
          'name' => 'permission',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Permission'),
          'description' => ts('Permission for the dashlet'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.permission',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_COMMA,
          'add' => '3.1',
        ],
        'permission_operator' => [
          'name' => 'permission_operator',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Dashlet Permission Operator'),
          'description' => ts('Permission Operator'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.permission_operator',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Core_SelectValues::andOr',
          ],
          'add' => '3.1',
        ],
        'fullscreen_url' => [
          'name' => 'fullscreen_url',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Fullscreen URL'),
          'description' => ts('fullscreen url for dashlet'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.fullscreen_url',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'add' => '3.4',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Dashlet Active?'),
          'description' => ts('Is this dashlet active?'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.is_active',
          'default' => '0',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Enabled"),
          ],
          'add' => '3.1',
        ],
        'is_reserved' => [
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Dashlet Reserved?'),
          'description' => ts('Is this dashlet reserved?'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.is_reserved',
          'default' => '0',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'add' => '3.1',
        ],
        'cache_minutes' => [
          'name' => 'cache_minutes',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Cache Minutes'),
          'description' => ts('Number of minutes to cache dashlet content in browser localStorage.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.cache_minutes',
          'default' => '60',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'add' => '4.7',
        ],
        'directive' => [
          'name' => 'directive',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Angular directive'),
          'description' => ts('Element name of angular directive to invoke (lowercase hyphenated format)'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_dashboard.directive',
          'table_name' => 'civicrm_dashboard',
          'entity' => 'Dashboard',
          'bao' => 'CRM_Core_BAO_Dashboard',
          'localizable' => 0,
          'add' => '5.33',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'dashboard', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'dashboard', $prefix, []);
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
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
