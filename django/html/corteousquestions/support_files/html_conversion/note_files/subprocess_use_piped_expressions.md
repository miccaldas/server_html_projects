688<br>
<br>
 To use in subprocess a piped expression such as:<br>
 "cat index.rst | grep ".. include" | cut &nsbp;f 3 &nsbp;d"<br>
 do this:<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 cat = subprocess.Popen(['cat', 'index.rst'], <br>
                        stdout=subprocess.PIPE,<br>
                        )<br>
<br>
 grep = subprocess.Popen(['grep', '.. include::'],<br>
                        stdin=cat.stdout,<br>
                        stdout=subprocess.PIPE,<br>
                        )<br>
<br>
 cut = subprocess.Popen(['cut', '&nsbp;f', '3', '&nsbp;d:'],<br>
                        stdin=grep.stdout,<br>
                        stdout=subprocess.PIPE,<br>
                        )<br>
<br>
 end_of_pipe = cut.stdout<br>
 print(end_of_pipe)<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 https://tinyurl.com/y57vk97m