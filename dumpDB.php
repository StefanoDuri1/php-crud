<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'php_crud';

    $date = date("Ymd-His");

    $sql_backup = $db_name.'_'.$date.'.sql';

    $dump = "mysqldump -h $db_host -u$db_user -p$db_password --opt $db_name > $sql_backup";
    //$dump = 'mysqldump -h' .$db_host .' -u' .$db_user .' -p' .$db_password .' --opt' .$db_name . ' > ' .$sql_backup;
    
    system($dump, $output);
    
?>