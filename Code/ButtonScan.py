import subprocess
import os
import shutil
import webbrowser
from functools import lru_cache

import requests

CURRENT_DIR = os.path.dirname(__file__)
HTML_OUTPUT_PATH = os.path.join(CURRENT_DIR, 'Scan_Output.html')


def run_scan():
    subprocess.call(['./boomsetupscan.sh'])


@lru_cache(maxsize=None)
def getPublicIP():
    print("GETPUBLICIP CALLED")
    return (requests.get("http://ipecho.net/plain?").text)


@lru_cache(maxsize=None)
def Open_Shodan():
    return webbrowser.open('https://shodan.io/search?query=' + getPublicIP())


def scan_xml_to_html():
    subprocess.call(['xsltproc', 'scannedlist.xml', '-o', 'Scan_Output.html'])

    if not os.path.exists(HTML_OUTPUT_PATH):
        raise FileExistsError(HTML_OUTPUT_PATH)


def scan_html_to_webserver_static_html():
    shutil.move(HTML_OUTPUT_PATH, os.path.join(CURRENT_DIR, '../webInterface/app/static/'))


if __name__ == '__main__':
    scan_xml_to_html()

    scan_html_to_webserver_static_html()
