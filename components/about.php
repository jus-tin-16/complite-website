<style>
    .container {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        padding: 10px;
    }
    div.gallery {
    border: 1px solid #ccc;
    }

    div.gallery:hover {
    border: 1px solid #777;
    }

    div.gallery img {
    width: 100%;
    height: auto;
    }

    div.desc {
    padding: 15px;
    text-align: center;
    }

    * {
    box-sizing: border-box;
    }

    .responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
    }

    @media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
    }

    .clearfix:after {
    content: "";
    display: table;
    clear: both;
    }
</style>

<div class="container">
    <img src="business.png" alt="man working" width="300" height="300">
    <div class="text">
        <h1>COMPLITE WEBSITE</h1>
        <p>This is a website dedicated for a startup company that wants to grow with various partners.</p>
        <p>The following are part of the company's team</p>
        <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="man.png">
            <img src="man.png" alt="John Doe" width="600" height="400">
            </a>
            <div class="desc">The CEO</div>
        </div>
        </div>


        <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="woman.png">
            <img src="woman.png" alt="Erza Scarlet" width="600" height="400">
            </a>
            <div class="desc">Product Manager</div>
        </div>
        </div>

        <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="man(1).png">
            <img src="man(1).png" alt="Luke Skywalker" width="600" height="400">
            </a>
            <div class="desc">Software Developer</div>
        </div>
        </div>

        <div class="responsive">
        <div class="gallery">
            <a target="_blank" href="man(2).png">
            <img src="man(2).png" alt="Rocky" width="600" height="400">
            </a>
            <div class="desc">UI Designer</div>
        </div>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
