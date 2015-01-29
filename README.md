# PhonebookPlus

Another Phonebook sharing apps plus plus

## Demo 

- Url : http://udock.cloudapp.net:8000/
- User: admin
- password: admin123

## The  stack

- bootstrap frontend
- Mysql database persistent data layer using mongoose
- PHP Codeigniter backend framework with smarty template engine and Doctrin ORM 
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
  
  It needs to have a pagination for the records which are more than 10 on page. tobe improvend using angular
  
- Search

  Next will be implemented using angular for better UI/UX like http://udock.cloudapp.net:9000/phonebook

## Custom rules / Beta release limitation

- Run on developemnt mode
- 'Dem	o' user can't be deleted
- Only admin can manage the phonebook
- Users register or logging using Facebook ot twitter account can not manage the phonebook
 

## Todo
- Angular js integration
- REST API layer
-  run on production mode which is minified and optimized documents and assets
	 
