<?php 
  class model{
    public function getlogin(){
        if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
            
            if ($_REQUEST['username']=='Fajar' && $_REQUEST['password']== 'Fajar') {
                
                return 'login';
            }
             else{
                return '>>> ini bukan kamu';
             }
        }
    }
  }
?>