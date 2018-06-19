<?php
class Constants {

	public static $passwordsDoNotMatch = "Your passwords don't match"; //static means you dont have to make an instance of the class first.
	public static $passwordNotAlphaNumeric = "Your passwords can only contain letters and numbers";
	public static $passwordCharacters = "Your password must be between 5 and 30 characters";
	public static $emailInvalid = "Email is invalid";
	public static $emailsDoNotMatch = "Your emails don't match";
	public static $lastNameCharacters = "Your last name must be between 2 and 25 characters";
	public static $firstNameCharacters = "Your first name must be between 2 and 25 characters";
	public static $userNameCharacters = "Your username must be between 5 and 25 characters";
	public static $usernameTaken = "This username has already been taken";
	public static $emailTaken = "This email has already been used";
	//login
	public static $loginFailed = "Your username or pasword was incorrect";

}

?>