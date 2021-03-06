<?php

  session_start();

  if(isset($_SESSION['username'])){ ?>

    <!-- html source -->

    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Profile</title>
      </head>

      <body>
        <table noshade="noshade" width="1000" align="center" cellpadding="5">
          <tr>
            <td width="775"><img src="../res/x_com.png" alt="../res/x_com.png" height="80"></td>

            <td width="100" align="center" valign="center">
              <label><font face="calibri" color="#888888" size="4">Logged in as </font></label>
            </td>

            <td width="35" align="center" valign="center"><a href="../private/view_profile.php">
              <h3><font face="calibri" color="#444444"><?php echo $_SESSION['username']; ?></font></h3>
            </a></td>

            <td width="90" align="center" valign="center"><a href="../private/logout.php">
              <h3><font face="calibri" color="#888888">Logout</font></h3>
            </a></td>
          </tr>

          <tr>
            <td colspan="4"><hr noshade="noshade"></td>
          </tr>

          <tr height="600">
            <td colspan="4" valign="top">
              <table border="1" width="1000" cellpadding="10">
                <tr height="585">
                  <td width="250" valign="top">
                    <h3><font face="calibri" color="#444444">Account</font></h3>
                    <hr noshade="noshade">

                    <ul>
                      <li><a href="../private/dashboard.php"><h4><font face="calibri" color="#888888">Dashboard</font></h4></a></li>
                      <li><a href="../private/view_profile.php"><h4><font face="calibri" color="#444444">View Profile</font></h4></a></li>
                      <li><a href="../private/edit_profile.php"><h4><font face="calibri" color="#888888">Edit Profile</font></h4></a></li>
                      <li><a href="../private/change_picture.php"><h4><font face="calibri" color="#888888">Change Profile Picture</font></h4></a></li>
                      <li><a href="../private/change_password.php"><h4><font face="calibri" color="#888888">Change Password</font></h4></a></li>
                      <li><a href="../private/logout.php"><h4><font face="calibri" color="#888888">Logout</font></h4></a></li>
                    </ul>
                  </td>

                  <td width="750" valign="top">
                    <fieldset>
                      <legend><h3><font face="calibri" color="#444444">Profile</font></h3></legend>

                      <table width="100%">
                        <tr>
                          <td width="30%" valign="top">
                            <h3><font face="calibri" color="#444444">Name :</font></h3>
                          </td>

                          <td width="35%" valign="top">
                            <h3><font face="calibri" color="#888888"><?php echo $_SESSION['name']; ?></font></h3>
                          </td>

                          <td width="35%" align="center" valign="center" rowspan="7">
                            <img src="../res/bob1.png" alt="../res/bob1.png" width="180">
                            <br>
                            <a href="../private/change_picture.php"><h4><font face="calibri" color="#888888">Change</font></h4></a>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2"><hr noshade="noshade"></td>
                        </tr>

                        <tr>
                          <td width="30%" valign="top">
                            <h3><font face="calibri" color="#444444">Email :</font></h3>
                          </td>

                          <td width="35%" valign="top">
                            <h3><font face="calibri" color="#888888"><?php echo $_SESSION['email']; ?></font></h3>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2"><hr noshade="noshade"></td>
                        </tr>

                        <tr>
                          <td width="30%" valign="top">
                            <h3><font face="calibri" color="#444444">Gender :</font></h3>
                          </td>

                          <td width="35%" valign="top">
                            <h3><font face="calibri" color="#888888"><?php echo $_SESSION['gender']; ?></font></h3>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="2"><hr noshade="noshade"></td>
                        </tr>

                        <tr>
                          <td width="30%" valign="top">
                            <h3><font face="calibri" color="#444444">Date of Birth :</font></h3>
                          </td>

                          <td width="35%" valign="top">
                            <h3><font face="calibri" color="#888888"><?php echo "{$_SESSION['day']} . {$_SESSION['month']} . {$_SESSION['year']}"; ?></font></h3>
                          </td>
                        </tr>

                        <tr>
                          <td colspan="3"><hr noshade="noshade"></td>
                        </tr>

                        <tr>
                          <td width="30%" valign="top" colspan="3">
                            <a href="../private/edit_profile.php">
                              <h3><font face="calibri" color="#888888">Edit Profile</font></h3>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </fieldset>
                  </td>
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr height="60">
            <td colspan="4" align="center" valign="center">
              <hr noshade="noshade">
              <h4><font face="calibri" color="#444444">Copyright &copy; 2017</font></h4></td>
          </tr>
        </table>
      </body>
    </html>

    <!-- end of html -->

  <?php }else{

    header("location: ../public/login.html");
  }
?>
