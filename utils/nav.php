<style>
    .container {
        display: flex;
        flex-direction: row;
        align-items: center;
    }
    ul {
        display: flex;
        flex-direction: row;
    }
    li {
        list-style-type: none;
        margin-left: 5px;
        background-color: blue;
        padding: 5px;
    }
    a {
        text-decoration: none;
        color: white;
    }
</style>

<div class="container">
    <a href="index.php?page=home"><img src='' alt='logo'></a>

    <ul>
        <li><a href="index.php?page=about" >About</a></li>
        <li><a href="index.php?page=contact">Contact Us</a></li>
    </ul>
</div>

<ul>
    <li><button onclick="openLoginForm()">Login</button></li>
    <li><a href="#" >Register</a></li>
</ul>