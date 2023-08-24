 <?php
  class DBConnection
  {
    function getMessage()
    {
      return $msg = 'SQLError, Connection Failed';
    }
    function DBConnections()
    {
      $host_ = 'localhost';
      /* $dbname_ = 'howtcwnj_creativehubacademy_TTT';
      $user_ = 'howtcwnj_creativehubacademy_TTT';
      $pass_ = '1187<phnjkhkdfhx2&&et@343#4'; */
      $dbname_ = 'howtcwnj_creativehubacademy_TTT';
      $user_ = 'root';
      $pass_ = '';
      try {
        $DBH = new PDO("mysql:host=$host_;dbname=$dbname_", $user_, $pass_);
        $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'goooooood!';
        return $DBH;
      } catch (PDOException $e) {
        //echo 'ERROR: ' . $e->getMessage();
        header("location:./404.html");
      }
    }
  }
  $bd = new DBConnection();
  ?> 