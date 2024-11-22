<style>
    .bg-image {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1.5)), url("background.jpg");
        min-height: 100vh; /* Full height */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        height: 50%;
    }
    .heading {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 32pt;
        color: white;
    }
    button {
        margin-top: 20px;
        border: none;
        outline: 0;
        display: inline-block;
        padding: 10px 25px;
        color: black;
        background-color: #ddd;
        text-align: center;
        cursor: pointer;
    }
</style>

<body>
    <div class="bg-image">
        <div class="heading">
            <h1>Ideas come when<br>You Begin</h1>
            <button onclick="window.location='index.php?page=contact';">Partner with Us!</button>
        </div>
        
        
    </div>
</body>

