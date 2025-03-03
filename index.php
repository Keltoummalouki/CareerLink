<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Trouvez votre prochain emploi</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
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
                <img src="./assets/images/Icons/search.png"
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
            <a href="./src/Views/authentification/login.php"></a>
                <img src="./assets/images/Icons/Profil.png"
                    class="dpicn"
                    alt="dp">

            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Trouvez l'emploi de vos rêves</h1>
            <p>Des milliers d'opportunités professionnelles vous attendent. Connectez-vous avec les meilleures entreprises.</p>
            <section class="search-section">
            <form class="search-form">
            <input type="text" class="search-input" placeholder="Poste, compétences ou entreprise">
            <input type="text" class="search-input" placeholder="Ville ou région">
            <button type="submit" class="search-button">Rechercher</button>
        </form>
    </section>
        </div>
    </section>



    <section class="features">
        <div class="features-grid">
            <div class="feature-card">
                <h3>Pour les Candidats</h3>
                <p>Créez votre profil, téléchargez votre CV et postulez en un clic aux offres qui vous correspondent.</p>
            </div>
            <div class="feature-card">
                <h3>Pour les Recruteurs</h3>
                <p>Publiez vos offres d'emploi et accédez à notre base de talents qualifiés.</p>
            </div>
            <div class="feature-card">
                <h3>Matching Intelligent</h3>
                <p>Notre algorithme vous propose les meilleurs profils et opportunités selon vos critères.</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <div>
                <h4>CareerLink</h4>
                <ul class="footer-links">
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#blog">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4>Candidats</h4>
                <ul class="footer-links">
                    <li><a href="#search">Rechercher un emploi</a></li>
                    <li><a href="#profile">Créer un profil</a></li>
                    <li><a href="#alerts">Alertes emploi</a></li>
                </ul>
            </div>
            <div>
                <h4>Recruteurs</h4>
                <ul class="footer-links">
                    <li><a href="#post">Publier une offre</a></li>
                    <li><a href="#solutions">Solutions de recrutement</a></li>
                    <li><a href="#pricing">Tarifs</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>
