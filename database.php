<?php
try {
    $uri = "mysql://avnadmin:AVNS_T31J9P_Ek7MewfqxFy3@mysql-1a931055-st-dd62.l.aivencloud.com:11784/defaultdb?ssl-mode=REQUIRED";
    $fields = parse_url($uri);

    // Build the DSN including SSL settings
    $conn = "mysql:host=" . $fields["host"];
    $conn .= ";port=" . $fields["port"];
    $conn .= ";dbname=QUANLYSACH";
    $conn .= ";sslmode=REQUIRED"; // Note: The SSL mode can be 'REQUIRED' or 'verify-ca', depending on your SSL setup.
    $conn .= ";sslrootcert=ca.pem";

    $db = new PDO($conn, $fields["user"], $fields["pass"]);
    // Set PDO to throw exceptions on error
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
