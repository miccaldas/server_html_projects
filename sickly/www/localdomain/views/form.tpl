<html>
  <head>
      <title>Form Example</title>
  </head>
  <body>
    <form method="get" action="/">
        <fieldset>
            <legend>SAMPLE FORM</legend>
            <ul>
                <li>First Name: <input name='first'>
                </li>
                <li>Last Name: <input name='last'>
                </li>
            </ul><input type='submit' value='Submit Form'>
        </fieldset>
    </form>
    {{first}} {{last}}
  </body>
</html>
