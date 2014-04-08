<?php
namespace Employees\Tests\Helpers;
use UnitTestHelpers\Tests\Helpers\AbstractHelper;
use Employees\Domain\Employees\Employee;
use Uuids\Domain\Uuids\Uuid;
use DateTimes\Domain\DateTimes\DateTime;
use Strings\Domain\Strings\String;
use Booleans\Domain\Booleans\Boolean;
use Integers\Domain\Integers\Integer;

final class EmployeeHelper extends AbstractHelper {
    
    private $employeeMock;
    public function __construct(\PHPUnit_Framework_TestCase $phpunit, Employee $employeeMock) {
        parent::__construct($phpunit);
        $this->employeeMock = $employeeMock;
    }
    
    public function expectsGetFirstName_Success(String $returnedFirstName) {
        
        $this->employeeMock->expects($this->phpunit->once())
                           ->method('getFirstName')
                           ->will($this->phpunit->returnValue($returnedFirstName));
    }
    
    public function expectsGetFirstName_multiple_Success(array $returnedFirstNames) {
        
        $this->employeeMock->expects($this->phpunit->any())
                                ->method('getFirstName')
                                ->will($this->getOnConsecutiveCalls($returnedFirstNames));
        
    }
    
    public function expectsGetLastName_Success(String $returnedLastName) {
        
        $this->employeeMock->expects($this->phpunit->once())
                                ->method('getLastName')
                                ->will($this->phpunit->returnValue($returnedLastName));
        
    }
    
    public function expectsGetLastName_multiple_Success(array $returnedLastNames) {
        
        $this->employeeMock->expects($this->phpunit->any())
                                ->method('getLastName')
                                ->will($this->getOnConsecutiveCalls($returnedLastNames));
        
    }
    
    public function expectsGetNumber_Success(Integer $returnedNumber) {
        
        $this->employeeMock->expects($this->phpunit->once())
                                ->method('getNumber')
                                ->will($this->phpunit->returnValue($returnedNumber));
        
    }
    
    public function expectsGetNumber_multiple_Success(array $returnedNumbers) {
        
        $this->employeeMock->expects($this->phpunit->any())
                                ->method('getNumber')
                                ->will($this->getOnConsecutiveCalls($returnedNumbers));
        
    }
}
