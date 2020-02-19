import json

TABLE_NAME = "tab"

sqlstatement = ''
with open ('data.json','r') as f:
    jsondata = json.loads(f.read())

for json in jsondata:
    keylist = "("
    valuelist = "("
    firstPair = True
    for key, value in json.items():
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

print(sqlstatement)
