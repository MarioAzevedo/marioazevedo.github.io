<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odds</title>
</head>
<body>
    <div>
        <h1 id="tournamentInfo"></h1>
        <div>
            <h2>Odds</h2>
            <div class="odds">
                <div class="team1">
                    <div class="odds-1">
                    <img id="team1Image" src="" alt="Team 1 Image">
                    <h3 id="team1Name"></h3>
                    <div class="oddsValueInner"></div>
                    </div>
                </div>
                <div class="odds-x">
                    <h3>Empate</h3>
                    <div class="oddsValueInner"></div>
                </div>
                <div class="team2">
                    <div class="odds-2">
                    <img id="team2Image" src="" alt="Team 2 Image">
                    <h3 id="team2Name"></h3>
                    <div class="oddsValueInner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function fetchAndPopulateOdds(matchId) {
            const apiUrl = `https://api.sofascore.app/api/v1/event/${matchId}/odds/226/featured`;
            const teamUrl = `https://api.sofascore.app/api/v1/event/${matchId}`;

            // Fetching team names and images
            fetch(teamUrl)
                .then(response => response.json())
                .then(data => {
                    document.getElementById("team1Name").textContent = data.event.homeTeam.name;
                    document.getElementById("team2Name").textContent = data.event.awayTeam.name;

                    // Update tournament info
                    const tournamentName = data.event.tournament.name;
                    const round = data.event.roundInfo.round;
                    const seasonName = data.event.season.name;
                    const categoryName = data.event.tournament.category.name;
                    document.getElementById("tournamentInfo").textContent = `${seasonName}, ROUND ${round}, ${categoryName}`;

                    // Update team images
                    const team1ImgId = data.event.homeTeam.id;
                    const team2ImgId = data.event.awayTeam.id;
                    document.getElementById("team1Image").src = `https://api.sofascore.app/api/v1/team/${team1ImgId}/image`;
                    document.getElementById("team2Image").src = `https://api.sofascore.app/api/v1/team/${team2ImgId}/image`;
                })
                .catch(error => {
                    console.error("Error fetching team names:", error);
                });

            // Fetching odds
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    const fullTimeOdds = data.featured.default;
                    if (!fullTimeOdds) return;

                    const odds1 = fullTimeOdds.choices.find(choice => choice.name === '1').fractionalValue;
                    const oddsX = fullTimeOdds.choices.find(choice => choice.name === 'X').fractionalValue;
                    const odds2 = fullTimeOdds.choices.find(choice => choice.name === '2').fractionalValue;

                    const odds1Decimal = (parseInt(odds1.split('/')[0]) / parseInt(odds1.split('/')[1])) + 1;
                    const oddsXDecimal = (parseInt(oddsX.split('/')[0]) / parseInt(oddsX.split('/')[1])) + 1;
                    const odds2Decimal = (parseInt(odds2.split('/')[0]) / parseInt(odds2.split('/')[1])) + 1;

                    document.querySelector(".odds-1 .oddsValueInner").textContent = odds1Decimal.toFixed(2);
                    document.querySelector(".odds-x .oddsValueInner").textContent = oddsXDecimal.toFixed(2);
                    document.querySelector(".odds-2 .oddsValueInner").textContent = odds2Decimal.toFixed(2);
                })
                .catch(error => {
                    console.error("Error fetching odds:", error);
                });
        }

        // Chamada da função para carregar as odds
        fetchAndPopulateOdds(11975305);
    </script>
</body>
</html>
