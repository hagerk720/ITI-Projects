import mysql.connector
from getpass import getpass

class DBHandler:
    conn={}
    def __init__(self , host_name , user_name , password , db_name):
        self.host_name = host_name
        self.user_name = user_name
        self.password = password
        self.db_name = db_name
        self.conn = None
        
    def connect(self):
        try:
            self.conn = mysql.connector.connect(
                host=self.host_name,
                user=self.user_name,
                password=self.password,
                database=self.db_name
            )
            return self.conn
        except mysql.connector.Error as err:
            print(f"Error connecting to MySQL database: {err}")
            return None

    def disconnect(self):
        self.conn .close()

    def create_table(self):
        try:
            cursor = self.conn.cursor()
            cursor.execute('''drop table if exists employees''')
            sql = """
                CREATE TABLE employees (
                  id INT AUTO_INCREMENT PRIMARY KEY,
                  first_name VARCHAR(255),
                  last_name VARCHAR(255),
                  age INT,
                  department VARCHAR(255),
                  is_manager BOOLEAN,
                  salary INT
                )
                """   
            cursor.execute(sql)
            # commit the changes to the database
            self.conn.commit()
            # close the cursor and the connection
            cursor.close()
        except mysql.connector.Error as err:
            print(f"Error creating MySQL table: {err}")        
    
    def insert_employee(self, employee):
        self.connect()
        cursor = self.conn.cursor()
        sql = '''INSERT INTO employees (first_name, last_name, age, department, salary , is_manager)
                 VALUES (%s, %s, %s, %s, %s ,%s)'''
        values = (employee.first_name, employee.last_name, employee.age, employee.dept, employee.salary, employee.is_manager)
        cursor.execute(sql, values)
        # commit the changes to the database
        self.conn.commit()
        employee_id = cursor.lastrowid
        # close the cursor and the connection
        cursor.close()
        self.disconnect()
        return employee_id

    def update_employee_department(self, employee_id, new_department):
        self.connect()
        cursor = self.conn.cursor()
        sql = '''UPDATE employees
                 SET department = %s
                 WHERE id = %s'''
        values = (new_department, employee_id)
        cursor.execute(sql, values)
        # commit the changes to the database
        self.conn.commit()
        # close the cursor
        cursor.close()
        self.disconnect()

    def delete_employee(self, employee_id):
        self.connect()
        cursor = self.conn.cursor()
        sql = '''DELETE FROM employees
                 WHERE id = %s'''
        values = (employee_id,)
        cursor.execute(sql, values)
        # commit the changes to the database
        self.conn.commit()
        # close the cursor
        cursor.close()
        self.disconnect()    

    def get_all(self):
        self.connect()
        cursor = self.conn.cursor()
        sql = '''SELECT id, first_name, last_name, age, department, salary
                 FROM employees'''
        cursor.execute(sql)
        rows = cursor.fetchall()
        cursor.close()        
        self.disconnect()
     
        return rows 
      