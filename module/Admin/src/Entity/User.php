<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=100, nullable=false)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=100, nullable=false)
     */
    private $lname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=150, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="mobile_no", type="bigint", nullable=false)
     */
    private $mobileNo;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_1", type="string", length=150, nullable=false)
     */
    private $addressLine1;

    /**
     * @var string
     *
     * @ORM\Column(name="address_line_2", type="string", length=150, nullable=true)
     */
    private $addressLine2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=false)
     */
    private $status = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fname
     *
     * @param string $fname
     *
     * @return User
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     *
     * @return User
     */
    public function setLname($lname)
    {
        $this->lname = $lname;

        return $this;
    }

    /**
     * Get lname
     *
     * @return string
     */
    public function getLname()
    {
        return $this->lname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set mobileNo
     *
     * @param integer $mobileNo
     *
     * @return User
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    /**
     * Get mobileNo
     *
     * @return integer
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * Set addressLine1
     *
     * @param string $addressLine1
     *
     * @return User
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Get addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Set addressLine2
     *
     * @param string $addressLine2
     *
     * @return User
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Get addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
