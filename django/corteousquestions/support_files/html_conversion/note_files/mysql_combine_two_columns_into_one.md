544<br>
 <br>
 SELECT FirstName AS First_Name<br>
     , LastName AS Last_Name<br>
     , ContactPhoneAreaCode1<br>
     , ContactPhoneNumber1<br>
     , COALESCE(ContactPhoneAreaCode1, ContactPhoneNumber1) AS Contact_Phone <br>
  FROM TABLE1