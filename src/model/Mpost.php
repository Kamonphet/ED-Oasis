<?php
namespace App\Model;

use App\Database\Db;


class Mpost extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล


    public function getpost(){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
        SELECT
            post.post_id,
            post.lp_id,
            post.post_date,
            post.post_detail,
            post.post_file_id, 
            lesson_plan.lp_name AS name
        FROM
            post
        LEFT JOIN lesson_plan ON
            post.lp_id = lesson_plan.lp_id
        ";
        
        $stmt=$this->pdo->query($sql);
        // $stmt->execute([$st_id]);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function addpost($form){
        $sql="
            INSERT INTO post ( 
                lp_id,
                post_date,
                post_detail,
                post_file_id
            )VALUES (
                :lp_id,
                :post_date,
                :post_detail,
                :post_file_id
            )   
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($form);
        return $this->pdo->lastInsertId();
    }

    public function deletepost($post_id){
        $sql="
            DELETE FROM post WHERE post_id = ?
        ";
        
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$post_id]);
        
        return true;
    }

    public function getpostByid($id){
        $sql ="
            SELECT
                post.post_id,
                post.lp_id,
                lesson_plan.lp_name,
                user.user_sname,
                user.user_lname,
                lesson_plan.lp_info,
                user_class_teach.class_name,
                user_subject_teach.subject_name,
                post.post_date,
                post.post_detail,
                post.post_file_id, 
                lesson_plan.lp_name AS name
            FROM
                post
            LEFT JOIN lesson_plan ON
                post.lp_id = lesson_plan.lp_id
            LEFT JOIN user ON
                lesson_plan.user_id = user.user_id
            LEFT JOIN user_class_teach ON
                user.class_id = user_class_teach.class_id
            LEFT JOIN user_subject_teach ON
                user.subject_id = user_subject_teach.subject_id 
            WHERE
                post.post_id = ?
        ";

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll();
        // var_dump($data);
        return  $data[0];
    }

    public function updatepost($postbyid){
        $sql="
            UPDATE post SET
                lp_id = :lp_id,
                post_date = :post_date,
                post_detail = :post_detail,
                post_file_id = :post_file_id
         
            WHERE post_id = :id
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($postbyid);
        return true;
    }
}
?>