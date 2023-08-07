<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Exercise 3a</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1>Student Information</h1>
<div id="studentID">Student ID</div>
<div id="firstName">First Name</div>
<div id="lastName">Last Name</div>

<br>
<script>
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "http://localhost/P12/deliverables/getStudentDetails.php?student_id=" + <?php echo $_GET['student_id']?>,
            cache: false,
            dataType: "JSON",
            success: function (response) {
                $('#studentID').html(response.studentID);
                $('#firstName').html(response.firstName);
                $('#lastName').html(response.lastName);
            },
            error: function(obj, textStatus, errorThrown) {
                console.log("Error "+ textStatus+ ": " + errorThrown);
            }
        });

    });
</script>
</body>
</html>
