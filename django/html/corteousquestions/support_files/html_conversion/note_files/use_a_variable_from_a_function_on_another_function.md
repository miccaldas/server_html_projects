429<br>
<br>
 To access a variable inside a function from another function,<br>
 it must be assigned to the function object. Once that happens<br>
 the variable can be used inside and outside the function.<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 def function_1():<br>
    # assigning a string as a member of the function object<br>
    # instead of var = "variable inside function_1",<br>
    # we do:<br>
    function_1.var = "variable inside function_1"<br>
<br>
    print("function_1 has been called")<br>
<br>
 def function_2():<br>
    print("function_2 has been called")<br>
    print(function_1.var)<br>
<br>
 function_1()<br>
 function_2()<br>
 &nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;&nsbp;<br>
 https://tinyurl.com/yh8jjz98<br>
 https://tinyurl.com/yxc9mwod