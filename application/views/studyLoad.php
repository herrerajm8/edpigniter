<?php
    // session_start();
    // require("connect.php");
    // $user = $_SESSION['email'];
    //
    // $query2 = "SELECT * FROM students WHERE email = '$user'";
    // $ret2 = mysqli_query($db, $query2);
    // while($row = mysqli_fetch_assoc($ret2)){
    //     $fname = $row['firstName'];
    //     $lname = $row['lastName'];
    //     $course = $row['course'];
    //     $year = $row['year'];
    //     $age = $row['age'];
    //     $ID = $row['studId'];
    // }
    //
    // $query = "SELECT * FROM subjectschedule AS ss
    //          JOIN subject as s
    //          ON ss.subjectid = s.subjectID
    //          JOIN teacher as t
    //          ON ss.teacherid = t.teachersID
    //          WHERE s.courseType = '$course' ORDER BY s.subjectCode";
    // $ret = mysqli_query($db, $query);
    //
    // $ret4 = mysqli_query($db, $query);
    //
    //
    // $ret5 = mysqli_query($db, $query);
    // while($row = mysqli_fetch_assoc($ret5)){
    //     $subSched_id = $row['subSchedID'];
    // }



?>

<html>
<head>
<style>
    .gradeLoad{
        margin-bottom: 150px;
    }
    .allClasses{
        padding: 10px;
    }

      .dropbtn {
    background-color: #48211b;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

    .gradeTable{
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;

    }
    .course{
        border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
</style>
<title>WELCOME</title>
<link rel="stylesheet"  href="<?php echo base_url('resources/style.css');?>">
<link rel="stylesheet"  href="<?php echo base_url('resources/bootstrap/css/bootstrap.css');?>">
<script src="<?php echo base_url('resources/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('resources/jquery/jquery-3.2.1.min.js');?>"></script>
</head>
<header>
<nav class = "nav navbar-default-top2 main_nav">

    <div class="container-fluid">

        <div class="col-md-5" style = "margin-top:25px;">
            <img src = "<?php echo base_url('resources/logo.jpeg')?>" style = "height: 75px;">
        </div>

        <div class = "col-md-offset-10">
            <div class = "col-md-1">
                <button type = "button" class = "btn btn-info" data-toggle = "modal" data-target = "#myModal" style = "margin-top: 66px; margin-left:43px;">Profile</button>
            </div>
        </div>

<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style = "color: black; font-size: 40px;"><?php echo $course?></h4>
            </div>

            <div class="modal-body">
                <?php
                foreach($stud as $val){
                    echo"
                        <table>
                            <tbody>
                                <tr>
                                    <td class = 'info'>Full Name&nbsp&nbsp&nbsp&nbsp</td>
                                    <td class = 'db_info'>".$val->firstName." ".$val->lastName."</td>
                                </tr>
                                <tr>
                                    <td class = 'info'>Student ID&nbsp&nbsp&nbsp&nbsp</td>
                                    <td class = 'db_info'>".$val->studID."</td>
                                </tr>
                                 <tr>
                                    <td class = 'info'>Year Level&nbsp&nbsp&nbsp&nbsp</td>
                                    <td class = 'db_info'>".$val->year."</td>
                                </tr>
                                 <tr>
                                    <td class = 'info'>Age&nbsp&nbsp&nbsp&nbsp</td>
                                    <td class = 'db_info'>".$val->age."</td>
                                </tr>
                                <tr>
                                    <td class = 'info'>ID&nbsp&nbsp&nbsp&nbsp</td>
                                    <td class = 'db_info'>".$val->studID."</td>
                                </tr>
                            </tbody>
                        </table>
                    ";
                  }
                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type = "button" class = "btn btn-default" data-toggle = "modal" data-target="#passwordModal">Change Password</button>
            </div>

      </div>

        </div>
  </div>

<div id="passwordModal" class="modal fade"  role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style = "color: black; font-size: 40px;">Change Password</h4>
            </div>
            <div class="modal-body" style="background-color: #48211b;">
                <div style = "margin-left: 200px;">
                    <form action="homepage.php" method="post">
                        <div class = 'row' style = 'margin-bottom: 10px;'>
                            <input type = password name = 'oldpass' style = 'border-radius: 2px;' placeholder = 'Current Password'>
                        </div>
                        <div class = 'row' style = 'margin-bottom: 10px;'>
                            <input type = password name = 'pass' style = 'border-radius: 2px;' placeholder = 'New Password'>
                        </div>
                        <div class = 'row' style = 'margin-bottom: 10px;'>
                            <input type = password name = 'pass_confirm' style = 'border-radius: 2px;' placeholder = 'Confirm Password'>
                        </div>
                        <div class = 'row' style = 'margin-bottom: 10px;'>
                            <button type = "submit" class = "btn btn-default" name = "passBtn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


        <div class = "col-md-offset-11" style = "margin-top: 61px;">
             <?php if((isset($_SESSION['email']))){ ?>
                    <div class = "col-md-1">
                        <a href = "logout.php"><button type="button" class = "btn btn-danger" style = "margin-top: 5px;">Logout</button></a>
                    </div>
            <?php } ?>
        </div>
    </div>
</nav>

<nav class="navbar navbar-default" style = 'background-color: #48211b;'>
  <div class="container-fluid">
    <ul class="nav navbar-nav home_nav">
        <li><a href="<?php echo base_url('welcome/homepage')?>">Home</a></li>
        <li><a href="<?php echo base_url('welcome/enrollment')?>">Student Enrollment</a></li>
        <li><a href="<?php echo base_url('welcome/all_classes')?>">All Classes</a></li>
        <li>
            <div class="dropdown">
              <button class="dropbtn">Student Features</button>
              <div class="dropdown-content">
                    <a href="<?php echo base_url('welcome/studyLoad')?>">Study Load</a>
                    <a href="<?php echo base_url('welcome/viewGrades')?>">View Grades</a>
              </div>
            </div>
        </li>
    </ul>
  </div>
</nav>

</header>
<body>
    <input id='empID' type = "hidden" value='<?php echo $ID ?>'>

    <div class = 'container-fluid page'>
                <hr>
        <center>
            <h4 style = "font-weight:bold;">
            View Study Load
            </h4>
        </center>

        <hr>
    </div>
    <div class = 'container page'>
            <div class = "container" style = "border-style: dotted; padding-bottom: 20px; margin-bottom: 35px;">
            <table>
                <caption style = "color: black; font-size: 16px; font-weight: bold;">Select Year and Term</caption>

                <thead>
                    <tr>
                        <td>
                            <p>Academic Semester&nbsp&nbsp&nbsp&nbsp</p>


                                <select id = 'semester' name = 'semester[]'>
                                    <option>Please Select</option>
                                    <option value = 'First'>First</option>
                                    <option value = 'Second'>Second</option>
                                </select>
                        </td>

                        <td>
                            <p>Academic Year</p>
                                <select id = 'year' name = 'year[]'>
                                    <option>Please Select</option>
                                    <option value = '2018'>2018</option>
                                    <option value = '2017'>2017</option>
                                    <option value = '2016'>2016</option>
                                    <option value = '2015'>2015</option>
                                    <option value = '2014'>2014</option>
                                    <option value = '2013'>2013</option>
                                    <option value = '2012'>2012</option>
                                </select>
                        </td>
                    </tr>
                     <tr>
                        <td>
                    <br>
                <button type = 'button' class = 'btn btn-info searchBtn' id = 'search' name = 'searchBtn'>Search</button>
                        </td>

                    </tr>
                </thead>
            </table>
        </div>

    </div>

   <div class = "table-responsive col-md-8 col-md-offset-2 gradeLoad" style = "padding-bottom: 20px; display:none; float: center;" id = "gradeLoad">
            <table id = "gradeTable" class = 'gradeTable'>
                <caption style = "color: black; font-size: 16px; font-weight: bold;"></caption>
                    <thead>
                     <tr>
                            <td>
                                <b>Course Code</b>
                            </td>
                            <td>
                                <b>Description</b>
                            </td>
                            <td>
                                <b>Schedule</b>
                            </td>
                            <td>
                                <b>Proctor</b>
                            </td>
                            <td>
                                <b>Units</b>
                            </td>
                        </tr>
                    </thead>

                <tbody id = 'gradeBody'>


                </tbody>
       </table>
        <div style = "margin-bottom: 150px;"></div>

        </div>

</body>
</html>
<script>
$(document).ready(function(){

    var id = $("#empID").val();


    $("#semester").change(function(){
        var semester = $("#semester").val();

        $("#year").change(function(){

            var year = $("#year").val();

            $("#search").click(function(){

                $.ajax({
                    traditional: true,
                    url: "getLoad.php",
                    method: "GET",
                    data: {
                        id: id,
                        semester: semester,
                        year: year
                    },
                    dataType: "JSON",
                    success: function(data){
                        $("#gradeBody").children().remove();

                        $("#gradeLoad").css("display", "block");
                        for(var i = 0; i<data.length; i++){
                            $("#gradeTable tbody").append('<tr class = "course"><td class = "course">'+data[i].subjectCode+'</td><td class = "course">'+data[i].subjectName+'</td>><td class = "course">'+data[i].day+'&nbsp'+data[i].time_start+'-'+data[i].time_end+'</td></td>><td class = "course">'+data[i].fName+'&nbsp'+data[i].lName+'</td></td>><td class = "course">'+data[i].units+'</td></tr>');



                        }
                    }

                });


            });


        });

    });


});




</script>
