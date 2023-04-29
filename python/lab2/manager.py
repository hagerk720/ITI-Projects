from  employee import Employee
class Manager(Employee):
    def __init__(self,first_name, last_name, age, dept, salary,managed_department  ):
        super().__init__(first_name, last_name , age , dept , salary , is_manager = True )
        self.managed_department = managed_department

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
                row[0], row[1], row[2], row[3], row[4],"confidential"))        