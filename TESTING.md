RampCU  by: Phi Trang, Abdul Ghiasy, Sunghak Wong, Xiaoshun Xu, Hannah Erdevig
Vision Statement: People restricted to wheelchair accessible travel will be able to use our mobile app to direct them along the best, safe route to their chosen destination on campus.

User Acceptance Test Plans:

UAT#1: Map Testing
	One feature we are testing involves the CU Boulder campus map on our website. A user can use the interactive map supplied by CU to navigate and learn more about buildings. When they click on a building, they should be able to see detailed information pertaining to that building such as address and a brief description. An example can be found in the zip file of our github named TESTINGimgs.zip. As can be seen for the case of "Libby Hall", both the address of the building is shown and a description. The purpose of this plan of alpha testing is to make sure that the interactive map we provide won't be hard to use and won't break down on its users.

UAT#2: SQL Query check on website
	Another feature we were keen to test is the backend functionality of the SQL databse we have set up with the php server. The user can input their current building and obtain a list of directions to other major buildings. We have tested this out by writing names of buildings currently in the list and observing the outcome, aswell as what would happen if we enter our current building name incorrectly. An example can be found in the zip file of our github named TESTINGimgs.zip. For the case of the user inputting "umc", there will a successfull execution of a query that will provide all destinations that can be traveled to and directions on how to get there. As for the case of the user inputting "umcccc", it just prints out blank directions, indicating that we need to account for cases where users input building names incorrectly and building names not in our directory. Also, during unit testing, we found that our implementation of our SQL query left us vulnerable to SQL injections which could affect our database negatively, so there is also evident that our database to php functionality needs to be adjusted so to remove this bug. 

UAT#3: Disability Services Link
	Another feature we've tested is our provided link to the CU Boulder Disability Services page. For this case, just clicking on the link at the top of page automatically redirects our site to CU Boulder Disability Services page, thus passing our user acceptance test plan.

Automated Testing:



