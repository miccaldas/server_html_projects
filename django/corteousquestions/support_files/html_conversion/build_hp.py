"""Module Docstring"""
import subprocess

import isort
from loguru import logger
from mysql.connector import Error, connect

fmt = "{time} - {name} - {level} - {message}"
logger.add("/var/www/html/corteousquestions/logs/info.log", level="INFO", format=fmt, backtrace=True, diagnose=True)
logger.add("/var/www/html/corteousquestions/logs/error.log", level="ERROR", format=fmt, backtrace=True, diagnose=True)

subprocess.run(['isort', __file__])


@logger.catch
def build_hp():
    """Builds a php through file write commands."""

    file = "/var/www/html/corteousquestions/nhp.php"
    nhp = open(file, "w")
    nhp.write("""
    <!DOCTYPE html>
    <html>
    <head>
        <title>HP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Mclds">
        <meta name="description" content="Homepage">
        <link rel="stylesheet" type="text/css" href="css/tachyons.css" media="screen">
        <meta http-equiv="refresh" content="1800">
    </head>
    <body class="vh-100 pa0 ma0 sans-serif roboto f4 fw6 dark-gray bg-near-white">
        <div id="page_container" class="relative min-h-100 overflow-hidden db">
            <div id="content_wrap" class="pb3">
                <?php require "partials/header.php"; ?>
                <div id="top-spacer" class="h4 mt0.5 mb4">
                </div>
            """)
    nhp.write("\n")
    nhp.write("""
    <div id="flex-container" class="flex mt=2 mb=2">
        <div id="col1" class="flex-row items-center self-center justify-center content-center w-10 order-0">
    </div>
        <div id="col2" class="flex-row items-center self-center justify-center content-center w-80 order-1">
          <script>
                    function showResults(str) {
                    if (str.length == 0) {
                    document.getElementById("results_wrapper").innerHTML = "";
                    return;
                    } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("results_wrapper").innerHTML = this.responseText;
                    }
                    };
                    xmlhttp.open("GET", "/support_files/tags/tag_link.php?q=" + str, true);
                    xmlhttp.send();
                    }
                    }
                    </script>
                      
        """)
    try:
        conn = connect(host="localhost", user="mic", password="xxxx", database="notes")
        cur = conn.cursor()
        query = "SELECT * FROM notes ORDER BY RAND()"
        cur.execute(
            query,
        )
        records = cur.fetchall()
        for row in records:
            nhp.write('<article class="center mw6 ba mv2 mb7">')
            nhp.write('\n')
            nhp.write('<h1 class="f4 bg-near-black white mv0 pv2 ph3">')
            nhp.write(row[1])
            nhp.write('</h1>')
            nhp.write('\n')
            nhp.write('<div class="pa3 bt">')
            nhp.write('\n')
            nhp.write('<p class="f6 f5-ns lh-copy measure mv0 mb1">')
            nhp.write(row[5])
            nhp.write("</p>")
            nhp.write('\n')
            nhp.write('</div>')
            nhp.write('\n')
            nhp.write('</article>')
            nhp.write('\n')
            nhp.write("""
                    <div id="tag_box" class="center flex flex-row justify-between content-between mw6 dib ba pa2 mb2">""")
            nhp.write('\n')
            nhp.write('<input type="button" onclick="showResults(this.value)" value="')
            nhp.write(row[2])
            nhp.write('">')
            nhp.write('\n')
            nhp.write('<input type="button" onclick="showResults(this.value)" value="')
            nhp.write(row[3])
            nhp.write('">')
            nhp.write('\n')
            nhp.write('<input type="button" onclick="showResults(this.value)" value="')
            nhp.write(row[4])
            nhp.write('">')
            nhp.write('\n')
            nhp.write("""</div>
                    <div id="results_wrapper">
                </div>
                <br>
                    """)

    except Error as e:
        print("Error while connecting to db", e)
    finally:
        if conn:
            conn.close()

    nhp.write("""
            <div id="col3" class="flex-row items-center self-center justify-center content-center w-10 order-2">
            </div>
        </div>
    </div>

            <footer class="bottom-0 ph3 mid-gray absolute h1 w-100">
                <small class="f7-m db tc">© 2021 <b class="ttu">MCLDS</b>., All Rights Reserved ❰❱ mclds@protonmail.com</small>
            </footer>
        </div>
    </body>
</html>
            """)
    nhp.close()
     

if __name__ == "__main__":
    build_hp()

