"""In a move very much not without hubris, I'm going
   to convert note's database entries into HTML
   through a bespoke script. I hope I don't regret it.
   The idea is to download the database, make changes
   to each entry and write it to a HTML file that will
   house it all."""
import os
import subprocess
import sys

import isort
from loguru import logger
from mysql.connector import Error, connect

fmt = "{time} - {name} - {level} - {message}"
logger.add("/var/www/html/corteousquestions/logs/info.log", level="INFO", format=fmt, backtrace=True, diagnose=True)
logger.add("/var/www/html/corteousquestions/logs/error.log", level="ERROR", format=fmt, backtrace=True, diagnose=True)

subprocess.run(['isort', __file__])


class Converter:
    """The class will work as an assembly line,
       each method doing successive alterations
       to the database entries, until all entries
       are successfully housed in a file as HTML
       cards."""

    @logger.catch
    def new_db(self):
        """We'll make the changes to the notes text, and
           house the new versions in another database.
           This method creates it."""
        try:
            conn = connect(host="localhost", user="root", password="xxxx")
            cur = conn.cursor()
            query = "CREATE DATABASE new_notes"
            cur.execute(query)
            conn.commit()
        except Error as e:
            print("Error while connecting to db", e)
        finally:
            if conn:
                conn.close()

    @logger.catch
    def new_table(self):
        """We'll create a new table and indexes for
           the new, exactly like it was done for the
           other."""
        try:
            conn = connect(host="localhost", user="mic", password="xxxx", database="new_notes")
            cur = conn.cursor()
            query = "CREATE TABLE notes (ntid INT AUTO_INCREMENT, title VARCHAR(255), k1 VARCHAR(255), k2 VARCHAR(255), k3 VARCHAR(255), note TEXT, url VARCHAR(255), time TIMESTAMP DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(ntid), FULLTEXT(title, k1, k2, k3, note, url))" 
            cur.execute(query)
            conn.commit()
            query = "ALTER TABLE notes ENABLE KEYS"
            cur.execute(query)
            conn.commit()
        except Error as e:
            print("Error while connecting to db", e)
        finally:
            if conn:
                conn.close()

    @logger.catch
    def records(self):
        """Connects to database and gets all content into a list."""
        try:
            conn = connect(host="localhost", user="mic", password="xxxx", database="notes")
            cur = conn.cursor()
            query = "SELECT * FROM notes"
            cur.execute(
                query,
            )
            self.records = cur.fetchall()
        except Error as e:
            print("Error while connecting to db", e)
        finally:
            if conn:
                conn.close()

    @logger.catch
    def line_variables(self):
        """Creates variables for each line in entry."""
        for row in self.records:
            self.id = row[0]
            self.tit = row[1]
            self.k1 = row[2]
            self.k2 = row[3]
            self.k3 = row[4]
            self.note = row[5]

    @logger.catch
    def upload_new_db(self):
        """We'll upload to the new database all the fields
           of the old, except notes. That we'll still have
           to make the changes."""
        try:
            conn = connect(host="localhost", user="mic", password="xxxx", database="new_notes")
            cur = conn.cursor()
            answers = []
            for row in self.records:
                answers = [row[0], row[1], row[2], row[3], row[4]]
                query = "INSERT INTO notes (ntid, title, k1, k2, k3) VALUES(%s, %s, %s, %s, %s)"
                cur.execute(query, answers)
            conn.commit()
        except Error as e:
            print("Error while connecting to db", e)
        finally:
            if conn:
                conn.close()

    @logger.catch
    def create_file_records(self):
        """To better manipulate text, we'll write the entries
           to files. One per entry. So as to treat the files
           and their content at the same time, we'll link it
           in a zipped list and then iterate through it.
           Since we're messing with files we'll just make some
           text changes to simplify turning it in HTML content."""

        path = "/var/www/html/corteousquestions/support_files/html_conversion/note_files/"
        clean_titles = []
        for row in self.records:
            low = row[1].lower()
            termination = low + '.md'
            clean_title1 = termination.replace("'", "")
            clean_title2 = clean_title1.replace('"', "")
            clean_title3 = clean_title2.replace("?", "")
            clean_title = clean_title3.replace(" ", "_")
           
            clean_titles.append(clean_title)
        
        self.fullpaths = []
        for title in clean_titles:
            fullpath = path + title
            self.fullpaths.append(fullpath)

        self.contents = []
        for row in self.records:
            content = str(row[0]) + "\n" + row[5]
            ncontent = content.replace("-", "&nsbp;")
            nncontent = ncontent.replace("\n", "<br>\n")
            self.contents.append(nncontent)

        self.content_path = zip(self.fullpaths, self.contents)
        for x, y in self.content_path:
            # print(x, y)  # This print command is here to make sure it writes the following two lines. It wouldn't otherwise.
            with open(x, 'w') as f:
                f.write(y)
              


con = Converter()
# con.new_db()
# con.new_table()
con.records()
con.line_variables()
# con.upload_new_db()
con.create_file_records()
con.upload()
# con.upload_notes()
