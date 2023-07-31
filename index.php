<!DOCTYPE html>
<html>

<body>
  <div class="buttonWrapper">
    <h1 class="title">BREAKING NEWS</h1>
    <div class="newsWrapper">
      <img src="./news1.jpeg" alt="news-image" />
      <button type="submit" onclick="addBlogButton()">
        Click for Transfer News
      </button>
    </div>
    <div class="newsWrapper">
      <img src="./news2.jpeg" alt="news-image" />
      <button type="submit" onclick="registerUserButton()">
        Click for Current Exchange Rate
      </button>
    </div>
    <div class="newsWrapper">
      <img src="./news3.jpeg" alt="news-image" />
      <button type="submit" onclick="votingButton()">
        Click for Raise News
      </button>
    </div>

  </div>

  <script>
    const addBlogButton = () => {
      location.assign('http://localhost:3000/addNewBlog.php');
    };
    const registerUserButton = () => {
      location.assign('http://localhost:3000/registerUser.php');
    };
    const votingButton = () => {
      location.assign('http://localhost:3000/voting.php');
    };
  </script>

  <style>
    body {
      background: linear-gradient(#56CCF2, #2F80ED);
    }

    button {
      color: black;
      border-radius: 1rem;
      height: 2rem;
      width: 250px;
      margin-left: 1rem;
      background-color: white;
    }

    button:hover {
      cursor: pointer;
    }

    img {
      height: 200px;
      width: 350px;
      border-radius: 1rem;

    }

    .title {
      color: white;
      font-size: 3.5rem;
    }

    .buttonWrapper {
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;

    }

    .newsWrapper {
      border: 2px solid black;
      border-radius: 2rem;
      padding: 1rem;
      display: flex;
      margin: 1rem;
      align-items: center;
    }
  </style>
</body>

</html>