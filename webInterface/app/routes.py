import os

from flask import render_template

from app import app

FILE_DIR_PATH = os.path.dirname(__file__)
SCAN_DATA_PATH = os.path.join(FILE_DIR_PATH, '../../scannedlist.xml')


# background process happening without any refreshing
@app.route('/background_process_test')
def background_process_test():
    print("someone wants the background test")
    return 'Hi from the web API :)'


@app.route('/')
@app.route('/index')
def index():
    scanresults = None

    if os.path.exists(SCAN_DATA_PATH):
        scanresults = ""
        with open(SCAN_DATA_PATH, 'r') as f:
            for line in f:
                scanresults += line
    else:
        print("scannedlist.xml does not exist.")
        print(os.path.abspath(SCAN_DATA_PATH))
        scanresults = None

    return render_template('index.html', scanresults=scanresults)
