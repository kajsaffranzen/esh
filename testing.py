
import MySQLdb

db = MySQLdb.connect(host="red4media.com", # your host, usually localhost
						port=3306,
                     user="redmedia_klaslof", # your username
                      passwd="eternal22") # name of the data base

# you must create a Cursor object. It will let
#  you execute all the queries you need
#cur = db.cursor() 
