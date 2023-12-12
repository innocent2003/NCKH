<!-- resources/views/surveys/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Survey</title>
</head>
<body>

<h2>Create Survey</h2>

<form action="/survey" method="post" enctype="multipart/form-data">
    @csrf

    <label for="image">Image:</label>
    <input type="file" name="image">
    <br>

    <label for="video">Video:</label>
    <input type="file" name="video">
    <br>

    <label for="information">Information:</label>
    <textarea name="information"></textarea>
    <br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
