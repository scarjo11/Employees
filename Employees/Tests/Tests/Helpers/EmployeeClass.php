<?php
namespace Employees\Tests\Tests\Helpers;
use Entities\Domain\Entities\Builders\Factories\EntityBuilderFactory;
use Uuids\Domain\Uuids\Uuid;
use Strings\Domain\Strings\String;
use DateTimes\Domain\DateTimes\DateTime;
use Integers\Domain\Integers\Integer;

final class EmployeeClass {
    private $entityBuilderFactory;
    private $uuid;
    private $firstName;
    private $lastName;
    private $number;
    private $createdOn;
    private $lastUpdatedOn;
    public function __construct(EntityBuilderFactory $entityBuilderFactory, Uuid $uuid, String $firstName, String $lastName, Integer $number, DateTime $createdOn, DateTime $lastUpdatedOn) {
        $this->entityBuilderFactory = $entityBuilderFactory;
        $this->uuid = $uuid;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->number = $number;
        $this->createdOn = $createdOn;
        $this->lastUpdatedOn = $lastUpdatedOn;
    }
    
    public function build() {
        return $this->entityBuilderFactory->create()
                                          ->create()
                                          ->withUuid($this->uuid)
                                          ->withFirstName($this->firstName)
                                          ->withLastName($this->lastName)
                                          ->withNumber($this->number)
                                          ->createdOn($this->createdOn)
                                          ->now();       
    }
    
    public function build_lastUpdatedOn() {
        return $this->entityBuilderFactory->create()
                                          ->create()
                                          ->withUuid($this->uuid)
                                          ->withFirstName($this->firstName)
                                          ->withLastName($this->lastName)
                                          ->withNumber($this->number)
                                          ->createdOn($this->createdOn)
                                          ->lastUpdatedOn($this->lastUpdatedOn)
                                          ->now();
    }
    
}
