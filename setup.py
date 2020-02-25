# import flask dependencies
from flask import Flask
import json

# initialize the flask app
application = Flask(__name__)
# default route
@application.route('/)
def index():
    return 'Hello World!'
# create a route for webhook
@application.route('/webhook')
def hello():
    return 'Hello World!'

# run the app
if __name__ == '__main__':
   application.run()
