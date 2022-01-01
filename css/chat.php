<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap');
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        width: 300px;
        height: 100vh;
    }
    
    .box {
        width: 100%;
    }
    
    .chatbox {
        height: 400px;
        width: 240px;
    }
    
    .header {
        height: 15%;
        border-radius: 10px 10px 0px 0px;
        display: flex;
        align-items: center;
        background: rgb(48, 48, 48);
        border-bottom: 1px solid rgb(74, 74, 74);
    }
    
    .back {
        margin-left: 10px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .back svg {
        width: 20px;
        text-decoration: none;
        color: rgb(205, 205, 205);
    }
    
    .userinfo {
        display: flex;
        margin-left: 5px;
    }
    
    .userinfo .img img {
        width: 30px;
        height: 30px;
        object-fit: scale-down;
        border-radius: 50%;
        margin: 1px 10px;
        border: 1px solid rgb(216, 216, 216);
    }
    
    .name h3 {
        letter-spacing: 2px;
        font-size: 16px;
        color: rgb(154, 154, 154);
    }
    
    .name p {
        font-size: 13px;
        color: rgb(22, 133, 105);
    }
    
    .chat {
        background: rgb(50, 50, 50);
        height: 75%;
        width: 100%;
        overflow: auto;
        padding: 1px 8px;
    }
    
    .chat::-webkit-scrollbar {
        background: #000;
        width: 0px;
    }
    
    .c {
        display: flex;
        padding: 5px;
        margin: 1px 0px;
        width: 100%;
    }
    
    h6 {
        text-align: center;
        color: rgb(215, 215, 215);
    }
    
    .c p {
        background: rgb(234, 234, 234);
        padding: 10px;
        font-size: 18px;
        word-wrap: break-word;
        width: max-content;
        max-width: 85%;
    }
    
    .incoming {
        justify-content: flex-start;
    }
    
    .incoming p {
        background: rgb(84, 84, 84);
        color: rgb(235, 235, 235);
        border-radius: 19px 19px 19px 0px;
    }
    
    .outgoing {
        justify-content: flex-end;
    }
    
    .outgoing p {
        background: rgb(42, 114, 223);
        color: rgb(223, 223, 223);
        border-radius: 19px 19px 0px 19px;
    }
    
    .sendmsg {
        height: 10%;
    }
    
    form {
        display: flex;
    }
    
    textarea {
        height: 52px;
        width: 70%;
        outline: none;
        padding: 5px;
        background: rgb(62, 62, 62);
        border-bottom-left-radius: 10px;
        color: antiquewhite;
        resize: none;
    }
    
    textarea::-webkit-scrollbar {
        width: 0px;
    }
    
    input {
        width: 30%;
        font-size: 20px;
        background: rgb(74, 181, 239);
        border-bottom-right-radius: 10px;
        color: rgb(45, 45, 45);
        border: none;
    }
    
    @media only screen and (max-width: 410px) {
        .container {
            width: 100%;
        }
        .chatbox {
            height: 100vh;
            width: 100%;
        }
        .header {
            border-radius: 0px 0px 0px 0px;
        }
        textarea {
            font-size: 25px;
            height: 67px;
            border-bottom-left-radius: 0px;
        }
        input {
            border-bottom-right-radius: 0px;
        }
        .userinfo .img img {
            width: 50px;
            height: 50px;
            object-fit: scale-down;
        }
        .userinfo {
            align-items: center;
        }
    }
</style>