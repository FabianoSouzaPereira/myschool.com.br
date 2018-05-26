<?php
namespace modules\studentbody;

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
     private $stuname=null;
     private $stuage=null;
     private $stuDateofBirth=null;
     private $status="1";
     private $stuaddress=null;
     private $stuneighborhood=null;
     private $stucity=null;
     private $stustate=null;
     private $stucountry=null;
     private $stuzipcode=null;
     private $stusponsor=null; // word in Portuguese of Brazil - responsável
     private $idstuEmail=null;
     private $stuemail1=null;
     private $stuemail2=null;
     private $idstuSN=null;
     private $stutwitter=null;
     private $stuwhatsapp=null;
     private $stufacebook=null;
     private $idstuPhone=null;
     private $stucellphone=null;
     private $stuhomephone=null;
     private $stujobphone=null;


    /** Function does a post into studant. */
    public function post()
    {   
        $this->setStuenrolment($_POST['stuenrolment']);
        $this->setStuname($_POST['stuname']);
        $this->setStuage($_POST['stuage']);
        $this->setStuaddress($_POST['stuaddress']);
        $this->setStuDateofBirth($_POST['stuDateofBirth']);
        $this->setStuneighborhood($_POST['stuneighborhood']);
        $this->setStucity($_POST['stucity']);
        $this->setStustate($_POST['stustate']);
        $this->setStucountry($_POST['stucountry']);
        $this->setStuzipcode($_POST['stuzipcode']);
 //       $this->setStusponsor($_POST['stusponsor']);
        $sql=null;
        $sql2=null;
        $sql3=null;
        $sql4=null;
        $status = "1";
        
       $sql ="INSERT INTO `myschool`.`student`("
                ."`stuenrolment`,"
                ."`stuname`,"
                ."`stuage`,"
                ."`stuDateofBirth`,"
                ."`status`) "
               ."VALUES (:stuenrolment,"
                 .":stuname," 
                 .":stuage,"
                 .":stuDateofBirth,"
                 .":status);";
        
       $stmt = $conn = new Connection();
       $stmt = $conn->getInstance()->prepare($sql);
       $stmt->bindParam(':stuenrolment', $this->stuenrolment, PDO::PARAM_STR);
       $stmt->bindParam(':stuname', $this->stuname, PDO::PARAM_STR);
       $stmt->bindParam(':stuage', $this->stuage, PDO::PARAM_STR);
       $stmt->bindParam(':stuDateofBirth', $this->stuDateofBirth, PDO::PARAM_STR);
       $stmt->bindParam(':status', $this->status, PDO::PARAM_STR);
          
        $stmt->execute(); 
        
        $lastID = $conn->getInstance()->lastInsertId();
        
        
        $sql2 ="INSERT INTO `myschool`.`stuaddress`(`idstuaddress`,"
                 ."`stuaddress`,"
                 ."`stuneighborhood`,"
                 ."`stucity`,"
                 ."`stustate`,"
                 ."`stucountry`,"
                 ."`stuzipcode`) "
                ."VALUES (:idstuaddress,"
                  .":stuaddress,"
                  .":stuneighborhood,"
                  .":stucity,"
                  .":stustate,"
                  .":stucountry,"
                  .":stuzipcode);";
       
        $stmt = $conn = new Connection();
        $stmt = $conn->getInstance()->prepare($sql2);
        $stmt->bindParam(':idstuaddress', $lastID, PDO::PARAM_INT);
        $stmt->bindParam(':stuaddress', $this->stuaddress, PDO::PARAM_STR);
        $stmt->bindParam(':stuneighborhood', $this->stuneighborhood, PDO::PARAM_STR);
        $stmt->bindParam(':stucity', $this->stucity, PDO::PARAM_STR);
        $stmt->bindParam(':stustate', $this->stustate, PDO::PARAM_STR);
        $stmt->bindParam(':stucountry', $this->stucountry, PDO::PARAM_STR);
        $stmt->bindParam(':stuzipcode', $this->stuzipcode, PDO::PARAM_STR);
 
        $stmt->execute();
        
        
        $sql3 = "INSERT INTO `myschool`.`stuphones`("
                    ."`idstuPhone`,"
                    ."`stucellphone`,"
                    ."`stuhomephone`,"
                    ."`stujobphone`) "
                 ."VALUES"
                    ."(:idstuPhone,"
                    .":stucellphone,"
                    .":stuhomephone,"
                    .":stujobphone);";
        
        $stmt = $conn = new Connection();
        $stmt = $conn->getInstance()->prepare($sql3);
        $stmt->bindParam(':idstuPhone', $lastID, PDO::PARAM_INT);
        $stmt->bindParam(':stucellphone', $this->stucellphone, PDO::PARAM_STR);
        $stmt->bindParam(':stuhomephone', $this->stuhomephone, PDO::PARAM_STR);
        $stmt->bindParam(':stujobphone', $this->stujobphone, PDO::PARAM_STR);
        
        $stmt->execute();
        
       
        $sql4 = "INSERT INTO `myschool`.`stusocial_network`("
                    ."`idstuSN`,"
                    ."`stutwitter`,"
                    ."`stuwhatsapp`,"
                    ."`stufacebook`) "
                ."VALUES "
                    ."(:idstuSN,"
                    .":stutwitter,"
                    .":stuwhatsapp,"
                    .":stufacebook);";
                              
            $stmt = $conn = new Connection();
            $stmt = $conn->getInstance()->prepare($sql4);
            $stmt->bindParam(':idstuSN', $lastID, PDO::PARAM_INT);
            $stmt->bindParam(':stutwitter', $this->stutwitter, PDO::PARAM_STR);
            $stmt->bindParam(':stuwhatsapp', $this->stuwhatsapp, PDO::PARAM_STR);
            $stmt->bindParam(':stufacebook', $this->stufacebook, PDO::PARAM_STR);
            
            $stmt->execute();
        
    }

    /** Function does a update into studant. */
    public function update()
    {
        $sql ="UPDATE school SET `myschool`.`studant`("
                 ."`stuenrolment`= :stuenrolment,"
                 ."`stuname`= :stuname,"
                 ."`stuage`= :stuage,"
                 ."`stuaddress`= :stuaddress,"
                 ."`stuneighborhood`= :stuneighborhood,"
                 ."`stucity`= :stucity,"
                 ."`stustate`= :stustate,"
                 ."`stucountry`= :stucountry,"
                 ."`stuzipcode`= :stuzipcode,"
                 ."`stusponsor`= :stusponsor) "
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

    /**
     * Function does a reade from studant.
     */
    public function read()
    {
        $sql = "SELECT " 
                    . "s.`idStudent`," 
                    . "s.`stuenrolment`," 
                    . "s.`stuname`," 
                    . "s.`stuage`," 
                    . "s.`stuDateofBirth`," 
                    . "s.`status`," 
                    . "a.`idstuaddress`," 
                    . "a.`stuaddress`," 
                    . "a.`stuneighborhood`," 
                    . "a.`stucity`," 
                    . "a.`stustate`," 
                    . "a.`stucountry`," 
                    . "a.`stuzipcode`," 
                    . "p.`idstuPhone`, " 
                    . "p.`stucellphone`," 
                    . "p.`stuhomephone`," 
                    . "p.`stujobphone`, " 
                    . "e.`idstuemail`," 
                    . "e.`stuemail1`," 
                    . "e.`stuemail2`, " 
                    . "n.`idstuSN`," 
                    . "n.`stutwitter`,"
                    . "n.`stuwhatsapp`,"
                    . "n.`stufacebook` " 
            ."FROM "
                ."myschool.`student` AS s "
                ."JOIN `myschool`.`stuaddress` AS a "
                    ."ON s.`idstudent` = a.`idstuaddress` "
                ."JOIN  `myschool`.`stuphones` AS p "
                    ."ON a.`idstuaddress` = p.`idstuphone` "
                ."JOIN  `myschool`.`stuemail` AS e "
                    ."ON p.idstuphone = e.`idstuEmail` "
                ."JOIN  `myschool`.`stusocial_network` AS n "
                    ."ON e.`idstuEmail` = n.`idstuSN`;";

        $stmt = $conn = new Connection();
        $stmt = $conn->getInstance()->prepare($sql);
        if ($stmt->execute()){
            while($raw= $stmt->fetch(pdo::FETCH_ASSOC)) { 
                 $this->setIdStudent($raw['idStudent']);
                 $this->setStuenrolment($raw['stuenrolment']);
                 $this->setStuname($raw['stuname']);
                 $this->setStuage($raw['stuage']);    
                 $this->setStuDateofBirth($raw['stuDateofBirth']);
                 $this->setStatus($raw['status']);
                 $this->setStuaddress($raw['idstuaddress']);
                 $this->setStuneighborhood($raw['stuneighborhood']);
                 $this->setStucity($raw['stucity']);
                 $this->setStustate($raw['stustate']);
                 $this->setStucountry($raw['stucountry']);
                 $this->setStuzipcode($raw['stuzipcode']);
                 $this->setIdstuPhone($raw['idstuPhone']);
                 $this->setStucellphone($raw['stucellphone']);
                 $this->setStuHomephone($raw['stuhomephone']);
                 $this->setStujobphone($raw['stujobphone']);
                 $this->setIdstuEmail($raw['idstuemail']);
                 $this->setStuemail1($raw['stuemail1']);
                 $this->setStuemail2($raw['stuemail1']);
                 $this->setIdstuSN($raw['idstuSN']);
                 $this->setStutwitter($raw['stutwitter']);
                 $this->setStuwhatsapp($raw['stuwhatsapp']);
                 $this->setStufacebook($raw['stufacebook']);
            }
        }else {
            echo "Erro: Não foi possível recuperar os dados do Aluno do banco de dados";
        }
    }

    /** Function does a delete into studant. */
    public function delete()
    {
        $sql = "DELETE FROM `myschool`.student WHERE stuenrolment =  :stuenrolment;";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':stuenrolment', $_POST['stuenrolment'], PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * Function does a read by id from studant.
     */
    public function readByid($id)
    {
        $sql = "SELECT " 
                ."s.`idStudent`," 
                ."s.`stuenrolment`," 
                ."s.`stuname`," 
                ."s.`stuage`," 
                ."s.`stuDateofBirth`,"
                ."s.`status`,"
                ."a.`idstuaddress`," 
                ."a.`stuaddress`," 
                ."a.`stuneighborhood`," 
                ."a.`stucity`," 
                ."a.`stustate`," 
                ."a.`stucountry`," 
                ."a.`stuzipCode`," 
                ."p.`idstuphone`, " 
                ."p.`stucellphone`," 
                ."p.`stuhomephone`," 
                ."p.`stujobphone`, " 
                ."e.`idstuemail`," 
                ."e.`stuemail1`," 
                ."e.`stuemail2`, " 
                ."n.`idstuSN`," 
                ."n.`stutwitter`,"
                ."n.`stuwhatsapp`,"
                ."n.`stufacebook` " 
            ."FROM "
                    ."student AS s " 
                    ."JOIN `stuaddress` AS a " 
                        ."ON s.`idstudent` = a.`idstuaddress` " 
                    ."JOIN `stuphones` AS p " 
                        ."ON a.`idstuaddress` = p.`idstuphone` " 
                    ."JOIN `stuemail` AS e " 
                        . "ON p.idstuphone = e.`idstuEmail` " 
                    ."JOIN `stusocial_network` AS n " 
                        ."ON e.`idstuEmail` = n.`idstuSN` " 
             ."WHERE s.idstudent = :id;";
        
        $stmt = $conn = new Connection();
        $stmt = $conn->getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            while ($raw=$stmt->fetchAll(pdo::FETCH_OBJ)) {
                
                $this->setStuenrolment($raw[0]->stuenrolment);
                $this->setStuname($raw[0]->stuname);
                $this->setStuage($raw[0]->stuage);
                $this->setStuDateofBirth($raw[0]->stuDateofBirth);
                $this->setStatus($raw[0]->status);
                $this->setStuaddress($raw[0]->stuaddress);
                $this->setStuneighborhood($raw[0]->stuneighborhood);
                $this->setStucity($raw[0]->stucity);
                $this->setStustate($raw[0]->stustate);
                $this->setStucountry($raw[0]->stucountry);
                $this->setStuzipcode($raw[0]->stuzipCode);
                $this->setIdstuPhone($raw[0]->idstuPhone);
                $this->setCellphone($raw[0]->cellphone);
                $this->setHome($raw[0]->home);
                $this->setJob($raw[0]->job);
                $this->setIdstuEmail($raw[0]->idstuemail);
                $this->setEmail1($raw[0]->email1);
                $this->setEmail2($raw[0]->email2);
                $this->setIdstuSN($raw[0]->idstuSN);
                $this->setTwitter($raw[0]->twitter);
                $this->setWhatsapp($raw[0]->whatsapp);
                $this->setFacebook($raw[0]->facebook);
            }
        } else {
            echo "Erro: Não foi possível recuperar os dados do Aluno do banco de dados";
                                                                                                                                                        }
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
    public function getIdstuEmail()
    {
        return $this->idstuEmail;
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
    public function getIdstuPhone()
    {
        return $this->idstuPhone;
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
}