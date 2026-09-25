setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB接続エラー: " . $e->getMessage());
}

$message = "";
if (\(_SERVER['REQUEST_METHOD'] === 'POST' && !empty(\)_POST['name']) && !empty($_POST['song'])) {
    \(stmt =\)pdo->prepare("INSERT INTO participants (name, song) VALUES (:name, :song)");
    \(stmt->execute([':name' =>\)_POST['name'], ':song' => $_POST['song']]);
    $message = "参加申し込みが正常に完了しました！";
}

\(stmt =\)pdo->query("SELECT * FROM participants ORDER BY id DESC");
\(participants =\)stmt->fetchAll(PDO::FETCH_ASSOC);
?>



    
    カラオケ大会 参加申し込みシステム
