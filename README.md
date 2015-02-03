# PhonebookPlus

Another Phonebook sharing apps plus plus

## Demo 

- Url : http://udock.cloudapp.net:8000/
- User: admin
- password: admin123

## The  stack

- Bootstrap frontend via  Bower package manager.
- PHP Codeigniter backend framework with integrated Smarty templating engine, Hybrid_Auth library and Doctrin ORM via PHP Composer.
- Mysql database persistent data layer via Doctrin
- Docker container isolated environment deployed with Fig on Azure cloud

## Features

- User Authentication and Authorization

  It should have a login with username and password so the user can access the main user interface.
  
- Protected Area

  Once the user is logged in you will need to have a logout button where he can go out of the protected area.

- Add Record

  There should also be an option to add new records in the phone book which will contain: Name, Phone number, Date of adding, Additional Notes'
  
- Manage phonebook',
  
  We need to have an option to edit/delete existing records in the phone book.
  
- Pagination
  
  It needs to have a pagination for the records which are more than 10 on page
  
- Search

  Based on name

## Custom rules / Beta release limitation

- Run on developemnt mode
- Can only search for based on exact name
- Some weird unresolved CI pagination behaviour
 

## Todo
- Add search term other than name (email, date added, note)
- Fixing pagination weird behaviour
	 
