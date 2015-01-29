<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * PdMessage
 *
 * @Table(name="pd_message")
 * @Entity
 */
class PdPbook
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string $email
     *
     * @Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string $phone
     *
     * @Column(name="phone", type="string", length=100, nullable=false)
     */
    private $phone;

    /**
     * @var text $message
     *
     * @Column(name="message", type="text", nullable=false)
     */
    private $note;

    /**
     * @var datetime $time
     *
     * @Column(name="time", type="datetime", nullable=false)
     */
    private $time;


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
     * Set name
     *
     * @param string $name
     * @return PdContact
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * Set userProfile
     *
     * @param DxUserProfile $userProfile
     * @return PdMessage
     */
    public function setUserProfile(\DxUserProfile $userProfile = null)
    {
        $this->userProfile = $userProfile;
        return $this;
    }
    
    /**
     * Get userProfile
     *
     * @return DxUserProfile 
     */
    public function getUserProfile()
    {
        return $this->userProfile;
    }
    
    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return PdContact
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
     * Set phone
     *
     * @param string $phone
     * @return PdContact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * Set note
     *
     * @param text $note
     * @return PdContact
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Get note
     *
     * @return text 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set time
     *
     * @param datetime $time
     * @return PdContact
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * Get time
     *
     * @return datetime 
     */
    public function getTime()
    {
        return $this->time;
    }
}