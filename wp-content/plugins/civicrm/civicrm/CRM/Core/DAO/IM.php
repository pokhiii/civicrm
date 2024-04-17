<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/IM.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:74c6cf2f3428d7727169664ebb0a719e)
 */

/**
 * Database access object for the IM entity.
 */
class CRM_Core_DAO_IM extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '1.1';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_im';

  /**
   * Icon associated with this entity.
   *
   * @var string
   */
  public static $_icon = 'fa-comments-o';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'name';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Unique IM ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * FK to Contact ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $contact_id;

  /**
   * Which Location does this email belong to.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $location_type_id;

  /**
   * IM screen name
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * Which IM Provider does this screen name belong to.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $provider_id;

  /**
   * Is this the primary IM for this contact and location.
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_primary;

  /**
   * Is this the billing?
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_billing;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_im';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Instant Messaging') : ts('Instant Messaging');
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
          'title' => ts('Instant Messenger ID'),
          'description' => ts('Unique IM ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_im.id',
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '1.1',
        ],
        'contact_id' => [
          'name' => 'contact_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Contact ID'),
          'description' => ts('FK to Contact ID'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_im.contact_id',
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'FKColumnName' => 'id',
          'html' => [
            'label' => ts("Contact"),
          ],
          'add' => '2.0',
        ],
        'location_type_id' => [
          'name' => 'location_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('IM Location Type'),
          'description' => ts('Which Location does this email belong to.'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_im.location_type_id',
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_location_type',
            'keyColumn' => 'id',
            'labelColumn' => 'display_name',
          ],
          'add' => '2.0',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('IM Screen Name'),
          'description' => ts('IM screen name'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => TRUE,
            'export' => TRUE,
            'duplicate_matching' => TRUE,
            'token' => FALSE,
          ],
          'import' => TRUE,
          'where' => 'civicrm_im.name',
          'headerPattern' => '/I(nstant )?M(ess.*)?|screen(\s+)?name/i',
          'dataPattern' => '/^[A-Za-z][0-9A-Za-z]{20,}$/',
          'export' => TRUE,
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.1',
        ],
        'provider_id' => [
          'name' => 'provider_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('IM Provider'),
          'description' => ts('Which IM Provider does this screen name belong to.'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_im.provider_id',
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'instant_messenger_service',
            'optionEditPath' => 'civicrm/admin/options/instant_messenger_service',
          ],
          'add' => '1.1',
        ],
        'is_primary' => [
          'name' => 'is_primary',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Primary'),
          'description' => ts('Is this the primary IM for this contact and location.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_im.is_primary',
          'default' => '0',
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'html' => [
            'type' => 'Radio',
          ],
          'add' => '1.1',
        ],
        'is_billing' => [
          'name' => 'is_billing',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is IM Billing?'),
          'description' => ts('Is this the billing?'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_im.is_billing',
          'default' => '0',
          'table_name' => 'civicrm_im',
          'entity' => 'IM',
          'bao' => 'CRM_Core_BAO_IM',
          'localizable' => 0,
          'add' => '2.0',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'im', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'im', $prefix, []);
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
      'index_location_type' => [
        'name' => 'index_location_type',
        'field' => [
          0 => 'location_type_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_im::0::location_type_id',
      ],
      'UI_provider_id' => [
        'name' => 'UI_provider_id',
        'field' => [
          0 => 'provider_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_im::0::provider_id',
      ],
      'index_is_primary' => [
        'name' => 'index_is_primary',
        'field' => [
          0 => 'is_primary',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_im::0::is_primary',
      ],
      'index_is_billing' => [
        'name' => 'index_is_billing',
        'field' => [
          0 => 'is_billing',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_im::0::is_billing',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}