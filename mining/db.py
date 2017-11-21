import pymysql

# Open database connection
db = pymysql.connect("localhost","root","","text" )

# prepare a cursor object using cursor() method
cursor = db.cursor()

# execute SQL query using execute() method.
cursor.execute("SELECT * from kategori")

# Fetch a single row using fetchone() method.
data = cursor.fetchall()
for row in data:
    id = row[0]
    kategori = row[1]
    print ("id = %d, kategori = %s" % (id, kategori))

# disconnect from server
db.close()