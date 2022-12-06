<?php
namespace App\Model;

use App\Database\Db;


class Mform extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล

    public function getallform(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
        SELECT
            lesson_plan.lp_id,
            lesson_plan.user_id,
            user.user_sname,
            user.user_lname,
            lesson_plan.lp_name,
            user_subject_teach.subject_name,
            user_class_teach.class_name,
            lesson_plan.lp_unit,
            lesson_plan.lp_title,
            lesson_plan.lp_info,
            lesson_plan.lp_file_id
        FROM
            lesson_plan
        LEFT JOIN USER ON lesson_plan.user_id = USER.user_id
        LEFT JOIN user_class_teach ON USER.class_id = user_class_teach.class_id
        LEFT JOIN user_subject_teach ON USER.subject_id = user_subject_teach.subject_id
        ORDER BY
            lesson_plan.lp_id
        ";
        $stmt=$this->pdo->query($sql);
        // $stmt->execute([$st_id]);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function getform($user_id){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT
                lesson_plan.lp_id,
                lesson_plan.user_id,
                lesson_plan.lp_name,
                lesson_plan.lp_info,
                lesson_plan.lp_file_id
            FROM 
                lesson_plan
            WHERE
                user_id = '$user_id'
        ";
        $stmt=$this->pdo->query($sql);
        // $stmt->execute([$st_id]);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function addform($form){
        $sql="
            INSERT INTO lesson_plan ( 
                user_id,
                lp_name,
                lp_info,
                lp_file_id,
                lp_unit,
                lp_title
            )VALUES (
                :user_id,
                :lp_name,
                :lp_info,
                :lp_file_id,
                :lp_unit,
                :lp_title
            )   
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($form);
        return $this->pdo->lastInsertId();
    }

    public function deleteform($lp_id){
        $sql="
            DELETE FROM lesson_plan WHERE lp_id = ?
        ";
        
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$lp_id]);
        
        return true;
    }

    public function getformByid($id){
        $sql ="
            SELECT
                lesson_plan.lp_id,
                lesson_plan.user_id,
                lesson_plan.lp_name,
                lesson_plan.lp_info,
                lesson_plan.lp_unit,
                lesson_plan.lp_title,
                lesson_plan.lp_file_id
            FROM 
                lesson_plan
            WHERE
                lp_id = ?
        ";

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll();
        // var_dump($data);
        return  $data[0];
    }

    public function updateform($formbyid){
        $sql="
            UPDATE lesson_plan SET
                user_id = :user_id,
                lp_name = :lp_name,
                lp_info = :lp_info,
                lp_file_id = :lp_file_id,
                lp_unit = :lp_unit,
                lp_title = :lp_title
         
            WHERE lp_id = :id

        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($formbyid);
        return true;
    }
}
?>