<?php require 'config.php';
// For testing, we bypass login. In real life, check $_SESSION.
$result = $conn->query("SELECT * FROM final_reports ORDER BY year DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Final Report - TNB Archiving</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: sans-serif; margin: 0; background: #f4f6f9; }
        .sidebar { width: 230px; background: #343a40; height: 100vh; position: fixed; color: #c2c7d0; }
        .sidebar h3 { padding: 20px; color: white; border-bottom: 1px solid #4b545c; margin: 0; font-size: 1.1rem;}
        .sidebar a { display: block; padding: 15px 20px; color: #c2c7d0; text-decoration: none; }
        .sidebar a:hover, .sidebar a.active { background: #494e53; color: white; }
        .main { margin-left: 230px; padding: 30px; }
        .header-img { width: 100%; max-height: 200px; object-fit: cover; border-radius: 5px; margin-bottom: 20px; }
        .table-container { background: white; padding: 15px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; font-size: 14px; }
        th { background: #f8f9fa; text-align: left; padding: 12px; border-bottom: 2px solid #dee2e6; }
        td { padding: 12px; border-bottom: 1px solid #dee2e6; }
        .top-bar { background: #17a2b8; color: white; padding: 10px 15px; display: flex; justify-content: space-between; align-items: center; border-radius: 5px 5px 0 0; }
        .top-bar input { padding: 5px; border-radius: 3px; border: none; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div style="padding:15px; text-align:center;">Welcome,</div>
        <a href="index-adm.php" class="active"><i class="fas fa-search"></i> Search Final Report</a>
        <a href="index2-adm.php"><i class="fas fa-folder"></i> Search Project File</a>
        <a href="insertchoose.php"><i class="fas fa-database"></i> Update Database</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> logout</a>
    </div>

    <div class="main">
        <h2>Archiving System</h2>
        <!-- Replace with your actual TNB building image link -->
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/TNB_Headquarters.jpg/800px-TNB_Headquarters.jpg" class="header-img" alt="TNB">
        
        <h3>Final Report</h3>
        
        <div class="table-container">
            <div class="top-bar">
                <span>Search File</span>
                <div>
                    <button>Print</button>
                    <select><option>10</option></select>
                    <input type="text" placeholder="Search...">
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Project No</th>
                        <th>Project Leader</th>
                        <th>Project Title</th>
                        <th>Location</th>
                        <th>Year</th>
                        <th>Fund</th>
                        <th>Total Copy</th>
                        <th>Availibility</th>
                        <th>Email To Borrow</th>
                        <th>Borrow Date</th>
                        <th>Due Date</th>
                        <th>Borrower</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= e($row['project_no']) ?></td>
                        <td><?= e($row['project_leader']) ?></td>
                        <td><?= e($row['project_title']) ?></td>
                        <td><?= e($row['location']) ?></td>
                        <td><?= e($row['year']) ?></td>
                        <td><?= e($row['fund']) ?></td>
                        <td><?= e($row['total_copy']) ?></td>
                        <td><?= e($row['availability']) ?></td>
                        <td style="color: #007bff;"><?= e($row['email_to_borrow']) ?></td>
                        <td><?= e($row['borrow_date']) ?></td>
                        <td><?= e($row['due_date']) ?></td>
                        <td><?= e($row['borrower']) ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>