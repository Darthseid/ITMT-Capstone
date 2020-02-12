    import xmltodict
    import json
     
    with open('xmlfile.xml') as in_file:
        xml = in_file.read()
        with open('jsondata.json', 'w') as out_file:
            json.dump(xmltodict.parse(xml), out_file)
