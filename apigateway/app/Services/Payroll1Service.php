<?php
						
namespace App\Services; 
						
use App\Traits\ConsumesExternalService; 
						
class Payroll1Service{    
						
use ConsumesExternalService;
						    
	/**
	*The base uri to consume the Payroll1Service
	*@var string
	*/
						
	public $baseUri;    

	public $secret;
	  
	public function __construct()  
	{
	$this->baseUri = config('services.payroll1.base_uri');
	
	$this->secret = config('services.payroll1.secret');
	}
						
	public function obtainPayrolls1()
	{
		return $this->performRequest('GET','/payroll'); 
	}

	public function createPayroll1($data)
	{
		return $this->performRequest('POST', '/payroll', $data);
	}

	public function obtainPayroll1($id)
	{
		return $this->performRequest('GET', "/payroll/{$id}");
	}

	public function editPayroll1($data, $id)
	{
		return $this->performRequest('PUT', "/payroll/{$id}", $data);
	}

	public function deletePayroll1($id)
	{
		return $this->performRequest('delete', "/payroll/{$id}");
    }



}
