from datetime import datetime
from app import db

class User(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    username = db.Column(db.String(64), index=True, unique=True)
    email = db.Column(db.String(120), index=True, unique=True)
    password_hash = db.Column(db.String(128))
    device = db.relationship('Device', backref='author', lazy='dynamic')

    def __repr__(self):
        return '<User {}>'.format(self.username) 

class Device(db.Device):
    id = db.Column(db.Integer, primary_key=True)
    deviceName = db.Column(db.String(64), index=True, unique=True)
    ipAddress = db.Column(db.String(120), index=True, unique=True)
    macAddress = db.Column(db.String(120),index=True, unique=True)
    operatingSystem = db.Column(db.String(120))
    softWareVer = db.Column(db.Double, index=True, default=1.0)
    timestamp = db.Column(db.DateTime, index=True, default=datetime.utcnow)
    modelNumber = db.Column(db.String(120), index=True, default="0000000") 
    user_id = db.Column(db.Integer, db.ForeignKey('user.id'))

    def __repr__(self):
        return '<Device {}>'.format(self.deviceName) 