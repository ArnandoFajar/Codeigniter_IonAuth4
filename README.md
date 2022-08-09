# CodeIgniter 4 with Ion Auth 4

## Fitur

1. Admin & Member Account
2. Login
3. Register with verification Email
4. Forgot Password
5. Admin can management user such as : create account, Edit, Update, delete User
6. Management Group User


## How To Active Verification Email

you can search file App/ThirdParty/IonAuth/Config/IonAuth.php

public $useCiEmail  = true; // Send Email using the builtin CI email class, if false it will return the code and the identity

public $emailConfig = [ <br>
  'mailType' => 'html', <br>
  'protocol' => 'smtp', <br>
  'smtp_host' => 'mail.website.com', <br>
  'smtp_port' => xxx, <br>
  'smtp_user' => 'admin@website.id', <br>
  'smtp_pass' => 'your Password Email', <br>
];<br>

Modification in $emailConfig to smtp your website.

## How to nonaktifkan verification Email 

public $emailActivation          = true;               // Email Activation for registration<br>
you can search file App/ThirdParty/IonAuth/Config/IonAuth.php in line 155, change value true to false.

