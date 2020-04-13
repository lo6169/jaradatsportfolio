<?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $ata = htmlspecialchars($data);

        return $data;
    }

    $vname  = $_POST['vname'];
    $vemail = $_POST['vemail'];
    $sub = $_POST['sub'];
    $comment = $_POST['comment'];

    $vname2 = test_input($vname);
    $vemail2 = test_input($vemail);
    $sub2 = test_input($sub);
    $comment2 = test_input($comment);

    $destination_email = "sj603@rit.edu";

    $email_body = "$vemail2  -> $comment2";

    mail($destination_email, $sub2, $email_body);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Me</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <ul>
        <li style="float:left"> <a href="index.html"> SIJAL JARADAT</a></li>
        <li style="float:right"> <a href="assets/media/resume.pdf"> Download Resume </a></li>
        <li style="float:right"> <a href="contact.html"> Contact </a></li>
        <li style="float:right"> <a href="more.html"> Learn More </a></li>
        <li style="float:right"> <a href="index.html"> Home </a></li>
    </ul>

    <div class="head">
        Thanks for contacting me!
    </div>

    <div class="head2">
        Medias
    </div>

    <div class="info">
        <a href=""> LinkedIn </a> <br/>
        <a href=""> GitHub </a> <br/>
    </div>

    <div class="container">
        <div id="feedback">
            <form action="secure_email_form.php" method="POST" onsubmit="return validateForm();">
                <div class="inputkind">
                    Name:
                </div>
                <input id="vname" name="vname" placeholder="Your Name" type="text" value=""> <br/> <br/>

                <div class="inputkind">
                    Email:
                </div>
                <input id="vemail" name="vemail" placeholder="Your Email" type="text" value=""> <br/> <br/>

                <div class="inputkind">
                    Subject
                </div>
                <input id="sub" name="sub" placeholder="Subject" type="text" value=""> <br/> <br/>

                <div class="inputkind">
                    Comments:
                </div>
                <textarea id="comment" name="comment" placeholder="Please comment here"></textarea> <br/> <br/>

                <input id="send" name="submit" type="submit" value="Send">
            </form>
        </div>
    </div>


    <script>

        function validateForm()
        {
            "use strict";
            var isvalid = true;

            if (document.getElementById("vname").value == '')
            {
                document.getElementById("vname").style.borderColor = "red";
                document.getElementById("vname").style.backgroundColor = 'pink';
                isvalid = false;
            }

            else
            {
                document.getElementById("vname").style = null;
            }

            if (document.getElementById("vemail").value == '')
            {
                document.getElementById("vemail").style.borderColor = "red";
                document.getElementById("vemail").style.backgroundColor = 'pink';
                isvalid = false;
            }
            else
            {
                document.getElementById("vemail").style = null;
            }

            if (document.getElementById("sub").value == '')
            {
                document.getElementById("sub").style.borderColor = "red";
                document.getElementById("sub").style.backgroundColor = 'pink';
                isvalid = false;
            }
            else
            {
                document.getElementById("sub").style = null;
            }

            if (document.getElementById("comment").value == '')
            {
                document.getElementById("comment").style.borderColor = "red";
                document.getElementById("comment").style.backgroundColor = 'pink';
                isvalid = false;
            }
            else
            {
                document.getElementById("comment").style = null;
            }


            return (isvalid);

        }
        //end of javascript function validateForm
    </script>

</body>
</html>