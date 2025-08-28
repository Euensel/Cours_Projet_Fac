<?php

/*
$age=17;
try{
    if($age<18)
        throw new Exception("Tu n'es pas majeur");//lève une nouveelle exception 
}

catch(Exception $e)//block général
{
    echo $e->getMessage();
}
*/
class MyExceptionClass extends Exception
{
    public function show_email_error_message()
}
//Formullaire
$email='tom@mail.com';
try{
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        throw new MyExceptionClass('E-mail incorrect');
}
catch(MyExceptionClass $e)
{
    //echo $e->show_email_error_message();
    echo $e->getmessage();
}
