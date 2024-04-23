<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Whisper&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/views/img/book-logo.png">
    <script src="script.js"></script>
    <title><?= $page_title ?></title>
    <style>
    :root
    {
     --color1: #323643;
     --color2: #606470;
     --color3: #93deff; 
     --color4: #f7f7f7; 
     /* --color5: #494D5F; */
     --text: #e5eaf5;    
    }




    header 
    {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
    }
    nav
    {
        display: flex;
        /* flex-direction: row; */
        /* justify-content: space-between; */
        align-items: center;
        background-color: black;
        padding-left: 50px;
        padding-right: 50px;
        height: 55px;
        position: relative;
        text-align: center;
        align-items: center;
    }
    a 
    {
        /* all: unset; */
        cursor: pointer;
        /* font-family: "Whisper", cursive; */
    }
    nav > a
    {
        all: unset;
        font-family: "Roboto", sans-serif;
        font-size: 25px;
        cursor: pointer;
        color: var(--color4);
        /* font-weight: bold; */
        /* color: var(--text); */
        transition: all 0.3s;
        padding-left: 10px;
        padding-right: 10px;
        /* background-color: red; */
        border-left: 3px solid var(--color4);
        /* height: 45px; */
        line-height: 55px;
        transition: all 0.3s;
    }
    nav > a:hover
    {
        color: var(--color3);
    }
    .start-but:hover
    {
        border-left: 3px solid var(--color3);
    }
    .logo-text
    {
        font-family:"Papyrus", Fantasy;
        font-weight: bold;
        text-align: center;
    }
    .nav-logo
    {
        /* padding-left: 5px; */
        
        height: 55px;
        /* padding-bottom: 10px; */
        /* padding-top: 10px; */
        justify-content: center;
    }
    nav >div
    {
        display: flex;
        width: 100%;
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-right: 15vw;
    }
    nav > div >a
    {
        all: unset;
        /* font-family: "Roboto", sans-serif; */
        font-size: 30px;
        cursor: pointer;
        color: var(--color4);
        /* font-weight: bold; */
        /* color: var(--text); */
        transition: all 0.3s;
        padding-left: 10px;
        padding-right: 10px;
        /* background-color: red; */
        border-left: 3px solid var(--color4);
        /* height: 45px; */
        line-height: 55px;
        transition: all 0.3s;
    }
    .logo
    {
        padding-left: 5px;
        border-left: 3px solid var(--color4);
        height: 30px;
        padding-bottom: 12.5px;
        padding-top: 12.5px;
        transition: all 0.3s;
    }
    .user-but:hover > .logo
    {
        border-left: 3px solid var(--color3);
    }
    .user-but
    {
        display: flex;
        flex-direction: row;
        border-left: 0px;
        padding-left: 0px;
    }
    .logout-but
    {
        position: absolute;
        right: 0px;
        margin-right: 20px;
        border-left: 0px;
        border-right: 3px solid var(--color4);
        transition: all 0.3s;
    }
    .logout-but:hover
    {
        border-right: 3px solid var(--color3);
    }
    main 
    {
        display: flex;
        margin-top: 50px;
        /* background-color: #CFCFCF; */
        box-sizing: border-box;
        position: relative;
        align-items: center;
        flex-direction: column;
        /* overflow-x: hidden; */
    }
    .main-index
    {
        overflow: hidden;
        height: 100%;
    }
    body
    {
        margin-top: 50px;
        background-color: var(--color4);
        box-sizing: border-box;
    }
    .div-borrowd
    {
        flex-direction: row; 
        text-align: center;
    }
    li 
    {
        font-family: "Whisper", cursive;
    }
    .borrowed
    {
        font-family: "Roboto", sans-serif;
        padding: 0;
        font-size: 30px;
    }
    .div-for-input-divs
    {
        display: flex;
        box-sizing: border-box;
        flex-wrap: wrap;
        flex-direction: column;
        width: 20%;
        border-right: 1px solid black;
        /* justify-content: space-between; */
    }
    .numbered-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .dropdown-input-div
    {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        text-align: center;
    }
    .numbered-input
    {
        width: 120px;
        height: 20px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    .submit-numbered-index
    {
        width: 120px;
        height: 25px;
        color: white;
        background-color: #808080;
        border: 0;
        margin-top: 5px;
        /* border-radius: 6px; */
    }
    .numbered-input:focus 
    {
        outline: none;
        border:1px solid blue;
        box-shadow: 0 0 5px #719ECE;
    }
    .output-index
    {
        width: 60%;
        text-align: center;
        align-items: center;
        position: absolute;
        margin-left: 20%;
        left: 0;
        top: 0;
        /* border-style: dotted; */

    }
    .funny-font
    {
        font-family: "Whisper", cursive;
    }
    h1
    {
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 50px;
        color: var(--color1);
    }
    p
    {
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }
    .delete-button
    {
        all: unset;
        margin-top: 5px;
        width: 200px;
        background-color: red;
        color: white;
        border: 1px solid black;
        cursor: pointer;
        text-align: center;
    }
    label
    {
        position: relative;
        display: inline-block;
    }
    .invalid-data
    {
        /* position: absolute; */
        /* top: 100%;
        left: 0; */
        margin-left: 10px;
        margin-bottom: 0px;
        color: red;
        font-size: 0.8em;
    }
    .delete_form
    {
        display: inline-block;
    }
    li
    {
        
        list-style-type: none;
    }
    .red_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: red;
        border: 1px solid red;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-size: 25px;
    }
    .green_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: green;
        border: 1px solid green;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-size: 25px;
    }
    .blue_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: blue;
        border: 1px solid blue;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-size: 25px;
    }
    .brown_but
    {
        text-decoration:none;
        margin-top: 17px;
        color: brown;
        border: 1px solid brown;
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-size: 25px;
    }
    .form-edit
    {
        margin-bottom: 10px;
    }
    .div-borrowed-books
    {
        width: max-content;
        flex-direction: row;
    }
    form
    {
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .index-cells
    {
        display: block;
        width: 100%;
        height: 100%;
        /* margin-left: 5px; */
        margin-right: 5px;
    }
    .page-numbers
    {
        /* text-decoration: 2.3px underline var(--color3); */
        all: unset;
        cursor: pointer;
        color: var(--text);
        text-decoration:none;
        /* underline: 0px; */

    }
    .form-guest
    {
        margin: 0;
        all: unset;
        cursor: pointer;
        color: var(--color2);
        text-decoration:none;
    }
    .form-guest > p
    {

        margin: 0;
    }
    .card-a
    {
        all: unset;
        cursor: pointer;
        color: var(--text);
        text-decoration:none;  
    }
    th
    {
        padding-left: 5px;
        padding-right: 5px;
    }

    .div-index
    {
        background-color: var(--color2);
        color: var(--text);
        font-family: "Roboto", sans-serif;
        font-style: normal;
        text-align: center;
        padding: 10px;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    .submit-but
    {
        text-decoration: none;
        margin-top: 17px;
        color: var(--color1);
        border: 1px solid var(--color1);
        padding: 5px;
        border-radius: 5px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        background-color: var(--color4);
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .submit-but:hover
    {
        color: var(--color3);
        background-color: var(--color2);
        transition: all 0.3s;
    }
    input
    {
        width: 120px;
        height: 20px;
        font-family: "Roboto", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
    label
    {
        font-weight: 400;
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-size: 20px;
    }
    h1
    {
        text-align: center; 

    }
    .form-page-switch {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    label {
        text-align: center;
        margin-right: 10px;
        margin-left: 10px;
        width: min-content;
        line-height: 25px;
    }
    .submit-but
    {
        margin-bottom: 15px;
        margin-left: 5px;
    }
    .div-show
    {
        display: flex;
        text-align: center;
        align-items: center;
        height: 90vh;
        flex-direction: column;
        /* overflow: hidden; */
    }
    .div-btns
    {
        position: relative;
        /* width: 100vw; */
        height: min-content;
        margin-left: 510px;
    }

    .div-book-show
    {
        position: relative;
        width: 100%;
        height: min-content;
    }
    .div-book-show > h1
    {
        /* position: absolute; */
        left: 0;
        margin-left: 510px;
    }
    .div-book-show > h2
    {
        /* position: absolute; */
        left: 0;
        margin-left: 510px;
    }
    .div-book-show > img
    {
        position: absolute;
        left: 0;
        top: 0;
        border: 2px solid black;
        border-radius: 5px;
    }
    .img-show
    {
        width: 500px;
        object-fit: cover;
        box-shadow: 0px 30px 30px rgba(255, 149, 5, 0.1);
        /* overflow: hidden; */
        height: 90vh;
    }
    td {
        border: 2px solid;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    tr, td
    {
        font-size: 30px;
        /* font-weight: 500; */
    }
    table {
        border-collapse: collapse;
        margin-bottom: 10px;
    }
    h2
    {
        font-size: 40px;
        font-family: "Roboto", sans-serif;
        color: var(--color1);
    }
    .book-card
    {
        display: flex;
        width: 250px;
        background-color: var(--color2);
        padding-bottom: 10px;
        border-radius: 15px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        margin: 20px;
        justify-content: center;
        height: 350px;
        position: relative;
        text-align: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-position:center;
        transition: transform 0.3s; 
    }
    .book-card
    {
        background-image: blur(3px);

    }
    .book-card:hover
    {
        transform: scale(1.02);
    }
    .book-card:active
    {
        transform: scale(1);
    }
    .book-card > p
    {
        position: absolute;
        color: #c7c5c5;
        bottom: 0;
    }
    .book-card > a
    {
        /* display: flex; */
        justify-content: center;
        height: 350px;
    }
    .pic-index
    {
        width: 250px;
        border-radius: 15px;
        height: 350px;
        object-fit: cover;
        position: absolute;
        top: 0;
        width: 200px;
        height: 200px;
        margin-top: 20px;
        box-shadow: 0px 30px 30px rgba(255, 149, 5, 0.1);
        /* filter: blur(2px); */

    }
    .div-cards
    {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-around;
        /* box-sizing: content-box; */
        
    }
    .book-name
    {
        font-size: 20px;
        z-index: 6;
        margin-top: 235px;
    }
    .div-text-index
    {
        box-sizing: content-box;
        display: flex;
        text-align: center;
        flex-direction: column;

    }
    .pagination-item
    {
        color: var(--text);
        font-size: 35px;
        text-align: center;
        padding-left: 5px;
        padding-right: 5px;
        margin-left: 1px;
        margin-right: 1px;
        background-color: var(--color1);
        border-radius: 3px;
        height: 40px;   
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }
    .pagination-item-active
    {
        color: red;
    }
    .pagination-item-dots
    {
        margin-bottom: 10px;
    }
    .pagination
    {
        display: flex;
    }
    .select-page-s
    {
        margin: 0;
        margin-bottom: 5px;
        font-size: 18px;
    }
    .dropdown-input
    {
        margin-left: 10px;
        height: 40px;
        /* width: 50px; */
        background-color: var(--color1);
        color: var(--text);
        border: 0px;
        border-radius: 5px;
        font-size: 30px;

    }

    .book-availability
    {
        position: absolute;
        top: -30px;
        left: 0;
        background-color: var(--color3);
        border-radius: 20px;
    }
    .book-availability > p
    {
        margin: 10px;   
        font-size: 17px;
        color:  black;
        font-weight: bold;
    }
    #book-availability-alert
    {
        color: red;
        animation: pulse 0.9s infinite;
    }


    .form-for-inputs
    {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 10px;
        border: 1px solid var(--color1);
        width: min-content;
        border-radius: 15px;
        padding-top: 20px;
        align-items: center;
        background-color: var(--color1);
        color: var(--text);
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
    label
    {
       margin-bottom: 10px;
    }
    .form-inputs
    {
        width: 200px;
        height: 30px;
        border-radius: 15px;
        border: 0px solid black;
        background-color: var(--color2);
        padding-left: 10px;
        padding-right: 10px;
        color: var(--text);
    }
    .form-inputs:focus
    {
        outline: none;
    }
    label
    {
        text-align: start;
        padding: 10px;
        padding-top: 0px;
    }
    .error-div
    {
        display: block;

        padding: 15px;
        background-color: red;
        border-radius: 10px;

    }
    .error-div > p
    {
        font-size: 20px;
        font-weight: bold;
        color: var(--color3);
    }

    .error-message {
        display: block;
        opacity: 0;
        position: absolute;
        background-color: #fce4e4;
        border: 1px solid #fcc2c3;
        float: left;
        padding: 20px 30px;
        right: 0px;
        margin-top: 10px;

  animation-name: div-anima;
  animation-duration: 4s;
    }

    .error-text {
        color: #cc0033;
        font-family: "Roboto", sans-serif;
        font-size: 14px;
        font-weight: bold;
        line-height: 20px;
        text-shadow: 1px 1px rgba(250,250,250,.3);
    }
    @keyframes div-anima {
	0% {
        opacity: 1;
		display: block;
        transform: translate(200px);
        overflow: hidden;
	}

	20% {
		transform: translate(0px);
	}

	80% {
        transform: translate(0px);
	}
    99% {

        opacity: 1;
        transform: translate(200px);
    }
    100%{
        transform: translate(200px);
        opacity: 0;
        overflow: hidden;
    }
    }
    @keyframes pulse {
	0% {
		opacity: 1;
	}

	50% {
		opacity: 0.5;
	}

	100% {
		opacity: 1;
	}
    }
    @media (max-width: 740px) {
        .logo-text
        {
          font-size:  20px;
        } 
    }
    @media (max-width: 650px) {
        .logo-text
        {
          font-size:  15px;
        } 
        .nav-logo
        {
            height: 45px;
            line-height: 45px;
            padding-top: 5px;
        }
    }
    @media (max-width: 590px) {
        .logo-text
        {
          font-size:  15px;
        } 
        .nav-logo
        {
            padding-top: 10px;
            height: 35px;
            line-height: 45px;
        }
    }
    @media (max-width: 420px) {
        nav > a
        {
            font-size: 20px;
        }
        nav
        {
            padding-left: 20px;
            padding-right: 20px;
            height: 25px;
        }
        tr, td
        {
            font-size: 13px;
            /* font-weight: 500; */
        }
        .borrowed
        {
            font-size: 11px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h1
        {
            font-size: 30px;
        }
        h2
        {
            font-size: 20px;
        }
            .red_but
        {
            font-size: 15px;
        }
        .green_but
        {
            font-size: 15px;
        }
        .blue_but
        {
            font-size: 15px;
        }
        .brown_but
        {
            font-size: 15px;
        }
        td {
            border: 1px solid;
        }
        /* a
        {
            text-decoration: 1px underline var(--color3);
        } */
        .img-show
        {
            width: 100px;
            height: 150px;
        }
        .div-btns
        {
            margin-left: 104px;
        }
        .div-book-show > h1
        {
            margin-left: 104px;
        }
    }
</style>
</head>
<body>
