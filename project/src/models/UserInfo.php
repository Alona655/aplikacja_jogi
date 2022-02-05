<?php

class UserInfo
{
    private $name;
    private $surname;
    private $birthday;
    private $weight;
    private $growth;
    private $exercises;
    private $sex;

    public function __construct(string $name, string $surname, string $birthday, string $weight, string $growth, string $exercises, string $sex)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->weight = $weight;
        $this->growth = $growth;
        $this->exercises = $exercises;
        $this->sex = $sex;

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
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @param string $weight
     */
    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getGrowth(): string
    {
        return $this->growth;
    }

    /**
     * @param string $growth
     */
    public function setGrowth(string $growth): void
    {
        $this->growth = $growth;
    }

    /**
     * @return string
     */
    public function getExercises(): string
    {
        return $this->exercises;
    }

    /**
     * @param string $exercises
     */
    public function setExercises(string $exercises): void
    {
        $this->exercises = $exercises;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }
}