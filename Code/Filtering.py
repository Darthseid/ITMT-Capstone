import regex
import re
output = ""
with open('class-scan.xml', 'r') as myfile: #This turns the entire contents of the file into a string.
  data = myfile.read()
Substr = re.findall(r' addr="(.+?)" ',data) #addr is the beginning filter,, 
Substr = [' {0} '.format(elem) for elem in Substr] #Adds spaces to the elements
file = open('Filter_Output.xml','w') #This will have to be changed to overwrite the file instead.
output = ''.join(Substr)
file.write(output) 
file.close() 

