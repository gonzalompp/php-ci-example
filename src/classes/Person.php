<?php

class Person {
    private $name;
    private $email;
    private $birthday;

    public function __construct($name, $email, $birthday)
    {
        //validations
        if (!$this->isValidDate($birthday)) {
            throw new InvalidArgumentException(
                sprintf(
                    'The date is not valid'
                )
            );
        }

        $this->name = $name;
        $this->email = $email;
        $this->birthday = new DateTime($birthday);
    }

    private function isValidDate($date) {
        if (strtotime($date) === false) {
            return false;
        } else {
            return true;
        }
    }

    public function getAge() {
        //validations
        if (empty($this->birthday)) {
            throw new InvalidArgumentException(
                sprintf(
                    'The birthday property is empty'
                )
            );
        }

        $today = new DateTime();

        $diff = $today->diff($this->birthday);

        return $diff->y;
    }

    public function getWelcomeMessage() {
        //validations
        if (empty($this->name)) {
            throw new InvalidArgumentException(
                sprintf(
                    'The person dont have a name'
                )
            );
        }

        return "Welcome ".$this->name."!";
    }
}

?>
