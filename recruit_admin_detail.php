<?php
$temp=$_POST['qvalue'];
$con = mysqli_connect("localhost", "temp", "nk304704");
  if(!$con){
    die('Could not connect: ' . mysqli_error);
  } else {
    mysqli_select_db($con, "project");
    $sql_display = "SELECT * FROM recruit where email = '$temp'";
    $result2=mysqli_query($con, $sql_display);
    while($row = mysqli_fetch_array($result2)){
      echo "<fieldset name = \"base\" style=\"width:700px; border-left-width:15;\">
        <legend> Requirment</legend>
        <label> Name : </label>
        <br/>
        ".$row['name']."
        <br/>
        <br/>
        <label> Gender : </label>
        <br/>
        ".$row['gender']."
        <br/>
        <br/>
        <label> Age <bt/> :  </label>
        <br/>
        ".$row['age']."
        <br/>
        <br/>
        <label> Nationality <bt/> :  </label>
        <br/>
        ".$row['nationality']."
        <br/>
        <br/>
        <label> University <bt/> :  </label>
        <br/>
        ".$row['university']."
        <br/>
        <br/>
        <label> E-mail <bt/> :  </label>
        <br/>
        ".$row['email']."
        <br/>
        <br/>
      </fieldset>
      <fieldset name = \"Addtional\" style=\"width:700px; border-left-width:15;\">
        <legend> Addtional</legend>
        <label> Contact number <bt/> :  </label>
        <br/>
        ".$row['phone']."
        <br/>
        <br/>
        <label> Facebook account <bt/> :  </label>
        <br/>
        ".$row['facebook']."
        <br/>
        <br/>
        <label> Kakao Talk Account <bt/> :  </label>
        <br/>
        ".$row['kakao']."
        <br/>
        <br/>
        <label> Where is your favorite place to travel in Korea? <bt/> :  </label>
        <br/>
        ".$row['place']."
        <br/>
        <br/>
        <label> What kind of activities do you expect in Korea Club? <bt/> :  </label>
        <br/>
        ".$row['activity']."
        <br/>
        <br/>
      </fieldset>
      <fieldset name = \"ETC\" style=\"width:700px; border-left-width:15;\">
      <legend> ETC</legend>
      ".$row['etc']."
      </fieldset>";
    }

    mysqli_close($con);
}
?>
