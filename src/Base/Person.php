<?php
namespace MrPrompt\ShipmentCommon\Base;

use DateTime;

/**
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class Person
{
    /**
     * @var string
     */
    private $name = '';

    /**
     * @var Document
     */
    private $document;

    /**
     * @var Email
     */
    private $email;

    /**
     * @var Phone
     */
    private $cellPhone;

    /**
     * @var Phone
     */
    private $homePhone;

    /**
     * @var Phone
     */
    private $homePhoneSecondary;

    /**
     *
     * @var string
     */
    private $fatherName = '';

    /**
     *
     * @var string
     */
    private $motherName = '';

    /**
     * Person type
     *
     * F = Física
     * J = Jurídica
     *
     * @var string
     */
    private $person = 'F';

    /**
     * Salaried situation
     *
     * A = active
     * I = inactive
     */
    private $salaried = 'A';

    /**
     * Birth
     *
     * @var DateTime
     */
    private $birth;

    /**
     * Address
     *
     * @var Address
     */
    private $address;

    /**
     * @var int
     */
    private $code;

    /**
     * Constructor
     *
     * @param string $person
     * @param string $salaried
     * @param DateTime $birth
     * @param Document $document
     * @param Address $address
     * @param Email $email
     * @param int $code
     */
    public function __construct(
        string $person = 'F', 
        string $salaried = 'A', 
        DateTime $birth = null, 
        Document $document = null, 
        Address $address = null,
        Email $email = null,
        int $code = 0
    ) {
        $this->person   = $person;
        $this->salaried = $address;
        $this->birth    = $birth ?? new DateTime();
        $this->document = $document ?? new Document();
        $this->address  = $address ?? new Address();
        $this->email    = $email ?? new Email();
        $this->code = $code;
    }

    /**
     * @return Document
     */
    public function getDocument(): Document
    {
        return $this->document;
    }

    /**
     * @param Document $document
     */
    public function setDocument(Document $document)
    {
        $this->document = $document;
    }

    /**
     * @return Phone
     */
    public function getHomePhone(): Phone
    {
        return $this->homePhone;
    }

    /**
     * @param Phone $homePhone
     */
    public function setHomePhone(Phone $homePhone)
    {
        $this->homePhone = $homePhone;
    }

    /**
     * @return Phone
     */
    public function getHomePhoneSecondary(): Phone
    {
        return $this->homePhoneSecondary;
    }

    /**
     * @param Phone $homePhone
     */
    public function setHomePhoneSecondary(Phone $homePhone)
    {
        $this->homePhoneSecondary = $homePhone;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @return Phone
     */
    public function getCellPhone(): Phone
    {
        return $this->cellPhone;
    }

    /**
     * @param Phone $cellPhone
     */
    public function setCellPhone(Phone $cellPhone)
    {
        $this->cellPhone = $cellPhone;
    }

    /**
     * @return the $fatherName
     */
    public function getFatherName(): string
    {
        return $this->fatherName;
    }

    /**
     * @param string $fatherName
     */
    public function setFatherName(string $fatherName)
    {
        $this->fatherName = $fatherName;
    }

    /**
     * @return the $motherName
     */
    public function getMotherName(): string
    {
        return $this->motherName;
    }

    /**
     * @param string $motherName
     */
    public function setMotherName(string $motherName)
    {
        $this->motherName = $motherName;
    }

    /**
     * @return the $person
     */
    public function getPerson(): string
    {
        return $this->person;
    }

    /**
     * @param string $person
     */
    public function setPerson(string $person = 'F')
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getSalaried(): string
    {
        return $this->salaried;
    }

    /**
     * @param mixed $salaried
     */
    public function setSalaried(string $salaried = 'A')
    {
        $this->salaried = $salaried;
    }

    /**
     * @return DateTime
     */
    public function getBirth(): DateTime
    {
        return $this->birth;
    }

    /**
     * @param DateTime $birth
     */
    public function setBirth(DateTime $birth)
    {
        $this->birth = $birth;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return void
     */
    public function setCode(int $code)
    {
        $this->code = $code;
    }
}
