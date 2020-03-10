import xmltodict
import json #This is the first file used. You turn XML to JSON and then JSON into SQL.
     
with open('Filter_Output.xml') as in_file:
	xml = in_file.read()
with open('JSON_Output.json', 'w') as out_file:
	json.dump(xmltodict.parse(xml), out_file)
