<?php
/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Dictionary;

class OperationTypesInInstanceHistory{
            const _INSTANCE_POWERED_ON=121;
            const _INSTANCE_POWERED_OFF=122;
            const _SNAPSHOT_CREATED=123;
            const _HARD_RESET=128;
            const _SNAPSHOT_RESTORED=129;
            const _INSTANCE_RECONFIGURATION=146;
            const _SNAPSHOT_RENAMED=147;
            const _SNAPSHOT_REMOVED=148;
            const _INSTANCE_DEPLOYED=159;
            const _INSTANCE_CLONED=175;
            const _AUTOSCALER_CONFIG_CHANGED=203;
            const _CONSOLE_OPENED=209;
            const _CONSOLE_CLOSED=210;
            const _HINT=234;
            const _MEMORY_ALLOCATION_CHANGED=237;
            const _CONSOLE_ACCESS_DETAILS=241;
            const _INSTANCE_ACCESS_DETAILS=247;
            const _INSTANCE_REMOVED=248;
            const _INSTANCE_INITIALIZED=261;
            const _POST_CONFIGURATION_FAILED_REMOVING_INSTANCE=262;
            const _TASK_CREATED=264;
            const _CONFIG_CHANGED=265;
            const _TASK_REMOVED=266;
            const _RECONFIGURATION=267;
            const _DATABASE_BACKUP=540;
            const _DATABASE_RESTORE=541;
            const _DATABASE_DELETE=544;
            const _DATABASE_CREATED=547;
            const _DATABASE_USER_CREATED=553;
            const _DATABASE_USER_PASSWORD_RESETED=554;
            const _DATABASE_USER_DELETED=555;
            const _CHANGED_DATABASE_USER_PRIVILEGES_CHANGED=560;
            const _IP_ADDRESS_ADDED=854;
            const _IP_ADDRESS_REMOVED=855;
            const _RENAME_INSTANCE=868;
            const _VIRTUAL_MACHINE_EXPORT=872;
            const _INCREASING_MEMORY_RESERVATION=878;
            const _DECREASING_MEMORY_RESERVATION=879;
            const _RECONFIGURING_ORDB_INSTANCE_DISK_SPACE=891;
            const _INSTANCE_DEPLOYED_AFTER_IMPORT=893;
            const _DELETION_OF_EVENT_LOGS=900;
            const _VIRTUAL_MACHINE_SUB_REGION_CHANGE=1173;
            const _EXPORT_ADDED_TO_QUEUE=1192;
            const _EXPORT_EXPORT_AND_COMPRESSION=1193;
            const _EXPORT_TRANSFER_TO_OCS=1194;
            const _EXPORT_END=1195;
            const _BACKUP_ADDED_TO_QUEUE=1196;
            const _BACKUP_SNAPSHOT=1197;
            const _BACKUP_EXPORT_AND_COMPRESSION=1198;
            const _BACKUP_SNAPSHOT_COMMIT=1199;
            const _BACKUP_TRANSFER_TO_OCS=1200;
            const _BACKUP_END=1201;
            const _OCI_TO_TEMPLATE_CONVERSION=1288;
            const _INSTANCE_SHUTDOWN=1329;
            const _SOFT_REBOOT=1369;
            const _AUTOMATIC_UNLOCK=1414;
            const _MOVING_OCI_TO_COMMERCIAL_INFRASTUCTURE=1632;
                       
}