<?php
/**
 * Created by PhpStorm.
 * User: Terezija
 * Date: 25. 10. 2018.
 * Time: 23:01
 */

class category {

    private $id;
    private $name;
    private $inv_number;
    private $description;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getInvNumber()
    {
        return $this->inv_number;
    }

    /**
     * @param mixed $inv_number
     */
    public function setInvNumber($inv_number)
    {
        $this->inv_number = $inv_number;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


}