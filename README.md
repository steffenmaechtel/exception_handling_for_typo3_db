# exception_handling_for_typo3_db extension for TYPO3 CMS
Throw exception in case of error instead of show error with DebugUtility::debug

## Current handling in TYPO3 8.7

Execution of an wrong sql query only shows a debug message and dont throw an exception

```$GLOBALS['TYPO3_DB']->query('SELECT not_existing_field FROM pages');```

In case of using a redirect after this query ($this->redirect()) the error is no shown at all

## What does this extension do

Overload TYPO3_DB class and throw exception in case of sql error
