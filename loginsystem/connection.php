<?php
    class connectionhelper()
    {
        private static $connection;

        public static function getconnection()
        {
            if(self::$connection == null )
            {
                self::$connection= new PDO('mysql:host=localhost;dbname=qfx',"root","");

            }
            return self::$connection;
        }
    }
   

?>