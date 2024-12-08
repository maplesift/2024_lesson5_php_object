<?php

class DB{
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=db03";
    protected $pdo;
    protected $table;

    function __construct($table){
        $this->table=$table;

        $this->pdo=new PDO($this->dsn,'root','');
    }

    // $a['sum('id')]
    /**
     * 方便使用各種聚合函式
     */

    protected function math($math,$col='id',$where=[]){
        $sql="SELECT $math($col) FROM $this->table";

        if(!empty($where)){
            $tmp=$this->a2s($where);
            $sql=$sql . " WHERE " . join(" && ", $tmp);
        }

        return $this->pdo->query($sql)->fetchColumn();
    } 


    /**
     * 撈出全部資料
     * 1.整張資料表
     * 2.有條件
     * 3.其他sql功能
     */
    function all(...$arg){
        $sql="SELECT * FROM $this->table ";
        if(!empty($arg[0])){
            if(is_array($arg[0])){

                $where=$this->a2s($arg[0]);
                $sql=$sql . " WHERE ". join(" && ",$where);
            }else{
                //$sql=$sql.$arg[0];
                $sql .= $arg[0];

            }
        }

        if(!empty($arg[1])){
            $sql=$sql . $arg[1];
        }
        return $this->fetchAll($sql);
    }

    
        /**
     * 撈出單筆資料
     * 1.整張資料表
     * 2.有條件
     * 3.其他sql功能
     */
    function find($id){
        $sql="SELECT * FROM $this->table ";


            if(is_array($id)){

                $where=$this->a2s($id);
                $sql=$sql . " WHERE ". join(" && ",$where);
            }else{
                //$sql=$sql.$arg[0];
                $sql .= "WHERE `id`='$id'";

            }


        return $this->fetchOne($sql);
    }
    // 增+改
    function save($array){

        if(isset($array['id'])){
            // update 改
            // update table set `欄位1`='值1',`欄位2`='值2' where `id`='值';
            $id=$array['id'];
            unset($array['id']);
            $set=$this->a2s($array);
            $sql ="UPDATE $this->table SET ".join(',',$set)." where `id`='$id'";
        }else{
            // insert 增
            $cols=array_keys($array);
            $sql="INSERT INTO $this->table (`".join("`,`",$cols)."`) VALUES('".join("','",$array)."')";
        }
        // ****看sql與法的最終結果  echo $sql;
        echo $sql;
        return $this->pdo->exec($sql);

    }
    // 刪除
    function del($id){
        $sql="DELETE FROM $this->table ";

            if(is_array($id)){
                $where=$this->a2s($id);
                $sql=$sql . " WHERE ". join(" && ",$where);
            }else{
                //$sql=$sql.$arg[0];
                $sql .= "WHERE `id`='$id'";
            }
        return $this->pdo->exec($sql);
    }
    /**
     * 把陣列轉成條件字串陣列
     * array to string 陣列轉成字串
     */
    function a2s($array){
        $tmp=[];
        foreach($array as $key => $value){
            $tmp[]="`$key`='$value'";
        }
        return $tmp;
    }

    /**
     * 取得單筆資料
     */
    protected function fetchOne($sql){
        // echo $sql
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    
    /**
     * 取得多筆資料
     */
    protected function fetchAll($sql){
        //echo $sql;
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    // ========================= 聚合函式*5
    function max($col,$where=[]){
        return $this->math('max',$col,$where);
    }
    function min($col,$where=[]){
        return $this->math('min',$col,$where);
    }
    function sum($col,$where=[]){
        return $this->math('sum',$col,$where);
    }
    function count($where=[]){
        return $this->math('count','*',$where);
    }
    function avg($col,$where=[]){
        return $this->math('avg',$col,$where);
    }
}

// $b=0;
// $a=[1,2,3,4];
// $b=all($a);
// print_r($rows);
// function q($sql){
//     return $this->pdo->query($sql)->fetchall();
// }
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";

}
// 實例化
$DEPT=new DB('dept');
$CLASSES=new DB('classes');

// $dept=$DEPT->q("SELECT * FROM dept");
// $dept=$DEPT->all(['id'=>3]);
// $dept=$DEPT->find(2);
// $dept=$DEPT->find(['code'=>'404']);
// $DEPT->save(['code'=>'504']);
// $DEPT->save(['id'=>'8','name'=>'資訊發展部']);
// $DEPT->del(2);
// $DEPT->del(['code'=>'504']);
// dd($DEPT->math('count','id'));
// echo $DEPT->math('max','id',['code'=>'503']);
echo "<br>";
echo $DEPT->max('id',['code'=>'503']);
echo "<br>";
echo $DEPT->count(['code'=>'503']);
echo "<br>";
echo $DEPT->count();
echo "<br>";
echo $CLASSES->count(['id'=>'1']);
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



