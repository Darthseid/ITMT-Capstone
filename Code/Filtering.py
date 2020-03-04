import regex
import re
output = ""
with open('Samplescan.xml', 'r') as myfile: #This turns the entire contents of the file into a string.
  data = myfile.read()
Substr = re.findall(r'addr(.+?)addrtype',data)
file = open('Filter_Output.xml','w') #This will have to be changed to overwrite the file instead.
output = ''.join(Substr)
file.write(output) 
file.close() 


