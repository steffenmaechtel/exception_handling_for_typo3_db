<?php
namespace SteffenMaechtel\ExceptionHandlingForTypo3Db\Xclass;

use SteffenMaechtel\ExceptionHandlingForTypo3Db\DatabaseErrorException;
use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * @author Steffen Maechtel <info@steffen-maechtel.de>
 */
class ExceptionHandlingDatabaseConnection extends DatabaseConnection
{

    /**
     * throw exception instead of debug output
     * 
     * @overload
     * @throws DatabaseErrorException
     */
    public function debug($func, $query = '')
    {
        $this->logDeprecation();
        $error = $this->sql_error();
        if ($error) {
            throw new DatabaseErrorException($error, 1543596854);
        }
    }
}
