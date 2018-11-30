<?php
namespace SteffenMaechtel\ExceptionHandlingForTypo3Db\Xclass;

use Exception;
use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * @author Steffen Maechtel <info@steffen-maechtel.de>
 */
class ExceptionHandlingDatabaseConnection extends DatabaseConnection
{

    public function debug($func, $query = '')
    {
        $this->logDeprecation();
        $error = $this->sql_error();
        if ($error) {
            throw new Exception($error, 1543596854);
        }
    }
}
