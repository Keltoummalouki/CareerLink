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
                <img src="./assets/media/icons/search.png"
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
                <img src="./assets/media/icons/Profil.png"
                    class="dpicn"
                    alt="dp">
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
                        <a href="./index.php">Dashboard</a>
                    </div>

                    <div class="nav-option option2">
                        <img src="assets/media/icons/stadium.png"
                            class="nav-img"
                            alt="institution">
                        <a href="./stadium.php"> Condidate</a>
                    </div>

                    <div class="option3 nav-option">
                        <img src="assets/media/icons/soccer-player.png"
                            class="nav-img"
                            alt="articles">
                        <a href="./players.php"> Players</a>
                    </div>

                    <div class="nav-option option4">
                        <img src="./assets/media/icons/football-club-black.png"
                            class="nav-img"
                            alt="report">
                        <a href="./teams.php"> Team</a>
                    </div>

                    <div class="nav-option option5">
                        <img src="./assets/media/icons/report.png"
                            class="nav-img"
                            alt="raport">
                        <h3> Report</h3>
                    </div>

                    <div class="nav-option option6">
                        <img src="./assets/media/icons/settings.png"
                            class="nav-img"
                            alt="settings">
                        <a href="#"> Settings</a>
                    </div>

                    <div class="nav-option logout">
                        <img src="./assets/media/icons/login.png"
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
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Total Players</h2>
                    </div>

                    <img src="./assets/media/icons/soccer-player-white.png"
                        alt="Player">
                </div>

                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">150</h2>
                        <h2 class="topic">Total nationality</h2>
                    </div>

                    <img src="./assets/media/icons/nationnality.png"
                        alt="nationality">
                </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">320</h2>
                        <h2 class="topic">Total clubs</h2>
                    </div>

                    <img src="./assets/media/icons/football-club.png"
                        alt="comments">
                </div>

                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Active player</h2>
                    </div>

                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="active">
                </div>
            </div>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Players</h1>
                    <button id="add-btn">Add Player</button>

                    <div class="popup">
                        <button class="close-btn">&times;</button>
                            <form id="myForm" class="form"  method="post"  role="form" 
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <h2>Player information</h2>
                                <div class="form-elements">
                                    <div id="divPhoto">
                                        <label for="photo">Player photo</label>
                                        <input type="url" placeholder="Player photo URL" id="photo" class="inputs" require/>
                                        <span id="erreurimage" class="erreur-message"></span>
                                    </div>
                                    <div class="name-rate-input">
                                        <div class="input-name" id="divName">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" placeholder="Enter player name" require/>
                                            <span class="erreur-message" id="erreurname"></span>
                                        </div>
                                        <div id="divRating">
                                            <label for="rating">Rating</label>
                                            <input type="number" id="rating" name="rating" min="20" max="99" class="inputs"
                                                placeholder="Rating"require />
                                            <span class="erreur-message" id="erreurrating"></span>
                                        </div>
                                    </div>
                                    <div class="select-position" id="divPosition">
                                        <label for="position">Position</label>
                                        <select id="position" require name="position" onchange="this.form.submit()" >
                                            <option></option>
                                            <option value="Defender central (CB)" <?= $position === 'Defender central (CB)' ? 'selected' : '' ?>>Defender central (CB)</option>
                                            <option value="Defender full-back left (LB)" <?= $position === 'Defender full-back left (LB)' ? 'selected' : '' ?>>Defender full-back left (LB)</option>
                                            <option value="Defender full-back right (RB)" <?= $position === 'Defender full-back right (RB)' ? 'selected' : '' ?>>Defender full-back right (RB)</option>
                                            <option value="Defender Midfielder central (CM)" <?= $position === 'Defender Midfielder central (CM)' ? 'selected' : '' ?>>Defender Midfielder central (CM)
                                            </option>
                                            <option value="Defender attacking midfielder (CM)" <?= $position === 'Defender attacking midfielder (CM)' ? 'selected' : '' ?>>Defender attacking midfielder
                                                (CM)</option>
                                            <option value="Central striker (ST)" <?= $position === 'Central striker (ST)' ? 'selected' : '' ?>>Central striker (ST)</option>
                                            <option value="Winger left (LW)" <?= $position === 'Winger left (LW)' ? 'selected' : '' ?>>Winger left (LW)</option>
                                            <option value="Winger right (RW)" <?= $position === 'Winger left (LW)' ? 'selected' : '' ?>>Winger right (RW)</option>
                                            <option value="Goalkeeper (GK)" <?= $position === 'Goalkeeper (GK)' ? 'selected' : '' ?>>Goalkeeper (GK)</option>
                                        </select>
                                        <span id="erreurposition" class="erreur-message"></span>
                                    </div>

                                    <div class="select-nationality" id="divNationality">
                                        <label for="nationality">Nationality</label>
                                        <select id="nationality" require>
                                            <option></option>
                                            <option value="afghanistan">Afghanistan</option>
                                            <option value="albania">Albania</option>
                                            <option value="algeria">Algeria</option>
                                            <option value="argentina">Argentina</option>
                                            <option value="australia">Australia</option>
                                            <option value="brazil">Brazil</option>
                                            <option value="canada">Canada</option>
                                            <option value="china">China</option>
                                            <option value="egypt">Egypt</option>
                                            <option value="france">France</option>
                                            <option value="germany">Germany</option>
                                            <option value="india">India</option>
                                            <option value="italy">Italy</option>
                                            <option value="japan">Japan</option>
                                            <option value="mexico">Mexico</option>
                                            <option value="morocco">Morocco</option>
                                            <option value="russia">Russia</option>
                                            <option value="saudi-arabia">Saudi Arabia</option>
                                            <option value="spain">Spain</option>
                                            <option value="united-states">United States</option>
                                        </select>
                                        <span id="erreurnationality" class="erreur-message"></span>
                                    </div>

                                    <div class="select-club" id="divClub">
                                        <label for="club">Club</label>
                                        <select id="club" require>
                                            <option></option>
                                            <option value="real-madrid">Real Madrid</option>
                                            <option value="barcelona">FC Barcelona</option>
                                            <option value="manchester-united">Manchester United</option>
                                            <option value="manchester-city">Manchester City</option>
                                            <option value="bayern-munich">Bayern Munich</option>
                                            <option value="paris-saint-germain">
                                                Paris Saint-Germain (PSG)
                                            </option>
                                            <option value="liverpool">Liverpool FC</option>
                                            <option value="chelsea">Chelsea FC</option>
                                            <option value="juventus">Juventus</option>
                                            <option value="inter-milan">Inter Milan</option>
                                            <option value="ac-milan">AC Milan</option>
                                            <option value="arsenal">Arsenal FC</option>
                                            <option value="ajax">Ajax</option>
                                            <option value="atletico-madrid">Atlético Madrid</option>
                                            <option value="dortmund">Borussia Dortmund</option>
                                            <option value="tottenham">Tottenham Hotspur</option>
                                        </select>
                                        <span id="erreurclub" class="erreur-message"></span>
                                    </div>
                                    <div class="formation">
                                        <?php foreach ($fields as $field): ?>
                                            <div class="stats-form">
                                                <label for="<?= $field['id'] ?>"><?= $field['label'] ?>:</label>
                                                <input type="number" 
                                                    id="<?= $field['id'] ?>" 
                                                    name="<?= $field['id'] ?>" 
                                                    class="inputs" 
                                                    placeholder="<?= $field['label'] ?>"
                                                    value="<?= isset($fieldValues[$field['id']]) ? htmlspecialchars($fieldValues[$field['id']]) : '' ?>">
                                                <span class="erreur-message" id="erreur-<?= $field['id'] ?>"></span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <button type="button" id="submit-btn" class="submit-form-btn">
                                        Add player
                                    </button>
                                </div>
                            </form>
                    </div>

                    </div>

                    <div class="table-wrapper">
                        <table class="styled-table">
                            <thead>
                                <tr>
                                    <th class="t-op">Name</th>
                                    <th class="t-op">Photo</th>
                                    <th class="t-op">Position</th>
                                    <th class="t-op">Nationality</th>
                                    <th class="t-op">Club</th>
                                    <th class="t-op">Rating</th>
                                    <th class="t-op">Status</th>
                                    <th class="t-op"></th>
                                    <th class="t-op"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($team = mysqli_fetch_assoc($result)) {
                                        echo '<tr class="tr-style">';
                                        echo '<td class="output">' .$team['name'].' </td>';
                                        echo '<td class="output"><img src="' . $team['photo'] . '" class="img-output photo-player" alt="Player Photo"></td>';
                                        echo '<td class="output">' . $team['position'] . '</td>';
                                        echo '<td class="output"><img src="' . $team['nationality'] . '" class="img-output " alt="Nationality Flag"></td>';
                                        echo '<td class="output"><img src="' . $team['club'] . '" class="img-output " id="club-img" alt="club logo"></td>';
                                        echo '<td class="output">' . $team['rating'] . '</td>';
                                        echo '<td class="output status-output"><h3>' . $team['status'] . ' </h3></td>';

                                        echo '<td>
                                        <form method="POST" action="includes/edit.php";">
                                            <input type="hidden" name="player_id" value="' . $team['id'] . '">
                                            <button type="submit" class="edit-btn">
                                                <img src="./assets/media/icons/edit-button.png" class="icon-output" alt="delete-icon">
                                            </button>
                                        </form>
                                        </td>';

                                        echo '<td>
                                            <form method="POST" action="includes/delete.php";">
                                                <input type="hidden" name="player_id" value="' . $team['id'] . '">
                                                <button type="submit" class="delete-btn">
                                                    <img src="./assets/media/icons/delete-icon.png" class="icon-output" alt="delete-icon">
                                                </button>
                                            </form>
                                        </td>';


                                        echo '</tr>';
                                    }
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