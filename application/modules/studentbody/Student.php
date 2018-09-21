<?php
namespace modules\studentbody;

use Exception;
use PDO;
use PDOStatement;
use modules\Person;
use dao\Connection;
include_once 'init.php';
include_once 'application/modules/Person.php';

class Student extends Person
{
     private $dados=NULL;
     private $idstudent=null;
     private $student=null;
     private $stuenrolment=null; // word in Portuguese of Brazil - matrícula
     private $stuSSN=null;
     private $stuId=null;
     private $stuname=null;
     private $stuage=null;
     private $stuDateofBirth=null;
     private $stuPicture=null;
     private $status="1";
     private $stuaddress=null;
     private $stuneighborhood=null;
     private $stucity=null;
     private $stustate=null;
     private $stucountry=null;
     private $stuzipcode=null;
     private $stusponsor=null; // word in Portuguese of Brazil - responsável
     private $idstuemail=null;
     private $stuemail1=null;
     private $stuemail2=null;
     private $idstuSN=null;
     private $stutwitter=null;
     private $stuwhatsapp=null;
     private $stufacebook=null;
     private $idstuphone=null;
     private $stucellphone=null;
     private $stuhomephone=null;
     private $stujobphone=null;
     private $ret=null;
     private $lastID=null;

     /** 
      * This function call stored procedure that Read only partial information about one student by id;
      * 
      * @param $id 
      * */
     public function readstudent($id){
       $query="call SELECTSTUDENTS($id);";  
       $stmt = $conn = new Connection();
       $stmt = $conn->getInstance()->prepare($query);
       if ($stmt->execute()) {
           while ($raw=$stmt->fetchAll(PDO::FETCH_ASSOC)){
               $this->setDados($raw);
           }
       }else {
           echo "Erro: Não foi possível recuperar os dados do Aluno do banco de dados";
       }
     }
     
    /** This function call stored procedure that Read all information about one student by id;
     *
     * @param $id
     * */
     public function readstudentALL($id) {
         try{
             $query = "call SELECTSTUDENTSALL($id);";
             $stmt = $conn = new Connection();
             $stmt = $conn->getInstance()->prepare($query);
             if ($stmt->execute()) {
                 while ($raw=$stmt->fetchAll(PDO::FETCH_ASSOC)){
                     $this->setDados($raw);
                 }
             }else {
                 echo "Erro: Não foi possível recuperar os dados do Aluno do banco de dados";
             }
         }catch (Exception $e) {
             echo $e->getMessage();
             exit;
            }
     }
     
     
     /** This function call stored procedure that Insert all information about one student; */
     public function poststudentALL(){
       try {
  
         $this->setStuenrolment($_POST['stuenrolment']);
         $this->setStuSSN($_POST['stuSSN']);
         $this->setStuId($_POST['stuId']);
         $this->setStuname($_POST['stuname']);
         $this->setStuage($_POST['stuage']);
         $this->setStuDateofBirth($_POST['stuDateofBirth']);
         $this->setStuaddress($_POST['stuaddress']);
         $this->setStuneighborhood($_POST['stuneighborhood']);
         $this->setStucity($_POST['stucity']);
         $this->setStustate($_POST['stustate']);
         $this->setStucountry($_POST['stucountry']);
         $this->setStuzipcode($_POST['stuzipcode']);
         $this->setStucellphone($_POST['stucellphone']);
         $this->setStuhomephone($_POST['stuhomephone']);
         $this->setStujobphone($_POST['stujobphone']);
         $this->setStuemail1($_POST['stuemail1']);
         $this->setStuemail2($_POST['stuemail2']);
         $this->setStutwitter($_POST['stutwitter']);
         $this->setStuwhatsapp($_POST['stuwhatsapp']);
         $this->setStufacebook($_POST['stufacebook']);
         
         $query="CALL INSERTSTUDENTSALL('{$this->getStuenrolment()}','{$this->getStuSSN()}','{$this->getStuId()}','{$this->getStuname()}','{$this->getStuage()}','{$this->getStuDateofBirth()}','{$this->getStuaddress()}','{$this->getStuneighborhood()}','{$this->getStucity()}','{$this->getStustate()}','{$this->getStucountry()}','{$this->getStuzipcode()}','{$this->getStucellphone()}','{$this->getStuhomephone()}','{$this->getStujobphone()}','{$this->getStuemail1()}','{$this->getStuemail2()}','{$this->getStutwitter()}','{$this->getStuwhatsapp()}','{$this->getStufacebook()}');";
            $stmt = $conn = new Connection();
            $stmt = $conn->getInstance()->prepare($query);
            $stmt->execute();
       } catch (Exception $e) {
           echo $e->getMessage();
           exit;
      }
     }
     
     
     public function updatestudentALL(){
         try {
          $this->setStuenrolment($_POST['stuenrolment']);
          $this->setStuSSN($_POST['stuSSN']);
          $this->setStuId($_POST['stuId']);
          $this->setStuname($_POST['stuname']);
          $this->setStuage($_POST['stuage']);
          $this->setStuDateofBirth($_POST['stuDateofBirth']);
          $this->setStuPicture($_POST['stuPicture']);
          $this->setStuaddress($_POST['stuaddress']);
          $this->setStuneighborhood($_POST['stuneighborhood']);
          $this->setStucity($_POST['stucity']);
          $this->setStustate($_POST['stustate']);
          $this->setStucountry($_POST['stucountry']);
          $this->setStuzipcode($_POST['stuzipcode']);
          $this->setStucellphone($_POST['stucellphone']);
          $this->setStuhomephone($_POST['stuhomephone']);
          $this->setStujobphone($_POST['stujobphone']);
          $this->setStuemail1($_POST['stuemail1']);
          $this->setStuemail2($_POST['stuemail2']);
          $this->setStutwitter($_POST['stutwitter']);
          $this->setStuwhatsapp($_POST['stuwhatsapp']);
          $this->setStufacebook($_POST['stufacebook']);
         
         $query = "call EDITSTUDENTS('{$this->getIdstudent()}','{$this->getStuname()}','{$this->getStuage()}','{$this->getStuDateofBirth()}','{$this->getStuPicture()}','{$this->getStuaddress()}','{$this->getStuneighborhood()}','{$this->getStucity()}','{$this->getStustate()}','{$this->getStucountry()}','{$this->getStuzipcode()}','{$this->getStucellphone()}','{$this->getStuhomephone()}','{$this->getStujobphone()}','{$this->getStuemail1()}','{$this->getStuemail2()}','{$this->getStutwitter()}','{$this->getStuwhatsapp()}','{$this->getStufacebook()}');";
         $stmt = $conn = new Connection();
         $stmt = $conn->getInstance()->prepare($query);
         $stmt->execute();
       } catch (Exception $e) {
             echo $e->getMessage();
             exit;
        }
     }

    /** Function does a update into studant. */
    public function update()
    {
        $sql ="UPDATE  `myschool`.`studant` SET "
                 ."`stuenrolment`= :stuenrolment,"
                 ."`stuname`= :stuname,"
                 ."`stuage`= :stuage,"
                 ."`stuaddress`= :stuaddress,"
                 ."`stuneighborhood`= :stuneighborhood,"
                 ."`stucity`= :stucity,"
                 ."`stustate`= :stustate,"
                 ."`stucountry`= :stucountry,"
                 ."`stuzipcode`= :stuzipcode,"
                 ."`stusponsor`= :stusponsor "
               ."WHERE stuenrolment = :stuenrolment);";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':stuname', $_POST['stuname'], PDO::PARAM_STR);
        $stmt->bindParam(':stuage', $_POST['stuage'], PDO::PARAM_STR);
        $stmt->bindParam(':stuaddress', $_POST['stuaddress'], PDO::PARAM_STR);
        $stmt->bindParam(':stuneighborhood', $_POST['stuneighborhood'], PDO::PARAM_STR);
        $stmt->bindParam(':stucity', $_POST['stucity'], PDO::PARAM_STR);
        $stmt->bindParam(':stustate', $_POST['stustate'], PDO::PARAM_STR);
        $stmt->bindParam(':stucountry', $_POST['stucountry'], PDO::PARAM_STR);
        $stmt->bindParam(':stuzipcode', $_POST['stuzipcode'], PDO::PARAM_STR);
        $stmt->bindParam(':stusponsor', $_POST['stusponsor'], PDO::PARAM_STR);
        
        $stmt->execute(); 
    } 
    
    public function updateStuaddress(){
        
        $sql2 ="UPDATE `myschool`.`stuaddress` SET "
                    ."`stuaddress` = :stuaddress,"
                    ."`stuneighborhood` = :stuneighborhood,"
                    ."`stucity` = :stucity,"
                    ."`stustate` = :stustate,"
                    ."`stucountry` = :stucountry,"
                    ."`stuzipcode` = :stuzipcode "
                ."WHERE idstuaddress = :idstuaddress;";
                  
               $stmt = $conn = new Connection();
               $stmt = $conn->getInstance()->prepare($sql2);
               $stmt->bindParam(':idstuaddress', $idstuaddress, PDO::PARAM_INT);
               $stmt->bindParam(':stuaddress', $this->stuaddress, PDO::PARAM_STR);
               $stmt->bindParam(':stuneighborhood', $this->stuneighborhood, PDO::PARAM_STR);
               $stmt->bindParam(':stucity', $this->stucity, PDO::PARAM_STR);
               $stmt->bindParam(':stustate', $this->stustate, PDO::PARAM_STR);
               $stmt->bindParam(':stucountry', $this->stucountry, PDO::PARAM_STR);
               $stmt->bindParam(':stuzipcode', $this->stuzipcode, PDO::PARAM_STR);
                                                          
               $stmt->execute();
    }

    public function updateStuphones(){
        //todo
    }

 
    /**
     * @return PDOStatement
     */
    public function getDados()
    {
        return $this->dados;
    }
        
    /**
     * @param PDOStatement $dados
     */
    public function setDados($dados)
    {
        $this->dados = $dados;
    }
    
    function getStudent(){
      $reading = $this->read();
       return $reading;
    }
       
    /**
     * @return mixed
     */
    public function getIdstudent()
    {
        return $this->idstudent;
    }
    
    /**
     * @param mixed $idstudent
     */
    public function setIdstudent($idstudent)
    {
        $this->idstudent = $idstudent;
    }
    
    /**
     * @return mixed
     */
    public function getStuenrolment()
    {
        return $this->stuenrolment;
    }

    /**
     * @return mixed
     */
    public function getStuSSN()
    {
        return $this->stuSSN;
    }

    /**
     * @param mixed $stuSSN
     */
    public function setStuSSN($stuSSN)
    {
        $this->stuSSN = $stuSSN;
    }
    
    /**
     * @return mixed $stuId
     */
    public function getStuId(){
        return $this->stuId;
    }
    
    /**
     * @param mixed $stuId 
     */
    public function setStuId($stuId){
        $this->stuId = $stuId;
    }
    
    /**
     * @return mixed
     */
    public function getStuname()
    {
        return $this->stuname;
    }

    /**
     * @return mixed
     */
    public function getStuage()
    {
        return $this->stuage;
    }

    /**
     * @return mixed
     */
    public function getStuDateofBirth()
    {
        return $this->stuDateofBirth;
    }

    /**
     * @param mixed $stuDateofBirth
     */
    public function setStuDateofBirth($stuDateofBirth)
    {
        $this->stuDateofBirth = $stuDateofBirth;
    }
    
    /**
     * @return mixed
     */
    public function getStuPicture()
    {
        return $this->stuPicture;
    }
    
    /**
     * @param mixed $stuPicture
     */
    public function setStuPicture($stuPicture)
    {
        $this->stuPicture = $stuPicture;
    }
    

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStuaddress()
    {
        return $this->stuaddress;
    }

    /**
     * @return mixed
     */
    public function getStuneighborhood()
    {
        return $this->stuneighborhood;
    }

    /**
     * @return mixed
     */
    public function getStucity()
    {
        return $this->stucity;
    }

    /**
     * @return mixed
     */
    public function getStustate()
    {
        return $this->stustate;
    }

    /**
     * @return mixed
     */
    public function getStucountry()
    {
        return $this->stucountry;
    }

    /**
     * @return mixed
     */
    public function getStuzipcode()
    {
        return $this->stuzipcode;
    }

    /**
     * @return mixed
     */
    public function getStusponsor()
    {
        return $this->stusponsor;
    }

    /**
     * @param mixed $stuenrolment
     */
    public function setStuenrolment($stuenrolment)
    {
        $this->stuenrolment = $stuenrolment;
    }

    /**
     * @param mixed $stuname
     */
    public function setStuname($stuname)
    {
        $this->stuname = $stuname;
    }

    /**
     * @param mixed $stuage
     */
    public function setStuage($stuage)
    {
        $this->stuage = $stuage;
    }

    /**
     * @param mixed $stuaddress
     */
    public function setStuaddress($stuaddress)
    {
        $this->stuaddress = $stuaddress;
    }

    /**
     * @param mixed $stuneighborhood
     */
    public function setStuneighborhood($stuneighborhood)
    {
        $this->stuneighborhood = $stuneighborhood;
    }

    /**
     * @param mixed $stucity
     */
    public function setStucity($stucity)
    {
        $this->stucity = $stucity;
    }

    /**
     * @param mixed $stustate
     */
    public function setStustate($stustate)
    {
        $this->stustate = $stustate;
    }

    /**
     * @param mixed $stucountry
     */
    public function setStucountry($stucountry)
    {
        $this->stucountry = $stucountry;
    }

    /**
     * @param mixed $stuzipcode
     */
    public function setStuzipcode($stuzipcode)
    {
        $this->stuzipcode = $stuzipcode;
    }

    /**
     * @param mixed $stusponsor
     */
    public function setStusponsor($stusponsor)
    {
        $this->stusponsor = $stusponsor;
    }
    
    /**
     * @return mixed
     */
    public function getIdstuemail()
    {
        return $this->idstuemail;
    }

    /**
     * @return mixed
     */
    public function getStuemail1()
    {
        return $this->stuemail1;
    }

    /**
     * @return mixed
     */
    public function getStuemail2()
    {
        return $this->stuemail2;
    }

    /**
     * @return mixed
     */
    public function getIdstuSN()
    {
        return $this->idstuSN;
    }

    /**
     * @return mixed
     */
    public function getStutwitter()
    {
        return $this->stutwitter;
    }

    /**
     * @return mixed
     */
    public function getStuwhatsapp()
    {
        return $this->stuwhatsapp;
    }

    /**
     * @return mixed
     */
    public function getStufacebook()
    {
        return $this->stufacebook;
    }

    /**
     * @return mixed
     */
    public function getIdstuphone()
    {
        return $this->idstuphone;
    }

    /**
     * @return mixed
     */
    public function getStucellphone()
    {
        return $this->stucellphone;
    }

    /**
     * @return mixed
     */
    public function getStuhomephone()
    {
        return $this->stuhomephone;
    }

    /**
     * @param mixed $student
     */
    public function setStudent($student)
    {
        $this->student = $student;
    }

    /**
     * @param mixed $idstuEmail
     */
    public function setIdstuemail($idstuemail)
    {
        $this->idstuemail = $idstuemail;
    }

    /**
     * @param mixed $email1
     */
    public function setStuemail1($stuemail1)
    {
        $this->stuemail1 = $stuemail1;
    }

    /**
     * @param mixed $email2
     */
    public function setStuemail2($stuemail2)
    {
        $this->stuemail2 = $stuemail2;
    }

    /**
     * @param mixed $idstuSN
     */
    public function setIdstuSN($idstuSN)
    {
        $this->idstuSN = $idstuSN;
    }

    /**
     * @param mixed $twitter
     */
    public function setStutwitter($stutwitter)
    {
        $this->stutwitter = $stutwitter;
    }

    /**
     * @param mixed $whatsapp
     */
    public function setStuwhatsapp($stuwhatsapp)
    {
        $this->stuwhatsapp = $stuwhatsapp;
    }

    /**
     * @param mixed $fasebook
     */
    public function setStufacebook($stufacebook)
    {
        $this->stufacebook = $stufacebook;
    }

    /**
     * @param mixed $idstuPhone
     */
    public function setIdstuphone($idstuphone)
    {
        $this->idstuphone = $idstuphone;
    }

    /**
     * @param mixed $cellphone
     */
    public function setStucellphone($stucellphone)
    {
        $this->stucellphone = $stucellphone;
    }

    /**
     * @param mixed $home
     */
    public function setStuhomephone($stuhomephone)
    {
        $this->stuhomephone = $stuhomephone;
    }
    /**
     * @return mixed
     */
    public function getStujobphone()
    {
        return $this->stujobphone;
    }

    /**
     * @param mixed $job
     */
    public function setStujobphone($stujobphone)
    {
        $this->stujobphone = $stujobphone;
    }
    
    public function read()
    {}

    public function post()
    {}

    public function delete()
    {}
  
}

