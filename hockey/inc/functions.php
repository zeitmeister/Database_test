<?php

function fullPlayersList($teamid)
{
include('connection.php');
  try {
      $results = $db->query("SELECT SpelarNamn, TröjNr, Pos FROM spelare WHERE LagId = '".$teamid."' ORDER BY Pos");
  } catch (Exception $e) {
    echo "Kunde inte hämta data från databasen" . $e->getMessage();
  }
?>
<div class="ulwrapper">
<ul>
<?php
$playerArray = $results->fetchAll(PDO::FETCH_ASSOC);
foreach ($playerArray as $player) {
  $playername = $player['SpelarNamn'];
  $playername .= ". #";
  $playername .= $player['TröjNr'];
  $playername .= " ";
  $playername .= $player['Pos'];
  ?>
<li><?php  echo $playername . " "; ?></li>
<?php
}
?>
</ul>
</div>
<?php }
?>
