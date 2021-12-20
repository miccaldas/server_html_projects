#!/usr/bin/env /usr/bin/python3.9

"""So as not to serve always the same visible content on the
   homepage, we'll set for the building of homepage at around
   thirty in thirty minutes. The HTML has a meta tag that
   initiates a refresh in that time interval."""
import subprocess

import isort
from build_hp import build_hp
from loguru import logger

fmt = "{time} - {name} - {level} - {message}"
logger.add("/var/www/html/corteousquestions/logs/info.log", level="INFO", format=fmt, backtrace=True, diagnose=True)
logger.add("/var/www/html/corteousquestions/logs/error.log", level="ERROR", format=fmt, backtrace=True, diagnose=True)

subprocess.run(['isort', __file__])


@logger.catch
def page_refresh():
    """We import and call the module that builds the homepage, and,
       after that, we copy the output page to the index page."""

    nhp_page = '/var/www/html/corteousquestions/nhp.php'
    index_page = '/var/www/html/corteousquestions/index.php'

    build_hp()
    cmd = f'cp {nhp_page} {index_page}'
    subprocess.run(cmd, shell=True)


if __name__ == "__main__":
    page_refresh()
