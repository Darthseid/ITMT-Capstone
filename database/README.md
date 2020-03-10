# Database instructions:
      pip install flask sqlalchemy in virtual enviornment
      pip install flask-migrate


# FLASK-SQLAlchemy configuration
- Create a file of config and add these:

      touch config.py
         import os
         basedir = os.path.abspath(os.path.dirname(__file__))

         class Config(object):
         #...exrtra
         SQLALCHEMY_DATABASE_URI = os.environ.get('DATABASE_URL') or
            'sqlite:///' + os.path.join(baseddir, 'app.db')
         SQLALCHEMY_TRACK_MODIFICATIONS = False

# Flask-SQLAlchemy and Flask-Migrate initialization:
   - Create a new file called: 
      touch app/__init__.py

         from flask import Flask
         from config import Config
         from flask_sqlalchemy import SQLAlchemy
         from flask_migrate import Migrate

         app = Flask(__name__)
         app.config.from_object(Config)
         db = SQLAlchemy(app)
         migrate = Migrate(app, db)

         from app import routes, models

# User database model
- Create a new file called: touch /app/models.py and code
      
      class User(db.Model):
      id = db.Column(db.Integer, primary_key=True)
      username = db.Column(db.String(64), index=True, unique=True)
      email = db.Column(db.String(120), index=True, unique=True)
      password_hash = db.Column(db.String(128))

      def __repr__(self):
         return '<User {}>'.format(self.username)   
# Python command to create models into User
      >>> from app.models import User
      >>> u = User(username='Jorell' email='abcd@gmail.com)
      call u
      >>> u
      output:<User Jorell>
