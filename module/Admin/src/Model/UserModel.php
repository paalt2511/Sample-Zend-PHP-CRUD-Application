<?php

namespace Admin\Model;

use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;
use Admin\Entity\User;

class UserModel {

    private $entityManager;
    private $entityConnection;

    /**
     * User email.
     * @var string 
     */
    private $email;

    /**
     * Password
     * @var string 
     */
    private $password;

    public function __construct($entityConnection, $entityManager) {

        $this->entityConnection = $entityConnection;
        $this->entityManager = $entityManager;
    }

    /**
     * Lis of all Users in accending order id
     */
    public function list() {
        $Obj = $this->entityManager->getRepository(User::class)->findAll(['id' => 'ASC']);
        return $Obj;
    }
    public function create($data) {
        $user = new User();
        $user->setFname($data->fname);
        $user->setLname($data->lname);
        $user->setEmail($data->email);
        $user->setPassword($data->password);
        $user->setMobileNo($data->mobile_no);
        $user->setAddressLine1($data->address_line_1);
        $user->setAddressLine2($data->address_line_2);
        $user->setStatus($data->status);
        $user->setCreatedAt(new \DateTime("now"));
        $user->setUpdatedAt(new \DateTime("now"));
        // Add the entity to entity manager.
        $this->entityManager->persist($user);
        // Apply changes to database.
        $this->entityManager->flush();
        return $user->getId();
    }

    /**
     * Update user regarding to ID
     */
    public function update($data) {
        $user = $this->entityManager->getRepository(User::class)->findOneById($data->id);
        $user->setFname($data->fname);
        $user->setLname($data->lname);
        $user->setEmail($data->email);
        $user->setPassword($data->password);
        $user->setMobileNo($data->mobile_no);
        $user->setAddressLine1($data->address_line_1);
        $user->setAddressLine2($data->address_line_2);
        $user->setStatus($data->status);
        $user->setUpdatedAt(new \DateTime("now"));
        // Apply changes to database.
        $this->entityManager->flush();
        return $user->getId();
    }

    /**
     * Find User By ID
     */
    public function findById($id) {
        $data = $this->entityManager->getRepository(User::class)->findOneById($id);
        if($data === null)
           return null;
        return [
            'id' => $data->getId(),
            'fname' => $data->getFname(),
            'lname' => $data->getLname(),
            'email' => $data->getEmail(),
            'password' => $data->getPassword(),
            'mobile_no' => $data->getMobileNo(),
            'address_line_1' => $data->getAddressLine1(),
            'address_line_2' => $data->getAddressLine2(),
            'status' => $data->getStatus()
        ];
    }

    /**
     * Remove user on subject to ID
     */
    public function remove($id) {
        $user = $this->entityManager->getRepository(User::class)->findOneById($id);
        $this->entityManager->remove($user);
        $this->entityManager->flush();
    }

    // Login process

    /**
     * Sets user email.     
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * Sets password.     
     */
    public function setPassword($password) {
        $this->password = (string) $password;
    }

    /**
     * Performs an authentication attempt.
     */
    public function authenticate() {
        // Check the database if there is a user with such email.
        $user = $this->entityManager->getRepository(User::class)
                ->findOneByEmail($this->email);

        // If there is no such user, return 'Identity Not Found' status.
        if ($user == null) {
            return new Result(
                    Result::FAILURE_IDENTITY_NOT_FOUND, null, ['Invalid credentials.']);
        }

        // If the user with such email exists, we need to check if it is active or retired.
        // Do not allow retired users to log in.
//        if ($user->getStatus() == User::STATUS_RETIRED) {
//            return new Result(
//                    Result::FAILURE, null, ['User is retired.']);
//        }

        // Now we need to calculate hash based on user-entered password and compare
        // it with the password hash stored in database.
        //$bcrypt = new Bcrypt();
        $passwordHash = $user->getPassword();
        
        //if ($bcrypt->verify($this->password, $passwordHash)) {
        if (strcmp($this->password, $passwordHash) ==0) {
            // Great! The password hash matches. Return user identity (email) to be
            // saved in session for later use.
            return new Result(
                    Result::SUCCESS, $this->email, ['Authenticated successfully.',$user->getId(),$user]);
        }

        // If password check didn't pass return 'Invalid Credential' failure status.
        return new Result(
                Result::FAILURE_CREDENTIAL_INVALID, null, ['Invalid credentials.']);
    }

}
