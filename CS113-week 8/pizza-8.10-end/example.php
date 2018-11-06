<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form name="getemail" onSubmit="return checkForm(this)">
        E-mail: <input type="text" name="email"><br><br>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <script>
        function checkForm(data) {
            console.log(data);
            var form = document.getemail;
            var em = form.email.value;
            if (!isEmail(em)) {
                alert("Enter your email");
                return false;
            } else {
                return true;
            }
        }

        function isEmail(chkEm) {
            var emailPattern = "^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$";
            var regex = new RegExp(emailPattern);
            return regex.test(chkEm);
        }
    </script>
</body>
</html>