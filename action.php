<? php 
    // connection à la base de données
    $servername = "sql105.infinityfree.com";
    $username = "if0_36858946";
    $password = "BtDyG0Ngjh";
    $dbname = "";
    
    try {
      $conn = new PDO("mysql:host=$servername;$dbname=$dbname",$username,$password);
      $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDO Exception$e ) {
      echo" la connexion à échoué :" .$e -> getMessage();
    }
    
    if (isset($_POST['envoyer'])) {
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $mot = $_POST['mot'];
      $sql = ("INSERT INTO 'users' ('nom','prenom','mot')VALUES"(:nom,:prenom,:mot));
      $stmt = $conn -> prepare($sql);
      $stmt -> bindParam(':nom', $nom);
      $stmt -> bindParam(':prenom', $prenom);
      $stmt -> bindParam(':mot', $mot);
      $stmt -> execute();
    }
?>