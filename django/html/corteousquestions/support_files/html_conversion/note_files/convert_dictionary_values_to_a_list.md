44<br>
"<br>
 Converting the values of a dictionary to a list creates a new list<br>
 where each element is a value from the dictionary. For example,<br>
 converting the values of {a:1,b:2} to a list results in [1,2].<br>
 Call dict.values() to create a view of the dictionary's values.<br>
 Use list(item) with the view of dictionary values as item to return<br>
 a list.<br>
 Example:<br>
 a_dictionary = {a: 1, b: 2}<br>
 values = a_dictionary.values()<br>
 Retrieve dictionary values<br>
 values_list = list(values)<br>
 Convert to list<br>
 print(values_list)<br>
 "