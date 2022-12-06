<?php
namespace App\Model;

use App\Database\Db;


class Mpramern extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล

    public function getpramern($post_id){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
            SELECT
                evaluation_form.eva_id,
                evaluation_form.post_id,
                post.lp_id,
                lesson_plan.lp_name,
                lesson_plan.lp_info,
                post.post_detail,
                lesson_plan.lp_file_id,
                evaluation_form.eva_score,
                evaluation_form.eva_score2,
                evaluation_form.eva_score3,
                evaluation_form.eva_score4,
                evaluation_form.eva_score5,
                evaluation_form.eva_comment
            FROM 
                evaluation_form
            LEFT JOIN post ON
                evaluation_form.post_id = post.post_id
            LEFT JOIN lesson_plan ON
                post.lp_id = lesson_plan.lp_id
            WHERE
                post.post_id = '$post_id'
        ";
        $stmt=$this->pdo->query($sql);
        // $stmt->execute([$st_id]);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function addpramern($form){
        $sql="
            INSERT INTO evaluation_form ( 
                post_id,
                eva_score,
                eva_score2,
                eva_score3,
                eva_score4,
                eva_score5,
                eva_comment
            )VALUES (
                :post_id,
                :eva_score,
                :eva_score2,
                :eva_score3,
                :eva_score4,
                :eva_score5,
                :eva_comment
            )   
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($form);
        return $this->pdo->lastInsertId();
    }

    public function deletepramern($eva_id){
        $sql="
            DELETE FROM evaluation_form WHERE eva_id = ?
        ";
        
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$eva_id]);
        
        return true;
    }

    public function getpramernByid($id){
        $sql ="
            SELECT
                evaluation_form.eva_id,
                evaluation_form.post_id,
                post.lp_id,
                lesson_plan.lp_name,
                lesson_plan.lp_info,
                post.post_detail,
                lesson_plan.lp_file_id,
                evaluation_form.eva_score,
                evaluation_form.eva_score2,
                evaluation_form.eva_score3,
                evaluation_form.eva_score4,
                evaluation_form.eva_score5,
                evaluation_form.eva_comment
            FROM 
                evaluation_form
            LEFT JOIN post ON
                evaluation_form.post_id = post.post_id
            LEFT JOIN lesson_plan ON
                post.lp_id = lesson_plan.lp_id
            WHERE
                evaluation_form.post_id = ?
        ";

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetchAll();
        // var_dump($data);
        return  $data[0];
    }

    public function updatepramern($formbyid){
        $sql="
            UPDATE evaluation_form SET
                post_id :post_id,
                eva_score :eva_score,
                eva_score2 :eva_score2,
                eva_score3 :eva_score3,
                eva_score4 :eva_score4,
                eva_score5 :eva_score5,
                eva_comment :eva_comment
         
            WHERE eva_id = :id

        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($formbyid);
        return true;
    }

    public function averagepramern($post_id){
        $sql="
        SELECT
            post_id,
            (
                eva_score + eva_score2 + eva_score3 + eva_score4 + eva_score5
            ) / 5 AS average_score,
            COUNT(eva_comment) AS commentt
        FROM
            evaluation_form
        WHERE
            post_id = '$post_id'
        GROUP BY
            post_id
        
        ";

        $stmt=$this->pdo->query($sql);
        $data = $stmt->fetchAll();
        return  $data;
    }

    
}
?>