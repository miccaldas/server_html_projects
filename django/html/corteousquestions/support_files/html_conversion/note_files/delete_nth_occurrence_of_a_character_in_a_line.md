479<br>
<br>
 To delete the Nth occurrence of a character, on the<br>
 same line, use this expression:<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 sed "s/'//2" lines_tags1.txt<br>
 Where:<br>
   1 &nsbp;  '/.../' is the space to put the expression to<br>
       delete. Notice that I didn't have to escape it.<br>
   2 &nsbp; '//' represent that, instead of a normal<br>
       substitution operation, this pattern won't be<br>
       replaced by nothing, deleting it.<br>
   3 &nsbp; '2' indicates the n of the occurrence. In this<br>
       case it was the second occurrence of the "'"<br>
       character.<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 https://tinyurl.com/ygj7d7dn