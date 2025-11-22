<?php
// --- Supabase PostgreSQL Connection ---
$host = "db.zjxpkvsquiaznyvsjpzo.supabase.co"; // Replace with your host
$port = "5432";
$dbname = "postgres"; // Default DB name
$user = "postgres";   // Default user
$password = "Spaul4443370."; // Replace with your DB password

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database connected successfully!";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
