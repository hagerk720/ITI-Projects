from  db_handler import * 
class Employee:
    db_conn = DBHandler("localhost", "root", "01144342836", "employees")
    employees = []
    def __init__(self, first_name, last_name, age, dept, salary, is_manager=False):
        self.first_name = first_name
        self.last_name = last_name
        self.age = age
        self.dept = dept
        self.salary = salary
        self.id = None
        self.is_manager = is_manager
        self.employees = []
        # Insert the employee into the database and get the auto-generated ID
        self.id = Employee.db_conn.insert_employee(self)
        Employee.employees.append(self)

    def transfer(self, new_dept):
        # Update the department of the employee in the database
        Employee.db_conn.update_employee_department(self.id, new_dept)
        # Update the department of the employee object
        self.dept = new_dept

    @staticmethod
    def fire(employee_id):
        # Find the employee with the given id
        employee = None
        for emp in Employee.employees:
            if emp.id == employee_id:
                employee = emp
                break
        
        if employee:
            # Remove the employee from the employees list
            Employee.employees.remove(employee)
            # Delete the employee from the database
            Employee.db_conn.delete_employee(employee.id)
            print(f"{employee.first_name} {employee.last_name} has been fired.")
        else:
            print(f"No employee with id {employee_id} found.")

    # show all employees
    @classmethod
    def show_all_employees(cls):
       employees = cls.db_conn.get_all()
       cls.print_employees(employees)

    def print_employees(rows):
        print("{:<5} {:<15} {:<15} {:<5} {:<15} {:<10}".format(
            "ID", "First Name", "Last Name", "Age", "Department", "Salary"))
        print("-" * 70)
        for row in rows:
            print("{:<5} {:<15} {:<15} {:<5} {:<15} {:<10}".format(
                row[0], row[1], row[2], row[3], row[4], row[5]))
    