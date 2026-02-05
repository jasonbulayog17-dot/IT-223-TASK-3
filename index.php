<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Functions Demo</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>SQL Functions Demonstration</h1>
    <h3>STRING FUNCTIONS</h3>
    <table>
        <tr>
            <th>Function</th>
            <th>Description</th>
            <th>SQL Example</th>
            <th>Output</th>
        </tr>
        <!-- String Functions -->
        <tr>
            <td>ASCII</td>
            <td>Returns the ASCII value of the first character.</td>
            <td>SELECT ASCII('A') AS result</td>
            <td><a href="ASCII.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CHAR_LENGTH</td>
            <td>Returns the length of a string in characters.</td>
            <td>SELECT CHAR_LENGTH(name) AS result FROM employees LIMIT 1</td>
            <td><a href="CHAR_LENGTH.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CHARACTER_LENGTH</td>
            <td>Returns the length of a string in characters.</td>
            <td>SELECT CHARACTER_LENGTH(name) AS result FROM employees LIMIT 1</td>
            <td><a href="CHARACTER_LENGTH.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CONCAT</td>
            <td>Concatenates strings.</td>
            <td>SELECT CONCAT(name, ' - ', department) AS result FROM employees LIMIT 1</td>
            <td><a href="CONCAT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CONCAT_WS</td>
            <td>Concatenates strings with a separator.</td>
            <td>SELECT CONCAT_WS(' | ', name, department) AS result FROM employees LIMIT 1</td>
            <td><a href="CONCAT_WS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>FIELD</td>
            <td>Returns the index of a value in a list.</td>
            <td>SELECT FIELD('IT', department) AS result FROM employees LIMIT 1</td>
            <td><a href="FIELD.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>FIND_IN_SET</td>
            <td>Returns the position of a string in a comma-separated list.</td>
            <td>SELECT FIND_IN_SET('IT', 'HR,IT,Finance') AS result</td>
            <td><a href="FIND_IN_SET.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>FORMAT</td>
            <td>Formats a number with commas and decimals.</td>
            <td>SELECT FORMAT(salary, 2) AS result FROM employees LIMIT 1</td>
            <td><a href="FORMAT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>INSERT</td>
            <td>Inserts a substring into a string.</td>
            <td>SELECT INSERT(name, 1, 3, 'XXX') AS result FROM employees LIMIT 1</td>
            <td><a href="INSERT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>INSTR</td>
            <td>Returns the position of a substring.</td>
            <td>SELECT INSTR(name, 'John') AS result FROM employees LIMIT 1</td>
            <td><a href="INSTR.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LCASE</td>
            <td>Converts a string to lowercase.</td>
            <td>SELECT LCASE(name) AS result FROM employees LIMIT 1</td>
            <td><a href="LCASE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LEFT</td>
            <td>Returns the left part of a string.</td>
            <td>SELECT LEFT(name, 3) AS result FROM employees LIMIT 1</td>
            <td><a href="LEFT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LENGTH</td>
            <td>Returns the length of a string in bytes.</td>
            <td>SELECT LENGTH(name) AS result FROM employees LIMIT 1</td>
            <td><a href="LENGTH.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOCATE</td>
            <td>Returns the position of a substring.</td>
            <td>SELECT LOCATE('Doe', name) AS result FROM employees LIMIT 1</td>
            <td><a href="LOCATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOWER</td>
            <td>Converts a string to lowercase.</td>
            <td>SELECT LOWER(name) AS result FROM employees LIMIT 1</td>
            <td><a href="LOWER.php" target="_blank">View Output</a></td>
        </tr>
        </table>
        <h3>NUMERIC FUNCTIONS</h3>
        <table>
        <tr>
            <th>Function</th>
            <th>Description</th>
            <th>SQL Example</th>
            <th>Output</th>
        </tr>
        <!-- Math Functions -->
        <tr>
            <td>ABS</td>
            <td>Returns the absolute value.</td>
            <td>SELECT ABS(-salary) AS result FROM employees LIMIT 1</td>
            <td><a href="ABS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ACOS</td>
            <td>Returns the arc cosine.</td>
            <td>SELECT ACOS(0.5) AS result</td>
            <td><a href="ACOS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ASIN</td>
            <td>Returns the arc sine.</td>
            <td>SELECT ASIN(0.5) AS result</td>
            <td><a href="ASIN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ATAN</td>
            <td>Returns the arc tangent.</td>
            <td>SELECT ATAN(1) AS result</td>
            <td><a href="ATAN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ATAN2</td>
            <td>Returns the arc tangent of two variables.</td>
            <td>SELECT ATAN2(1, 1) AS result</td>
            <td><a href="ATAN2.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>AVG</td>
            <td>Returns the average value.</td>
            <td>SELECT AVG(salary) AS result FROM employees</td>
            <td><a href="AVG.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CEIL</td>
            <td>Returns the smallest integer greater than or equal to a number.</td>
            <td>SELECT CEIL(salary) AS result FROM employees LIMIT 1</td>
            <td><a href="CEIL.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CEILING</td>
            <td>Returns the smallest integer greater than or equal to a number.</td>
            <td>SELECT CEILING(salary) AS result FROM employees LIMIT 1</td>
            <td><a href="CEILING.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>COS</td>
            <td>Returns the cosine.</td>
            <td>SELECT COS(0) AS result</td>
            <td><a href="COS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>COT</td>
            <td>Returns the cotangent.</td>
            <td>SELECT COT(1) AS result</td>
            <td><a href="COT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>COUNT</td>
            <td>Returns the number of records.</td>
            <td>SELECT COUNT(*) AS result FROM employees</td>
            <td><a href="COUNT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DEGREES</td>
            <td>Converts radians to degrees.</td>
            <td>SELECT DEGREES(PI()) AS result</td>
            <td><a href="DEGREES.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DIV</td>
            <td>Performs integer division.</td>
            <td>SELECT 10 DIV 3 AS result</td>
            <td><a href="DIV.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>EXP</td>
            <td>Returns e raised to the power.</td>
            <td>SELECT EXP(1) AS result</td>
            <td><a href="EXP.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>FLOOR</td>
            <td>Returns the largest integer less than or equal to a number.</td>
            <td>SELECT FLOOR(salary) AS result FROM employees LIMIT 1</td>
            <td><a href="FLOOR.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>GREATEST</td>
            <td>Returns the greatest value.</td>
            <td>SELECT GREATEST(salary, 50000) AS result FROM employees LIMIT 1</td>
            <td><a href="GREATEST.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LEAST</td>
            <td>Returns the smallest value.</td>
            <td>SELECT LEAST(salary, 50000) AS result FROM employees LIMIT 1</td>
            <td><a href="LEAST.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LN</td>
            <td>Returns the natural logarithm.</td>
            <td>SELECT LN(2) AS result</td>
            <td><a href="LN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOG</td>
            <td>Returns the natural logarithm.</td>
            <td>SELECT LOG(10) AS result</td>
            <td><a href="LOG.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOG10</td>
            <td>Returns the base-10 logarithm.</td>
            <td>SELECT LOG10(100) AS result</td>
            <td><a href="LOG10.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOG2</td>
            <td>Returns the base-2 logarithm.</td>
            <td>SELECT LOG2(8) AS result</td>
            <td><a href="LOG2.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MAX</td>
            <td>Returns the maximum value.</td>
            <td>SELECT MAX(salary) AS result FROM employees</td>
            <td><a href="MAX.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MIN</td>
            <td>Returns the minimum value.</td>
            <td>SELECT MIN(salary) AS result FROM employees</td>
            <td><a href="MIN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MOD</td>
            <td>Returns the remainder of division.</td>
            <td>SELECT MOD(10, 3) AS result</td>
            <td><a href="MOD.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>PI</td>
            <td>Returns the value of PI.</td>
            <td>SELECT PI() AS result</td>
            <td><a href="PI.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>POW</td>
            <td>Returns a number raised to the power.</td>
            <td>SELECT POW(2, 3) AS result</td>
            <td><a href="POW.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>POWER</td>
            <td>Returns a number raised to the power.</td>
            <td>SELECT POWER(2, 3) AS result</td>
            <td><a href="POWER.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>RADIANS</td>
            <td>Converts degrees to radians.</td>
            <td>SELECT RADIANS(180) AS result</td>
            <td><a href="RADIANS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>RAND</td>
            <td>Returns a random number.</td>
            <td>SELECT RAND() AS result</td>
            <td><a href="RAND.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ROUND</td>
            <td>Rounds a number.</td>
            <td>SELECT ROUND(salary, 0) AS result FROM employees LIMIT 1</td>
            <td><a href="ROUND.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SIGN</td>
            <td>Returns the sign of a number.</td>
            <td>SELECT SIGN(salary - 50000) AS result FROM employees LIMIT 1</td>
            <td><a href="SIGN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SIN</td>
            <td>Returns the sine.</td>
            <td>SELECT SIN(0) AS result</td>
            <td><a href="SIN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SQRT</td>
            <td>Returns the square root.</td>
            <td>SELECT SQRT(16) AS result</td>
            <td><a href="SQRT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SUM</td>
            <td>Returns the sum.</td>
            <td>SELECT SUM(salary) AS result FROM employees</td>
            <td><a href="SUM.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TAN</td>
            <td>Returns the tangent.</td>
            <td>SELECT TAN(0) AS result</td>
            <td><a href="TAN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TRUNCATE</td>
            <td>Truncates a number.</td>
            <td>SELECT TRUNCATE(salary, 0) AS result FROM employees LIMIT 1</td>
            <td><a href="TRUNCATE.php" target="_blank">View Output</a></td>
        </tr>
        <!-- Date Functions -->
         </table>
        <h3>DATE FUNCTIONS</h3>
        <table>
        <tr>
            <th>Function</th>
            <th>Description</th>
            <th>SQL Example</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>ADDDATE</td>
            <td>Adds time to a date.</td>
            <td>SELECT ADDDATE(hire_date, INTERVAL 1 DAY) AS result FROM employees LIMIT 1</td>
            <td><a href="ADDDATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ADDTIME</td>
            <td>Adds time to a time.</td>
            <td>SELECT ADDTIME(NOW(), '01:00:00') AS result</td>
            <td><a href="ADDTIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CURDATE</td>
            <td>Returns the current date.</td>
            <td>SELECT CURDATE() AS result</td>
            <td><a href="CURDATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CURRENT_DATE</td>
            <td>Returns the current date.</td>
            <td>SELECT CURRENT_DATE() AS result</td>
            <td><a href="CURRENT_DATE.php" target="_blank">View Output</a></td>
        </tr>
         <tr>
            <td>CURTIME</td>
            <td>Returns the current time.</td>
            <td>SELECT CURTIME() AS result</td>
            <td><a href="CURTIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DATE</td>
            <td>Extracts the date part.</td>
            <td>SELECT DATE(NOW()) AS result</td>
            <td><a href="DATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DATEDIFF</td>
            <td>Returns the difference between dates.</td>
            <td>SELECT DATEDIFF(NOW(), hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="DATEDIFF.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DATE_ADD</td>
            <td>Adds time to a date.</td>
            <td>SELECT DATE_ADD(hire_date, INTERVAL 1 MONTH) AS result FROM employees LIMIT 1</td>
            <td><a href="DATE_ADD.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DATE_FORMAT</td>
            <td>Formats a date.</td>
            <td>SELECT DATE_FORMAT(hire_date, '%Y-%m-%d') AS result FROM employees LIMIT 1</td>
            <td><a href="DATE_FORMAT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DATE_SUB</td>
            <td>Subtracts time from a date.</td>
            <td>SELECT DATE_SUB(hire_date, INTERVAL 1 YEAR) AS result FROM employees LIMIT 1</td>
            <td><a href="DATE_SUB.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DAY</td>
            <td>Returns the day of the month.</td>
            <td>SELECT DAY(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="DAY.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DAYNAME</td>
            <td>Returns the name of the day.</td>
            <td>SELECT DAYNAME(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="DAYNAME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DAYOFMONTH</td>
            <td>Returns the day of the month.</td>
            <td>SELECT DAYOFMONTH(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="DAYOFMONTH.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DAYOFWEEK</td>
            <td>Returns the day of the week.</td>
            <td>SELECT DAYOFWEEK(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="DAYOFWEEK.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DAYOFYEAR</td>
            <td>Returns the day of the year.</td>
            <td>SELECT DAYOFYEAR(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="DAYOFYEAR.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>EXTRACT</td>
            <td>Extracts a part from a date.</td>
            <td>SELECT EXTRACT(YEAR FROM hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="EXTRACT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>FROM_DAYS</td>
            <td>Converts a day number to a date.</td>
            <td>SELECT FROM_DAYS(730000) AS result</td>
            <td><a href="FROM_DAYS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>HOUR</td>
            <td>Returns the hour.</td>
            <td>SELECT HOUR(NOW()) AS result</td>
            <td><a href="HOUR.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LAST_DAY</td>
            <td>Returns the last day of the month.</td>
            <td>SELECT LAST_DAY(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="LAST_DAY.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOCALTIME</td>
            <td>Returns the current local time.</td>
            <td>SELECT LOCALTIME() AS result</td>
            <td><a href="LOCALTIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LOCALTIMESTAMP</td>
            <td>Returns the current local timestamp.</td>
            <td>SELECT LOCALTIMESTAMP() AS result</td>
            <td><a href="LOCALTIMESTAMP.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MAKEDATE</td>
            <td>Creates a date from year and day.</td>
            <td>SELECT MAKEDATE(2023, 100) AS result</td>
            <td><a href="MAKEDATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MAKETIME</td>
            <td>Creates a time.</td>
            <td>SELECT MAKETIME(12, 30, 45) AS result</td>
            <td><a href="MAKETIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MICROSECOND</td>
            <td>Returns the microseconds.</td>
            <td>SELECT MICROSECOND(NOW()) AS result</td>
            <td><a href="MICROSECOND.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MINUTE</td>
            <td>Returns the minutes.</td>
            <td>SELECT MINUTE(NOW()) AS result</td>
            <td><a href="MINUTE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MONTH</td>
            <td>Returns the month.</td>
            <td>SELECT MONTH(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="MONTH.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>MONTHNAME</td>
            <td>Returns the name of the month.</td>
            <td>SELECT MONTHNAME(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="MONTHNAME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>NOW</td>
            <td>Returns the current date and time.</td>
            <td>SELECT NOW() AS result</td>
            <td><a href="NOW.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>PERIOD_ADD</td>
            <td>Adds months to a period.</td>
            <td>SELECT PERIOD_ADD(202301, 1) AS result</td>
            <td><a href="PERIOD_ADD.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>PERIOD_DIFF</td>
            <td>Returns the difference between periods.</td>
            <td>SELECT PERIOD_DIFF(202301, 202201) AS result</td>
            <td><a href="PERIOD_DIFF.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>QUARTER</td>
            <td>Returns the quarter.</td>
            <td>SELECT QUARTER(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="QUARTER.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SECOND</td>
            <td>Returns the seconds.</td>
            <td>SELECT SECOND(NOW()) AS result</td>
            <td><a href="SECOND.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SEC_TO_TIME</td>
            <td>Converts seconds to time.</td>
            <td>SELECT SEC_TO_TIME(3600) AS result</td>
            <td><a href="SEC_TO_TIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>STR_TO_DATE</td>
            <td>Converts a string to a date.</td>
            <td>SELECT STR_TO_DATE('2023-01-01', '%Y-%m-%d') AS result</td>
            <td><a href="STR_TO_DATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SUBDATE</td>
            <td>Subtracts time from a date.</td>
            <td>SELECT SUBDATE(hire_date, INTERVAL 1 DAY) AS result FROM employees LIMIT 1</td>
            <td><a href="SUBDATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SUBTIME</td>
            <td>Subtracts time from a time.</td>
            <td>SELECT SUBTIME(NOW(), '01:00:00') AS result</td>
            <td><a href="SUBTIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SYSDATE</td>
            <td>Returns the system date and time.</td>
            <td>SELECT SYSDATE() AS result</td>
            <td><a href="SYSDATE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TIME</td>
            <td>Extracts the time part.</td>
            <td>SELECT TIME(NOW()) AS result</td>
            <td><a href="TIME.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TIME_FORMAT</td>
            <td>Formats a time.</td>
            <td>SELECT TIME_FORMAT(NOW(), '%H:%i:%s') AS result</td>
            <td><a href="TIME_FORMAT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TIME_TO_SEC</td>
            <td>Converts time to seconds.</td>
            <td>SELECT TIME_TO_SEC('01:00:00') AS result</td>
            <td><a href="TIME_TO_SEC.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TIMEDIFF</td>
            <td>Returns the difference between times.</td>
            <td>SELECT TIMEDIFF(NOW(), hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="TIMEDIFF.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TIMESTAMP</td>
            <td>Creates a timestamp.</td>
            <td>SELECT TIMESTAMP(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="TIMESTAMP.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>TO_DAYS</td>
            <td>Converts a date to days.</td>
            <td>SELECT TO_DAYS(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="TO_DAYS.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>WEEK</td>
            <td>Returns the week number.</td>
            <td>SELECT WEEK(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="WEEK.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>WEEKDAY</td>
            <td>Returns the weekday index.</td>
            <td>SELECT WEEKDAY(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="WEEKDAY.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>WEEKOFYEAR</td>
            <td>Returns the week of the year.</td>
            <td>SELECT WEEKOFYEAR(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="WEEKOFYEAR.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>YEAR</td>
            <td>Returns the year.</td>
            <td>SELECT YEAR(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="YEAR.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>YEARWEEK</td>
            <td>Returns the year and week.</td>
            <td>SELECT YEARWEEK(hire_date) AS result FROM employees LIMIT 1</td>
            <td><a href="YEARWEEK.php" target="_blank">View Output</a></td>
        </tr>
        <!-- Misc Functions -->
         </table>
        <h3>ADVANCED FUNCTIONS</h3>
        <table>
        <tr>
            <th>Function</th>
            <th>Description</th>
            <th>SQL Example</th>
            <th>Output</th>
        </tr>
        <tr>
            <td>BIN</td>
            <td>Returns the binary representation.</td>
            <td>SELECT BIN(10) AS result</td>
            <td><a href="BIN.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>BINARY</td>
            <td>Casts to binary.</td>
            <td>SELECT BINARY('Hello') AS result</td>
            <td><a href="BINARY.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CASE</td>
            <td>Conditional expression.</td>
            <td>SELECT CASE WHEN salary > 50000 THEN 'High' ELSE 'Low' END AS result FROM employees LIMIT 1</td>
            <td><a href="CASE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CAST</td>
            <td>Casts a value to a type.</td>
            <td>SELECT CAST(salary AS CHAR) AS result FROM employees LIMIT 1</td>
            <td><a href="CAST.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>COALESCE</td>
            <td>Returns the first non-null value.</td>
            <td>SELECT COALESCE(NULL, name) AS result FROM employees LIMIT 1</td>
            <td><a href="COALESCE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CONNECTION_ID</td>
            <td>Returns the connection ID.</td>
            <td>SELECT CONNECTION_ID() AS result</td>
            <td><a href="CONNECTION_ID.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CONV</td>
            <td>Converts numbers between bases.</td>
            <td>SELECT CONV(10, 10, 2) AS result</td>
            <td><a href="CONV.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CONVERT</td>
            <td>Converts a value.</td>
            <td>SELECT CONVERT(salary, CHAR) AS result FROM employees LIMIT 1</td>
            <td><a href="CONVERT.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>CURRENT_USER</td>
            <td>Returns the current user.</td>
            <td>SELECT CURRENT_USER() AS result</td>
            <td><a href="CURRENT_USER.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>DATABASE</td>
            <td>Returns the current database.</td>
            <td>SELECT DATABASE() AS result</td>
            <td><a href="DATABASE.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>IF</td>
            <td>Conditional function.</td>
            <td>SELECT IF(salary > 50000, 'Yes', 'No') AS result FROM employees LIMIT 1</td>
            <td><a href="IF.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>IFNULL</td>
            <td>Returns a default if null.</td>
            <td>SELECT IFNULL(NULL, 'Default') AS result</td>
            <td><a href="IFNULL.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>ISNULL</td>
            <td>Checks if null.</td>
            <td>SELECT ISNULL(NULL) AS result</td>
            <td><a href="ISNULL.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>LAST_INSERT_ID</td>
            <td>Returns the last insert ID.</td>
            <td>SELECT LAST_INSERT_ID() AS result</td>
            <td><a href="LAST_INSERT_ID.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>NULLIF</td>
            <td>Returns null if equal.</td>
            <td>SELECT NULLIF(salary, 50000) AS result FROM employees LIMIT 1</td>
            <td><a href="NULLIF.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SESSION_USER</td>
            <td>Returns the session user.</td>
            <td>SELECT SESSION_USER() AS result</td>
            <td><a href="SESSION_USER.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>SYSTEM_USER</td>
            <td>Returns the system user.</td>
            <td>SELECT SYSTEM_USER() AS result</td>
            <td><a href="SYSTEM_USER.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>USER</td>
            <td>Returns the current user.</td>
            <td>SELECT USER() AS result</td>
            <td><a href="USER.php" target="_blank">View Output</a></td>
        </tr>
        <tr>
            <td>VERSION</td>
            <td>Returns the MySQL version.</td>
            <td>SELECT VERSION() AS result</td>
            <td><a href="VERSION.php" target="_blank">View Output</a></td>
        </tr>

