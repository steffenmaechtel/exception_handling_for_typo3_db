# exception_handling_for_typo3_db extension for TYPO3 CMS
Throw exception in case of error instead of show error with DebugUtility::debug

## Current handling in TYPO3 8.x with the old $GLOBALS['TYPO3_DB']

Execution of a wrong sql query only shows a debug message and dont throw an exception

```$GLOBALS['TYPO3_DB']->sql_query('SELECT not_existing_field FROM pages');```

In case of using a redirect after this query ($this->redirect()) the error is not shown at all

## What does this extension do

Overload the class behind $GLOBALS['TYPO3_DB'] and throw exception in case of sql error

## Notice

Avoid using $GLOBALS['TYPO3_DB']. Its deprecated since TYPO3 8.5.

Use the new \TYPO3\CMS\Core\Database\ConnectionPool.

This extension might help in case you cant rewrite old stuff using $GLOBALS['TYPO3_DB'].

@see https://docs.typo3.org/typo3cms/extensions/core/Changelog/8.1/Feature-75454-DoctrineDBALForDatabaseConnections.html

@see https://docs.typo3.org/typo3cms/extensions/core/Changelog/8.5/Deprecation-78244-DeprecateTYPO3_DBAndPreparedStatementClass.html
