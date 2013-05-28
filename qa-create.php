<!doctype html>
<html>
<head>
	<title>Question Application</title>

	<meta charset=utf-8>
	<meta name=description content="Question Applicaiton">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/styles.css">

</head>

<body>
	<div id="wrapper">

		<?php include "include/header.php" ?>

		<section id="qanda">

			<h2>Q &amp; A Questions</h2>
			<h3>Create Question</h3>
			<div id="left">
				<form>
					<label for="question">Question</label>
					<textarea name="question" id="question" class="block" placeholder="Enter Q&amp;A Question, Max character 88" cols="50" rows="3" maxlength="88"></textarea>

					<label for="answer">Answer</label>
					<input type="text" name="answer" class="block" id="answer" placeholder="Enter Answer" size="50">

					<label for="extra-info">Extra Information</label>
					<input type="text" name="extra-info" class="block" id="extra-info" placeholder="Enter extra infomtaion about question">

					<label for="ref1">Reference 1</label>
					<input type="text" name="refernece" class="block" id="ref1" placeholder="Enter Reference">

					<label for="ref2">Reference 2</label>
					<input type="text" name="refernece" class="block" id="ref2" placeholder="Enter Reference">

				</form>
			</div>

			<div id="right">
				<label for="q-id">Question ID</label>
				<input type="text" name="q-id" class="block" id="q-id" placeholder="Question ID">
			</div>
		</section>

		<?php include "include/footer.php" ?>

	</div> 

</body>
<script src="js/canvas_box.js"></script>

</html>