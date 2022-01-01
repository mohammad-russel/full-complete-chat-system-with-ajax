<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap');
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    
    body {
        background: rgb(38, 38, 38);
    }
    
    .container {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .box {
        background: rgb(221, 221, 221);
        padding: 10px;
        border-radius: 10px;
    }
    
    form {
        text-align: center;
    }
    
    h2 {
        color: rgb(89, 89, 89);
    }
    
    .input {
        width: 100%;
        background: rgb(255, 255, 255);
        padding: 5px;
        font-size: 17px;
        outline: none;
        border-radius: 5px;
        border: none;
        border-bottom: 1px solid rgb(187, 187, 187);
    }
    
    .click {
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: space-around;
    }
    
    .submit {
        width: 45%;
        background: rgb(48, 48, 48);
        padding: 5px;
        font-size: 17px;
        color: rgb(22, 232, 255);
        border-radius: 5px;
        border: 1px;
        cursor: pointer;
    }
    
    button {
        width: 45%;
        padding: 5px;
        font-size: 17px;
        background: rgb(35, 179, 189);
        border-radius: 5px;
        border: 1px;
    }
    
    a {
        font-size: 17px;
        text-decoration: none;
        color: rgb(39, 39, 39);
    }
    
    @media only screen and (max-width: 410px) {
        .container {
            display: block;
        }
        .box {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h2 {
            font-size: 40px;
        }
        form {
            width: 100%;
        }
        .input {
            height: 50px;
        }
        .submit {
            height: 50px;
        }
        button {
            height: 50px;
        }
        .file {
            background: rgb(218, 218, 218);
            height: 40px;
        }
    }
</style>