<?php
namespace App\Model;

use App\Database\Db;


class Mrequired extends Db {
    //รับค่าข้อมูลมาจากฐานข้อมูล


    public function getrequied($user_id){
        //ส่งคำสั่งไปเรียกข้อมูลทั้งหมดของตารางเรียน
        $sql ="
        SELECT
            rt_name,
            req_detail
        FROM 
            required
        LEFT JOIN required_type ON required.req_id = required_type.rt_id
        WHERE
            required.user_id = '$user_id'
        ";
        $stmt=$this->pdo->query($sql);
        // $stmt->execute([$st_id]);
        $data = $stmt->fetchAll();
        return  $data;

    }

    public function addrequire($req){
        $sql="
            INSERT INTO required ( 
                user_id,
                req_type,
                req_detail
            )VALUES (
                :user_id,
                :req_type,
                :req_detail
            )   
        ";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($req);
        return $this->pdo->lastInsertId();
    }
}
