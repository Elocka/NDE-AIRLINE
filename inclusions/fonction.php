<?php 

        session_start();

           
            function control_champ(array $champs=[]){
            
                if($champs){
                    foreach($champs as $champ){
                        if(empty($_POST[$champ]) || trim($_POST[$champ])===""){
                            return false;
                        }
                        else{
                            return true;
                        }
                    }
                }
            }
            function existe($table,$champ,$attribut){
                global $db;
                $select=$db->prepare("SELECT * FROM $table WHERE $champ=? ");
                $select->execute(array($attribut));
                $result=$select->rowcount();
                if($result!=0){
                    return true;
                }
                else{
                    return false;
                }
                
            }
            
            function save_input(){
                foreach($_POST as $key=>$value){
                    strpos("passe",$key);
                    if(!strpos("passe",$key)){
                        $_SESSION['input'][$key]=$value;
                    }
                }

            }
            function getinput($champ){
                if(!empty($_SESSION['input'][$champ])){
                    return $_SESSION['input'][$champ];
                }else{
                    return null;
                }
            }

            function clear(){
                if(isset($_SESSION['input'])){
                    $_SESSION['input']=[];
                }
            }

            function redirect($url){
                if(isset($url)){
                header('Location:'  .$url);
                    exit;
            }
            }

            function setflash($message , $type ='success'){

                $_SESSION['notifications']['message'] = $message;

                $_SESSION['notifications']['type'] = $type;

                    
            }




           










    

    
?>