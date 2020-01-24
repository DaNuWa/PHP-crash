<?php
 class Customer{
	 public $id=1;
	public $name;
	public $email;
	public $balance;
	 /*
	 access modifier
	 1)public-can access outside the class
	 2)private-can access only inside the class
	 3)protected-can access within extended classes
	 */
	 public function __construct($id,$name,$email,$balance)
	 {
		 $this->id=$id;
		 $this->name=$name;
		 $this->email=$email;
		 $this->balance=$balance;
	 }
	 public function getCustomer($id)
	 {
		 $this->id=$id;/*same as this.id in java*/
		 return 'customer name';
	 }
	 public function getEmail()
	 {
		 return $this->email;
	 }
 }
// $customer=new Customer(1,"yohan","yohan7788@gmail.com",5000); /*Class object*/
 //echo $customer->name;
 
 class Subscriber extends Customer{
	 public $plan;
	 
	  public function __construct($id,$name,$email,$balance,$plan)
	 {
		 parent::__construct($id,$name,$email,$balance);
		 $this->plan=$plan;
		 
	 } 
	 public function getEmail()
	 {
		 return $this->email;
	 }
	 
	
 } 
	 $subscriber=new Subscriber(1,"yohan","yohan7788@gmail.com",5000,"savings");
	 echo $subscriber->getEmail();
	 
?>