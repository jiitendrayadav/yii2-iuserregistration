

Application Developed in Yii2 basic framework


Please folow the step to config website

1) Unzip the file
2) Copy and paste in your root directory.
3) If your application folder like account and you want to install this please follow bellow step

		!) http://localhost/your app folder name  /install
		!!) After this url in first step installation check the file permission
		!!!) In second step you need to fill all information carefully. Please make sure you need enable your internet connection to verify your purchase
		!V) After all verification step your app has been installed and you can check with
					http: or https://your hostname / your app name

If you are not able to verify your self please drop a mail about your issue on envato with your purhase details



Or






Please folow the step to config website 

1) Unzip the file
2) Find out "database" forlder 
3) Create one database and import this file in to the database
4) To set database connection please find out the below file
	
		- app/config/db.php
		
		- find out the below code 
		
			'db' => array(
		            'connectionString' => 'mysql:host=YOUR HOST NAME;dbname=DATABASE NAME',
		            'emulatePrepare' => true,
		            'username' => 'DATABASE USER NAME',
		            'password' => 'DATABASE PASSWORD',
		            'charset' => 'utf8',
		            'tablePrefix' => 'as_',
		     ),
		     
5) Default Username/Password : admin/admin123