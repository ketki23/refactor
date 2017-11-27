 <?php
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    define('DATABASE', 'kra23');
    define('USERNAME', 'kra23');
    define('PASSWORD', 'z4QhaWbRd');
    define('CONNECTION', 'sql1.njit.edu');
    class database
    {
        //variable to hold connection object.
        protected static $databasekra23;
        //private construct - class cannot be instatiated externally.
        public function __construct() {
            try {
                // assign PDO object to databasekra23 variable
                self::$databasekra23 = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
                self::$databasekra23->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                //echo '<h3>Database connection successfull<h3><br>';
            }
            catch (PDOException $e) {
                //Output error - would normally log this to error file rather than output to user.
                echo "Connection Error: " . $e->getMessage();
            }
        }
        // get connection function. Static method - accessible without instantiation
        public static function getConnection() {
            //Guarantees single instance, if no connection object exists then create one.
            if (!self::$databasekra23) {
                //new connection object.
                new database();
            }
            //return connection.
            return self::$databasekra23;
        }
    }
?>

