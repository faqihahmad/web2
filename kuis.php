<?php

class Employee {
	private $nip;
	private $name;
	private $npwp;
	private $jabatan;
	private $department;
	private $gender;

	public function __construct($_nip, $_name)
	{
		$this->nip = $_nip;
		$this->name = $_name;
	}

	public function setNPWP($value)
	{
		$this->npwp = $value;
	}

	public function setJabatan($value)
	{
		$this->jabatan = $value;
	}

	public function setDepartment($value)
	{
		$this->department = $value;
	}

	public function setGender($value)
	{
		$this->gender = $value;
	}

	public function getNip()
	{
		return $this->nip;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getNPWP()
	{
		return $this->npwp;
	}

	public function getJabatan()
	{
		return $this->jabatan;
	}

	public function getDepartment()
	{
		return $this->department;
	}

	public function getGender()
	{
		return $this->gender;
	}

	// Behavi
	public function clockIn($waktu)
	{
		echo 'Anda masuk pada jam ' . $waktu;
	} 

	public function clockOut($waktu)
	{
		echo 'Anda pulang jam ' . $waktu;
	}
}

$emp = new Employee('114071172','Adnan Tawaffani');
$emp->setNPWP('147852369');
$emp->setJabatan('Direktur');
$emp->setDepartment('Keuangan');
$emp->setGender('Laki-laki');

echo $emp->getNIP();
echo '<br>';
echo $emp->getName();
echo '<br>';
echo $emp->getNPWP();
echo '<br>';
echo $emp->getJabatan();
echo '<br>';
echo $emp->getDepartment();
echo '<br>';
echo $emp->getGender();
echo '<br>';
$emp->clockIn('07:30');
echo '<br>';
$emp->clockOut('16:25');