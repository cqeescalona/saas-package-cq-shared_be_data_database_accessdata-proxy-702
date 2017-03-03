<?php
/**
 * Class DbServiceHelper
 *
 * @copyright CarQualifier LLC 2017
 * @author Eidher Escalona <eescalona@carqualifier.com>
 */


namespace Carqualifier\Packages\Shared\Be\Data\Database\AccessData\Proxy\V_0_1_0\Lib\Helpers;


use Carqualifier\Framework\Lib\Contracts\IServiceContract;
use Carqualifier\Packages\Shared\Be\Framework\Database\AccessData\V_0_1_0\Lib\Helpers\DbServiceHelper as BaseDbServiceHelper;

/**
 * Class DbServiceHelper
 *
 * @method IServiceContract getSessionDbService()
 * @method IServiceContract getManufacturerDbService()
 * @method IServiceContract getVehicleImageDbService()
 * @method IServiceContract getVehicleVideoDbService()
 * @method IServiceContract getVehicle360ViewDbService()
 * @method IServiceContract getVehicleColorDbService()
 * @method IServiceContract getVehicleSpecificationDbService()
 * @method IServiceContract getVehicleRebateDbService()
 */
final class DbServiceHelper extends BaseDbServiceHelper
{

}