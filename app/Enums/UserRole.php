<?php

namespace App\Enums; // Define the namespace for your Enum.

enum UserRole: string // This defines an Enum named "UserRole" with a string type.
{
   // Enum value for regular users. The "User" case has the value 'user'.
   case User = 'user'; 

   // Enum value for administrators. The "Admin" case has the value 'admin'.
   case Admin = 'admin'; 
}