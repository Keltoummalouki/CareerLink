<?php
require_once '../../../vendor/autoload.php';

use App\sessionService\AuthSession;
use App\sessionService\AuthMiddleware;
use App\Models\OfferModel;
use App\Controllers\OfferController;
use App\Config\DatabaseConnection;


$auth = new AuthMiddleware();
$auth->requireAdmin();

$session = new AuthSession();

    if (!$session->get('id') || $session->get('role') !== "Admin") {
        header("Location: ../authentification/login.php");
        exit();
    }

    $database = new DatabaseConnection();
    $connexion = $database->connect();

    $totalVisitor = $connexion->query("SELECT COUNT(*) AS count FROM member")->fetch(PDO::FETCH_ASSOC)['count'];
    $totalRecruiter = $connexion->query("SELECT COUNT(*) AS count FROM member WHERE role_id = 2")->fetch(PDO::FETCH_ASSOC)['count'];
    $totalCandidate= $connexion->query("SELECT COUNT(*) AS count FROM member WHERE role_id = 3")->fetch(PDO::FETCH_ASSOC)['count'];
    $totalOffers = $connexion->query("SELECT COUNT(*) AS count FROM offer")->fetch(PDO::FETCH_ASSOC)['count'];
    // $result = $connexion->query("SELECT * FROM offer")->fetch(PDO::FETCH_ASSOC);
    $offers = $connexion->query("SELECT * FROM offer")->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../../assets/styles/dashboard.css">
</head>

<body>
    <header>
        <div class="logosec">
        <div class="logo">Career<span>Link</span></div>
        </div>

        <div class="searchbar">
            <input type="text"
                placeholder="Search">
            <div class="searchbtn">
                <img src="../../../assets/images/Icons/search.png"
                    class="icn srchicn"
                    alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
                class="icn"
                alt="">
            <div class="dp">
                <img src="../../../assets/images/Icons/Profil.png"
                    class="dpicn"
                    alt="dp">
                    <a href="../pages/profil.php"></a>
            </div>
        </div>
    </header>

    <div class="main-container">

        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard">
                        <a href="./dashboard.php">Dashboard</a>
                    </div>

                    <div class="nav-option option2">
                        <img src="../../../assets/images/Icons/Candidate.png"
                            class="nav-img"
                            alt="institution">
                        <a href="../candidate/index.php"> Candidate</a>
                    </div>

                    <div class="option3 nav-option">
                        <img src="../../../assets/images/Icons/recuiter.png"
                            class="nav-img"
                            alt="articles">
                        <a href="../recruiter/index.php"> Recruiter</a>
                    </div>

                    <div class="nav-option option4">
                        <img src="../../../assets/images/Icons/emploi-black.png"
                            class="nav-img"
                            alt="report">
                        <a href="./offers/index.php"> Offers</a>
                    </div>

                    <div class="nav-option option5">
                        <img src="../../../assets/images/Icons/report.png"
                            class="nav-img"
                            alt="raport">
                        <h3> Report</h3>
                    </div>

                    <div class="nav-option option6">
                        <img src="../../../assets/images/Icons/settings.png"
                            class="nav-img"
                            alt="settings">
                        <a href="#"> Settings</a>
                    </div>

                    <div class="nav-option logout">
                        <img src="../../../assets/images/Icons/login.png"
                            class="nav-img"
                            alt="logout">
                        <a href="#">Logout</a>
                    </div>

                </div>
            </nav>
        </div>

        <div class="main">

            <div class="searchbar2">
                <input type="text"
                    name=""
                    id=""
                    placeholder="Search">
                <div class="searchbtn">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                </div>
            </div>

            <div class="box-container">
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $totalVisitor ?></h2>
                        <h2 class="topic">ToTal Visitors</h2>
                    </div>

                    <img src="../../../assets/images/Icons/visiteur-white.png"
                        alt="visitors">
                </div>

                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $totalRecruiter  ?></h2>
                        <h2 class="topic">Total Recruiters</h2>
                    </div>

                    <img src="../../../assets/images/Icons/recruiter-white.png"
                        alt="recruiter">
                </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $totalCandidate ?></h2>
                        <h2 class="topic">Total Candidates</h2>
                    </div>

                    <img src="../../../assets/images/Icons/Candidate.png"
                        alt="candidate">
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $totalOffers ?></h2>
                        <h2 class="topic">Total Offers</h2>
                    </div>

                    <img src="../../../assets/images/Icons/emploi-white.png" alt="active">
                </div>
            </div>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent offers</h1>
                    <div>
                    
                    <button id="add-btn"><a href="../admin/options.php">Options</a></button>

                    </div>
                </div>
                    <div class="table-wrapper">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th class="t-op">Name</th>
                                    <th class="t-op">Title</th>
                                    <th class="t-op">Salary</th>
                                    <th class="t-op">Location</th>
                                    <th class="t-op">Category</th>
                                    <th class="t-op"></th>
                                    <th class="t-op"></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if (count($offers) > 0) {
                                    foreach ($offers as $offer){
                                        echo '<tr class="tr-style">';
                                        echo '<td class="output">' . $offer['title'] . '</td>';
                                        echo '<td class="output">' . $offer['salary'] . '</td>';
                                        echo '<td class="output">' . $offer['location'] . '</td>';
                                        echo '<td class="output">' . $offer['category_id'] . '</td>';
                                    }
                                        echo '<td>
                                        <form method="POST" action="edit.php?id=<?php echo $id;?>">
                                            <input type="hidden" name="player_id" value="' . ($offer['id']) . '">
                                            <button type="submit" class="edit-btn">
                                                <img src="../../../assets/images/Icons/edit-button.png" class="icon-output" alt="edit-icon">
                                            </button>
                                        </form>
                                        </td>';

                                        echo '<td>
                                            <form method="POST" action="../includes/delete.php";">
                                                <input type="hidden" name="player_id" value="' . $offer['id'] . '">
                                                <button type="submit" class="delete-btn">
                                                    <img src="../../../assets/images/Icons/delete-icon.png" class="icon-output" alt="delete-icon">
                                                </button>
                                            </form>
                                        </td>';


                                        echo '</tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>