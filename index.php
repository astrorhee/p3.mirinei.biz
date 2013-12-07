<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>CSCI E-15 :: Project 3 :: Jaehyon Rhee (Jay)</title>
    <!-- - - - - - - - - - - -->
    <!-- Jaehyon Rhee (Jay)  -->
    <!-- December 6, 2013    -->
    <!-- CSCI E-15 Project 3 -->
    <!-- - - - - - - - - - - -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <script src="./js/conversion.js"></script>
</head>

<body>

  <table>
    <tr>
      <td>

        <div class="window-outer">
          <br>
          <h1>Astronomical Distance Converter</h1>
          <br>
        </div>

        <br>

        <div class="window-outer">
          <form>

            <table border="0">
              <tr>
                <td style="width: 10px;"></td>

                <td>
                  <table>
                    <tr>
                      <td><br><input id="0" onchange="conversion(id)"></td>
                      <td><br>m (meters)</td>
                    </tr>
                    <tr>
                      <td><br><input id="1" onchange="conversion(id)"></td>
                      <td><br>miles</td>
                    </tr>
                    <tr>
                      <td><br><input id="2" onchange="conversion(id)"></td>
                      <td><br>AU (Astronomical Unit)</td>
                    </tr>
                    <tr>
                      <td><br><input id="3" onchange="conversion(id)"></td>
                      <td><br>ly (light-years)</td>
                    </tr>
                    <tr>
                      <td><br><input id="4" onchange="conversion(id)"></td>
                      <td><br>pc (parsec)</td>
                    </tr>
                    <tr>
                      <td><br><input id="13" onchange="as_to_AU()"></td>
                      <td><br> " (arcsec)</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>for Parallax Angle</td>
                    </tr>
                  </table>
                </td>

                <td style="width: 15px;"></td>

                <td>
                  <table style="margin-bottom: 10px;" border="0">
                    <tr>
                      <td><br><input id="5"  onchange="conversion(id)"></td>
                      <td><br>Moon Radius</td>
                    </tr>
                    <tr>
                      <td><br><input id="6"  onchange="conversion(id)"></td>
                      <td><br>Earth Radius</td>
                    </tr>
                    <tr>
                      <td><br><input id="7"  onchange="conversion(id)"></td>
                      <td><br>Solar Radius</td>
                    </tr>
                    <tr>
                      <td><br><input id="8"  onchange="conversion(id)"></td>
                      <td><br>Solar System</td>
                    </tr>
                    <tr>
                      <td><br><input id="9"  onchange="conversion(id)"></td>
                      <td><br>Milky Way Galaxy</td>
                    </tr>
                    <tr>
                      <td><br><input id="10" onchange="conversion(id)"></td>
                      <td><br>Local Group</td>
                    </tr>
                    <tr>
                      <td><br><input id="11" onchange="conversion(id)"></td>
                      <td><br>Local Supercluster</td>
                    </tr>
                    <tr>
                      <td><br><input id="12" onchange="conversion(id)"></td>
                      <td><br>Observable Universe</td>
                    </tr>
                  </table>
                </td>

                <td style="width: 10px;"></td>
              </tr>
            </table>

        </div>

        <br>

        <div class="window-outer">
            <br>
            <table>
              <tr>
                <td>
                  <input type="button" value="Convert">
                  &nbsp;
                </td>
                <td>
                  &nbsp;
                  <input type="reset" value="Reset">
                </td>
              </tr>
            </table>
          </form>
          <br>
        </div>

      </td>
    </tr>
  </table>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

</body>

</html>