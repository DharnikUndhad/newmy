<?php

if($_POST['key']=="HDH^&)MB465fkj%%fggh"){
    
    
    if($_POST['files']!=""){
   
            $array = explode(',', $_POST['files']);
    
    for($a=0;$a<count($array);$a++){
        
        $filename="category/".$array[$a].'.json';
        
        echo $filename;
        
        $myfile = fopen($filename, "w");

$txt = '{
"status": "ok",
"count": 1,
"posts": [
]
}';

fwrite($myfile, $txt);

fclose($myfile);
        
    }
    
    }
    
        
        if($_POST['delete_files']!=""){
   
            $array = explode(',', $_POST['delete_files']);
    
    for($a=0;$a<count($array);$a++){
        
        $filename="category/".$array[$a].'.json';
        
        unlink($filename);
        
    }
    
    }

    file_put_contents("1_GET_MAIN_CAT.json", $_POST['data']);
}
