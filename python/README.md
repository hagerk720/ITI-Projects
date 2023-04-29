# Lab 2

This lab involves creating several classes related to an employee management system. The classes are:

## Employee

This class represents an individual employee and has the following methods:

| Method                  | Description                                                      |
|-------------------------|------------------------------------------------------------------|
| `transfer(new_dept)` | Moves the employee to a new department. |
| `fire(employee_id)`                | Removes the employee from the system.                            |
| `show_all_employees()`  | Displays a list of all employees in the system.                  |
| `print_employees(rows)`     | Prints out details of the employee.                              |


## Manager

This class represents a manager which inherits from class employee and has the following methods :

| Method                  | Description                                                      |
|-------------------------|------------------------------------------------------------------|
| `show_all_employees()`  | Displays a list of all employees in the system.                  |
| `print_employees(rows)`     | Prints out details of the employee.                              |


## DBHandler

This class handles interactions with the database and has the following methods:

| Method                                    | Description                                                       |
|-------------------------------------------|-------------------------------------------------------------------|
| `connect()`                               | Establishes a connection to the database.                         |
| `disconnect()`                            | Closes the connection to the database.                            |
| `create_table()`                          | Creates a table for storing employee information.                 |
| `insert_employee(employee)`              | Inserts a new employee into the database.                         |
| `update_employee_department(employee_id, new_department)` | Updates the department of an existing employee. |
| `delete_employee(employee_id)`            | Deletes an employee from the database.                             |
| `get_all()`                               | Retrieves all employee records from the database.                 |


## App

This class represents the main application and has the following methods:

| Method                  | Description                                                      |
|-------------------------|------------------------------------------------------------------|
| `run()`                 | Starts the application.                                          |
| `add_employee()` | Adds a new employee to the system.                                |
| `list_employees()`       | Lists all employees currently in the system.                     |
| `fire_employee()` | Fires an employee from the system.                             |
| `quit_program()`         | Exits the application.   

TO RUN APPLICATION 
``` 
run main.py script
``` 

