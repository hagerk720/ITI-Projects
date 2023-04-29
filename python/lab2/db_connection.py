import mysql.connector
from getpass import getpass

class DBHandler:
    def __init__(self , host_name , user_name , password , db_name):
        self.host_name = host_name
        self.user_name = user_name
        self.password = password
        self.db_name = db_name
        
    def connect(self):
        try:
            conn = mysql.connector.connect(
                host=self.host_name,
                user=self.user_name,
                password=self.password,
                database=self.db_name
            )
            return conn
        except mysql.connector.Error as err:
            print(f"Error connecting to MySQL database: {err}")
            return None

    def disconnect(self):
        self.close()

    def create_table(self, connection):
        try:
            cursor = connection.cursor()
            cursor.execute('''drop table if exists employees''')
            sql = """
                CREATE TABLE employees (
                  id INT AUTO_INCREMENT PRIMARY KEY,
                  first_name VARCHAR(255),
                  last_name VARCHAR(255),
                  age INT,
                  department VARCHAR(255),
                  salary INT
                )
                """   
            cursor.execute(sql)
            # commit the changes to the database
            connection.commit()
            # close the cursor and the connection
            cursor.close()
            connection.close()
        except mysql.connector.Error as err:
            print(f"Error creating MySQL table: {err}")        
    
