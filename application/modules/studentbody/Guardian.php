<?php
namespace modules\studentbody;

use PDO;
use PDOStatement;
use modules\Person;
use dao\Connection;
include_once 'init.php';
include_once 'application/modules/Person.php';

/**
 * @author developer
 *
 * This class is reference about legal guardian of minor students;
 * in portuguese meaning "Responsável legal". 
 * 
 */
class Guardian extends Person
{
    private $guaid=NULL; //RG
    private $guaSsn=NULL; //CPF
    private $guaName=NULL;
    private $guaDateofBirth=NULL;

    
    public function read()
    {
        $sql= "SELECT  "
                ."g.`idGuardian`,"
                ."g.`guaID`,"
                ."g.`guaSSN`,"
                ."g.`guaName`,"
                ."g.`guaDateofBirth`"
               ."FROM "
                 ."guardian;";
        
         $stmt = $conn = new Connection();
         $stmt = $conn->getInstance()->prepare($sql);
         if ($stmt->execute()){
             while($raw= $stmt->fetch(PDO::FETCH_OBJ)) {
                 
                 $this->setGuaid($raw->guaID);
                 $this->setGuaSsn($raw->guaSSN);
                 $this->setGuaName($raw->guaName);
                 $this->setGuaDateofBirth($raw->guaDateofBirth);
                  
             }
         }else {
             echo "Erro: Não foi possível recuperar os dados do Aluno do banco de dados";
         }
    
    }
    
    
    public function post()
    {}
    
    public function update()
    {}
    
    public function delete()
    {}
    /**
     * @return mixed
     */
    public function getGuaid()
    {
        return $this->guaid;
    }

    /**
     * @return mixed
     */
    public function getGuaSsn()
    {
        return $this->guaSsn;
    }

    /**
     * @return mixed
     */
    public function getGuaName()
    {
        return $this->guaName;
    }

    /**
     * @return mixed
     */
    public function getGuaDateofBirth()
    {
        return $this->guaDateofBirth;
    }

    /**
     * @param mixed $guaid
     */
    public function setGuaid($guaid)
    {
        $this->guaid = $guaid;
    }

    /**
     * @param mixed $guaSsn
     */
    public function setGuaSsn($guaSsn)
    {
        $this->guaSsn = $guaSsn;
    }

    /**
     * @param mixed $guaName
     */
    public function setGuaName($guaName)
    {
        $this->guaName = $guaName;
    }

    /**
     * @param mixed $guaDateofBirth
     */
    public function setGuaDateofBirth($guaDateofBirth)
    {
        $this->guaDateofBirth = $guaDateofBirth;
    }

    
}