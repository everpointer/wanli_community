<?php
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','ghz86377328');
define('DBDATABASE','wangli');


function mysql_conn()
{
    $dbconn = mysql_connect(DBHOST, DBUSER, DBPASS);
    mysql_select_db(DBDATABASE, $dbconn);
    mysql_query("SET CHARACTER SET 'utf8'", $dbconn); 
    
    return $dbconn;
}
