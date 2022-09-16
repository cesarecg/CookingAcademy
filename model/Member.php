<?php
namespace Phppot;

class Member
{

    private $ds;

    function __construct()
    {
        require_once __DIR__ . '/../lib/DataSource.php';
        $this->ds = new DataSource();
    }

    /**
     * to check if the username already exists
     *
     * @param string $username
     * @return boolean
     */
    public function isUsernameExists($username)
    {
        $query = 'SELECT * FROM tbl_member where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $resultArray = $this->ds->select($query, $paramType, $paramValue);
        $count = 0;
        if (is_array($resultArray)) {
            $count = count($resultArray);
        }
        if ($count > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    /**
     * to check if the email already exists
     *
     * @param string $email
     * @return boolean
     */

    /**
     * to signup / register a user
     *
     * @return string[] registration status message
     */
    public function registerMember()
    {
        $isUsernameExists = $this->isUsernameExists($_POST["username"]);
        if ($isUsernameExists) {
            $response = array(
                "status" => "error",
                "message" => "NOMBRE DE USUARIO YA EN USO"
            );
        }
         else {
            if (! empty($_POST["signup-password"])) {

                // PHP's password_hash is the best choice to use to store passwords
                // do not attempt to do your own encryption, it is not safe
                $hashedPassword = password_hash($_POST["signup-password"], PASSWORD_DEFAULT);
            }
            $query = 'INSERT INTO tbl_member (username, password) VALUES (?, ?)';
            $paramType = 'ss';
            $paramValue = array(
                $_POST["username"],
                $hashedPassword
                
            );
            $memberId = $this->ds->insert($query, $paramType, $paramValue);
            if (! empty($memberId)) {
                $response = array(
                    "status" => "success",
                    "message" => "You have registered successfully."
                );
            }
        }
        return $response;
    }

    public function getMember($username)
    {
        if($_POST["grupo"] === "UNO"){

        $query = 'SELECT * FROM tbl_member where username = ?';
        $paramType = 's';
        $paramValue = array(
            $username
        );
        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
        return $memberRecord;

        }  elseif ($_POST["grupo"] === "DOS"){
            $query = 'SELECT * FROM tbl_member1 where username = ?';
            $paramType = 's';
            $paramValue = array(
                $username
            );
            $memberRecord = $this->ds->select($query, $paramType, $paramValue);
            return $memberRecord;
                } elseif ($_POST["grupo"] === "TRES"){
                    $query = 'SELECT * FROM tbl_member2 where username = ?';
                    $paramType = 's';
                    $paramValue = array(
                        $username
                    );
                    $memberRecord = $this->ds->select($query, $paramType, $paramValue);
                    return $memberRecord;
            }
                    elseif ($_POST["grupo"] === "CUATRO"){
                        $query = 'SELECT * FROM tbl_member3 where username = ?';
                        $paramType = 's';
                        $paramValue = array(
                            $username
                        );
                        $memberRecord = $this->ds->select($query, $paramType, $paramValue);
                        return $memberRecord;
                    }

                            elseif ($_POST["grupo"] === "CINCO"){
                                $query = 'SELECT * FROM tbl_member4 where username = ?';
                                $paramType = 's';
                                $paramValue = array(
                                    $username
                                );
                                $memberRecord = $this->ds->select($query, $paramType, $paramValue);
                                return $memberRecord;
                            }
                                elseif ($_POST["grupo"] === "SEIS"){
                                    $query = 'SELECT * FROM tbl_member5 where username = ?';
                                    $paramType = 's';
                                    $paramValue = array(
                                        $username
                                    );
                                    $memberRecord = $this->ds->select($query, $paramType, $paramValue);
                                    return $memberRecord;
                                }
    }

    /**
     * to login a user
     *
     * @return string
     */
    public function loginMember()
    {
        if($_POST["grupo"] === "UNO") {
        $memberRecord = $this->getMember($_POST["username"]);
        $loginPassword = 0;
        if (! empty($memberRecord)) {
            if (! empty($_POST["login-password"])) {
                $password = $_POST["login-password"];
            }
            $hashedPassword = $memberRecord[0]["password"];
            $loginPassword = 0;
            if (password_verify($password, $hashedPassword)) {
                $loginPassword = 1;
            }
        } else {
            $loginPassword = 0;
        }
        if ($loginPassword == 1) {
            // login sucess so store the member's username in
            // the session
            session_start();
            $_SESSION["db"]= "tbl_member";
            $_SESSION["id"] = $memberRecord[0]["id"];
            $_SESSION["username"] = $memberRecord[0]["username"];
            $_SESSION["inscripcion"] = $memberRecord[0]["inscripcion"];
            $_SESSION["cuota_1"] = $memberRecord[0]["cuota_1"];
            $_SESSION["cuota_2"] = $memberRecord[0]["cuota_2"];
            $_SESSION["cuota_3"] = $memberRecord[0]["cuota_3"];
            $_SESSION["cuota_4"] = $memberRecord[0]["cuota_4"];
            $_SESSION["eva_1"] = $memberRecord[0]["eva_1"];
            $_SESSION["eva_2"] = $memberRecord[0]["eva_2"];
            $_SESSION["eva_3"] = $memberRecord[0]["eva_3"];
            $_SESSION["eva_4"] = $memberRecord[0]["eva_4"];
            $_SESSION["comentario"] = $memberRecord[0]["comentario"];
            session_write_close();
            if($_SESSION["username"] === "admin"){
            $url = "Calendarios/calendar_admin.php";
            header("Location: $url");}
            else{
                $url = "Calendarios/calendar.php";
                header("Location: $url");
            }
        } else if ($loginPassword == 0) {
            $loginStatus = "Nombre o Contraseña Inválida";
            return $loginStatus;
        }
                }    elseif($_POST["grupo"] === "DOS"){
                    $memberRecord = $this->getMember($_POST["username"]);
                    $loginPassword = 0;
                    if (! empty($memberRecord)) {
                        if (! empty($_POST["login-password"])) {
                            $password = $_POST["login-password"];
                        }
                        $hashedPassword = $memberRecord[0]["password"];
                        $loginPassword = 0;
                        if (password_verify($password, $hashedPassword)) {
                            $loginPassword = 1;
                        }
                    } else {
                        $loginPassword = 0;
                    }
                    if ($loginPassword == 1) {
                        // login sucess so store the member's username in
                        // the session
                        session_start();
                        $_SESSION["db"]= "tbl_member1";
                        $_SESSION["id"] = $memberRecord[0]["id"];
                        $_SESSION["username"] = $memberRecord[0]["username"];
                        $_SESSION["inscripcion"] = $memberRecord[0]["inscripcion"];
                        $_SESSION["cuota_1"] = $memberRecord[0]["cuota_1"];
                        $_SESSION["cuota_2"] = $memberRecord[0]["cuota_2"];
                        $_SESSION["cuota_3"] = $memberRecord[0]["cuota_3"];
                        $_SESSION["cuota_4"] = $memberRecord[0]["cuota_4"];
                        $_SESSION["eva_1"] = $memberRecord[0]["eva_1"];
                        $_SESSION["eva_2"] = $memberRecord[0]["eva_2"];
                        $_SESSION["eva_3"] = $memberRecord[0]["eva_3"];
                        $_SESSION["eva_4"] = $memberRecord[0]["eva_4"];
                        $_SESSION["comentario"] = $memberRecord[0]["comentario"];
                        session_write_close();
                        if($_SESSION["username"] === "admin"){
                        $url = "Calendarios/calendar_admin1.php";
                        header("Location: $url");}
                        else{
                            $url = "Calendarios/calendar1.php";
                            header("Location: $url");
                        }
                    } else if ($loginPassword == 0) {
                        $loginStatus = "Nombre o Contraseña Inválida";
                        return $loginStatus;
                    }
                            } elseif($_POST["grupo"] === "TRES"){
                                $memberRecord = $this->getMember($_POST["username"]);
                                $loginPassword = 0;
                                if (! empty($memberRecord)) {
                                    if (! empty($_POST["login-password"])) {
                                        $password = $_POST["login-password"];
                                    }
                                    $hashedPassword = $memberRecord[0]["password"];
                                    $loginPassword = 0;
                                    if (password_verify($password, $hashedPassword)) {
                                        $loginPassword = 1;
                                    }
                                } else {
                                    $loginPassword = 0;
                                }
                                if ($loginPassword == 1) {
                                    // login sucess so store the member's username in
                                    // the session
                                    session_start();
                                    $_SESSION["db"]= "tbl_member2";
                                    $_SESSION["id"] = $memberRecord[0]["id"];
                                    $_SESSION["username"] = $memberRecord[0]["username"];
                                    $_SESSION["inscripcion"] = $memberRecord[0]["inscripcion"];
                                    $_SESSION["cuota_1"] = $memberRecord[0]["cuota_1"];
                                    $_SESSION["cuota_2"] = $memberRecord[0]["cuota_2"];
                                    $_SESSION["cuota_3"] = $memberRecord[0]["cuota_3"];
                                    $_SESSION["cuota_4"] = $memberRecord[0]["cuota_4"];
                                    $_SESSION["eva_1"] = $memberRecord[0]["eva_1"];
                                    $_SESSION["eva_2"] = $memberRecord[0]["eva_2"];
                                    $_SESSION["eva_3"] = $memberRecord[0]["eva_3"];
                                    $_SESSION["eva_4"] = $memberRecord[0]["eva_4"];
                                    $_SESSION["comentario"] = $memberRecord[0]["comentario"];
                                    session_write_close();
                                    if($_SESSION["username"] === "admin"){
                                    $url = "Calendarios/calendar_admin2.php";
                                    header("Location: $url");}
                                    else{
                                        $url = "Calendarios/calendar2.php";
                                        header("Location: $url");
                                    }
                                } else if ($loginPassword == 0) {
                                    $loginStatus = "Nombre o Contraseña Inválida";
                                    return $loginStatus;
                                }

                            } elseif($_POST["grupo"] === "CUATRO"){
                                $memberRecord = $this->getMember($_POST["username"]);
                                $loginPassword = 0;
                                if (! empty($memberRecord)) {
                                    if (! empty($_POST["login-password"])) {
                                        $password = $_POST["login-password"];
                                    }
                                    $hashedPassword = $memberRecord[0]["password"];
                                    $loginPassword = 0;
                                    if (password_verify($password, $hashedPassword)) {
                                        $loginPassword = 1;
                                    }
                                } else {
                                    $loginPassword = 0;
                                }
                                if ($loginPassword == 1) {
                                    // login sucess so store the member's username in
                                    // the session
                                    session_start();
                                    $_SESSION["db"]= "tbl_member3";
                                    $_SESSION["id"] = $memberRecord[0]["id"];
                                    $_SESSION["username"] = $memberRecord[0]["username"];
                                    $_SESSION["inscripcion"] = $memberRecord[0]["inscripcion"];
                                    $_SESSION["cuota_1"] = $memberRecord[0]["cuota_1"];
                                    $_SESSION["cuota_2"] = $memberRecord[0]["cuota_2"];
                                    $_SESSION["cuota_3"] = $memberRecord[0]["cuota_3"];
                                    $_SESSION["cuota_4"] = $memberRecord[0]["cuota_4"];
                                    $_SESSION["eva_1"] = $memberRecord[0]["eva_1"];
                                    $_SESSION["eva_2"] = $memberRecord[0]["eva_2"];
                                    $_SESSION["eva_3"] = $memberRecord[0]["eva_3"];
                                    $_SESSION["eva_4"] = $memberRecord[0]["eva_4"];
                                    $_SESSION["comentario"] = $memberRecord[0]["comentario"];
                                    session_write_close();
                                    if($_SESSION["username"] === "admin"){
                                    $url = "Calendarios/calendar_admin3.php";
                                    header("Location: $url");}
                                    else{
                                        $url = "Calendarios/calendar3.php";
                                        header("Location: $url");
                                    }
                                } else if ($loginPassword == 0) {
                                    $loginStatus = "Nombre o Contraseña Inválida";
                                    return $loginStatus;
                                }
                            } elseif($_POST["grupo"] === "CINCO"){
                                $memberRecord = $this->getMember($_POST["username"]);
                                $loginPassword = 0;
                                if (! empty($memberRecord)) {
                                    if (! empty($_POST["login-password"])) {
                                        $password = $_POST["login-password"];
                                    }
                                    $hashedPassword = $memberRecord[0]["password"];
                                    $loginPassword = 0;
                                    if (password_verify($password, $hashedPassword)) {
                                        $loginPassword = 1;
                                    }
                                } else {
                                    $loginPassword = 0;
                                }
                                if ($loginPassword == 1) {
                                    // login sucess so store the member's username in
                                    // the session
                                    session_start();
                                    $_SESSION["db"]= "tbl_member4";
                                    $_SESSION["id"] = $memberRecord[0]["id"];
                                    $_SESSION["username"] = $memberRecord[0]["username"];
                                    $_SESSION["inscripcion"] = $memberRecord[0]["inscripcion"];
                                    $_SESSION["cuota_1"] = $memberRecord[0]["cuota_1"];
                                    $_SESSION["cuota_2"] = $memberRecord[0]["cuota_2"];
                                    $_SESSION["cuota_3"] = $memberRecord[0]["cuota_3"];
                                    $_SESSION["cuota_4"] = $memberRecord[0]["cuota_4"];
                                    $_SESSION["eva_1"] = $memberRecord[0]["eva_1"];
                                    $_SESSION["eva_2"] = $memberRecord[0]["eva_2"];
                                    $_SESSION["eva_3"] = $memberRecord[0]["eva_3"];
                                    $_SESSION["eva_4"] = $memberRecord[0]["eva_4"];
                                    $_SESSION["comentario"] = $memberRecord[0]["comentario"];
                                    session_write_close();
                                    if($_SESSION["username"] === "admin"){
                                    $url = "Calendarios/calendar_admin4.php";
                                    header("Location: $url");}
                                    else{
                                        $url = "Calendarios/calendar4.php";
                                        header("Location: $url");
                                    }
                                } else if ($loginPassword == 0) {
                                    $loginStatus = "Nombre o Contraseña Inválida";
                                    return $loginStatus;
                                }
                            } elseif($_POST["grupo"] === "SEIS"){
                                $memberRecord = $this->getMember($_POST["username"]);
                                $loginPassword = 0;
                                if (! empty($memberRecord)) {
                                    if (! empty($_POST["login-password"])) {
                                        $password = $_POST["login-password"];
                                    }
                                    $hashedPassword = $memberRecord[0]["password"];
                                    $loginPassword = 0;
                                    if (password_verify($password, $hashedPassword)) {
                                        $loginPassword = 1;
                                    }
                                } else {
                                    $loginPassword = 0;
                                }
                                if ($loginPassword == 1) {
                                    // login sucess so store the member's username in
                                    // the session
                                    session_start();
                                    $_SESSION["db"]= "tbl_member5";
                                    $_SESSION["id"] = $memberRecord[0]["id"];
                                    $_SESSION["username"] = $memberRecord[0]["username"];
                                    $_SESSION["inscripcion"] = $memberRecord[0]["inscripcion"];
                                    $_SESSION["cuota_1"] = $memberRecord[0]["cuota_1"];
                                    $_SESSION["cuota_2"] = $memberRecord[0]["cuota_2"];
                                    $_SESSION["cuota_3"] = $memberRecord[0]["cuota_3"];
                                    $_SESSION["cuota_4"] = $memberRecord[0]["cuota_4"];
                                    $_SESSION["eva_1"] = $memberRecord[0]["eva_1"];
                                    $_SESSION["eva_2"] = $memberRecord[0]["eva_2"];
                                    $_SESSION["eva_3"] = $memberRecord[0]["eva_3"];
                                    $_SESSION["eva_4"] = $memberRecord[0]["eva_4"];
                                    $_SESSION["comentario"] = $memberRecord[0]["comentario"];
                                    session_write_close();
                                    if($_SESSION["username"] === "admin"){
                                    $url = "Calendarios/calendar_admin5.php";
                                    header("Location: $url");}
                                    else{
                                        $url = "Calendarios/calendar5.php";
                                        header("Location: $url");
                                    }
                                } else if ($loginPassword == 0) {
                                    $loginStatus = "Nombre o Contraseña Inválida";
                                    return $loginStatus;
                                }
                            }
    }
}

