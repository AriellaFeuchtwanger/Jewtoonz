<?php
include("header.php");
include ("menu.php");
?>
<form id="contactForm" action="contact.php" method="POST">
	<label>Your name:</label><br />
        <input type="text" name="name" placeholder="Name" /><br />
        <label>Email:</label><br />
        <input type="text" name="email" placeholder="someone@example.com" /><br />
	<label>Subject:</label><br />
        <input type="text" name="subject" placeholder="subject" /><br />
	<label>Your message:</label><br />
	<textarea id="message" name="message" rows="7" cols="30"></textarea><br />
	<input id="submit_button" type="submit" value="Send email" />
</form>

<?php
include("footer.php");
?>
