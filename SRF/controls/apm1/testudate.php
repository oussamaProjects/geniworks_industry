
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
                    <form>
        <table>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="quantity" placeholder="First Name" id="first">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="rgap" placeholder="Last Name" id="last">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="resid" placeholder="id" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Signup" id="signup">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <script>
          


     $(document).ready(function(){

        $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'updategaps.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });

      });
    </script>
</body>
</html>

