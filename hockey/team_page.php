<?php
include('inc/functions.php');

$section = null;


if(isset($_GET["team"])) {
  if ($_GET["team"] == "HV71") {
    $section = "HV71";
  } elseif ($_GET["team"] == "Brynäs") {
    $section = "Brynäs";
  }
}
include ('inc/header.php');

?>
 <body>
  <?php
  $result = $db->query("SELECT Id FROM koolag WHERE LagNamn = '".$section."'");
  $teamname = $result->fetchAll(PDO::FETCH_ASSOC);
  foreach ($teamname as $lag) {
    $tname = $lag['Id'];
  }?>
  <select name="teams">
    <option value="trupp">Trupp</option>
    <option value="statistik">Statistik</option>
    <option value="djurgården">Djurgården</option>
    <option value="malmö">Malmö</option>
  </select>

  <div class="playerlist">
  <?php fullPlayersList($tname);
  include('inc/footer.php'); ?>
