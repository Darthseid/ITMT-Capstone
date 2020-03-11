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
- You can add x amounts of tables ex. Devices, and users
- Create a new file called: touch /app/models.py and code
      
      from datetime import datetime
      from app import db

      class User(db.Model):
         id = db.Column(db.Integer, primary_key=True)
         username = db.Column(db.String(64), index=True, unique=True)
         email = db.Column(db.String(120), index=True, unique=True)
         password_hash = db.Column(db.String(128))
         posts = db.relationship('Post', backref='author', lazy='dynamic')
         //note here db.relationship, there is a relationshop to user
         def __repr__(self):
            return '<User {}>'.format(self.username)

      class Post(db.Model):
         id = db.Column(db.Integer, primary_key=True)
         body = db.Column(db.String(140))
         timestamp = db.Column(db.DateTime, index=True, default=datetime.utcnow)
         user_id = db.Column(db.Integer, db.ForeignKey('user.id'))
         //this will link the primary id to forigen id of user_id
         def __repr__(self):
            return '<Post {}>'.format(self.body) 
# Python command to test models into User
      >>> from app.models import User
      >>> u = User(username='Jorell' email='abcd@gmail.com)
      call u
      >>> u
      output:<User Jorell>

# Any changes in "models.py"
   - for example: adding a new table for "devices"

         flask db migrate -m "message here"
### "flask db migrate" means to commits the changes

      flask db upgrade //push the changes
      flask db downgrade //remove changes

# Testing Time
   ### Import database instance and models
      C:\directory> python
         >>> from app import db
         >>> from app.models import User
   
   ### Create a new user:
      >>> u = User(username='Jorell', email='test@gmail.com')
      >>> db.session.add(u)
      >>> db.session.commit()

   ### Return all users
      >>> users = Users.query.all()
      >>> users
         [outputs users]
      >>> for u in users:
            print(u.id, u.username)
      output