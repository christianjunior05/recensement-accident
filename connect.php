<?php
require "setting.php" ;

$ville = $_POST["ville"];
$victimes =$_POST["victimes"];
$source = $_POST["source"];
$data = $_POST["data"];




if(isset($_POST["enregistrement"])){

    $ville=isset($_POST["ville"])? $_POST["ville"]:"";
    $source=isset($_POST["source"])? $_POST["source"]:"";
    $data=isset($_POST["data"])? $_POST["data"]:"";
   


        if(!empty($ville) and !empty($source) and !empty($data)) {
            $verify=false;
            $found=true ;
            $req=$pdo->prepare("SELECT*from vod");
            $req->execute();
            $Allusers=$req->fetchAll(PDO::FETCH_ASSOC);

                if(!$verify)

                {
                    if($found){
                        $req=$pdo->prepare("INSERT INTO villle(
                            ville,victimes,source,data) VALUES(:ville,:victimes,:source,:data)");
                            $statu=$req->execute(["ville"=>$ville,"victimes"=>$victimes,"source"=>$source,"data"=>$data]);
                        
                            if($statu){
                                $resultat = ["$statu"=>true , "msg"=>"felicitations"];
                            }
                            else{
                                $resultat = ["$statu"=>false , "msg"=>"erreur"];
                            }
                    

                        }
                    
                }
                echo json_encode($resultat);
    }

}
?>