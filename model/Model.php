<?php 
    require_once "connection/SqlConnection.php";

    class Model {
        private $connectionDB;
        private $currentConnDB;

        function __construct() 
        {
            $this->connectionDB = new SqlConnection();
        }

        function validateLogin($user, $password) {
            // Se establece la conexión.
            $this->currentConnDB = $this->connectionDB->connectDB();
            // Se prepara y ejecuta el query.
            $sql = "SELECT id_user, name, last_name, role FROM users WHERE user='$user' and password=md5('$password');";
            $result = $this->currentConnDB->query($sql);
            // Quick view of result.
            // var_dump($result);

            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $results["id_user"] = $row["id_user"];
                $results["name"] = $row["name"];
                $results["last_name"] = $row["last_name"];
                $results["role"] = $row["role"];
            }

            $this->connectionDB->disconnectDB();

            return $results;
        }
        // Inserta el registro de un nuevo usuario en la base de datos.
        function registerUser($name, $last_name, $user, $password) {
            // Se establece la conexión.
            $this->currentConnDB = $this->connectionDB->connectDB();
            if ($this->isUsernameRepeated($user)) {
                return "username already exists";
            }

            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO users (name, last_name, user, password, role) VALUES ('$name', '$last_name', '$user', md5('$password'), 1);";
            $inserted = $this->currentConnDB->query($sql);
            // Se cierra la conexión.
            $this->connectionDB->disconnectDB();
            // Verifica si se insertó correctamente.
            if ($inserted) {
                return "user inserted";
            }
            return "error inserting the user";
        }

        function isUsernameRepeated($username) {
            $sql = "SELECT * FROM users WHERE user='$username';";
            $result = $this->currentConnDB->query($sql);

            if (mysqli_num_rows($result) > 0) {
                return true;
            }
            return false;

        }
    }


?>
