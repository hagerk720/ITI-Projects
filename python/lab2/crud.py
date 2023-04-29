from  db_connection import * 

class CRUD:
    db_conn = {}
    # def __init__(self):
        # self.db_conn = DBConnection("localhost","root" ,"01144342836" , "employees")

    # def create_table(self):
    #     cursor = self.cursor()
    #     sql = """
    #         CREATE TABLE employees (
    #           id INT AUTO_INCREMENT PRIMARY KEY,
    #           first_name VARCHAR(255),
    #           last_name VARCHAR(255),
    #           age INT,
    #           department VARCHAR(255),
    #           salary INT
    #         )
    #         """   
    #     cursor.execute(sql)
    #     # commit the changes to the database
    #     self.commit()
    #     # close the cursor and the connection
    #     cursor.close()
    #     self.close() 