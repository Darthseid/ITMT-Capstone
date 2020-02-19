import json #This is the second converter used. After the temporary blank file is written, this one converts it into SQL.

TABLE_NAME = "tab" 

sqlstatement = ''
with open ('bla.json','r') as f:
    jsondata = json.loads(f.read())

for json in jsondata:
    keylist = "("
    valuelist = "("
    firstPair = True
    for key, value in json.items(): #This line is causing errors for some reason.
        if not firstPair:
            keylist += ", "
            valuelist += ", "
        firstPair = False
        keylist += key
        if type(value) in (str, unicode):
            valuelist += "'" + value + "'"
        else:
            valuelist += str(value)
    keylist += ")"
    valuelist += ")"

    sqlstatement += "INSERT INTO " + TABLE_NAME + " " + keylist + " VALUES " + valuelist + "\n"

print(sqlstatement) # I need to change this to make a new file later on.
