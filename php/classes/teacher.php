<?php
/**
 * Write online quizzes and/or test for socrative.com on a teacher account
 *
 * teacher logs in, creates a quiz, and names it
 *
 * @author Jeff Saul <scaleup13@gmail.com
 **/
class Teacher {
	/**
	 * id for teacher is an unsigned integer; this is the primary key
	 * @var integer $teacherId
	 **/
	private $teacherId;
	/**
	 * This is the teacher's username
	 * @var string $teacherName
	 **/
	private $teacherName;
	/**
	 * This is the 64 byte salt variable
	 * @var string
	 **/
	private $salt;
	/**
	 * This is the 128 byte hash variable
	 * @var string
	 **/
	private $hash;
	/**
	 * This is the classroom name
	 * @var string
	 * => can room be Public?  JS
	 **/
	private $room;

	/**
	 * Constructor for this teacher.  This set of methods will check the input
	 * data for the teacher
	 *
	 * @param mixed $newTeacherId - id of this Teacher or null if a new Teacher
	 * @param string $newTeacherName - string containing the teacher's name
	 * @param string $newSalt - string containing salt
	 * @param string $newHash - string containing hash
	 * @param string $newRoom - string containing the classroom name
	 * @throws InvalidArgumentException if data types are not valid
	 * @throws RangeException if data values are out of bounds (e.g., strings too long, negative integers)
	 * @throws Exception if some other exception is thrown@param mixed $newTeacherId id of this Teacher or null if a new Teacher
	 **/
public function __construct($newTeacherId, $newTeacherName, $newSalt, $newHash, $newRoom = null) {
	try {
			$this->setTeacherId($newTeacherId);
			$this->setTeacherName($newTeacherName);
			$this->setSalt($newSalt);
			$this->setHash($newHash);
			$this->setRoom($newRoom);
	} catch(InvalidArgumentException $invalidArgument) {
			// rethrow the exception to the caller
			throw(new InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
	} catch(RangeException $range) {
			// rethrow the exception to the caller
			throw(new RangeException($range->getMessage(), 0, $range));
	} catch(Exception $exception) {
			// rethrow generic exception
			throw(new Exception($exception->getMessage(), 0, $exception));
	}
}

	/**
	 * These are the data validation accessors and mutators for teacher
	 **/

	/**
	 * accessor method for teacher id
	 *
	 * @return mixed value of teacher id
	 **/
	public function getTeacherId() {
		return ($this->teacherId);
	}

	/**
	 * mutator method for teacher id
	 *
	 * @param mixed $newTeacherId new value of teacher id
	 * @throws InvalidArgumentException if newTeacherId is not an integer
	 * @throws RangeException if $newTeacherId is not positive
	 **/
	public function setTeacherId($newTeacherId) {
		// base case:  if the teacher id is null, this is a new teacher without a mySQL assigned id at this time
		if($newTeacherId === null) {
			$this->teacherId = null;
			return;
		}

		// verify the teacher id is valid
		$newTeacherId = filter_var($newTeacherId, FILTER_VALIdATE_INT);
		if($newTeacherId === false) {
			throw(new InvalidArgumentException("teacher id is not a valid integer"));
		}

		// verify the teacher id is positive
		if($newTeacherId <= 0) {
			throw(new RangeException("teacher id is not positive"));
		}

		//convert and store the teacher id
		$this->teacherId = intval($newTeacherId);
	}

	/**
	 * accessor method for teacher name
	 *
	 * @return string value of teacher name
	 **/
	public function getTeacherName() {
		return ($this->teacherName);
	}

	/**
	 * mutator method for teacher name
	 *
	 * @param string $newTeacherName new value of teacher name
	 * @throws InvalidArgumentException if $newTeacherName is not a string or insecure
	 * @throws RangeException if $newTeacherName is > 32 characters
	 **/
	public function setTeacherName($newTeacherName) {
		// verify the teacher name is secure
		$newTeacherName = trim($newTeacherName);
		$newTeacherName = filter_var($newTeacherName, FILTER_SANITIZE_STRING);
		if(empty($newTeacherName) === true) {
			throw(new InvalidArgumentException("teacher name is empty or insecure"));
		}

		// verify the teacher name will fit in the database
		If(strlen($newTeacherName) > 32) {
			throw(new RangeException("teacher name too large"));
		}

		// store teacher name
		$this->teacherName = $newTeacherName;
	}

	/**
	 * accessor method for salt
	 *
	 * @return string value of salt
	 **/
	public function getSalt() {
		return ($this->salt);
	}

	/**
	 * mutator method for salt
	 *
	 * @param string $newSalt - new value of salt
	 * @throws InvalidArgumentException if $newSalt is not a string or insecure
	 * @throws RangeException if $newSalt is not 64 characters in length
	 **/
	public function setSalt($newSalt) {
		// verify that salt is secure
		$newSalt = trim($newSalt);
		$newSalt = filter_var($newSalt, FILTER_SANITIZE_STRING);
		if(empty($newSalt) === true) {
			throw(new InvalidArgumentException("salt is empty or insecure"));
		}

		// verify the salt will fit in the database
		if(strlen($newSalt) !== 64) {
			throw(new RangeException("salt is not the right length"));
		}

		// store the salt
		$this->salt = $newSalt;
	}

	/**
	 * accessor method for hash
	 *
	 * @return string value of hash
	 **/
	public function getHash() {
		return ($this->hash);
	}

	/**
	 * mutator method for hash
	 *
	 * @param string $newHash - new value of hash
	 * @throws InvalidArgumentException if $newHash is not a string or insecure
	 * @throws RangeException if $newHash is not 64 characters in length
	 **/
	public function setHash($newHash) {
		// verify that hash is secure
		$newHash = trim($newHash);
		$newHash = filter_var($newHash, FILTER_SANITIZE_STRING);
		if(empty($newHash) === true) {
			throw(new InvalidArgumentException("hash is empty or insecure"));
		}

		// verify the hash will fit in the database
		if(strlen($newHash) !== 128) {
			throw(new RangeException("hash is not the right length"));
		}

		// store the hash
		$this->hash = $newHash;
	}

	/**
	 * accessor method for classroom name
	 *
	 * @return string value of classroom name
	 **/
	public function getRoom() {
		return ($this->room);
	}

/**
 * mutator method for classroom
 *
 * @param string $newRoom new value of classroom
 * @throws InvalidArgumentException if $newRoom is not a string or insecure
 * @throws RangeException if $newRoom is > 32 characters
 **/
public function setRoom($newRoom) {
	// verify the classroom is secure
	$newRoom = trim($newRoom);
	$newRoom = filter_var($newRoom, FILTER_SANITIZE_STRING);
	if(empty($newRoom) === true) {
		throw(new InvalidArgumentException("classroom is empty or insecure"));
	}

	// verify the classroom will fit in the database
	If(strlen($newRoom) > 32) {
		throw(new RangeException("classroom too large"));
	}

	// store classroom
	$this->Room = $newRoom;
}

/**
 * Inserts this Teacher in mySQL
 **/

}