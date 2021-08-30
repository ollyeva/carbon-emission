<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Carbon eMISSION Results</title>
    <link rel="javascript" href="js/main.js" />
  </head>

  <style type="text/css">

html {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.center-align {
  margin-top: 60px;
  margin-left: auto;
  margin-right: auto;
  width: 700px;
  text-align: center;
  line-height: 2rem;
  font-size: 1.2rem;
  font-weight: 500;
}

.link{
  font-size: 0.9rem;
  line-height: 25px;
}

.punch {
  text-transform: uppercase;
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 0px;
}

@media screen and (max-width: 720px) {
  .center-align {
    width: 400px;
  }
}

@media screen and (max-width: 420px) {
  .center-align {
    width: 300px;
  }
}

</style>

<body>
<div class="center-align">
<p>

<?php
$google = 0.0108171;
$facebook = 0.00056887366;
$email = 0.004;
$netflix = 0.053;
$youtube = 0.001;
$instagram = 0.00004;
?>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Google: <u><?php echo round(($google * $_GET["google"]), 3) ?></u>&nbsp;KgCO2e<br>
&nbsp&nbsp Facebook: <u><?php echo round(($facebook * $_GET["facebook"]), 3) ?></u>&nbsp;KgCO2e<br>
Emails sent: <u><?php echo round(($email * $_GET["emails"]), 3) ?></u>&nbsp;KgCO2e<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Netflix: <u><?php echo round(($netflix * $_GET["netflix"]), 3) ?></u>&nbsp;KgCO2e<br>
&nbsp&nbsp&nbsp YouTube: <u><?php echo round(($youtube * $_GET["youtube"]), 3) ?></u>&nbsp;KgCO2e<br>
&nbsp&nbsp Instagram: <u><?php echo round(($instagram * $_GET["instagram"]), 3) ?></u>&nbsp;KgCO2e<br>
<br>
<p class="punch">
  You emit <u>
    <?php echo round(($google * $_GET["google"]) + ($facebook * $_GET["facebook"]) + ($email * $_GET["emails"]) + ($netflix * $_GET["netflix"]) + ($youtube * $_GET["youtube"]) + ($instagram * $_GET["instagram"]), 3) ?>&nbsp;Kg</u> carbon emissions everyday</p>
<p class="punch">
  You emit <u>
    <?php echo round((($google * $_GET["google"]) + ($facebook * $_GET["facebook"]) + ($email * $_GET["emails"]) + ($netflix * $_GET["netflix"]) + ($youtube * $_GET["youtube"]) + ($instagram * $_GET["instagram"])) * 7, 3) ?>&nbsp;Kg</u> carbon emissions everyweek</p>
<p class="punch">
  You emit <u>
    <?php echo round((($google * $_GET["google"]) + ($facebook * $_GET["facebook"]) + ($email * $_GET["emails"]) + ($netflix * $_GET["netflix"]) + ($youtube * $_GET["youtube"]) + ($instagram * $_GET["instagram"])) * 30.25, 3) ?>&nbsp;Kg</u> carbon emissions every month</p>
<p class="punch">
  You emit <u>
    <?php echo round((($google * $_GET["google"]) + ($facebook * $_GET["facebook"]) + ($email * $_GET["emails"]) + ($netflix * $_GET["netflix"]) + ($youtube * $_GET["youtube"]) + ($instagram * $_GET["instagram"])) * 365, 3) ?>&nbsp;Kg</u> carbon emissions every year</p>
<br>
<a class="link" href="post-info.html">Click to learn about this project.</a>
<a class="link" href="counters.html">Click here for live counters.</a>
</p>
</div>
</body>
</html>