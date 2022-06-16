<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <?php include "seting.php"; ?>
</head>
   <link rel="stylesheet" href="style.css" defer>
<body>

<h1>Recensement d'accidents</h1>

<form action="connect.php" method="post">
  <h1>Choissisez votre ville</h1>
  <div class="select" >
     <select name="ville" >

    
      <option value=""></option>
      <?php foreach ($data as $ville): ?>
     <option value="<?= $ville->id?>"><?= $ville->nom ?></option>
     <?php endforeach; ?>
        <!-- <option name="Abidjan">Abidjan</option>
        <option name="Adzopé">Adzope</option>
        <option name="Daloa">Daloa</option>
        <option name="Divo">Divo</option>
        <option name="Korhogo">Korhogo</option>
        <option name="Agboville">Agboville</option>
        <option name="Yamoussoukro">Yamoussoukro</option>
        <option name="Assinie">Assinie</option>
        <option name="Seguela">Seguela</option>
        <option name="Bondoukou">Bondoukou</option>
        <option name="Tanda">Tanda</option>
        <option name="Zuenoula">Zuenoula</option>
        <option name="Tabou">Tabou</option>
        <option name="Dabou">Dabou</option>
        <option name="Abengourou">Abengourou</option>
        <option name="Bongouanou">Bongouanou</option>
        <option name="Dimbokro">Dimbokro</option>
        <option name="Anyaman">Anyaman</option>
        <option name="San-pedro">San-pedro</option>
        <option name="Gagnoa">Gagnoa</option>
        <option name="Grand-Bassam">Grand-Bassam</option>
        <option name="Man">Man</option>
        <option name="Bingerville">Bingerville</option>
        <option name="Oumé">Oumé</option> --> -->
     </select>
   
  </div>
 
  <label>Nombre de victimes: </label><br>
  <input type="text"  name="victimes" placeholder="entrez le nombre de victimes" value=""><br>
  <label for="fname"> Source : </label><br>
  <input type="text"  name="source" placeholder="entrez votre source"><br><br>
  <label>Date  </label><br>
  <input type="date" name="data" ><br><br>
  <input type="submit" value="enregistrement" name="enregistrement">
</form> 



</body>
</html>