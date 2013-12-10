    <?php
class data_base
    {
            protected static $instance;  
            protected $mysqli;
            
            private function __clone(){}  
            private function __wakeup(){} 
          
           
            private function __construct(mysqli $mysqli)
            {
                    $this->mysqli = $mysqli;
            }
           
          
    public static function getInstance() {    // Возвращает единственный экземпляр класса. @return Singleton
        if ( !isset(self::$instance) ) {
            $class = __CLASS__;
            self::$instance = new $class($mysqli);
        }
        return self::$instance;
    }

            public function reg_send($log, $password, $e_mail)
            {
                    if(!$this->reg_validate($log, $e_mail))
                            return 'Такой логин или e-mail уже используется!';
     
                    $stmt = $this->mysqli->prepare("INSERT INTO users (login,password,mail) VALUES (?, ?, ?)");
                    $stmt->bind_param('sss', $log, $password, $e_mail);
                    $stmt->execute();
            }
           
            public function reg_validate($login, $mail)
            {
                    $stmt=$this->mysqli->prepare("SELECT COUNT(1) as `isset` FROM users WHERE login=? OR mail=? LIMIT 1");
                    $stmt->bind_param('ss', $login, $mail);
                    $stmt->execute();
                    $stmt->bind_result($isset);
                    $stmt->fetch();
                    return !$isset;
            }
    }
     
     
    $mysqli=new mysqli($host, $user, $passwd, $db_select);
    data_base::getInstance($mysqli)->reg_send($log, $password, $e_mail);   
    $data_base->reg_send($log, $password, $e_mail);