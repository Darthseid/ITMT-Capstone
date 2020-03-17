import regex
import re
output = ""
with open('class-scan.xml', 'r') as myfile: #This turns the entire contents of the file into a string.
  data = myfile.read()
Substr = re.findall(r' addr="(.+?)" ',data) #addr is the beginning filter,, 
Substr = ['INSERT INTO XMLAddresses(Address) VALUES ({0}); \n '.format(elem) for elem in Substr] #Adds spaces to the elements
file = open('SQL_Output.sql','w') #Prints SQL code
output = ''.join(Substr) #An SQL database with this table needs to be created first.
file.write(output) 
file.close() 


