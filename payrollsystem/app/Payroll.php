<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payroll extends Model
{
    use SoftDeletes;
	
	protected $dates = ['deleted_at'];
	
	protected $fillable=['employee_id','over_time','hours','rate','deduction','total','total1'];
	
	
	public function employee(){
		return $this->belongsTo('App\Employee');
	}
	
	public function grossPay(){
		$calc = 0;
		if($this->employee->full_time && !$this->over_time){
			return $this->gross = $this->employee->role->salary;
		}
		if($this->employee->full_time && $this->over_time){
			$calc = $this->hours * $this->rate;
			return $this->gross = $calc + $this->employee->role->salary;
		}
		if($this->over_time || !$this->full_time){
			$calc = $this->hours * $this->rate;
			return $this->gross = $calc;
		}
		return $this->gross = 0;
	}

	public function netPay(){
		//return $this->netpay = $gross - $this->deduction;
		$calc = 0;
		if($this->employee->full_time && !$this->over_time){
			return $this->netpay = $this->gross - $this->deduction;
		}
		if($this->employee->full_time && $this->over_time){
			return $this->netpay = $this->gross - $this->deduction;
		}
	
		if($this->over_time || !$this->full_time){
			return $this->netpay = $this->gross - $this->deduction;
	
		}
		return $this->netpay = 0;
	}
	
	
}
