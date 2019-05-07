<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class WorkflowStepsFixture extends TestFixture
{
    public $import = ['table' => 'workflow_steps'];
    public $records = [
        [
            'id' => '1',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '1',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-10-25 12:10:14'
        ], [
            'id' => '2',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '1',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-10-25 12:10:14'
        ], [
            'id' => '3',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '1',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-10-25 12:10:14'
        ], [
            'id' => '4',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '2',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '5',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '2',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '6',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '2',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '7',
            'name' => 'Pending For Recommendation',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '2',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '8',
            'name' => 'Pending For Accreditation',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '2',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '9',
            'name' => 'Accredited',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '2',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '10',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '3',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '11',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '3',
            'modified_user_id' => '2',
            'modified' => '2016-11-02 13:28:05',
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '12',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '3',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '13',
            'name' => 'Pending For Recommendation',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '3',
            'modified_user_id' => '2',
            'modified' => '2016-11-02 13:28:28',
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '14',
            'name' => 'Pending For Registration',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '3',
            'modified_user_id' => '2',
            'modified' => '2016-11-02 13:28:41',
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '15',
            'name' => 'Registered',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '3',
            'modified_user_id' => '2',
            'modified' => '2016-11-02 13:28:57',
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '16',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '4',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '17',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '4',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '18',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '4',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '19',
            'name' => 'Pending For Evaluation',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '4',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '20',
            'name' => 'Pending For Posting',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '4',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '21',
            'name' => 'Posted',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '4',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-11-06 11:27:06'
        ], [
            'id' => '22',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '5',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-12-15 15:41:56'
        ], [
            'id' => '23',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '5',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-12-15 15:41:56'
        ], [
            'id' => '24',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '5',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-12-15 15:41:56'
        ], [
            'id' => '25',
            'name' => 'Approved',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '5',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2015-12-15 15:41:56'
        ], [
            'id' => '26',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '6',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-02-12 18:29:36'
        ], [
            'id' => '27',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '6',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-02-12 18:29:36'
        ], [
            'id' => '28',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '6',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-02-12 18:29:36'
        ], [
            'id' => '29',
            'name' => 'Active',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '6',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-02-12 18:29:36'
        ], [
            'id' => '30',
            'name' => 'Pending For Deactivation',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '6',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-02-12 18:29:36'
        ], [
            'id' => '31',
            'name' => 'Inactive',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '6',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-02-12 18:29:36'
        ], [
            'id' => '32',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '7',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-04-15 10:45:45'
        ], [
            'id' => '33',
            'name' => 'Pending Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '7',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-04-15 10:45:45'
        ], [
            'id' => '34',
            'name' => 'Closed',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '7',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-04-15 10:45:45'
        ], [
            'id' => '35',
            'name' => 'Approved',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '7',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-04-15 10:45:45'
        ], [
            'id' => '36',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '0',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '9',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-11-03 15:14:47'
        ], [
            'id' => '37',
            'name' => 'Pending For Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '9',
            'modified_user_id' => '2',
            'modified' => '2016-11-03 15:17:29',
            'created_user_id' => '1',
            'created' => '2016-11-03 15:14:47'
        ], [
            'id' => '38',
            'name' => 'Withdrawn',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '9',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-11-03 15:14:47'
        ], [
            'id' => '39',
            'name' => 'Pending For Review',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '9',
            'modified_user_id' => '2',
            'modified' => '2016-11-03 15:17:49',
            'created_user_id' => '1',
            'created' => '2016-11-03 15:14:47'
        ], [
            'id' => '40',
            'name' => 'Approved',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '9',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-11-03 15:14:47'
      ], [
            'id' => '41',
            'name' => 'Withdrawn',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '13',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-11-04 11:51:43'
      ], [
            'id' => '42',
            'name' => 'Rejected',
            'category' => '0',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '9',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2016-11-03 15:14:47'
      ], [
            'id' => '43',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '14',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '44',
            'name' => 'Pending Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '14',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '45',
            'name' => 'Pending Approval From Outgoing Institution',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '14',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '46',
            'name' => 'Pending Staff Assignment',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '14',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '47',
            'name' => 'Assigned',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '14',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '48',
            'name' => 'Rejected',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '14',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '49',
            'name' => 'Open',
            'category' => '1',
            'is_editable' => '1',
            'is_removable' => '1',
            'is_system_defined' => '1',
            'workflow_id' => '15',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '50',
            'name' => 'Pending Approval',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '15',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '51',
            'name' => 'Pending Approval From Incoming Institution',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '15',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '52',
            'name' => 'Pending Staff Transfer',
            'category' => '2',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '15',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '53',
            'name' => 'Transferred',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '1',
            'workflow_id' => '15',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ], [
            'id' => '54',
            'name' => 'Rejected',
            'category' => '3',
            'is_editable' => '0',
            'is_removable' => '0',
            'is_system_defined' => '0',
            'workflow_id' => '15',
            'modified_user_id' => NULL,
            'modified' => NULL,
            'created_user_id' => '1',
            'created' => '2017-10-13 18:10:05'
      ]
    ];
}
