from  db_connection import * 
# from  crud import * 
class Employee:
    employees = []
    db_conn ={}
    def __init__(self, first_name ,last_name , age ,dept , salary):
        Employee.db_conn = DBHandler("localhost","root" ,"01144342836" , "employees")
        self.first_name = first_name
        self.last_name = last_name
        self.age = age
        self.dept = dept
        self.salary = salary
        Employee.employees.append( self )

    def transfer(self,new_dept):
        self.dept=new_dept

    # remove an employee from the static list
    @staticmethod
    def fire(employee):
        Employee.employees.remove(employee)
        print(f"{employee.first_name} {employee.last_name} has been fired.")

    # show all employees
    def show_all_employees():
        for employee in Employee.employees:
            print(f"Employee object: {employee.first_name} {employee.last_name}")

    
e =  Employee("hager" , "khaled", 24 , "comm" , 9000)
# e1 =  Employee("mariam" , "khaled", 24 , "comm" , 9000)
# Employee.fire(e)
# Employee.show_all_employees()
# Employee.__db_connection = DBConnection("localhost","root" ,"01144342836" , "employees")

db =  DBHandler("localhost","root" ,"01144342836" , "employees")
connection = db.connect()
db.create_table(connection)
