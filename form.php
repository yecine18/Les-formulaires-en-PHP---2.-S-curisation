<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="thanks.php" method="POST">
        <input type="text" name="name" placeholder="name" required >
        <input type="text" name="email" placeholder="email" required >
        <input type="text" name="phone"placeholder="phone" required >
        <select name="sujet">
            <option value="SUJET1"required>sujet 1</option>
            <option value="SDUJET2" required >sujet2</option>
        </select>
        <input type="text" name="message" placeholder="textarea" required>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>