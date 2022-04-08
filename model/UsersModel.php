<?php 
    require_once "connection/Database.php";

    class UsersModel extends Database {
        // Valida el usuario y contraseña de un intento de login.
        function validateLogin($username, $password) {
            $sql = "SELECT user_id, name, last_name FROM users WHERE username='$username' and password=md5('$password');";
            $result = $this->connect()->query($sql);
            // Quick view of result.
            // var_dump($result);
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["user_id"] = $row["user_id"];
                $new["name"] = $row["name"];
                $new["last_name"] = $row["last_name"];
                array_push($results, $new);
            }
            return $results;
        }
        // Inserta el registro de un nuevo usuario en la base de datos.
        public function create($name, $last_name, $user, $password) {
            if ($this->isUsernameRepeated($user)) {
                return "username already exists";
            }
            // Se prepara y ejecuta el query.
            $sql = "INSERT INTO users (name, last_name, username, password) VALUES ('$name', '$last_name', '$user', md5('$password'));";
            return $this->connect()->query($sql);

        }
        // Devuelve un array con todos los usuarios.
        public function getUsers() {
            $sql = "SELECT * FROM users;";
            $result = $this->connect()->query($sql);
            
            $results = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $new = array();
                $new["user_id"] = $row["user_id"];
                $new["name"] = $row["name"];
                $new["last_name"] = $row["last_name"];
                $new["username"] = $row["user"];
                array_push($results, $new);
            }
            return $results;
        }
        // Devuelve un array con un usuario en especifico con su ID.
        public function getUser($id) {
            $sql = "SELECT * FROM users WHERE user_id=$id;";
            $result = $this->connect()->query($sql);
            
            $user = array();

            while ($row = mysqli_fetch_assoc($result)) {
                $user["user_id"] = $row["user_id"];
                $user["name"] = $row["name"];
                $user["last_name"] = $row["last_name"];
                $user["username"] = $row["user"];
            }
            return $user;
        }
        // Actualiza el registro de un usuario.
        function update($id, $name, $last_name, $user) {
            // Se prepara y ejecuta el query.
            $sql = "UPDATE users SET name='$name', last_name='$last_name', user='$user', WHERE user_id=$id;";
            return $this->connect()->query($sql);
        }
        // Elimina el registro de un usuario con su ID.
        function delete($id) {
            $sql = "DELETE FROM users WHERE user_id=$id;";
            return $this->connect()->query($sql);
        }
        // Verifica si un username ya existe.
        function isUsernameRepeated($username) {
            $sql = "SELECT * FROM users WHERE username='$username';";
            $result = $this->connect()->query($sql);

            if (mysqli_num_rows($result) == 1) {
                return true;
            }
            return false;
        }
    }
?>
