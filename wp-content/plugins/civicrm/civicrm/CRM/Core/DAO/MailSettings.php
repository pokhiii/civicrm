<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from xml/schema/CRM/Core/MailSettings.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:1f89fbfaa686fe27af2d52caba0e2725)
 */

/**
 * Database access object for the MailSettings entity.
 */
class CRM_Core_DAO_MailSettings extends CRM_Core_DAO {
  const EXT = 'civicrm';
  const TABLE_ADDED = '2.2';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_mail_settings';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = FALSE;

  /**
   * Paths for accessing this entity in the UI.
   *
   * @var string[]
   */
  protected static $_paths = [
    'add' => 'civicrm/admin/mailSettings/edit?action=add&reset=1',
    'update' => 'civicrm/admin/mailSettings/edit?action=update&id=[id]&reset=1',
    'delete' => 'civicrm/admin/mailSettings/edit?action=delete&id=[id]&reset=1',
    'browse' => 'civicrm/admin/mailSettings',
  ];

  /**
   * primary key
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * Which Domain is this match entry for
   *
   * @var int|string
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $domain_id;

  /**
   * name of this group of settings
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * whether this is the default set of settings for this domain
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_default;

  /**
   * email address domain (the part after @)
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $domain;

  /**
   * optional local part (like civimail+ for addresses like civimail+s.1.2@example.com)
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $localpart;

  /**
   * contents of the Return-Path header
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $return_path;

  /**
   * name of the protocol to use for polling (like IMAP, POP3 or Maildir)
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $protocol;

  /**
   * server to use when polling
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $server;

  /**
   * port to use when polling
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $port;

  /**
   * username to use when polling
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $username;

  /**
   * password to use when polling
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $password;

  /**
   * whether to use SSL or not
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_ssl;

  /**
   * folder to poll from when using IMAP, path to poll from when using Maildir, etc.
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $source;

  /**
   * Name of status to use when creating email to activity.
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $activity_status;

  /**
   * Enabling this option will have CiviCRM skip any emails that do not have the Case ID or Case Hash so that the system will only process emails that can be placed on case records. Any emails that are not processed will be moved to the ignored folder.
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_non_case_email_skipped;

  /**
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_contact_creation_disabled_if_no_match;

  /**
   * Ignored for bounce processing, only for email-to-activity
   *
   * @var bool|string
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $is_active;

  /**
   * Implicit FK to civicrm_option_value where option_group = activity_type
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $activity_type_id;

  /**
   * Foreign key to the Campaign.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $campaign_id;

  /**
   * Which email recipient to add as the activity source (from, to, cc, bcc).
   *
   * @var string|null
   *   (SQL type: varchar(4))
   *   Note that values will be retrieved from the database as a string.
   */
  public $activity_source;

  /**
   * Which email recipients to add as the activity targets (from, to, cc, bcc).
   *
   * @var string|null
   *   (SQL type: varchar(16))
   *   Note that values will be retrieved from the database as a string.
   */
  public $activity_targets;

  /**
   * Which email recipients to add as the activity assignees (from, to, cc, bcc).
   *
   * @var string|null
   *   (SQL type: varchar(16))
   *   Note that values will be retrieved from the database as a string.
   */
  public $activity_assignees;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_mail_settings';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? ts('Mail Accounts') : ts('Mail Account');
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
          'title' => ts('Mail Settings ID'),
          'description' => ts('primary key'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.id',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'Number',
          ],
          'readonly' => TRUE,
          'add' => '2.2',
        ],
        'domain_id' => [
          'name' => 'domain_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Domain ID'),
          'description' => ts('Which Domain is this match entry for'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.domain_id',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
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
          'title' => ts('Mail Settings Name'),
          'description' => ts('name of this group of settings'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.name',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'is_default' => [
          'name' => 'is_default',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Is Default Mail Settings?'),
          'description' => ts('whether this is the default set of settings for this domain'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.is_default',
          'default' => '0',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
            'label' => ts("Default"),
          ],
          'add' => '2.2',
        ],
        'domain' => [
          'name' => 'domain',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('email Domain'),
          'description' => ts('email address domain (the part after @)'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.domain',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'localpart' => [
          'name' => 'localpart',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('email Local Part'),
          'description' => ts('optional local part (like civimail+ for addresses like civimail+s.1.2@example.com)'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.localpart',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'return_path' => [
          'name' => 'return_path',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Return Path'),
          'description' => ts('contents of the Return-Path header'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.return_path',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'protocol' => [
          'name' => 'protocol',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Protocol'),
          'description' => ts('name of the protocol to use for polling (like IMAP, POP3 or Maildir)'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.protocol',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'mail_protocol',
            'optionEditPath' => 'civicrm/admin/options/mail_protocol',
          ],
          'add' => '2.2',
        ],
        'server' => [
          'name' => 'server',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mail Server'),
          'description' => ts('server to use when polling'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.server',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'port' => [
          'name' => 'port',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Mail Port'),
          'description' => ts('port to use when polling'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.port',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'username' => [
          'name' => 'username',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mail Account Username'),
          'description' => ts('username to use when polling'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.username',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'password' => [
          'name' => 'password',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mail Account Password'),
          'description' => ts('password to use when polling'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.password',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'is_ssl' => [
          'name' => 'is_ssl',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Mail Account Uses SSL'),
          'description' => ts('whether to use SSL or not'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.is_ssl',
          'default' => '0',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'source' => [
          'name' => 'source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Mail Folder'),
          'description' => ts('folder to poll from when using IMAP, path to poll from when using Maildir, etc.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.source',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'add' => '2.2',
        ],
        'activity_status' => [
          'name' => 'activity_status',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Activity Status'),
          'description' => ts('Name of status to use when creating email to activity.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.activity_status',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'activity_status',
            'keyColumn' => 'name',
            'optionEditPath' => 'civicrm/admin/options/activity_status',
          ],
          'add' => '4.7',
        ],
        'is_non_case_email_skipped' => [
          'name' => 'is_non_case_email_skipped',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Skip emails which do not have a Case ID or Case hash'),
          'description' => ts('Enabling this option will have CiviCRM skip any emails that do not have the Case ID or Case Hash so that the system will only process emails that can be placed on case records. Any emails that are not processed will be moved to the ignored folder.'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.is_non_case_email_skipped',
          'default' => '0',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '5.31',
        ],
        'is_contact_creation_disabled_if_no_match' => [
          'name' => 'is_contact_creation_disabled_if_no_match',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Do not create new contacts when filing emails'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.is_contact_creation_disabled_if_no_match',
          'default' => '0',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '5.31',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Enabled?'),
          'description' => ts('Ignored for bounce processing, only for email-to-activity'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.is_active',
          'default' => '1',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'CheckBox',
          ],
          'add' => '5.66',
        ],
        'activity_type_id' => [
          'name' => 'activity_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity Type'),
          'description' => ts('Implicit FK to civicrm_option_value where option_group = activity_type'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.activity_type_id',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'activity_type',
            'optionEditPath' => 'civicrm/admin/options/activity_type',
          ],
          'add' => '5.66',
        ],
        'campaign_id' => [
          'name' => 'campaign_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Campaign ID'),
          'description' => ts('Foreign key to the Campaign.'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.campaign_id',
          'default' => NULL,
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'FKClassName' => 'CRM_Campaign_DAO_Campaign',
          'FKColumnName' => 'id',
          'html' => [
            'type' => 'EntityRef',
            'label' => ts("Campaign"),
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_campaign',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
            'prefetch' => 'FALSE',
          ],
          'add' => '5.66',
        ],
        'activity_source' => [
          'name' => 'activity_source',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Activity Source'),
          'description' => ts('Which email recipient to add as the activity source (from, to, cc, bcc).'),
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.activity_source',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'add' => '5.66',
        ],
        'activity_targets' => [
          'name' => 'activity_targets',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Activity Targets'),
          'description' => ts('Which email recipients to add as the activity targets (from, to, cc, bcc).'),
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.activity_targets',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_COMMA,
          'html' => [
            'type' => 'Select',
          ],
          'add' => '5.66',
        ],
        'activity_assignees' => [
          'name' => 'activity_assignees',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Activity Assignees'),
          'description' => ts('Which email recipients to add as the activity assignees (from, to, cc, bcc).'),
          'maxlength' => 16,
          'size' => CRM_Utils_Type::TWELVE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_mail_settings.activity_assignees',
          'table_name' => 'civicrm_mail_settings',
          'entity' => 'MailSettings',
          'bao' => 'CRM_Core_BAO_MailSettings',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_COMMA,
          'html' => [
            'type' => 'Select',
          ],
          'add' => '5.66',
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'mail_settings', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'mail_settings', $prefix, []);
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