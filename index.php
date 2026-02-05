<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SQL Functions Demonstration</title>
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>


<h2>SQL Functions Demonstration</h2>

<table class="table-scroll">
       <tr>
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

<tr><th colspan="4">SQL STRING FUNCTIONS (33)</th></tr>

<tr>
  <td>ASCII()</td>
  <td>Returns the ASCII value for the specific character</td>
  <td><code>SELECT ASCII('A');</code></td>
  <td><a href="ascii.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CHAR_LENGTH()</td>
  <td>Returns the length of a string (in characters)</td>
  <td><code>SELECT CHAR_LENGTH(name);</code></td>
  <td><a href="char_length.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CHARACTER_LENGTH()</td>
  <td>Same as CHAR_LENGTH()</td>
  <td><code>SELECT CHARACTER_LENGTH(name);</code></td>
  <td><a href="character_length.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CONCAT()</td>
  <td>Adds two or more strings together</td>
  <td><code>SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees;</code></td>
  <td><a href="concat.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CONCAT_WS()</td>
  <td>Adds two or more strings together with a separator</td>
  <td><code>SELECT CONCAT_WS('-',a,b);</code></td>
  <td><a href="concat_ws.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>FIELD()</td>
  <td>Returns the index position of a value in a list of values</td>
  <td><code>SELECT FIELD('b','a','b','c');</code></td>
  <td><a href="field.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>FIND_IN_SET()</td>
  <td>Returns the position of a string within a list of strings</td>
  <td><code>SELECT FIND_IN_SET('b','a,b,c');</code></td>
  <td><a href="find_in_set.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>FORMAT()</td>
  <td>Formats a number to a format like #,###.##</td>
  <td><code>SELECT FORMAT(12345.678,2);</code></td>
  <td><a href="format_func.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>INSERT()</td>
  <td>Inserts a string within a string at the specified position</td>
  <td><code>SELECT INSERT('Hello',2,3,'X');</code></td>
  <td><a href="insert_func.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>INSTR()</td>
  <td>Returns the position of the first occurrence of a string</td>
  <td><code>SELECT INSTR('Hello','e');</code></td>
  <td><a href="instr.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LCASE()</td>
  <td>Converts a string to lower-case</td>
  <td><code>SELECT LCASE('HELLO');</code></td>
  <td><a href="lcase.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LEFT()</td>
  <td>Extracts a number of characters from a string (from left)</td>
  <td><code>SELECT LEFT(name,3);</code></td>
  <td><a href="left_func.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LENGTH()</td>
  <td>Returns the length of a string (in bytes)</td>
  <td><code>SELECT LENGTH(name);</code></td>
  <td><a href="length.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOCATE()</td>
  <td>Returns the position of the first occurrence of a substring</td>
  <td><code>SELECT LOCATE('e','Hello');</code></td>
  <td><a href="locate.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOWER()</td>
  <td>Converts a string to lower-case</td>
  <td><code>SELECT LOWER(name);</code></td>
  <td><a href="lower.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LPAD()</td>
  <td>Left-pads a string with another string</td>
  <td><code>SELECT LPAD(name,10,'*');</code></td>
  <td><a href="lpad.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LTRIM()</td>
  <td>Removes leading spaces from a string</td>
  <td><code>SELECT LTRIM(name);</code></td>
  <td><a href="ltrim.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MID()</td>
  <td>Extracts a substring from a string</td>
  <td><code>SELECT MID(name,2,3);</code></td>
  <td><a href="mid.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>POSITION()</td>
  <td>Returns the position of a substring in a string</td>
  <td><code>SELECT POSITION('e' IN 'Hello');</code></td>
  <td><a href="position.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>REPEAT()</td>
  <td>Repeats a string a specified number of times</td>
  <td><code>SELECT REPEAT('A',3);</code></td>
  <td><a href="repeat.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>REPLACE()</td>
  <td>Replaces all occurrences of a substring</td>
  <td><code>SELECT REPLACE('Hello','l','x');</code></td>
  <td><a href="replace.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>REVERSE()</td>
  <td>Reverses a string</td>
  <td><code>SELECT REVERSE('abc');</code></td>
  <td><a href="reverse.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>RIGHT()</td>
  <td>Extracts a number of characters from a string (from right)</td>
  <td><code>SELECT RIGHT(name,3);</code></td>
  <td><a href="right.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>RPAD()</td>
  <td>Right-pads a string with another string</td>
  <td><code>SELECT RPAD(name,10,'*');</code></td>
  <td><a href="rpad.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>RTRIM()</td>
  <td>Removes trailing spaces from a string</td>
  <td><code>SELECT RTRIM(name);</code></td>
  <td><a href="rtrim.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SPACE()</td>
  <td>Returns a string of specified number of spaces</td>
  <td><code>SELECT SPACE(5);</code></td>
  <td><a href="space.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>STRCMP()</td>
  <td>Compares two strings</td>
  <td><code>SELECT STRCMP('a','b');</code></td>
  <td><a href="strcmp.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SUBSTR()</td>
  <td>Extracts a substring from a string</td>
  <td><code>SELECT SUBSTR(name,2,3);</code></td>
  <td><a href="substr.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SUBSTRING()</td>
  <td>Extracts a substring from a string</td>
  <td><code>SELECT SUBSTRING(name,2,3);</code></td>
  <td><a href="substring.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SUBSTRING_INDEX()</td>
  <td>Returns a substring from a string before a specified number of delimiters</td>
  <td><code>SELECT SUBSTRING_INDEX(name,' ',1);</code></td>
  <td><a href="substring_index.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TRIM()</td>
  <td>Removes leading and trailing spaces</td>
  <td><code>SELECT TRIM(name);</code></td>
  <td><a href="trim.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>UCASE()</td>
  <td>Converts a string to upper-case</td>
  <td><code>SELECT UCASE(name);</code></td>
  <td><a href="ucase.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>UPPER()</td>
  <td>Converts a string to upper-case</td>
  <td><code>SELECT UPPER(name);</code></td>
  <td><a href="upper.php" target="_blank">View Output</a></td>
</tr>


<!-- NUMERIC FUNCTIONS -->
<tr><th colspan="4">SQL NUMERIC FUNCTIONS (36)</th></tr>

<tr>
  <td>ABS()</td>
  <td>Returns the absolute value of a number</td>
  <td><code>SELECT ABS(-5);</code></td>
  <td><a href="abs.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>ACOS()</td>
  <td>Returns the arc cosine of a number</td>
  <td><code>SELECT ACOS(1);</code></td>
  <td><a href="acos.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>ASIN()</td>
  <td>Returns the arc sine of a number</td>
  <td><code>SELECT ASIN(1);</code></td>
  <td><a href="asin.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>ATAN()</td>
  <td>Returns the arc tangent of a number</td>
  <td><code>SELECT ATAN(1);</code></td>
  <td><a href="atan.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>ATAN2()</td>
  <td>Returns the arc tangent of two numbers</td>
  <td><code>SELECT ATAN2(1,1);</code></td>
  <td><a href="atan2.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>AVG()</td>
  <td>Returns the average value</td>
  <td><code>SELECT AVG(x);</code></td>
  <td><a href="avg.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CEIL()</td>
  <td>Returns the smallest integer greater than or equal to a number</td>
  <td><code>SELECT CEIL(4.2);</code></td>
  <td><a href="ceil.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CEILING()</td>
  <td>Same as CEIL()</td>
  <td><code>SELECT CEILING(4.2);</code></td>
  <td><a href="ceil.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>COS()</td>
  <td>Returns the cosine of a number</td>
  <td><code>SELECT COS(0);</code></td>
  <td><a href="cos.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>COT()</td>
  <td>Returns the cotangent of a number</td>
  <td><code>SELECT COT(1);</code></td>
  <td><a href="cot.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>COUNT()</td>
  <td>Returns the number of records</td>
  <td><code>SELECT COUNT(*) FROM table;</code></td>
  <td><a href="count.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DEGREES()</td>
  <td>Converts radians to degrees</td>
  <td><code>SELECT DEGREES(PI());</code></td>
  <td><a href="degrees.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DIV</td>
  <td>Performs integer division</td>
  <td><code>SELECT 7 DIV 3;</code></td>
  <td><a href="div.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>EXP()</td>
  <td>Returns e raised to the power of a number</td>
  <td><code>SELECT EXP(1);</code></td>
  <td><a href="exp.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>FLOOR()</td>
  <td>Returns the largest integer less than or equal to a number</td>
  <td><code>SELECT FLOOR(4.8);</code></td>
  <td><a href="floor.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>GREATEST()</td>
  <td>Returns the greatest value in a list</td>
  <td><code>SELECT GREATEST(1,5,3);</code></td>
  <td><a href="greatest.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LEAST()</td>
  <td>Returns the smallest value in a list</td>
  <td><code>SELECT LEAST(1,5,3);</code></td>
  <td><a href="least.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LN()</td>
  <td>Returns the natural logarithm</td>
  <td><code>SELECT LN(10);</code></td>
  <td><a href="ln.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOG()</td>
  <td>Returns the natural logarithm (or base specified)</td>
  <td><code>SELECT LOG(10);</code></td>
  <td><a href="log_func.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOG10()</td>
  <td>Returns the base-10 logarithm</td>
  <td><code>SELECT LOG10(100);</code></td>
  <td><a href="log10.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOG2()</td>
  <td>Returns the base-2 logarithm</td>
  <td><code>SELECT LOG2(8);</code></td>
  <td><a href="log2.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MAX()</td>
  <td>Returns the maximum value</td>
  <td><code>SELECT MAX(x);</code></td>
  <td><a href="max.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MIN()</td>
  <td>Returns the minimum value</td>
  <td><code>SELECT MIN(x);</code></td>
  <td><a href="min.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MOD()</td>
  <td>Returns the remainder of a division</td>
  <td><code>SELECT MOD(7,3);</code></td>
  <td><a href="mod.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>PI()</td>
  <td>Returns the value of PI</td>
  <td><code>SELECT PI();</code></td>
  <td><a href="pi.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>POW() / POWER()</td>
  <td>Returns the value of a number raised to another number</td>
  <td><code>SELECT POWER(2,3);</code></td>
  <td><a href="power.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>RADIANS()</td>
  <td>Converts degrees to radians</td>
  <td><code>SELECT RADIANS(180);</code></td>
  <td><a href="radians.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>RAND()</td>
  <td>Returns a random number</td>
  <td><code>SELECT RAND();</code></td>
  <td><a href="rand.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>ROUND()</td>
  <td>Rounds a number</td>
  <td><code>SELECT ROUND(4.567,2);</code></td>
  <td><a href="round.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SIGN()</td>
  <td>Returns the sign of a number</td>
  <td><code>SELECT SIGN(-5);</code></td>
  <td><a href="sign.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SIN()</td>
  <td>Returns the sine of a number</td>
  <td><code>SELECT SIN(0);</code></td>
  <td><a href="sin.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SQRT()</td>
  <td>Returns the square root of a number</td>
  <td><code>SELECT SQRT(16);</code></td>
  <td><a href="sqrt.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SUM()</td>
  <td>Returns the sum of values</td>
  <td><code>SELECT SUM(x);</code></td>
  <td><a href="sum.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TAN()</td>
  <td>Returns the tangent of a number</td>
  <td><code>SELECT TAN(0);</code></td>
  <td><a href="tan.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TRUNCATE()</td>
  <td>Truncates a number to a specified number of decimals</td>
  <td><code>SELECT TRUNCATE(4.567,1);</code></td>
  <td><a href="truncate.php" target="_blank">View Output</a></td>
</tr>


<!-- DATE & TIME FUNCTIONS -->
<tr>
  <th colspan="4">SQL DATE & TIME FUNCTIONS (50)</th>
</tr>

<tr>
  <td>ADDDATE()</td>
  <td>Adds a time/date interval to a date</td>
  <td><code>SELECT ADDDATE('2025-01-01', 10);</code></td>
  <td><a href="adddate.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>ADDTIME()</td>
  <td>Adds a time interval to a time or datetime</td>
  <td><code>SELECT ADDTIME('10:00:00','02:00:00');</code></td>
  <td><a href="addtime.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CURDATE()</td>
  <td>Returns the current date</td>
  <td><code>SELECT CURDATE();</code></td>
  <td><a href="curdate.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CURRENT_DATE()</td>
  <td>Returns the current date</td>
  <td><code>SELECT CURRENT_DATE();</code></td>
  <td><a href="current_date.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CURRENT_TIME()</td>
  <td>Returns the current time</td>
  <td><code>SELECT CURRENT_TIME();</code></td>
  <td><a href="current_time.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CURRENT_TIMESTAMP()</td>
  <td>Returns the current date and time</td>
  <td><code>SELECT CURRENT_TIMESTAMP();</code></td>
  <td><a href="current_timestamp.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>CURTIME()</td>
  <td>Returns the current time</td>
  <td><code>SELECT CURTIME();</code></td>
  <td><a href="curtime.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DATE()</td>
  <td>Extracts the date part from a datetime</td>
  <td><code>SELECT DATE(NOW());</code></td>
  <td><a href="date_func.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DATE_ADD()</td>
  <td>Adds a time/date interval to a date</td>
  <td><code>SELECT DATE_ADD('2025-01-01', INTERVAL 5 DAY);</code></td>
  <td><a href="date_add.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DATEDIFF()</td>
  <td>Returns the difference between two dates</td>
  <td><code>SELECT DATEDIFF('2025-01-10','2025-01-01');</code></td>
  <td><a href="datediff.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DATE_FORMAT()</td>
  <td>Formats a date according to a format</td>
  <td><code>SELECT DATE_FORMAT(NOW(), '%Y-%m-%d');</code></td>
  <td><a href="date_format.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DATE_SUB()</td>
  <td>Subtracts a time/date interval from a date</td>
  <td><code>SELECT DATE_SUB('2025-01-10', INTERVAL 5 DAY);</code></td>
  <td><a href="date_sub.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DAY()</td>
  <td>Returns the day of the month</td>
  <td><code>SELECT DAY(NOW());</code></td>
  <td><a href="day.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DAYNAME()</td>
  <td>Returns the name of the weekday</td>
  <td><code>SELECT DAYNAME(NOW());</code></td>
  <td><a href="dayname.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DAYOFMONTH()</td>
  <td>Returns the day of the month</td>
  <td><code>SELECT DAYOFMONTH(NOW());</code></td>
  <td><a href="dayofmonth.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DAYOFWEEK()</td>
  <td>Returns the weekday index</td>
  <td><code>SELECT DAYOFWEEK(NOW());</code></td>
  <td><a href="dayofweek.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>DAYOFYEAR()</td>
  <td>Returns the day of the year</td>
  <td><code>SELECT DAYOFYEAR(NOW());</code></td>
  <td><a href="dayofyear.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>EXTRACT()</td>
  <td>Extracts a part from a date</td>
  <td><code>SELECT EXTRACT(YEAR FROM NOW());</code></td>
  <td><a href="extract.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>FROM_DAYS()</td>
  <td>Converts a number of days to a date</td>
  <td><code>SELECT FROM_DAYS(738885);</code></td>
  <td><a href="from_days.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>HOUR()</td>
  <td>Returns the hour part</td>
  <td><code>SELECT HOUR(NOW());</code></td>
  <td><a href="hour.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LAST_DAY()</td>
  <td>Returns the last day of the month</td>
  <td><code>SELECT LAST_DAY(NOW());</code></td>
  <td><a href="last_day.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOCALTIME()</td>
  <td>Returns the local date and time</td>
  <td><code>SELECT LOCALTIME();</code></td>
  <td><a href="localtime.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>LOCALTIMESTAMP()</td>
  <td>Returns the local timestamp</td>
  <td><code>SELECT LOCALTIMESTAMP();</code></td>
  <td><a href="localtimestamp.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MAKEDATE()</td>
  <td>Creates a date from year and day number</td>
  <td><code>SELECT MAKEDATE(2025, 100);</code></td>
  <td><a href="makedate.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MAKETIME()</td>
  <td>Creates a time from hour, minute, second</td>
  <td><code>SELECT MAKETIME(12,30,0);</code></td>
  <td><a href="maketime.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MICROSECOND()</td>
  <td>Returns the microseconds part</td>
  <td><code>SELECT MICROSECOND(NOW());</code></td>
  <td><a href="microsecond.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MINUTE()</td>
  <td>Returns the minute part</td>
  <td><code>SELECT MINUTE(NOW());</code></td>
  <td><a href="minute.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MONTH()</td>
  <td>Returns the month number</td>
  <td><code>SELECT MONTH(NOW());</code></td>
  <td><a href="month.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>MONTHNAME()</td>
  <td>Returns the name of the month</td>
  <td><code>SELECT MONTHNAME(NOW());</code></td>
  <td><a href="monthname.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>NOW()</td>
  <td>Returns the current date and time</td>
  <td><code>SELECT NOW();</code></td>
  <td><a href="now.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>PERIOD_ADD()</td>
  <td>Adds a number of months to a period</td>
  <td><code>SELECT PERIOD_ADD(202501, 2);</code></td>
  <td><a href="period_add.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>PERIOD_DIFF()</td>
  <td>Returns the number of months between periods</td>
  <td><code>SELECT PERIOD_DIFF(202503,202501);</code></td>
  <td><a href="period_diff.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>QUARTER()</td>
  <td>Returns the quarter of the year</td>
  <td><code>SELECT QUARTER(NOW());</code></td>
  <td><a href="quarter.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SECOND()</td>
  <td>Returns the seconds part</td>
  <td><code>SELECT SECOND(NOW());</code></td>
  <td><a href="second.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SEC_TO_TIME()</td>
  <td>Converts seconds to time</td>
  <td><code>SELECT SEC_TO_TIME(3600);</code></td>
  <td><a href="sec_to_time.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>STR_TO_DATE()</td>
  <td>Converts a string to a date</td>
  <td><code>SELECT STR_TO_DATE('01-01-2025','%d-%m-%Y');</code></td>
  <td><a href="str_to_date.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SUBTIME()</td>
  <td>Subtracts a time interval</td>
  <td><code>SELECT SUBTIME(NOW(), '01:00:00');</code></td>
  <td><a href="subtime.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SUBDATE()</td>
  <td>Subtracts a date interval</td>
  <td><code>SELECT SUBDATE(NOW(), INTERVAL 1 DAY);</code></td>
  <td><a href="subdate.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>SYSDATE()</td>
  <td>Returns the system date and time</td>
  <td><code>SELECT SYSDATE();</code></td>
  <td><a href="sysdate.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TIME()</td>
  <td>Extracts the time part</td>
  <td><code>SELECT TIME(NOW());</code></td>
  <td><a href="time_func.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TIME_FORMAT()</td>
  <td>Formats a time</td>
  <td><code>SELECT TIME_FORMAT(NOW(),'%H:%i');</code></td>
  <td><a href="time_format.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TIME_TO_SEC()</td>
  <td>Converts time to seconds</td>
  <td><code>SELECT TIME_TO_SEC('01:00:00');</code></td>
  <td><a href="time_to_sec.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TIMEDIFF()</td>
  <td>Returns the difference between two times</td>
  <td><code>SELECT TIMEDIFF('12:00','10:00');</code></td>
  <td><a href="timediff.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TIMESTAMP()</td>
  <td>Creates a timestamp</td>
  <td><code>SELECT TIMESTAMP('2025-01-01');</code></td>
  <td><a href="timestamp.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>TO_DAYS()</td>
  <td>Converts a date to number of days</td>
  <td><code>SELECT TO_DAYS(NOW());</code></td>
  <td><a href="to_days.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>WEEK()</td>
  <td>Returns the week number</td>
  <td><code>SELECT WEEK(NOW());</code></td>
  <td><a href="week.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>WEEKDAY()</td>
  <td>Returns the weekday index</td>
  <td><code>SELECT WEEKDAY(NOW());</code></td>
  <td><a href="weekday.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>WEEKOFYEAR()</td>
  <td>Returns the week number of the year</td>
  <td><code>SELECT WEEKOFYEAR(NOW());</code></td>
  <td><a href="weekofyear.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>YEAR()</td>
  <td>Returns the year</td>
  <td><code>SELECT YEAR(NOW());</code></td>
  <td><a href="year.php" target="_blank">View Output</a></td>
</tr>

<tr>
  <td>YEARWEEK()</td>
  <td>Returns year and week</td>
  <td><code>SELECT YEARWEEK(NOW());</code></td>
  <td><a href="yearweek.php" target="_blank">View Output</a></td>
</tr>


   <tr>
    <th colspan="4">SQL ADVANCED FUNCTIONS (19)</th>
</tr>

<tr>
    <td>BIN()</td>
    <td>Returns a binary representation of a number</td>
    <td><code>SELECT BIN(10);</code></td>
    <td><a href="bin.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>BINARY()</td>
    <td>Converts a string to a binary string</td>
    <td><code>SELECT BINARY 'Hello';</code></td>
    <td><a href="binary.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>CASE()</td>
    <td>Goes through conditions and returns a value</td>
    <td><code>SELECT CASE WHEN 1=1 THEN 'YES' ELSE 'NO' END;</code></td>
    <td><a href="case.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>CAST()</td>
    <td>Converts a value to a specified data type</td>
    <td><code>SELECT CAST('2025' AS SIGNED);</code></td>
    <td><a href="cast.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>COALESCE()</td>
    <td>Returns the first non-null value</td>
    <td><code>SELECT COALESCE(NULL,5,10);</code></td>
    <td><a href="coalesce.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>CONNECTION_ID()</td>
    <td>Returns the connection ID</td>
    <td><code>SELECT CONNECTION_ID();</code></td>
    <td><a href="connection_id.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>CONV()</td>
    <td>Converts a number from one base to another</td>
    <td><code>SELECT CONV('A',16,10);</code></td>
    <td><a href="conv.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>CONVERT()</td>
    <td>Converts a value to a specified data type</td>
    <td><code>SELECT CONVERT('A', SIGNED);</code></td>
    <td><a href="convert.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>CURRENT_USER()</td>
    <td>Returns the current user name</td>
    <td><code>SELECT CURRENT_USER();</code></td>
    <td><a href="current_user.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>DATABASE()</td>
    <td>Returns the current database name</td>
    <td><code>SELECT DATABASE();</code></td>
    <td><a href="database.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>IF()</td>
    <td>Returns a value if the condition is true, otherwise another value</td>
    <td><code>SELECT IF(1=1,'YES','NO');</code></td>
    <td><a href="if.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>IFNULL()</td>
    <td>Returns a value if the expression is NULL</td>
    <td><code>SELECT IFNULL(NULL,'N/A');</code></td>
    <td><a href="ifnull.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>ISNULL()</td>
    <td>Checks whether a value is NULL</td>
    <td><code>SELECT ISNULL(NULL);</code></td>
    <td><a href="isnull.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>LAST_INSERT_ID()</td>
    <td>Returns the last inserted ID</td>
    <td><code>SELECT LAST_INSERT_ID();</code></td>
    <td><a href="last_insert_id.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>NULLIF()</td>
    <td>Returns NULL if two expressions are equal</td>
    <td><code>SELECT NULLIF(1,1);</code></td>
    <td><a href="nullif.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>SESSION_USER()</td>
    <td>Returns the session user</td>
    <td><code>SELECT SESSION_USER();</code></td>
    <td><a href="session_user.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>SYSTEM_USER()</td>
    <td>Returns the system user</td>
    <td><code>SELECT SYSTEM_USER();</code></td>
    <td><a href="system_user.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>USER()</td>
    <td>Returns the MySQL user name</td>
    <td><code>SELECT USER();</code></td>
    <td><a href="user.php" target="_blank">View Output</a></td>
</tr>
<tr>
    <td>VERSION()</td>
    <td>Returns the MySQL server version</td>
    <td><code>SELECT VERSION();</code></td>
    <td><a href="version.php" target="_blank">View Output</a></td>
</tr>


</table>


</body>
</html>



