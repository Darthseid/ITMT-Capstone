import regex
import re
output = ""
with open('class-scan.xml', 'r') as myfile: #This turns the entire contents of the file into a string.
  data = myfile.read()
Substr = re.findall(r' addr="(.+?)" ',data) #addr is the beginning filter,, 
Substr = [' {0} '.format(elem) for elem in Substr] #Adds spaces to the elements
file = open('Filter_Output.xml','w')
output = ''.join(Substr)
partone = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"
parttwo = "<text>"
partthree = "</text>"
file.write(partone + parttwo + output + partthree) 
file.close() 
