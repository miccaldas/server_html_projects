<?php 
$servername = "localhost";
$username = "root";
$password = "xxxx";
$dbname = "pwd";

function allContent() {
    try {  
        $conn = new PDO("mysql:host=$servername:dbname=$dbname", $username, $password);
        $sql = "SELECT * FROM pwd";
        $q = $conn->query($sql);
        $q ->setFetchMode(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Could not connect to the database $dbname: "  . $e->getMessage());
    }   
    }
allContent();
?>

<?php while ($row = $q-->fetch()): ?>
    <h3><?php echo htmlspecialcharacters($row['pwdid']); ?></h3>
    <h3><?php echo htmlspecialcharacters($row['site']); ?></h3>
    <h3><?php echo htmlspecialcharacters($row['username']); ?></h3>
    <h3><?php echo htmlspecialcharacters($row['passwd']); ?></h3>
    <h3><?php echo htmlspecialcharacters($row['comment']); ?></h3>
<?php endwhile; ?>
    
