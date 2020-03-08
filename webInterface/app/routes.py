import os

from subprocess import check_output

import requests
from flask import render_template

from app import app

FILE_DIR_PATH = os.path.dirname(__file__)
SCAN_DATA_PATH = os.path.join(FILE_DIR_PATH, '../../scannedlist.xml')


def getPublicIP():
    print("GETPUBLICIP CALLED")
    return requests.get("http://ipecho.net/plain?").text


@app.route('/api/get_public_ip')
def getpublicip():
    return getPublicIP()


# background process happening without any refreshing
@app.route('/api/background_process_test')
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

    return render_template('index.html', scanresults=scanresults, hostname=hostname(), interface=interface(),
                           Shodan='https://shodan.io/search?query=')


def hostname():
    return check_output(['hostname', '-I'])


def interface():
    return check_output(['app/NetInfo.sh'])
