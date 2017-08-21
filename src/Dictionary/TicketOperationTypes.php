<?php
/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Dictionary;

class TicketOperationTypes{
            const _DEPLOYING_INSTANCE=138;
            const _CLONING_INSTANCE=141;
            const _POWERING_OFF=142;
            const _POWERING_ON=143;
            const _RECONFIGURING_INSTANCE=144;
            const _TAKING_SNAPSHOT=145;
            const _REMOVING_SNAPSHOT=149;
            const _INSTANCE_HARD_RESETTING=153;
            const _RESTORING_FROM_SNAPSHOT=154;
            const _DEPLOYING_INSTANCE=158;
            const _REMOVING_INSTANCE=206;
            const _INITIALIZING_CONSOLE_CONNECTION=207;
            const _CLOSING_CONSOLE_CONNECTION=208;
            const _INITIALIZING_INSTANCE=249;
            const _DISK_CREATION=277;
            const _RECONFIGURING_DISK=283;
            const _OPN_CREATING=285;
            const _REMOVING_DISK=286;
            const _REMOVING_OPN=327;
            const _DATABASE_BACKUP=328;
            const _DATABASE_RESTORE=542;
            const _DATABASE_COPY=543;
            const _DATABASE_MIGRATION=545;
            const _REMOVING_DATABASE=546;
            const _DATABASE_CREATION=548;
            const _CREATING_DATABASE_USER=556;
            const _RESETING_DATABASE_USER_PASSWORD=557;
            const _DELETING_DATABASE_USER=558;
            const _CHANGING_DATABASE_USER_PRIVILEGES_CHANGED=561;
            const _DEPLOY_CONFIGURED_INSTANCE=592;
            const _UPDATING_AUTOSCALING=595;
            const _MOVING_DISK=837;
            const _INSTANCE_RENAMING=867;
            const _MACHINE_CLONE_DELETING=880;
            const _RECONFIGURING_ORDB_INSTANCE_DISK_SPACE=890;
            const _VIRTUAL_MACHINE_START=892;
            const _IMPORT_PAYLANE_STATEMENT=1055;
            const _VIRTUAL_MACHINE_IMPORT=1100;
            const _VIRTUAL_MACHINE_EXPORT=1101;
            const _VIRTUAL_MACHINE_SUB_REGION_CHANGE=1172;
            const _VIRTUAL_MACHINE_TRANSFER_TO_OCS=1191;
            const _BACKUP_TRANSFER_TO_OCS=1202;
            const _OCI_TO_TEMPLATE_CONVERSION=1287;
            const _DOWNLOADING_IMAGE_FROM_MARKET=1298;
            const _VIRTUAL_MACHINE_EXPORT_FROM_CONNETOR_TO_OCS=1326;
            const _VIRTUAL_MACHINE_IMPORT_FROM_OCS_TO_CONNETOR=1327;
            const _INSTANCE_SHUTDOWN=1331;
            const _INSTANCE_SOFT_REBOOTING=1368;
            const _UPDATING_CONTAINER_AFFINITY_RULES=1402;
            const _ACCOUNT_CONFIGURATION=1508;
            const _MOVING_OCI_TO_COMMERCIAL_INFRASTUCTURE=1631;
                       
}