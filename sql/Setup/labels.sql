-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 12:31 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dev_openemis_refresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE IF NOT EXISTS `labels` (
  `module` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `en` varchar(100) DEFAULT NULL COMMENT 'English',
  `ar` varchar(100) DEFAULT NULL COMMENT 'Arabic',
  `zh` varchar(100) DEFAULT NULL COMMENT 'Chinese',
  `es` varchar(100) DEFAULT NULL COMMENT 'Spanish',
  `fr` varchar(100) DEFAULT NULL COMMENT 'French',
  `ru` varchar(100) DEFAULT NULL COMMENT 'Russian',
  `modified_user_id` int(11) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`module`,`field`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `labels`
--

TRUNCATE TABLE `labels`;
--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`module`, `field`, `code`, `en`, `ar`, `zh`, `es`, `fr`, `ru`, `modified_user_id`, `modified`, `created_user_id`, `created`) VALUES
('Absences', 'absence_type', NULL, 'Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Absences', 'academic_period_id', NULL, 'Academic Period', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Absences', 'institution_site_class_id', NULL, 'Subject', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Absences', 'institution_site_section_id', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Absences', 'select_section', NULL, 'Select Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Absences', 'student_absence_reason_id', NULL, 'Reason', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Absences', 'student_id', NULL, 'Student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Awards', 'award', NULL, 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Awards', 'comment', NULL, 'Comment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Awards', 'issuer', NULL, 'Issuer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Awards', 'issue_date', NULL, 'Issue Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Behaviours', 'date_of_behaviour', NULL, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Behaviours', 'name', NULL, 'Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Behaviours', 'staff_behaviour_category_id', NULL, 'Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Behaviours', 'student_behaviour_category_id', NULL, 'Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Behaviours', 'time_of_behaviour', NULL, 'Time', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Comments', 'comment', NULL, 'Comment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Comments', 'comment_date', NULL, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Contacts', 'contact_option_id', NULL, 'Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Contacts', 'contact_type_id', NULL, 'Description', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Identities', 'expiry_date', NULL, 'Expiry Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Identities', 'identity_type_id', NULL, 'Identity Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Identities', 'issue_date', NULL, 'Issue Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Identities', 'issue_location', NULL, 'Issuer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Identities', 'number', NULL, 'Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionQualityVisits', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionRubrics', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'area_id', NULL, 'Area (Education)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_gender_id', NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_locality_id', NULL, 'Locality', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_ownership_id', NULL, 'Ownership', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_provider_id', NULL, 'Provider', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_sector_id', NULL, 'Sector', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_status_id', NULL, 'Status', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Institutions', 'institution_site_type_id', NULL, 'Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteActivities', 'created', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteActivities', 'created_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteActivities', 'model', NULL, 'Module', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteAttachments', 'created', NULL, 'Uploaded On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteAttachments', 'created_user_id', NULL, 'Uploaded By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteAttachments', 'modified', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteAttachments', 'modified_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteClasses', 'education_subject_code', NULL, 'Subject Code', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteClasses', 'education_subject_id', NULL, 'Subject Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteClasses', 'name', NULL, 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'created', NULL, 'Created On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'created_user_id', NULL, 'Created By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'modified', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'modified_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'position_no', NULL, 'Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'staff_position_grade_id', NULL, 'Grade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSitePositions', 'staff_position_title_id', NULL, 'Title', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteProgrammes', 'created', NULL, 'Created On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteProgrammes', 'created_user_id', NULL, 'Created By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteProgrammes', 'education_programme_id', NULL, 'Programme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteProgrammes', 'modified', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteProgrammes', 'modified_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteProgrammes', 'openemis_no', NULL, 'OpenEMIS ID', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteSections', 'classes', NULL, 'Subjects', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('InstitutionSiteSections', 'institution_site_shift_id', NULL, 'Shift', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteSections', 'name', NULL, 'Class Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteSections', 'number_of_sections', NULL, 'Number Of Classes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('InstitutionSiteSections', 'security_user_id', NULL, 'Home Room Teacher', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteShifts', 'created', NULL, 'Created On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteShifts', 'created_user_id', NULL, 'Created By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteShifts', 'location_institution_site_id', NULL, 'Location', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteShifts', 'modified', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteShifts', 'modified_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteShifts', 'name', NULL, 'Shift Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStaff', 'end_date', NULL, 'End Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStaff', 'photo_content', NULL, 'Photo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStaff', 'staff_institution_name', NULL, 'Institution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStaff', 'start_date', NULL, 'Start Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'absence_type', NULL, 'Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'end_date', NULL, 'Last Date Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'end_time', NULL, 'End Time Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'full_day', NULL, 'Full Day Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'section', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('InstitutionSiteStudentAbsences', 'security_user_id', NULL, 'Student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'start_date', NULL, 'First Date Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'start_time', NULL, 'Start Time Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('InstitutionSiteStudentAbsences', 'student_absence_reason_id', NULL, 'Reason', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Languages', 'evaluation_date', NULL, 'Evaluation Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Languages', 'language_id', NULL, 'Language', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Languages', 'listening', NULL, 'Listening', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Languages', 'reading', NULL, 'Reading', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Languages', 'speaking', NULL, 'Speaking', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Languages', 'writing', NULL, 'Writing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Notices', 'created', NULL, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Positions', 'institution_site_position_id', NULL, 'Position', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Positions', 'name', NULL, 'Position', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Positions', 'number', NULL, 'Number', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Positions', 'teaching', NULL, 'Teaching', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Positions', 'title', NULL, 'Positions', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Qualifications', 'file_name', NULL, 'Attachment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Qualifications', 'gpa', NULL, 'Grade/Score', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Qualifications', 'qualification_institution_country', NULL, 'Institution Country', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('SpecialNeeds', 'comment', NULL, 'Comment', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('SpecialNeeds', 'special_need_date', NULL, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('SpecialNeeds', 'special_need_type_id', NULL, 'Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Staff', 'institution_site_position_id', NULL, 'Position', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-07 00:00:00'),
('Staff', 'openemis_no', NULL, 'OpenEMIS ID', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Staff', 'photo_content', NULL, 'Photo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Staff', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-07 00:00:00'),
('StaffAbsences', 'absence_type', NULL, 'Type', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'end_date', NULL, 'Last Date Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'end_time', NULL, 'End Time Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'full_day', NULL, 'Full Day Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'staff_absence_reason_id', NULL, 'Reason', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'start_date', NULL, 'First Date Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAbsences', 'start_time', NULL, 'Start Time Absent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffActivities', 'created', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffActivities', 'created_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffActivities', 'model', NULL, 'Module', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAttendances', 'openemis_no', NULL, 'OpenEMIS No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffAttendances', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffBehaviours', 'date_of_behaviour', NULL, 'Date', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffBehaviours', 'institution_site_id', NULL, 'Institution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffBehaviours', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffBehaviours', 'staff_behaviour_category_id', NULL, 'Category', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StaffClasses', 'institution_site_class_id', NULL, 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('StaffClasses', 'institution_site_section', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('StaffPositions', 'security_user_id', NULL, 'Staff', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentActivities', 'created', NULL, 'Modified On', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentActivities', 'created_user_id', NULL, 'Modified By', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentActivities', 'model', NULL, 'Module', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentAttendances', 'openemis_no', NULL, 'OpenEMIS No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentAttendances', 'security_user_id', NULL, 'Student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentBehaviours', 'section', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('StudentBehaviours', 'security_user_id', NULL, 'Student', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentClasses', 'institution_site_class_id', NULL, 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('StudentClasses', 'institution_site_section_id', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('StudentFees', 'created', NULL, 'Create', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'fees', NULL, 'Fees', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'grade', NULL, 'Grade', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'no_fees', NULL, 'No Fee Records.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'no_payment', NULL, 'No Payment Records.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'no_student', NULL, 'No Student associated in the selected Education Grade and Academic Period.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'outstanding', NULL, 'Outstanding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'paid', NULL, 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'programme', NULL, 'Programme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('StudentFees', 'title', NULL, 'Fees', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Students', 'openemis_no', NULL, 'OpenEMIS ID', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Students', 'photo_content', NULL, 'Photo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Students', 'section', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('StudentSections', 'institution_site_section_id', NULL, 'Class', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:51'),
('Translations', 'ar', NULL, 'العربية', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Translations', 'en', NULL, 'English', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Translations', 'es', NULL, 'español', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Translations', 'fr', NULL, 'Français', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Translations', 'ru', NULL, 'русский', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Translations', 'zh', NULL, '中文', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'address', NULL, 'Address', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'address_area_id', NULL, 'Address Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'birthplace_area_id', NULL, 'Birthplace Area', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'date_of_birth', NULL, 'Date Of Birth', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'date_of_death', NULL, 'Date Of Death', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'first_name', NULL, 'First Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'gender_id', NULL, 'Gender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'last_name', NULL, 'Last Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'middle_name', NULL, 'Middle Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'name', NULL, 'Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'openemis_no', NULL, 'OpenEMIS ID', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'photo_content', NULL, 'Photo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'postal_code', NULL, 'Postal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'preferred_name', NULL, 'Preferred Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'status', NULL, 'Status', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'third_name', NULL, 'Third Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17'),
('Users', 'username', NULL, 'User Name', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2015-08-02 14:09:17');
