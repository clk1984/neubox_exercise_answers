<?php
class request extends database
{


    public function __construct()
    {
        session_start();
        if ($_SERVER['SERVER_NAME'] != 'localhost') {
            print_r('not allowed connection');
            exit;
        } elseif ($_SESSION['auth'] !== 'true') {
            print_r('not authenticated');
            exit;
        }
    }
    private function valid_email($email)
    {
        return !!filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function create()
    {
        try {
            $database = new Database();
            $database->query('INSERT INTO usersneubox (email, password,phone,company,birthdate) VALUES ( :email, :password,:phone,:company,:birthdate)');
            $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
            $database->bind(':phone', $phone);
            if ($this->valid_email($_POST['email'])) {
                $database->bind(':email', $_POST['email']);
            } else {
                echo 'Not valid Email!';
                exit;
            }

            $database->bind(':password', hash('sha512', $_POST['password']));
            $database->bind(':company', filter_var($_POST['company'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $database->bind(':birthdate', filter_var($_POST['datepicker'], FILTER_SANITIZE_FULL_SPECIAL_CHARS));
            $database->execute();
            echo "user created \n";
            exit;
        }

        catch (Exception $e) {
            $data = array(
                'Error => cannot create user.Invalid params or duplicate user'
            );
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        }
    }

    public function delete()
    {

        $database = new Database();
        $database->query('DELETE FROM usersneubox WHERE email=(:email)');
        if ($this->valid_email($_POST['email'])) {
            $database->bind(':email', $_POST['email']);
        } else {
            echo 'Not valid Email!';
            exit;
        }
        try {
            $database->execute();
            echo "user deleted \n";
            exit;
        }

        catch (Exception $e) {
            $data = array(
                'Error => Cannot delete.User not found'
            );
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        }
    }

    public function show()
    {
        $database = new Database();
        $database->query('SELECT * FROM usersneubox ');
        $row = $database->resultset();
        echo "<pre>";
        print_r($row);
        echo "</pre>";
        echo "<a href='javascript:history.go(-1)'>Go back</a>";
    }

    public function edit(string $email)
    {
        $database = new Database();
        $database->query('UPDATE usersneubox SET email=:email, password=:password, phone=:phone WHERE email=:email');
        $phone = preg_replace('/[^0-9]/', '', $_POST['phone']);
        $database->bind(':phone', $phone);
        if ($this->valid_email($_POST['email'])) {
            $database->bind(':email', $_POST['email']);
        } else {
            echo 'Not valid Email!';
            exit;
        }

        $database->bind(':password', hash('sha512', $_POST['password']));
        try {
            $database->execute();
            echo "user edited \n";
            echo "<a href='javascript:history.go(-1)'>Go back</a>";
            exit;
        }

        catch (Exception $e) {
            $data = array(
                'Error => Cannot edit.User not found'
            );
            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
        }
    }
}

?>