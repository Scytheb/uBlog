<?php require_once "header.php"; ?>
<h2>Posting takes place here!</h2>
<form method="post" action="../index.php">
	<div>
        <input type="text" name="title" />
    </div>
    <div>
        <textarea name="text"></textarea>
    </div>
    <div>
        <input type="submit" value="Υποβολή" />
    </div>
	<div>
        <input type="hidden" name="page" value="posting" />
    </div>
</form>
<?php require_once "footer.php"; ?>