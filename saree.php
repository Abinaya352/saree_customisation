<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Customise YourSelf</title>
    <link rel="icon" type="image/x-icon" href="logo.jpeg" />
    <link rel="stylesheet" href="saree.css" />
  </head>
 <?php
 date_default_timezone_set("Asia/Kolkata");
 if(isset($_POST['btnProceed'])){
  $blouseColor = $_POST['blouseColorInp'];
  $blousePattern = $_POST['blousePat'];
  // echo $blouseColor;
  // echo $blousePattern;
  $palluColor = $_POST['palluColorInp'];
  $palluPattern = $_POST['palluPat'];
  $bodyColor = $_POST['bodyColorInp'];
  $bodyPattern = $_POST['bodyPat'];
  $borderTopColor = $_POST['borderTopColorInp'];
  $borderTopPattern = $_POST['borderTopPat'];
  $borderBottomColor = $_POST['borderBottomColorInp'];
  $borderBottomPattern = $_POST['borderBottomPat'];

  $dbServername = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "sareeDB";
    // Create connection
    $conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    
    
      $sql = 'SELECT COUNT(*) FROM SAREEDESIGN';
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result);
      $designId = $row[0] +1;
      $insQuery = 'INSERT INTO SAREEDESIGN (designId,blouseColor,blousePattern,palluColor,palluPattern,bodyColor,bodyPattern,borderTopColor,borderTopPattern,borderBottomColor,borderBottomPattern) VALUES ('
        .$designId.', "'.$blouseColor.'", "'.$blousePattern.'", "'.$palluColor.'", "'.$palluPattern.'", "'.$bodyColor.'", "'.$bodyPattern.'", "'.$borderTopColor.'", "'.$borderTopPattern.'", "'
        .$borderBottomColor.'", "'.$borderBottomPattern.'")';
       // echo $insQuery;
      $conn->query($insQuery);
      $orderId = date('mdHis');
      //echo $orderId;
      $noOfItems = $_POST['noOfItems'];
      $today = date('Y-m-d');
      $expDelDate = date('Y-m-d', strtotime($today. ' + 10 days'));
      $orderInsQuery = 'INSERT INTO ORDERS (orderId, designId, noOfItems, email, status, orderDate, expDelDate) VALUES ("'.$orderId.'", '.$designId.', '.$noOfItems.', "subi1@gmail.com", "NotPaid", "'
      .$today.'", "'.$expDelDate.'")';
      //echo $orderInsQuery;
    $conn->query($orderInsQuery);

     
      $conn->close();
 }
 ?>
  <body>
    <svg class="container" width="900" height="220">
      <defs>
        <linearGradient id="blouseGradient">
          <stop offset="0" style="stop-color: #fff" />
        </linearGradient>
        <linearGradient id="palluGradient">
          <stop offset="0" style="stop-color: #fff" />
        </linearGradient>
        <linearGradient id="bodyGradient">
          <stop offset="0" style="stop-color: #fff" />
        </linearGradient>
        <linearGradient id="borderGradient">
          <stop offset="0" style="stop-color: #fff" />
        </linearGradient>
        <pattern
          id="blouse_pattern"
          patternUnits="userSpaceOnUse"
          width="100"
          height="50"
        >
          <image
            id="blouseImage"
            href="pattern\pattern1.png"
            x="0"
            y="0"
            width="100"
            height="50"
          />
        </pattern>
        <pattern
          id="pallu_pattern"
          patternUnits="userSpaceOnUse"
          width="100"
          height="50"
        >
          <image
            id="palluImage"
            href="pattern\pattern1.png"
            x="0"
            y="0"
            width="100"
            height="50"
          />
        </pattern>
        <pattern
          id="body_pattern"
          patternUnits="userSpaceOnUse"
          width="100"
          height="50"
        >
          <image
            id="bodyImage"
            href="pattern\pattern1.png"
            x="0"
            y="0"
            width="100"
            height="50"
          />
        </pattern>
        <pattern
          id="borderTop_pattern"
          patternUnits="userSpaceOnUse"
          width="100"
          height="50"
        >
          <image
            id="borderTopImage"
            href="pattern\pattern1.png"
            x="0"
            y="0"
            width="100"
            height="50"
          />
        </pattern>
        <pattern
          id="borderBottom_pattern"
          patternUnits="userSpaceOnUse"
          width="100"
          height="50"
        >
          <image
            id="borderBottomImage"
            href="pattern\pattern1.png"
            x="0"
            y="0"
            width="100"
            height="50"
          />
        </pattern>
      </defs>
      <g>
        <rect
          id="blouseRect"
          x="5"
          y="7"
          width="162"
          height="205"
          style="fill: url(#blouseGradient); fill-opacity: 0.9"
        />
        <rect
          id="blouseRectPat"
          x="5"
          y="7"
          width="162"
          height="205"
          style="fill: url(#blouseGradient); fill-opacity: 0.1"
        />
        <rect
          id="palluRect"
          x="170"
          y="7"
          width="250"
          height="205"
          style="fill: url(#palluGradient); fill-opacity: 0.9"
        />
        <rect
          id="palluRectPat"
          x="170"
          y="7"
          width="250"
          height="205"
          style="fill: url(#palluGradient); fill-opacity: 0.1"
        />
        <rect
          id="bodyRect"
          x="422"
          y="22"
          width="470"
          height="173"
          style="fill: url(#bodyGradient); fill-opacity: 0.9"
        />
        <rect
          id="bodyRectPat"
          x="422"
          y="22"
          width="470"
          height="173"
          style="fill: url(#bodyGradient); fill-opacity: 0.1"
        />
        <rect
          id="borderTopRect"
          x="422"
          y="7"
          width="470"
          height="15"
          style="fill: url(#borderGradient); fill-opacity: 0.9"
        />
        <rect
          id="borderTopRectPat"
          x="422"
          y="7"
          width="470"
          height="15"
          style="fill: url(#borderGradient); fill-opacity: 0.1"
        />
        <rect
          id="borderBottomRect"
          x="422"
          y="198"
          width="470"
          height="15"
          style="fill: url(#borderGradient); fill-opacity: 0.9"
        />
        <rect
          id="borderBottomRectPat"
          x="422"
          y="198"
          width="470"
          height="15"
          style="fill: url(#borderGradient); fill-opacity: 0.1"
        />
      </g>
    </svg>
    <br />
    <form name="customize" method="post" action="#">
      <table border=1>
        <tr>
          <td colspan="5"><center>Blouse Design</center></td>
        </tr>
        <tr>
          <td>Color :</td>
          <td><input type="color" id="blouseColorInp" name="blouseColorInp" value="#ffffff"/></td>
          <td>Pattern : </td>
          <td><select id="blousePat" name="blousePat"></select></td>
          <td><input type="button" value="Apply" onclick="applyColor('blouse')" /></td>
        </tr>
      </table>
      <table border=1>
        <tr>
          <td colspan="5"><center>Pallu Design</center></td>
        </tr>
        <tr>
          <td>Color :</td>
          <td><input type="color" id="palluColorInp" name="palluColorInp" value="#ffffff"/></td>
          <td>Pattern : </td>
          <td><select id="palluPat" name="palluPat"></select></td>
          <td><input type="button" value="Apply" onclick="applyColor('pallu')" /></td>
        </tr>
      </table>
      <table border=1>
        <tr>
          <td colspan="5"><center>Body Design</center></td>
        </tr>
        <tr>
          <td>Color :</td>
          <td><input type="color" id="bodyColorInp" name="bodyColorInp" value="#ffffff"/></td>
          <td>Pattern : </td>
          <td><select id="bodyPat" name="bodyPat"></select></td>
          <td><input type="button" value="Apply" onclick="applyColor('body')" /></td>
        </tr>
      </table>
      <table border=1>
        <tr>
          <td colspan="5"><center>Top Border Design</center></td>
        </tr>
        <tr>
          <td>Color :</td>
          <td><input type="color" id="borderTopColorInp" name="borderTopColorInp" value="#ffffff"/></td>
          <td>Pattern : </td>
          <td><select id="borderTopPat" name="borderTopPat"></select></td>
          <td><input type="button" value="Apply" onclick="applyColor('borderTop')" /></td>
        </tr>
      </table>
      <table border=1>
        <tr>
          <td colspan="5"><center>Bottom Border Design</center></td>
        </tr>
        <tr>
          <td>Color :</td>
          <td><input type="color" id="borderBottomColorInp" name="borderBottomColorInp" value="#ffffff"/></td>
          <td>Pattern : </td>
          <td><select id="borderBottomPat" name="borderBottomPat"></select></td>
          <td><input type="button" value="Apply" onclick="applyColor('borderBottom')" /></td>
        </tr>
      </table>
      <label for="noOfItems">No of Items:</label>
      <select name="noOfItems">
        <?php
          for($i=1;$i<=30;$i++) {
        ?>
        <option value=<?php echo $i?>><?php echo $i?></option>
        <?php
          }
        ?>
      </select>
    <input type="submit" name="btnProceed" id="payment-button" value="Proceed to Payment"/>
  </form>
    <script src="saree.js"></script>
  </body>
</html>
