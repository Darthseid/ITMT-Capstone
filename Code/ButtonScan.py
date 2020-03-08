import subprocess
import os
import shutil

CURRENT_DIR = os.path.dirname(__file__)
HTML_OUTPUT_PATH = os.path.join(CURRENT_DIR, 'Scan_Output.html')

def run_scan():
    subprocess.call(['./boomsetupscan.sh'])


def scan_xml_to_html():
    subprocess.call(['xsltproc', 'scannedlist.xml', '-o', 'Scan_Output.html'])

    if not os.path.exists(HTML_OUTPUT_PATH):
        raise FileExistsError(HTML_OUTPUT_PATH)


def scan_html_to_webserver_static_html():
    shutil.move(HTML_OUTPUT_PATH, os.path.join(CURRENT_DIR, '../webInterface/app/static/'))


if __name__=='__main__':
    scan_xml_to_html()

    scan_html_to_webserver_static_html()
