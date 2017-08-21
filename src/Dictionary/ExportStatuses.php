<?php
/*
 * @author Mariusz Piela <mariusz.piela@tmsolution.pl>
 * @copyright 2017 TMSolution Sp z o.o.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OktawaveApi\Dictionary;

class ExportStatuses{
            const _RUNNING_EXPORT=875;
            const _SUCCESS=876;
            const _EXPORT_FAILED=877;
            const _DELETED_BY_SCHEDULER=888;
            const _DELETED_NO_FILE_=889;
            const _PENDING=1114;
            const _PENDING_TRANSFER_TO_OCS=1184;
            const _RUNNING_TRANSFER_TO_OCS=1185;
            const _TRANSFER_TO_OCS_FAILED=1186;
            const _TRANSFER_TO_OCS_FAILED__MAX_ERROS_EXCEEDED=1203;
                       
}