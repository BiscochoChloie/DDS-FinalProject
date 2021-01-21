<?php

    namespace App\Http\Controllers;
    use App\Services\Payroll1Service;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response; 
   // use App\Models\User;
    use App\Traits\ApiResponser;
    
    

Class Payroll2Controller extends Controller {
    use ApiResponser;

    /**
    *The service to consume the Payroll1 Microservice
    *@var \Payroll2Service
    */
    public $payroll2Service;
    /**
    *Create a new controller instance
    *@return void
    */

    public function __construct(Payroll2Service $payroll2Service){
        $this->payroll2Service = $payroll2Service;
    }

    /**
    *Return the list of users
    *@return Illuminate\Http\Response
    */

    public function index()
    {
        return $this->successResponse($this->payroll2Service->obtainPayrolls2());
    }
					

    public function create(Request $request ){
        return $this->successResponse($this->payroll2Service->createPayroll2($request->all(), Response::HTTP_CREATED));
    }

    public function read($id)
    {
        return $this->successResponse($this->payroll2Service->obtainPayroll2($id)); 
    }

    public function update(Request $request, $id)
    {
        return $this->successResponse($this->payroll2Service->editPayroll2($request->all(), $id));
    }

    public function delete($id)
    {
        return $this->successResponse($this->payroll2Service->deletePayroll2($id));
    }
}