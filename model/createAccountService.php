<?php
class CreateAccountService
{
    private $PDO;
    public function __construct()
    {
        require_once("C:/xampp/htdocs/nigthRagnarok/config/dabatase.php");
        require_once("C:/xampp/htdocs/nigthRagnarok/model/dto/dtoClient.php");
        require_once("C:/xampp/htdocs/nigthRagnarok/model/dto/dtoUser.php");
        $database = new Database();
        $this->PDO = $database->conection();
    }

    public function addUserClient(DtoUser $user)
    {
        $statment = $this->PDO->prepare(
            "INSERT INTO user (userName, password, email, cellphone, typeUser)
                             VALUES (:nameNewUser, :passwordNewUser, :emailAddressNewUser,:cellPhoneNewUser, 'CLIENTE')"
        );

        $nameNewUser = $user->getUsername();
        $passwordNewUser = $user->getPassword();
        $emailAddressNewUser = $user->getEmail();
        $cellPhoneNewUser = $user->getCellphone();

        $statment->bindParam(":nameNewUser", $nameNewUser);
        $statment->bindParam(":passwordNewUser", $passwordNewUser);
        $statment->bindParam(":emailAddressNewUser", $emailAddressNewUser);
        $statment->bindParam(":cellPhoneNewUser", $cellPhoneNewUser);

        return ($statment->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function addClient(DtoClient $client)
    {
        $statment = $this->PDO->prepare(
            "INSERT INTO customer (id, name, address, addressSpecification, userName, typeId)
                VALUES (:idClient, :nameClient, :addressClient, :addressSpecificationClient, :userNameClient, :typeIdClient)"
        );

        $idClient = $client->getId();
        $nameClient = $client->getName();
        $addressClient = $client->getAddress();
        $addressSpecificationClient = $client->getAddressSpecification();
        $userNameClient = $client->getuserName();
        $typeIdClient = $client->getTypeId();

        $statment->bindParam(":idClient", $idClient);
        $statment->bindParam(":nameClient", $nameClient);
        $statment->bindParam(":addressClient", $addressClient);
        $statment->bindParam(":addressSpecificationClient", $addressSpecificationClient);
        $statment->bindParam(":userNameClient", $userNameClient);
        $statment->bindParam(":typeIdClient", $typeIdClient);

        return ($statment->execute()) ? $this->PDO->lastInsertId() : false;
    }
}
