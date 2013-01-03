/*
SQLyog Ultimate v9.02 
MySQL - 5.5.24-log : Database - itjobsday
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`itjobsday` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `itjobsday`;

/*Table structure for table `authassignment` */

DROP TABLE IF EXISTS `authassignment`;

CREATE TABLE `authassignment` (
  `itemname` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `authassignment` */

insert  into `authassignment`(`itemname`,`userid`,`bizrule`,`data`) values ('','1',NULL,'N;'),('test','1',NULL,'N;');

/*Table structure for table `authitem` */

DROP TABLE IF EXISTS `authitem`;

CREATE TABLE `authitem` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bizrule` text COLLATE utf8_unicode_ci,
  `data` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `authitem` */

/*Table structure for table `authitemchild` */

DROP TABLE IF EXISTS `authitemchild`;

CREATE TABLE `authitemchild` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `authitemchild` */

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwd` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_admin` */

/*Table structure for table `tbl_banner` */

DROP TABLE IF EXISTS `tbl_banner`;

CREATE TABLE `tbl_banner` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `bannerurl` text COLLATE utf8_unicode_ci,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkurl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tooltip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startdate` int(11) DEFAULT '0',
  `expdate` int(11) DEFAULT '0',
  `link_target` varchar(10) COLLATE utf8_unicode_ci DEFAULT '_blank',
  `clicks` int(11) DEFAULT '0',
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  KEY `startdate` (`startdate`),
  KEY `expdate` (`expdate`),
  KEY `linkurl` (`linkurl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_banner` */

/*Table structure for table `tbl_career_degree` */

DROP TABLE IF EXISTS `tbl_career_degree`;

CREATE TABLE `tbl_career_degree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `career_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `career_name` (`career_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_career_degree` */

/*Table structure for table `tbl_category` */

DROP TABLE IF EXISTS `tbl_category`;

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cat_name` (`cat_name`,`var_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_category` */

/*Table structure for table `tbl_cities` */

DROP TABLE IF EXISTS `tbl_cities`;

CREATE TABLE `tbl_cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `countrycode` varchar(5) COLLATE utf8_unicode_ci DEFAULT 'US',
  `statecode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `countycode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `countrystate` (`countrycode`,`statecode`),
  KEY `countrystatecounty` (`countrycode`,`statecode`,`countycode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_cities` */

/*Table structure for table `tbl_counties` */

DROP TABLE IF EXISTS `tbl_counties`;

CREATE TABLE `tbl_counties` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `countrycode` varchar(5) COLLATE utf8_unicode_ci DEFAULT 'US',
  `statecode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `countrystate` (`countrycode`,`statecode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_counties` */

/*Table structure for table `tbl_countries` */

DROP TABLE IF EXISTS `tbl_countries`;

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loc` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_countries` */

/*Table structure for table `tbl_covering_letter` */

DROP TABLE IF EXISTS `tbl_covering_letter`;

CREATE TABLE `tbl_covering_letter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_employer_id` int(11) DEFAULT NULL,
  `cl_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cl_text` text COLLATE utf8_unicode_ci,
  `created_at` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `modified_at` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `is_defult` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  KEY `fk_employer_id` (`fk_employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_covering_letter` */

/*Table structure for table `tbl_cv_category` */

DROP TABLE IF EXISTS `tbl_cv_category`;

CREATE TABLE `tbl_cv_category` (
  `cv_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`cv_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_cv_category` */

/*Table structure for table `tbl_cv_detail` */

DROP TABLE IF EXISTS `tbl_cv_detail`;

CREATE TABLE `tbl_cv_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_employee_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_title` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_file_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_file_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_file_exe` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_file_size` int(11) DEFAULT NULL,
  `cv_file_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `original_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cv_status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'Private',
  `default_cv` char(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  `year_experience` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `highest_education` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary_range` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `availability` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `start_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `positions` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recent_job_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recent_employer` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recent_industry_work` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recent_career_level` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `look_job_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `look_job_title2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `look_job_type` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `look_job_status` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `county` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `state_province` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `country` varchar(11) COLLATE utf8_unicode_ci DEFAULT '',
  `are_you_auth` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `willing_to_relocate` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `willing_to_travel` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `additional_notes` text COLLATE utf8_unicode_ci,
  `no_views` int(6) DEFAULT '0',
  `created_at` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `modified_at` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `cv_title` (`cv_title`,`recent_job_title`,`look_job_title`,`look_job_title2`),
  KEY `fk_employee_id` (`fk_employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_cv_detail` */

/*Table structure for table `tbl_cv_look_occupation` */

DROP TABLE IF EXISTS `tbl_cv_look_occupation`;

CREATE TABLE `tbl_cv_look_occupation` (
  `cv_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`cv_id`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_cv_look_occupation` */

/*Table structure for table `tbl_cv_view` */

DROP TABLE IF EXISTS `tbl_cv_view`;

CREATE TABLE `tbl_cv_view` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_cv_id` int(11) DEFAULT NULL,
  `fk_employer_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `view_for` int(3) DEFAULT NULL,
  `created_at` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fk_cv_id` (`fk_cv_id`,`fk_employer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_cv_view` */

/*Table structure for table `tbl_education` */

DROP TABLE IF EXISTS `tbl_education`;

CREATE TABLE `tbl_education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `education_name` (`education_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_education` */

/*Table structure for table `tbl_email_template` */

DROP TABLE IF EXISTS `tbl_email_template`;

CREATE TABLE `tbl_email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `template_name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_key` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_email` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_name` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_subject` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_text` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `template_key` (`template_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_email_template` */

/*Table structure for table `tbl_employee` */

DROP TABLE IF EXISTS `tbl_employee`;

CREATE TABLE `tbl_employee` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `extra_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firt_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `county` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `state_province` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `country` varchar(11) COLLATE utf8_unicode_ci DEFAULT '',
  `post_code` int(8) DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fk_career_degree_id` int(11) DEFAULT NULL,
  `date_register` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `actkey` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `employee_status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `role` char(36) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email_address` (`email`),
  KEY `city` (`city`),
  KEY `county` (`county`),
  KEY `state_province` (`state_province`),
  KEY `country` (`country`),
  KEY `post_code` (`post_code`),
  KEY `fullname` (`firt_name`,`last_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_employee` */

insert  into `tbl_employee`(`id`,`extra_id`,`email`,`username`,`password`,`title`,`firt_name`,`last_name`,`address`,`address2`,`city`,`county`,`state_province`,`country`,`post_code`,`phone_number`,`fk_career_degree_id`,`date_register`,`last_login`,`actkey`,`admin_comments`,`employee_status`,`is_active`,`role`) values ('1','1','todachuy2406@gmail.com','admin','36b314286ab61b04f8282855e4e96851',NULL,NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,'','pending','Y','');

/*Table structure for table `tbl_employer` */

DROP TABLE IF EXISTS `tbl_employer`;

CREATE TABLE `tbl_employer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extra_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `company_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_link` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_desc` longtext COLLATE utf8_unicode_ci,
  `email_address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passwd` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `county` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `state_province` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `country` varchar(11) COLLATE utf8_unicode_ci DEFAULT '',
  `post_code` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_qty` int(11) DEFAULT '0',
  `cv_qty` int(11) DEFAULT '0',
  `spotlight_qty` int(11) DEFAULT '0',
  `date_register` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `last_login` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `actkey` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `employer_status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email_address` (`email_address`),
  KEY `city` (`city`),
  KEY `county` (`county`),
  KEY `state_province` (`state_province`),
  KEY `country` (`country`),
  KEY `post_code` (`post_code`),
  KEY `fullname` (`fname`,`sname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_employer` */

/*Table structure for table `tbl_experience` */

DROP TABLE IF EXISTS `tbl_experience`;

CREATE TABLE `tbl_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `experience_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `experience_name` (`experience_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_experience` */

/*Table structure for table `tbl_job` */

DROP TABLE IF EXISTS `tbl_job`;

CREATE TABLE `tbl_job` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_employer_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_ref` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_description` longtext COLLATE utf8_unicode_ci,
  `job_postion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `county` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `state_province` varchar(50) COLLATE utf8_unicode_ci DEFAULT '',
  `country` varchar(11) COLLATE utf8_unicode_ci DEFAULT '',
  `fk_education_id` int(11) DEFAULT NULL,
  `fk_career_id` int(11) DEFAULT NULL,
  `fk_experience_id` int(11) DEFAULT NULL,
  `spotlight` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `job_salary` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salaryfreq` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_logo` text COLLATE utf8_unicode_ci,
  `contact_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_telephone` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_link` text COLLATE utf8_unicode_ci,
  `poster_email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views_count` int(11) DEFAULT '0',
  `apply_count` int(11) DEFAULT '0',
  `start_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `job_startdate` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `job_enddate` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `modified` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `job_status` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `has_been_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `admin_first_view` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `admin_status_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `admin_comments` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `var_name` (`var_name`),
  KEY `fk_education_id` (`fk_education_id`),
  KEY `city_2` (`city`,`county`,`state_province`,`country`),
  KEY `fk_career_id` (`fk_career_id`),
  KEY `fk_experience_id` (`fk_experience_id`),
  FULLTEXT KEY `job_title` (`job_title`,`job_description`),
  FULLTEXT KEY `city` (`city`,`county`,`state_province`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job` */

/*Table structure for table `tbl_job2category` */

DROP TABLE IF EXISTS `tbl_job2category`;

CREATE TABLE `tbl_job2category` (
  `category_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  PRIMARY KEY (`category_id`,`job_id`),
  KEY `category_id` (`category_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job2category` */

/*Table structure for table `tbl_job2status` */

DROP TABLE IF EXISTS `tbl_job2status`;

CREATE TABLE `tbl_job2status` (
  `fk_job_id` int(11) NOT NULL,
  `fk_job_status_id` int(11) NOT NULL,
  PRIMARY KEY (`fk_job_id`,`fk_job_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job2status` */

/*Table structure for table `tbl_job2type` */

DROP TABLE IF EXISTS `tbl_job2type`;

CREATE TABLE `tbl_job2type` (
  `fk_job_id` int(11) NOT NULL,
  `fk_job_type_id` int(11) NOT NULL,
  PRIMARY KEY (`fk_job_id`,`fk_job_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job2type` */

/*Table structure for table `tbl_job_history` */

DROP TABLE IF EXISTS `tbl_job_history`;

CREATE TABLE `tbl_job_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_employee_id` int(11) DEFAULT NULL,
  `fk_job_id` bigint(20) DEFAULT NULL,
  `cv_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_letter` longtext COLLATE utf8_unicode_ci,
  `date_apply` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `is_deleted` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`fk_employee_id`),
  KEY `fk_job_id` (`fk_job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job_history` */

/*Table structure for table `tbl_job_status` */

DROP TABLE IF EXISTS `tbl_job_status`;

CREATE TABLE `tbl_job_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `status_name` (`status_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job_status` */

/*Table structure for table `tbl_job_type` */

DROP TABLE IF EXISTS `tbl_job_type`;

CREATE TABLE `tbl_job_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_name` (`type_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_job_type` */

/*Table structure for table `tbl_newsletter` */

DROP TABLE IF EXISTS `tbl_newsletter`;

CREATE TABLE `tbl_newsletter` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) COLLATE utf8_unicode_ci DEFAULT '',
  `joined` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `joined` (`joined`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_newsletter` */

insert  into `tbl_newsletter`(`id`,`email`,`joined`) values (1,'dsd',0),(2,'dsd',0);

/*Table structure for table `tbl_package` */

DROP TABLE IF EXISTS `tbl_package`;

CREATE TABLE `tbl_package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `package_desc` longtext COLLATE utf8_unicode_ci,
  `package_price` double(8,2) DEFAULT '0.00',
  `package_job_qty` int(11) DEFAULT NULL,
  `standard` set('Y','N') COLLATE utf8_unicode_ci DEFAULT 'Y',
  `spotlight` set('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `cv_views` set('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `is_active` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_inactive` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_package` */

/*Table structure for table `tbl_package_invoice` */

DROP TABLE IF EXISTS `tbl_package_invoice`;

CREATE TABLE `tbl_package_invoice` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `invoice_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `processed_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `package_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `fk_employer_id` int(11) DEFAULT '0',
  `fk_package_id` int(11) DEFAULT '0',
  `posts_quantity` int(11) DEFAULT '0',
  `standard` set('Y','N') COLLATE utf8_unicode_ci DEFAULT 'Y',
  `spotlight` set('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `cv_views` set('Y','N') COLLATE utf8_unicode_ci DEFAULT 'N',
  `amount` double(8,2) DEFAULT '0.00',
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `subscr_date` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'paypal',
  `currency_code` char(3) COLLATE utf8_unicode_ci DEFAULT 'GBP',
  `currency_rate` decimal(10,4) DEFAULT '0.0000',
  `reason` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employer_id` (`fk_employer_id`),
  KEY `fk_package_id` (`fk_package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_package_invoice` */

/*Table structure for table `tbl_page` */

DROP TABLE IF EXISTS `tbl_page`;

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagekey` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `pagetext` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pagekey` (`pagekey`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_page` */

/*Table structure for table `tbl_payment_config` */

DROP TABLE IF EXISTS `tbl_payment_config`;

CREATE TABLE `tbl_payment_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_module_id` int(11) DEFAULT NULL,
  `module_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `config_title` varchar(64) COLLATE utf8_unicode_ci DEFAULT '',
  `config_key` varchar(64) COLLATE utf8_unicode_ci DEFAULT '',
  `config_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `config_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `config_group_id` int(11) DEFAULT '0',
  `sort_order` int(5) DEFAULT NULL,
  `use_function` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_function` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'text',
  `input_options` text COLLATE utf8_unicode_ci,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_payment_config` */

/*Table structure for table `tbl_payment_modules` */

DROP TABLE IF EXISTS `tbl_payment_modules`;

CREATE TABLE `tbl_payment_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `module_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `class_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `formfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_payment_modules` */

/*Table structure for table `tbl_payments_invoice` */

DROP TABLE IF EXISTS `tbl_payments_invoice`;

CREATE TABLE `tbl_payments_invoice` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `fk_invoice_id` int(11) DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `payment_type` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double(7,2) DEFAULT '0.00',
  `currency` char(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `receiver_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txn_id` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txn_type` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payer_status` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `residence_country` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reason` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `origin` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_vars` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `fk_invoice_id` (`fk_invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_payments_invoice` */

/*Table structure for table `tbl_plugin` */

DROP TABLE IF EXISTS `tbl_plugin`;

CREATE TABLE `tbl_plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `plugin_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `class_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `formfile` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `plugin_key` (`plugin_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_plugin` */

/*Table structure for table `tbl_plugin_config` */

DROP TABLE IF EXISTS `tbl_plugin_config`;

CREATE TABLE `tbl_plugin_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plugin_id` int(11) DEFAULT '0',
  `plugin_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `plugin_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `plugin_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `plugin_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `data_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'text',
  `input_options` text COLLATE utf8_unicode_ci,
  `last_modified` datetime DEFAULT NULL,
  `date_added` datetime DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `plugin_key` (`plugin_key`),
  KEY `plugin_id` (`plugin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_plugin_config` */

/*Table structure for table `tbl_save_job` */

DROP TABLE IF EXISTS `tbl_save_job`;

CREATE TABLE `tbl_save_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_employee_id` int(11) DEFAULT NULL,
  `fk_job_id` bigint(20) DEFAULT NULL,
  `date_saved` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `is_deleted` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`fk_employee_id`),
  KEY `fk_job_id` (`fk_job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_save_job` */

/*Table structure for table `tbl_save_search` */

DROP TABLE IF EXISTS `tbl_save_search`;

CREATE TABLE `tbl_save_search` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_employee_id` int(11) DEFAULT NULL,
  `reference_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` text COLLATE utf8_unicode_ci,
  `date_save` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  `is_deleted` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  PRIMARY KEY (`id`),
  KEY `fk_employee_id` (`fk_employee_id`),
  KEY `reference_name` (`reference_name`),
  FULLTEXT KEY `reference` (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_save_search` */

/*Table structure for table `tbl_search` */

DROP TABLE IF EXISTS `tbl_search`;

CREATE TABLE `tbl_search` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `keywords` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `results` int(5) DEFAULT NULL,
  `created_on` varchar(30) COLLATE utf8_unicode_ci DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_search` */

/*Table structure for table `tbl_setting` */

DROP TABLE IF EXISTS `tbl_setting`;

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_category_id` int(11) DEFAULT NULL,
  `setting_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `data_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `input_options` text COLLATE utf8_unicode_ci,
  `validation` text COLLATE utf8_unicode_ci,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_name` (`setting_name`),
  KEY `fk_category_id` (`fk_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_setting` */

/*Table structure for table `tbl_setting_category` */

DROP TABLE IF EXISTS `tbl_setting_category`;

CREATE TABLE `tbl_setting_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_desc` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `var_name` (`var_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_setting_category` */

/*Table structure for table `tbl_states` */

DROP TABLE IF EXISTS `tbl_states`;

CREATE TABLE `tbl_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `var_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enabled` char(1) COLLATE utf8_unicode_ci DEFAULT 'Y',
  `countrycode` varchar(5) COLLATE utf8_unicode_ci DEFAULT 'US',
  PRIMARY KEY (`id`),
  KEY `code` (`code`),
  KEY `enabled` (`enabled`),
  KEY `countrycode` (`countrycode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_states` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
