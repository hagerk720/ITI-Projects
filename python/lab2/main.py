from  employee import Employee
from  manager import Manager
import sys


class App:
    # def __init__(self):

    def run(self):
        while True:
            # print the menu
            print("Menu:")
            print("1. Add new employee")
            print("2. List employees")
            print("3. Fire employee")
            print("4. Quit program")

            # get user input
            choice = input("Enter your choice: ")

            # check if the choice is valid
            if choice == "1":
                self.add_employee()
            elif choice == "2":
                self.list_employees()
            elif choice == "3":
                self.fire_employee()
            elif choice == "4":
                self.quit_program()
            else:
                print("Invalid choice. Please try again.")
    def add_employee(self):
        print("Please insert data:")
        first_name = input("Name: ")
        last_name = input("Last name: ")
        age = int(input("Age: "))
        department = input("Department: ")
        salary = float(input("Salary: "))
        # ask if the employee is a manager
        if input("Is the employee a manager? (y/n): ").lower() == "y":
            managed_department = input("Managed department: ")
            Manager(first_name, last_name, age, department, salary, managed_department)
        else:
            Employee(first_name, last_name, age, department, salary)
    def list_employees(self):
        Employee.show_all_employees()
    def fire_employee(self):
        employee_id = input("employee ID : ")
        Employee.fire(int(employee_id))
    def quit_program(self):
        print("Exiting the program...")
        sys.exit()
        
app = App()
app.run()                