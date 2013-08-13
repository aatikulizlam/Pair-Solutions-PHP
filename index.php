<?php
/**
 * Short description for file.
 *
 * PHP version 5
 *
 * @category   CategoryName
 * @package    PackageName
 * @subpackage SubPackageName
 * @author     Atikul Islam <mail@atikul.me>
 * @copyright  2013 Atikul.me
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt GPLv2
 * @version    GIT: ***
 * @link       URL
 * @since      File available since Release 0.0.0
 * @deprecated File deprecated in Release 0.0.0
 */

/** Enter your code here. Read input from STDIN. Print output to STDOUT. */

$fR = fopen('php://stdin', 'r');
$fW = fopen('php://stdout', 'w');

$arNums = explode(' ', fgets(STDIN));
$iLow = (int) $arNums[1];
$arNums = explode(' ', fgets(STDIN));
$arNums = array_count_values($arNums);
$iCount = 0;

foreach ($arNums as $iKey => $iValue) {
    $iResult = ( $iKey + $iLow );
    if (array_key_exists($iResult, $arNums) === true) {
        $iCount = ( $iCount + $arNums[$iResult] );
    }
}

fprintf($fW, '%d', $iCount);
