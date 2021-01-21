<?php
						
namespace App\Services; 
						
use App\Traits\ConsumesExternalService; 
						
class Payroll2Service{    
						
use ConsumesExternalService;
						    
	/**
	*The base uri to consume the Payroll2Service
	*@var string
	*/
						
	public $baseUri;    

	public $secret;
	  
	public function __construct()  
	{
	$this->baseUri = config('services.payroll2.base_uri');
	
	$this->secret = config('services.payroll2.secret');
	}
					
	public function obtainPayrolls2()
	{
		return $this->performRequest('GET','/payrol2'); 
	}

	public function createPayroll2($data)
	{
		return $this->performRequest('POST', '/payroll', $data);
	}

	public function obtainPayroll2($id)
	{
		return $this->performRequest('GET', "/payroll/{$id}");
	}

	public function editPayroll2($data, $id)
	{
		return $this->performRequest('PUT', "/payroll/{$id}", $data);
	}

	public function deletePayroll2($id)
	{
		return $this->performRequest('delete', "/payroll/{$id}");
    }



}
