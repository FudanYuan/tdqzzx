<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 2016/10/3
 * Time: 14:10
 */
//数据库连接
class ConnDB{
    var $dbtype;
    var $host;
    var $user;
    var $pwd;
    var $dbname;
    //构造方法
    function  ConnDB($dbtype,$host,$user,$pwd,$dbname){
        $this->dbtype=$dbtype;
        $this->host=$host;
        $this->user=$user;
        $this->pwd=$pwd;
        $this->dbname=$dbname;

    }
    //实现数据库的连接并返回连接对象
    function GetConnld(){
        if($this->dbtype=="mysql"||$this->dbtype=="mssql"){
            $dsn="$this->dbtype:host=$this->host;dbname=$this->dbname";
        }else{
            $dsn="$this->dbtype:dbname=$this->dbname";
        }
          try{
              $conn=new PDO($dsn,$this->user,$this->pwd);
              //初始化一个对象，就是创建了数据库连接对象$pdo
              $conn->query("set names utf8");
              return $conn;

          }catch(PDOException $e){
               die("Error!:".$e->getMessage()."<br>");

          }
    }
}

//数据库管理类
class AdminDB{
    function  ExecSQL($sqlstr,$conn){
        $sqltype=strtolower(substr(trim($sqlstr),0,6));
        $rs=$conn->prepare($sqlstr);
        $rs->execute();
        if($sqltype=="select"){
            $array=$rs->fetchAll(PDO::FETCH_ASSOC);
            if(count($array)==0||$rs==false)
                return false;
            else
                return $array;

        }elseif ($sqltype=="update"||$sqltype=="insert"||$sqltype=="delete"){
            if($rs)
                return true;
            else
                return false;

        }
    }
}

//分页类
class SepPage{
    var $rs;
    var $pagesize;
    var $nowpage;
    var $array;
    var $conn;
    var $sqlstr;

    function ShowData($sqlstr,$conn,$pagesize,$nowpage){        //定义方法
        if(!isset($nowpage)||$nowpage=="")                      //判断变量值是否为空
            $this->nowpage=1;                                   //定义每页起始页
        else
            $this->nowpage=$nowpage;
        $this->pagesize=$pagesize;                             //定义每页输出的记录数
        $this->conn=$conn;                                     //连接数据库返回的标识
        $this->sqlstr=$sqlstr;                                 //执行的查询语句
        $this->rs=$this->conn->PageExecute($this->sqlstr,$this->pagesize,$this->nowpage);
        @$this->array=$this->rs->GetRows();
             if(count($this->array)==0||$this->rs==false)
                  return false;
             else
                 return $this->array;

    }
    function ShowPage($contentname,$utits,$anothersearchstr,$anothersearchstrs,$class){
        $allrs = $this->conn->Execute($this->sqlstr);           //执行查询语句
        $record = count($allrs->GetRows());                     //统计记录总数
        $pagecount = ceil($record/$this->pagesize);             //计算共有几页
        $str = "";
        $str .= $contentname."&nbsp;".$record."&nbsp;".$utits."&nbsp;每页 &nbsp;" .$this->pagesize."&nbsp;"
            .$utits."&nbsp;第&nbsp;".$this->rs->AbsolutePage()."&nbsp;页/共&nbsp;".$pagecount."&nbsp;页";
        $str .= "&nbsp;&nbsp;&nbsp;&nbsp;";
        if($this->rs->AtFirstPage())
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=1&parameter1=".$anothersearchstr."&parameter2=
            ".$anothersearchstrs."class=".$class.">首页</a>";
        else
            $str.="<font color='#555555'>首页</font>>";
        $str.="&nbsp;";
        if(!$this->rs->AtFirstPage())
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->rs->AbsoulutePage()-1)."&parament1=
            ".$anothersearchstr."&paramenter2=".$anothersearchstrs."class=".$class.">上一页</a>";
        else
            $str.="<font color='#555555'>上一页</font>>";
        $str.="&nbsp;";
        if(!$this->rs->AtFirstPage())
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=".($this->rs->AbsoulutePage()+1)."&parament1=
            ".$anothersearchstr."&paramenter2=".$anothersearchstrs."class=".$class.">下一页</a>";
        else
            $str.="<font color='#555555'>下一页</font>>";
        $str.="&nbsp;";
        if(!$this->rs->AtFirstPage())
            $str.="<a href=".$_SERVER['PHP_SELF']."?page=".$pagecount."&parament1=".$anothersearchstr.
                "&paramenter2=".$anothersearchstrs."class=".$class.">尾页</a>";
        else
            $str.="<font color='#555555'>尾页</font>>";
        if(count($this->array)==0||$this->rs==false)
            return "";
        else
            return $str;

    }

}

//截取字符串
class SubStr{
    function dealStr($str,$start,$maxLen){
        $strlen = strlen($str);
        if($maxLen>$strlen||$start>$strlen){
            return $str;
        }
        $substrlen = $start + $maxLen;
        $tmpstr = "";
        for($i=$start;$i<$substrlen;$i++){
            if(ord(substr($str,$i,1))>0xa0){
                $tmpstr .= substr($str,$i,2);
                $i++;
            }
            else{
                $tmpstr .=substr($str,$i,1);
            }
        }
        $tmpstr .= "...";
        return $tmpstr;
    }
}
?>