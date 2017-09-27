          <?php
              $con =mysql_connect("localhost","root","admin");
              mysql_select_db("my_crud");
           ?>
          <!DOCTYPE html>
          <html lang="en-US">
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-compatible"content="IE-edge">
                    <meta name="viewport"content="width=device-width">
                    <title>MY Bootstrap</title>
                    <link rel="stylesheet"href="css/bootstrap.css"/>
                    <link rel="stylesheet"href="css/mystyle.css"/>

                  </head>
          <body>
            <div class="container">
                  <div  class="row">
                        <div class="col-sm-3">
                        </div>
                              <div class="col-sm-6 style">
                              <center><h3>Donetion Receipt</h3></center>
                                  <div class="padding">
                                <p class="left"> Date:___/___/____</P>
                                <p class="right">Receipt no:_________</P>
                                <p class="left"> Doneted By: _______________________________________________</P>
                                <p class="left"> Donor Address:</P><P class="right">______________________________________</P>
                                <p class="left">Amount Received By Charity (A):</P><P class="right">Rs.________________</P>
                                <p class="left">Value of Advantage (B):</P><P class="right">Rs.________________</P>
                                <p class="left">Eligible Amount of gift for tex puposes :</P><P class="right">Rs.________________</P>
                                <p class="left"> Appraised By:</P><P class="right">_________________________________________</P>
                                <p class="left"> Appraiser Address:</P><P class="right">  ___________________________________</P>
                                <p class="left"> Description of Property Received by charity: </P><P class="left"> __________________________________________________________</P>
                                  <p class="left"> Authorized Signature: </P><P class="right">___________________________</P>
                                  <center><h4 class="left thanku">Thamk You for your generosity. We appreciate your support! </h4></center>
                              </div>
                              </div>


                       <div class="col-sm-3">
                       </div>
                  </div>
          </div>
              <script type="stylesheet"src="js/jquery.js"></script>
              <script type="stylesheet"src="js/bootstrap.js"></script>
          </body>
          </html>
