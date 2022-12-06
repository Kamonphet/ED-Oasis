<?php
namespace App\Model;


use App\Database\Db;


class user extends Db {
    public function createUser($user){

        $user['user_password']=password_hash($user['user_password'], PASSWORD_DEFAULT);

        $sql="
            INSERT INTO user (
                user_tier,
                user_sname,
                user_lname,
                class_id,
                subject_id,
                user_email,
                user_tell,
                user_password
            ) VALUES (
                :user_tier,
                :user_sname,
                :user_lname,
                :class_id,
                :subject_id,
                :user_email,
                :user_tell,
                :user_password
            )
        "; 

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($user);

        return $this->pdo->lastInsertId();
    }

    public  function checkUser($user){
        $sql ="
            SELECT
                *
            FROM
                user
            WHERE
                user.user_sname = ?;
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user['user_sname']]);
        $data = $stmt->fetchAll();
        $userDB= $data[0];
        if(password_verify($user['user_password'], $userDB['user_password'])){
            session_start();
            $_SESSION['user_id'] = $userDB['user_id'];
            $_SESSION['user_sname'] = $userDB['user_sname'];
            $_SESSION['user_lname'] = $userDB['user_lname'];
            $_SESSION['user_tier'] = $userDB['user_tier'];
            $_SESSION['login'] = true;

            return true;
        }else{
            return false;
        }
    }

    public function getuser($user_id){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT
                user.user_id,
                user.user_sname,
                user.user_lname,
                user_class_teach.class_name AS Class,
                user_subject_teach.subject_name AS Subject,
                user_email AS email,
                user_tell AS tell
            FROM 
                user
            LEFT JOIN user_class_teach ON
                user.class_id = user_class_teach.class_id
            LEFT JOIN user_subject_teach ON
                user.subject_id = user_subject_teach.subject_id
            WHERE
                user_id = '$user_id'       
                
        ";
        $stmt=$this->pdo->query($sql);
        // $stmt->execute([$st_id]);
        $data = $stmt->fetchAll();
        return  $data;
    }

    public function groupuser(){
        $sql="
        SELECT
            user_tier,
            COUNT(user_tier) AS Cuser, 
        CASE WHEN user_tier = 'teacher' THEN 'kru' 
        WHEN user_tier = 'student' THEN 'naklean'
        END kon
        FROM
            USER
        GROUP BY
            user_tier
        HAVING
            COUNT(user_tier) > 0
        ";
        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;
    }

}
?>