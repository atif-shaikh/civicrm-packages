--TEST--
phpunit --help
--FILE--
<?php
$_SERVER['argv'][1] = '--no-configuration';
$_SERVER['argv'][2] = '--help';

require_once dirname(dirname(dirname(__FILE__))) . '/TextUI/Command.php';
PHPUnit_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit %s by Sebastian Bergmann.

Usage: phpunit [switches] UnitTest [UnitTest.php]
       phpunit [switches] <directory>

  --log-junit <file>       Log test execution in JUnit XML format to file.
  --log-tap <file>         Log test execution in TAP format to file.
  --log-json <file>        Log test execution in JSON format.

  --coverage-html <dir>    Generate code coverage report in HTML format.
  --coverage-clover <file> Write code coverage data in Clover XML format.
  --coverage-source <dir>  Write code coverage / source data in XML format.

  --story-html <file>      Write Story/BDD results in HTML format to file.
  --story-text <file>      Write Story/BDD results in Text format to file.

  --testdox-html <file>    Write agile documentation in HTML format to file.
  --testdox-text <file>    Write agile documentation in Text format to file.

  --filter <pattern>       Filter which tests to run.
  --group ...              Only runs tests from the specified group(s).
  --exclude-group ...      Exclude tests from the specified group(s).
  --list-groups            List available test groups.

  --loader <loader>        TestSuiteLoader implementation to use.

  --story                  Report test execution progress in Story/BDD format.
  --tap                    Report test execution progress in TAP format.
  --testdox                Report test execution progress in TestDox format.

  --colors                 Use colors in output.
  --stderr                 Write to STDERR instead of STDOUT.
  --stop-on-failure        Stop execution upon first error or failure.
  --verbose                Output more verbose information.
  --wait                   Waits for a keystroke after each test.

  --skeleton-class         Generate Unit class for UnitTest in UnitTest.php.
  --skeleton-test          Generate UnitTest class for Unit in Unit.php.

  --process-isolation      Run each test in a separate PHP process.
  --no-globals-backup      Do not backup and restore $GLOBALS for each test.
  --static-backup          Backup and restore static attributes for each test.
  --syntax-check           Try to check source files for syntax errors.

  --bootstrap <file>       A "bootstrap" PHP file that is run before the tests.
  --configuration <file>   Read configuration from XML file.
  --no-configuration       Ignore default configuration file (phpunit.xml).
  --include-path <path(s)> Prepend PHP's include_path with given path(s).
  -d key[=value]           Sets a php.ini value.

  --help                   Prints this usage information.
  --version                Prints the version and exits.
