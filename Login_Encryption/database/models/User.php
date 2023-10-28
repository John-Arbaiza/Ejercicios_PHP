<?php

class User{

    public function index(){

        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //Consulta para seleccionar todos los resultados de la tabla users
            $users = PostgresConnection::selectAll("SELECT * FROM users");
            //Devuelve el resultado de la consulta
            return $users;
        }
        catch (Exception $e) {
            //En caso se error se muestra un mensaje y se termina la ejecucion
            die($e->getMessage());
        }
        finally {
            //se encarga de asegurar que se cierre la conexión
            PostgresConnection::close();
        }
    }
    //===============================================================================
    public function store($data) {

        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {

            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //Consulta para insertar nuevos registros
            $sql = "INSERT INTO users(username, password) VALUES(:username, :password)";
            //Ejecutara la consulta, pasando los datos como parametros
            PostgresConnection::insert($sql, $data);

            header("Location: " . BASE_DIR . "User/index/");
        }
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {   
            PostgresConnection::close();
        }
    }
    //===================================================================================
    public function vista($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //Consulta para poder ver un usuario segun sea seleccionado 
            $users= PostgresConnection::mostrarD("SELECT * FROM users WHERE id = '$data'");
            return $users;
        } 
        catch (Exception $e) {
            die($e->getMessage());
        }
        finally {   
            PostgresConnection::close();
        }
    }
    //===================================================================================
    public function delete($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";

        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //consulta para eliminar datos 
            $sql = "DELETE FROM users WHERE id ='$data'";
            PostgresConnection::eliminarUser($sql);

            header("Location:" . BASE_DIR . "User/index/");

        } catch (Exception $e) {
            die($e->getMessage());
        }
        finally{
            PostgresConnection::close();
        }
    }
    //===================================================================================
    public function actualizar($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";
    
        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            
            PostgresConnection::actualizando("UPDATE users SET username ='{$data["user_name"]}', password = '{$data["pass"]}' WHERE id = {$data["ID_User"]}");
            header("Location:" . BASE_DIR . "User/index/");
        } catch (Exception $e) {
            die($e->getMessage());
        } finally {
            PostgresConnection::close();
        }
    }
    //===================================================================================
    public function iniciar($data){
        require_once "config/configDatabase.php";
        require_once "database/PostgresConnection.php";
        try {
            PostgresConnection::connect($host, $port, $dbname, $user, $pass);
            //consulta
            $sql = ("SELECT * FROM users WHERE username = '{$data["user"]}'");
            $user= PostgresConnection::iniciar($sql, $data);
            // Desencripta la contraseña del usuario
            $Sincifrar = openssl_decrypt($user[0]["password"],"AES-128-CFB","GeeksforGeeks",0,"123456789");
          //Verificamos si la contraseña ingresada coincide con la almacenada en la base de datos
            if($Sincifrar == $data["pass"]){
                if($user[0]["username"] != null){
                    $_SESSION["user"] = $user[0]["username"];
                    if (isset($data['SessionGuardada'])){
                        //Pulsando crear una cookie 
                        //Esta la definimos antes de la redireccion
                        setcookie("Ingreso", $data['user'], time() + 3600, "/");
                        }
                }
                header("Location: " . BASE_DIR . "User/index/");
                exit;
            }else{
                //En caso de equivocarse de password sera redirigo a Home
                header("Location:" . BASE_DIR . "Home/index/");
               // echo "Password incorrecto" . PHP_EOL; 
            }

            
        } catch (Exception $e) {
            die($e->getMessage());
        } finally {
            PostgresConnection::close();
        }
    }
    //===================================================================================
    public function cerrarSession(){
        //Se encargara de liberar todas las variables de sesión actualmente registradas.
        session_unset();
        //destruye toda la información asociada con la sesión actual
        session_destroy();
        //Eliminamos nuestra cookie
        setcookie("Ingreso", $data['user'], time() - 3600, "/");
        header("Location: " . BASE_DIR . "User/iniciar/");
        // Detiene la ejecución del script actual
        exit;
    }
    
}