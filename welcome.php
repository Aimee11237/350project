<?php
   include('session.php');
?>
<html>
<style type="text/css">
form{
  text-align: center;
}
body{
  background-image:;

}
th.title{
  text-align: left;
}
table.gridtable {
    font-family: verdana,arial,sans-serif;
    font-size:11px;
    color:#333333;
    border-width: 5px;
    border-color: #666666;
    border-collapse: collapse;
}
table.gridtable th {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #dedede;
}
table.gridtable td {
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #666666;
    background-color: #ffffff;
}
  table,th,td{
    border:3px solid blue;
    border-collapse: collapse;
  }
  th,td{
    padding:10px;
  }
</style>
   <head>
      <title>Welcome </title>
   </head>

      <body bgcolor="c0ebd7">
      <?php echo $login_session; ?>
      <form action = "insert.php" method="post">

        <table style="width:70%" class="gridtable" align="center">
          <tr>
            <th colspan="3">Computer Science Project</th>
          </tr>
          <tr>
            <form>
              <th colspan="3" class="title">
                Group Member: <input type="text" name="groupmember" value="">
                </th>
            </form>
          </tr>
          <tr>
            <th colspan="3" class="title">Project Title: <input type"text" name="projecttitle"</th>
          </tr>
          <tr>
            <th colspan="3" class="title">Group Number: <input type"text" name"groupnumber"</th>
          </tr>
          <tr>
            <td>Criteria</td>
            <td>Developing(0-10)</td>
            <td>Accomplished(10-15)</td>
          </tr>
          <tr>
            <td>Articulate requirements</td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              </select>
            </td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Choose appropriate tools and methods for each task</td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              </select>
            </td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </td>
          </tr>
          <tr>
            <td>Give clear and coherent oral presentation</td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              </select>
            </td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </td>
          </tr>
          <tr>
            <td>Functioned well as a team</td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              </select>
            </td>
            <td>
              <select id="status" name="status">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
            </td>
          </tr>
          <tr>
            <th>Total:</th>
            <td>
            </td>
            <td></td>
          </tr>
          <tr>
            <td colspan="3">Judge's name: <input type"text" name"Judgename"></td>
          </tr>
          <tr>
            <td colspan="3">Comments: <input type"text" name"Comments"></td>
          </tr>
        </table>
        <br>
        <form>
          <input class"submit" type="submit">
        </form>
      <h5><a href = "logout.php">Sign Out</a></h5>
   </body>

</html>
