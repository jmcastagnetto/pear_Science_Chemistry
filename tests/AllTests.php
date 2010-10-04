<?php

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Science_Chemistry_AllTests::main');
}

require_once 'PHPUnit/TextUI/TestRunner.php';

require_once 'Science_ChemistryTest.php';
require_once 'Science_Chemistry_PDBFileTest.php';

class Science_Chemistry_AllTests
{
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new PHPUnit_Framework_TestSuite('PEAR - Science_Chemistry');

        $suite->addTestSuite('Science_ChemistryTest');
        $suite->addTestSuite('Science_Chemistry_PDBFileTest');

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Science_Chemistry_AllTests::main') {
    Science_Chemistry_AllTests::main();
}
