<?php
/**
 * User: saifeddine
 * Date: 2019-02-20
 * Time: 13:25
 */

include 'handler.php';

/**
 * The User class handles user specific actions and validation
 *
 *
 * @author   Saif Rashed <saifeddinerashed@icloud.com>
 * @version  1
 * @access   public
 */
class User extends Handler {


    /**
     *
     * Validates and adds user to the model.
     *
     * @return string
     */
    public function createUser($firstName, $lastName, $password, $email, $gender) {

        $result = $this->readsData('SELECT * FROM users WHERE email="' . $email . '"');

        if (empty($firstName) && empty($lastName) && empty($password) && empty($email) && empty($gender) && empty($city) && empty($street) && empty($postal)) {
            return header("Location: ../account.php?status=Fill all boxes");
        }

        if ($result->rowCount() !== 0) {
            return header("Location: ../account.php?status=User already exists");
        }

        if (strlen($password) < 5 || strlen($password) > 50) {
            return header("Location: ../account.php?status=Password is too short/long");
        }

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $this->createData('INSERT INTO users(fname, lname, email, gender, city, street, postal, password) 
                                VALUES("' . $firstName . '","' . $lastName . '","' . $email . '",' . $gender . ',"' . $city . '","' . $street . '","' . $postal . '","' . $passwordHash . '")');
        return header("Location: ../account.php?status=Account has been created");
    }

    /**
     * Checks if input is correct and starts session.
     *
     * @param $email
     * @param $password
     * @return string
     */
    public function loginUser($email, $password) {

        $result = $this->readsData('SELECT * FROM users WHERE email="' . $email . '";');

        $row = $result->fetch();

        $status = password_verify($password, $row['password']);

        if ($status) {
            $_SESSION['id']    = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['role']  = $this->userRole($row['id']);

            return header("Location: ../dashboard.php");
        } else {
            return header("Location: ../account.php?status=E-mail/password incorrect");
        }
    }


    /**
     * destroys session. and logs user out.
     */
    public function logoutUser() {
        session_start();
        unset($_SESSION);
        session_destroy();
        return header("Location: ../account.php");
    }

    public function userRole($userId) {
        $result = $this->readsData('SELECT role.description FROM users, role WHERE users.id='.$userId.' AND users.role=role.role_id;');
        $row = $result->fetch();

        return $row['description'];
    }


}
