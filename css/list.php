<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap');

    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        width: 80%;
        height: 100vh;
        background: rgb(70, 70, 70);
        margin: auto;
    }

    .box {
        width: 100%;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .myinfo {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        float: left;
        border-bottom: 1px solid rgb(183, 171, 149);
    }

    .imgbox img {
        height: 100px;
        object-fit: cover;
        width: 100px;
        margin: 0px 5px;
        border-radius: 50%;
        border: 2px solid rgb(249, 231, 198);
    }

    h1 {
        font-size: 20px;
        margin: 0px 20px;
        color: rgb(218, 218, 218);
        letter-spacing: 1px;
    }

    button {
        background: rgb(245, 230, 200);
        border: none;
        border-radius: 5px;
        margin: 0px 12px;
        padding: 5px;
    }

    .logoutbox button a {
        font-size: 22px;
        text-decoration: none;
        color: rgb(57, 57, 57);
        padding: 10px;
        height: 12px;
        font-weight: 600;
    }

    .userbox {
        display: flex;
        padding: 10px;
        justify-content: center;
        flex-wrap: wrap;
        height: 100%;
        overflow: auto;
    }

    .userbox::-webkit-scrollbar {
        background: rgb(53, 53, 53);
        width: 5px;
    }

    .userbox::-webkit-scrollbar-thumb {
        background: rgb(249, 232, 200);
    }

    .userbox .user {
        width: max-content;
        margin: 10px;
        border-radius: 15px;
    }

    .user a {
        text-align: center;
        text-decoration: none;
    }

    .userimg img {
        height: 100px;
        object-fit: scale-down;
        width: 100px;
        border-radius: 50%;
        margin: 0px 20px;
        border: 1px solid rgb(37, 196, 172);
    }

    .username h2 {
        color: rgb(215, 215, 215);
        font-size: 1rem;
        letter-spacing: 1px;
    }

    @media only screen and (max-width: 750px) {
        .container {
            width: 100%;
        }

        .imgbox img {
            width: 60px;
            height: 60px;
            margin: 0px 0px;
        }

        h1 {
            margin: 0px 10px;
        }


    }
</style>