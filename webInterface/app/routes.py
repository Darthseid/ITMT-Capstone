import os

from flask import render_template

from app import app

FILE_DIR_PATH = os.path.dirname(__file__)
SCAN_DATA_PATH = os.path.join(FILE_DIR_PATH, '../../scannedlist.xml')


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