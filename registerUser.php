<html>

<body>
    <iframe title="script" src="./registerUserScript.php" style="display:none;"></iframe>

    <div class="wrapper">
        <div class="buttonWrapper">
            <button type="submit" onclick="returnHome()">Return to Home Page</button>

        </div>

        <img src="./news2.jpeg" alt="news-image" />
        <h1 class="title">EXCANGE RATE NEWS!</h1>
        <div class="newsDetail">Currently 1$ is 26,09₺</div>
    </div>

    <script>
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
    </style>
</body>

</html>