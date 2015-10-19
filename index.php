<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Socrative Quiz Writing</title>
	</head>
	<body>
		// This is Phase 1 of the Data Design project for Deep Dive Coding
		<h1>Jeff - Socrative Quiz Writing - Data Design Project</h1>
		<h2>Phase 1</h2> // The first two lines are the title of the project
		<hr>
		<h3>Define the typical Persona</h3>
		// This is a description of one of the end users
		<p>Pesona 1 is Mr. John Smith.  John Smith is a thirty-something APS high school history teacher who is somewhat tech savvy but not an expert on education technology. His four year old Macbook is running mac OS X.  He can write letters and reports in Microsoft Office and uses email with colleagues and students.  He knows enough to look for a help button or for FAQ page when he has questions.  He does not have a lot of time to write and grade quizzes.  He does have at least one computer for each student.  Communication for the Quiz creation stage is one-to-one. This is his first time using socrative.com to give a reading quiz.  Since socrative does not work well on mobile devices and there is a lot of writing, Mr. Smith is writing the quiz on his laptop at his desk in his classroom.</p>
		<hr>
		<h3>Main Use Case 1</h3>
		<h4>Main Goal</h4>
		//  This is a brief description of what the end user wants to do, the end user's goal
		<p>Mr. Smith is writing a  three-question quiz for his class on his socrative.com account to assess his students' understanding of today's reading assignment.  The quiz will be used at the start of his next class. Based on the questions Mr. Smith has prepared, there will be one True/False question, one multiple-choice question, and one short answerwritten the three quesitons for his quiz ahead of time.</p>
		<p>  The first question is a true/false focusing on a particular concept or vocabulary word.  It is easy to help students feel confident and reduce student anxiety.  The second question is a more challenging, conceptual multiple-choice question to assess student understanding applying that concept.  The third question is to get students either to ask their most pressing questions or describe the most interesting or surprising thing they found in the reading.  To encourage students to think about their experiences with the reading assignment, this question is open-ended short answer.</p>
		<h4>Defining steps to achieve that goal</h4>
		//  This is a step-by-step procedure for the user to arrive at his end goal.  It should read like a movie script.
		<p>Scene: It is an early fall afternoon after students have gone home for the day in an APS history classroom.  Mr. Smith is sitting at his desk checking email on his laptop as he closes his email client and opens his web browswer, Safari.  He logs into the teacher side of socrative.com.</p>
		<p>System:  System displays MAIN SOCRATIVE TEACHER page in browser.</p>
		// Getting ready to write the quiz in socrative
		<p>Mr. Smith:  Clicks on "Manage Quizzes" in the menubar.</p>
		<p>System: System displays MANAGE QUIZZES page in browser.System brings up Manage Quizzes page.</p>
		<p>Mr. Smith:  Clicks on "Create Quiz" button</p>
		<p>System:  System displays CREATE QUIZ page in browser.There is a box to enter the quiz name. Share Quiz with quiz identifier is set to Yes.  Also there is a label that reads "Add Question".  Underneath that is a row are 3 buttons with the 3 question types, in order:  Multiple Choice, True/False, and Short Answer.</p>
		<p>Mr. Smith:  Mr. Smith types the bane of his quiz, "Reading Quiz 1," in the <em>'Name Your Quiz' </em> box.  Then he decides to add his first question by clicking on the True/False button.</p>
		<p>System:  Diplays the question page with a question box, one button each for true and false, and an exaplanation box.  There is also a save button as well as the three add question buttons described above. The question is labeled #1.</p>
		// *******************************************
		// Setting up Question #1
		<p>Mr. Smith:  Mr. Smith types in his first question, "True or False => The Battle of the Bulge was an attack by the German Army on the British and American Armies in December 1944."  He sets the correct answer to "TRUE".  He then hits the "SAVE" button</p>
		<p>System:  System saves the QUIZ NAME, SHARE QUIZ SETTING, QUESTION 1 STATEMENT, QUESTION 1 answer.  It then reponds by briefly flashing the same button and marking the background for question #1 PASTEL LIGHT GREEN.  "True" button turns bright green.  System removes the Explanation box for question #1.</p>
		//  ******************************************
		//  Setting up Question #2
		<p>Mr. Smith:  Mr. Smith click the MULTIPLE CHOICE button under "ADD QUESTION:" to begin working on the second quiz question.</p>
		<p>System:  System modifies display by adding a Multiple Choice question section labeled #2 between question 1 and ADD QUESTION on the bottom of the screen.  The explanation box for question 1 has been removed.  This question is labeled #2.</p>
		<p>Mr. Smith:  Mr. Smith types in the question statement box, "The Germans lost this battle for the following reason(s) -- Check all that apply:".  He then hits tab.</p>
		<p>System:  System advances cursor to the A ANSWER CHOICE box.</p>
		<p>Mr. Smith:  In the "A" answer choice, Mr. The Germans were unable to capture the town of Bastogne, which was behind their front linesSmith types, "The Germans ran out of supplies, particularly fuel.  Mr. Smith then hits the TAB key</p>
		<p>System:  System advances cursor to the B ANSWER CHOICE box.</p>
		<p>Mr. Smith:  In the "B" answer choice, Mr. Smith types "The Germans were unable to capture the town of Bastogne, which was behind their front lines and occupied major road junctions, hindering German army movement and resupply efforts.  Mr. Smith then hits the TAB key</p>
		<p>System:  System advances cursor to the C ANSWER CHOICE box.</p>
		<p>Mr. Smith:  In the "C" ANSWER CHOICE, Mr. Smith types, "The Germans were unable to advance far enough to capture major Allied supply depots."  Mr. Smith then hits the TAB key</p>
		<p>System:  System advances cursor to the D ANSWER CHOICE box.</p>
		<p>Mr. Smith:  In the "D" ANSWER CHOICE, Mr. Smith types "The winter storm that grounded Allied aircraft lifted which allowed them to then fly and gave the Allied armies an advantage."  Mr. Smith then hits the TAB key</p>
		<p>System:  System advances cursor to the E ANSWER CHOICE box.</p>
		<p>Mr. Smith:  In the "E" ANSWER CHOICE, Mr. Smith types, "All of the above.  Mr. Smith then clicks on the + ADD ANSWER button to add another answer choice.</p>
		<p>System:  System addS ANSWER CHOIC F below ANSWER CHOICE E</p>
		<p>Mr. Smith:  Mr. Smith uses the mouse to click in the F ANSWER BOX and types the F response, "None of the above."  He then uses the mouse to click on the "CORRECT? box for ANSWER CHOICE E.</p>
		<p>System:  System Marks the "E" box and the E ANSWER CHOICE in GREEN background.
		<p>Mr. Smith clicks on the explanation box and types, "A, B, C, and D were all factors in the German defeat, so the correct answer is E."  To finish Question 2, Mr. Smith clicks on the SAVE button.</p>
		<p>System:  System turns background for entire question #2 area PASTEL LIGHT GREEN</p>
		// ******************************************
		//  Setting up Queston #3
		<p>Mr. Smith:  Mr. Smith clicks on the SHORT ANSWER Button under ADD QUESTION:</p>
		<p>System:  System add Question #3 between Question #2 and ADD QUESTION: at the bottom of the page.  There is a box for the quesiton, an explanation box, and options +ADD and -Delete for adding and deleting correct answers.  There is also a SAVE button</p>
		<p>Mr. Smith:  Mr. Smith types "What is your most pressing question from the reading?  If you do not have any questions, what was the most interesting or surprising thing you found in the reading?" in the question box.  He then hits save.</p>
		<p>System saves Question statement, removes further entry choices, and colors the background of Quesiton #3 PASTEL LIGHT GREEN</p>
		<p>Mr. Smith uses the scroll bar to move back to the top of the page and uses the mouse to click on the button SAVE & EXIT.</p>
		<p>System:  System saves test name and list of questions</p>
		// ****************End of Steps to Achieve Goal************
		<h3>Conceptual Model</h3>
			<h4>Entity 1: User</h4>
			<p>User can use many Tests</p>
				<h5>Attributes include:</h5>
				<p>user name</p>
				<p>user ID</p>
				<p>password</p>
				<p>room</p>
			<h4>Entity 2: Tests</h4>
			<p>Each Test belongs to only one user</p>
			<p>Each test can have many questions</p>
				<h5>Attributes include:</h5>
				<p>User ID</p>
				<p>Test name</p>
				<p>Test ID</p>
				<p>Number of Questons</p>
				<p>Array of Question Names</p>
			<h4>Entity 3:  Questions</h4>
			<p>Each question belongs to only 1 user and 1 test</p>
				<h5>Attributes include:</h5>
				<p>User ID</p>
				<p>Test ID</p>
				<p>Question Type</p>
				<p>Question Statement</p>
				<p>Correct Response(s)</p>
				<p>Explanation</p>
		<hr>
		<img src="img/soctrative-eadiag.svg" alt="Socrative ER diagram"/>
	</body>
</html>