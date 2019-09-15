
<style>
    /* Reset */
    *{margin:0;padding:0;}

    body{
        min-width:900px;
    }
    /* Slider */
    #slider{
        width:100%;
        height:500px;
        position:relative;
        overflow:hidden;
    }
    @keyframes load{
        from{left:-100%;}
        to{left:0;}
    }
    .slides{
        width:400%;
        height:100%;
        position:relative;
        -webkit-animation:slide 30s infinite;
        -moz-animation:slide 30s infinite;
        animation:slide 30s infinite;
    }
    .slider{
        width:25%;
        height:100%;
        float:left;
        position:relative;
        z-index:1;
        overflow:hidden;
    }
    .slide img{
        width:100%;
        height:100%;
    }
    .slide img{
        width:100%;
        height:100%;
    }
    .image{
        width:100%;
        height:100%;
    }
    .image img{
        width:100%;
        height:100%;
    }

    /* Legend */
    .legend{
        border:500px solid transparent;
        border-left:800px solid rgba(52, 73, 94, .7);
        border-bottom:0;
        position:absolute;
        bottom:0;
    }

    /* Contents */
    .content{
        width:100%;
        height:100%;
        position:absolute;
        overflow:hidden;
    }
    .content-txt{
        width:400px;
        height:150px;
        float:left;
        position:relative;
        top:300px;
        -webkit-animation:content-s 7.5s infinite;
        -moz-animation:content-s 7.5s infinite;
        animation:content-s 7.5s infinite;
    }
    .content-txt h1{
        font-family:Arial;
        text-transform:uppercase;
        font-size:24px;
        color:#fff;
        text-align:left;
        margin-left:30px;
        padding-bottom:10px;
    }
    .content-txt h2{
        font-family:arial;
        font-weight:normal;
        font-size:14px;
        font-style:italic;
        color:#fff;
        text-align:left;
        margin-left:30px;
    }

    /* Switch */
    .switch{
        width:120px;
        height:10px;
        position:absolute;
        bottom:50px;
        z-index:99;
        left:30px;
    }
    .switch > ul{
        list-style:none;
    }
    .switch > ul > li{
        width:10px;
        height:10px;
        border-radius:50%;
        background:#333;
        float:left;
        margin-right:5px;
        cursor:pointer;
    }
    .switch ul{
        overflow:hidden;
    }
    .on{
        width:100%;
        height:100%;
        border-radius:50%;
        background:#f39c12;
        position:relative;
        -webkit-animation:on 30s infinite;
        -moz-animation:on 30s infinite;
        animation:on 30s infinite;
    }

    /* Animation */
    @-webkit-keyframes slide{
        0%,100%{
            margin-left:0%;
        }
        21%{
            margin-left:0%;
        }
        25%{
            margin-left:-100%;
        }
        46%{
            margin-left:-100%;
        }
        50%{
            margin-left:-200%;
        }
        71%{
            margin-left:-200%;
        }
        75%{
            margin-left:-300%;
        }
        96%{
            margin-left:-300%;
        }
    }
    @-moz-keyframes slide{
        0%,100%{
            margin-left:0%;
        }
        21%{
            margin-left:0%;
        }
        25%{
            margin-left:-100%;
        }
        46%{
            margin-left:-100%;
        }
        50%{
            margin-left:-200%;
        }
        71%{
            margin-left:-200%;
        }
        75%{
            margin-left:-300%;
        }
        96%{
            margin-left:-300%;
        }
    }
    @keyframes slide{
        0%,100%{
            margin-left:0%;
        }
        21%{
            margin-left:0%;
        }
        25%{
            margin-left:-100%;
        }
        46%{
            margin-left:-100%;
        }
        50%{
            margin-left:-200%;
        }
        71%{
            margin-left:-200%;
        }
        75%{
            margin-left:-300%;
        }
        96%{
            margin-left:-300%;
        }
    }

    @-webkit-keyframes content-s{
        0%{left:-420px;}
        10%{left:0px;}
        30%{left:0px;}
        40%{left:0px;}
        50%{left:0px;}
        60%{left:0px;}
        70%{left:0;}
        80%{left:-420px;}
        90%{left:-420px;}
        100%{left:-420px;}
    }
    @-moz-keyframes content-s{
        0%{left:-420px;}
        10%{left:0px;}
        30%{left:0px;}
        40%{left:0px;}
        50%{left:0px;}
        60%{left:0px;}
        70%{left:0;}
        80%{left:-420px;}
        90%{left:-420px;}
        100%{left:-420px;}
    }
    @keyframes content-s{
        0%{left:-420px;}
        10%{left:20px;}
        15%{left:0px;}
        30%{left:0px;}
        40%{left:0px;}
        50%{left:0px;}
        60%{left:0px;}
        70%{left:0;}
        80%{left:-420px;}
        90%{left:-420px;}
        100%{left:-420px;}
    }

    @-webkit-keyframes on{
        0%,100%{
            margin-left:0%;
        }
        21%{
            margin-left:0%;
        }
        25%{
            margin-left:15px;
        }
        46%{
            margin-left:15px;
        }
        50%{
            margin-left:30px;
        }
        71%{
            margin-left:30px;
        }
        75%{
            margin-left:45px;
        }
        96%{
            margin-left:45px;
        }
    }

    @-moz-keyframes on{
        0%,100%{
            margin-left:0%;
        }
        21%{
            margin-left:0%;
        }
        25%{
            margin-left:15px;
        }
        46%{
            margin-left:15px;
        }
        50%{
            margin-left:30px;
        }
        71%{
            margin-left:30px;
        }
        75%{
            margin-left:45px;
        }
        96%{
            margin-left:45px;
        }
    }

    @keyframes on{
        0%,100%{
            margin-left:0%;
        }
        21%{
            margin-left:0%;
        }
        25%{
            margin-left:15px;
        }
        46%{
            margin-left:15px;
        }
        50%{
            margin-left:30px;
        }
        71%{
            margin-left:30px;
        }
        75%{
            margin-left:45px;
        }
        96%{
            margin-left:45px;
        }
    }

    /* main */
    /* Reset */
    a{text-decoration:none;color:inherit;}
    html{width:100%;height:100%;}

    /* Body */
    body{
        background:#fff;
    }

    /* Header */
    header{
        width:100%;
        height:80px;
        background:#222;
    }
    .logo{
        width:50px;
        height:65px;
        position:relative;
        top:7.5px;
        float:left;
        margin-left:5%;
    }
    .logo img{
        width:100%;
        height:100%;
    }
    nav{
        width:auto;
        height:100%;
        float:right;
        margin-right:5%;
        list-style:none;
    }
    nav li{
        width:auto;
        margin-right:20px;
        float:left;
    }
    nav li a{
        font-family:Arial;
        font-size:16px;
        color:#fff;
        line-height:80px;
    }
    nav select{
        width:150px;
        height:30px;
        margin-top:25px;
        font-family:Arial;
        font-size:14px;
        color:#666;
        border:2px solid #aaa;
        padding-left:10px;
    }
    nav select:focus{
        outline:none;
    }

    /* Content */
    .container{
        width:70%;
        height:auto;
        padding:20px 0;
        margin:20px auto;
    }
    .container h1{
        font-family:Arial;
        font-size:24px;
        color:#222;
        text-transform:uppercase;
        margin:20px 0;
    }
    .container h2{
        font-family:arial;
        font-size:16px;
        color:#444;
        margin-top:10px;
    }
    .container h3{
        font-family:arial;
        font-weight:normal;
        font-size:16px;
        color:#aaa;
    }
    .code{
        width:600px;
        height:auto;
        margin:20px auto;
        padding:10px 20px;
        background:#222;
        border-left:10px solid #aaa;
        font-family: arial;
        font-size:16px;
        color:#fff;
    }
    .code span{
        color:#89A978;
    }
    .space{
        width:20px;
        height:1px;
        float:left;
    }

    footer{
        width:100%;
        height:50px;
        background:#222;
    }
    footer h1{
        font-family:Arial;
        font-weight:normal;
        font-size:14px;
        color:#fff;
        margin-left:5%;
        line-height:50px;
    }


</style>
