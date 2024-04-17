-- +--------------------------------------------------------------------+
-- | Copyright CiviCRM LLC. All rights reserved.                        |
-- |                                                                    |
-- | This work is published under the GNU AGPLv3 license with some      |
-- | permitted exceptions and without any warranty. For full license    |
-- | and copyright information, see https://civicrm.org/licensing       |
-- +--------------------------------------------------------------------+
--
-- Generated from schema.tpl
-- DO NOT EDIT.  Generated by CRM_Core_CodeGen
--
-- /*******************************************************
-- *
-- * Clean up the existing tables - this section generated from drop.tpl
-- *
-- *******************************************************/

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_user_role`;
DROP TABLE IF EXISTS `civicrm_uf_match`;
DROP TABLE IF EXISTS `civicrm_session`;
DROP TABLE IF EXISTS `civicrm_role`;

SET FOREIGN_KEY_CHECKS=1;
-- /*******************************************************
-- *
-- * Create new tables
-- *
-- *******************************************************/

-- /*******************************************************
-- *
-- * civicrm_role
-- *
-- * A Role holds a set of permissions. Roles may be granted to Users.
-- *
-- *******************************************************/
CREATE TABLE `civicrm_role` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique Role ID',
  `name` varchar(60) NOT NULL COMMENT 'Machine name for this role',
  `label` varchar(128) NOT NULL COMMENT 'Human friendly name for this role',
  `permissions` text NOT NULL COMMENT 'List of permissions granted by this role',
  `is_active` tinyint NOT NULL DEFAULT 1 COMMENT 'Only active roles grant permissions',
  PRIMARY KEY (`id`)
)
ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- /*******************************************************
-- *
-- * civicrm_session
-- *
-- * Standalone User Sessions
-- *
-- *******************************************************/
CREATE TABLE `civicrm_session` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Unique Session ID',
  `session_id` char(64) NOT NULL COMMENT 'Hexadecimal Session Identifier',
  `data` longtext COMMENT 'Session Data',
  `last_accessed` datetime COMMENT 'Timestamp of the last session access',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `index_session_id`(session_id)
)
ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- /*******************************************************
-- *
-- * civicrm_uf_match
-- *
-- * Standalone User Account. In Standalone this is a superset of the original civicrm_uf_match table.
-- *
-- *******************************************************/
CREATE TABLE `civicrm_uf_match` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique User ID',
  `domain_id` int unsigned NOT NULL COMMENT 'Which Domain is this match entry for',
  `uf_id` int unsigned NOT NULL DEFAULT 0 COMMENT 'UF ID. Redundant in Standalone. Needs to be identical to id.',
  `uf_name` varchar(255) COMMENT 'Email (e.g. for password resets)',
  `contact_id` int unsigned COMMENT 'FK to Contact ID',
  `username` varchar(60) NOT NULL,
  `hashed_password` varchar(128) NOT NULL DEFAULT "" COMMENT 'Hashed, not plaintext password',
  `when_created` timestamp DEFAULT CURRENT_TIMESTAMP,
  `when_last_accessed` timestamp NULL,
  `when_updated` timestamp NULL,
  `is_active` tinyint NOT NULL DEFAULT 1,
  `timezone` varchar(32) NULL COMMENT 'User\'s timezone',
  `language` varchar(5) COMMENT 'UI language preferred by the given user/contact',
  `password_reset_token` varchar(40) COMMENT 'The unspent token',
  PRIMARY KEY (`id`),
  INDEX `I_civicrm_uf_match_uf_id`(uf_id),
  UNIQUE INDEX `UI_username`(username),
  UNIQUE INDEX `UI_uf_name_domain_id`(uf_name, domain_id),
  UNIQUE INDEX `UI_contact_domain_id`(contact_id, domain_id),
  CONSTRAINT FK_civicrm_uf_match_domain_id FOREIGN KEY (`domain_id`) REFERENCES `civicrm_domain`(`id`),
  CONSTRAINT FK_civicrm_uf_match_contact_id FOREIGN KEY (`contact_id`) REFERENCES `civicrm_contact`(`id`) ON DELETE SET NULL
)
ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- /*******************************************************
-- *
-- * civicrm_user_role
-- *
-- * Bridge between users and roles
-- *
-- *******************************************************/
CREATE TABLE `civicrm_user_role` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique UserRole ID',
  `user_id` int unsigned COMMENT 'FK to User',
  `role_id` int unsigned COMMENT 'FK to Role',
  PRIMARY KEY (`id`),
  CONSTRAINT FK_civicrm_user_role_user_id FOREIGN KEY (`user_id`) REFERENCES `civicrm_uf_match`(`id`) ON DELETE CASCADE,
  CONSTRAINT FK_civicrm_user_role_role_id FOREIGN KEY (`role_id`) REFERENCES `civicrm_role`(`id`) ON DELETE CASCADE
)
ENGINE=InnoDB DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
