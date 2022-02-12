import time

from bottle import Bottle, BytesIO, FormsDict, request, route, template

app = Bottle()

@app.route('/')
def index():

    return template("form.tpl", message="Please enter your name", first='Miguel', last='Caldas')


@app.route('/', method='GET')
def formhandler():
    first = request.params.get('first')
    last = request.params.get('last')

    # message = 'Hello ' + first + ' ' + last

    info = { 'pf': 'p_first',
             'msg': 'message',
             'lf': 'p_last'}

    return template("form.tpl", first=first, last=last)


if __name__ == "__main__":
    app.run(host='localdomain.club', debug=True)
