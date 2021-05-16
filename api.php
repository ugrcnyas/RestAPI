<?php

require_once __DIR__.'/config.php';
class API
{
    function Select()
    {
        $db=new Connect;
        $users=array();
        $data=$db->prepare("SELECT *FROM deneme ORDER BY id=25");
        $data->execute(); //
        While($Outputdata=$data->Fetch(PDO::FETCH_ASSOC))
        {
            $users[$Outputdata['id']]=array(

            'id'=>$Outputdata['id'],
            'isim'=>$Outputdata['isim'],
            'pass'=>$Outputdata['pass']
        );
        }

        return json_encode($user);

    }
}

$API=new API;

header('Content-Type:application/json');
echo $API->Select();

?>  