<?php

    namespace App\Http\Controllers;
    use App\Services\Payroll1Service;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response; 
   // use App\Models\User;
    use App\Traits\ApiResponser;
    
    

Class Payroll1Controller extends Controller {
    use ApiResponser;

    /**
    *The service to consume the Payroll1 Microservice
    *@var \Payroll1Service
    */
    public $payroll1Service;
    /**
    *Create a new controller instance
    *@return void
    */

    public function __construct(Payroll1Service $payroll1Service){
        $this->payroll1Service = $payroll1Service;
    }

    /**
    *Return the list of users
    *@return Illuminate\Http\Response
    */

    public function index()
    {
        return $this->successResponse($this->payroll1Service->obtainPayrolls1());
    }
					

    public function create(Request $request ){
        return $this->successResponse($this->payroll1Service->createPayroll1($request->all(), Response::HTTP_CREATED));
    }

    public function read($id)
    {
        return $this->successResponse($this->payroll1Service->obtainPayroll1($id)); 
    }

    public function update(Request $request, $id)
    {
        return $this->successResponse($this->payroll1Service->editPayroll1($request->all(), $id));
    }

    public function delete($id)
    {
        return $this->successResponse($this->payroll1Service->deletePayroll1($id));
    }
}