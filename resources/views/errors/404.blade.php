<div class="notfound-image">
    <img src="/imgs/404.jpg">
            <div class="notfound-h2"><h2>404</h2></div>
                <div class="notfound-p"><p>Looks like this page went missing. Just like this guys' head.</p>
                        <div class="notfoundback"><a href="{{route('home')}}"><p>"Head" back</p></a></div>
                </div>
</div>


<style>
@import url('https://fonts.googleapis.com/css?family=Lekton&display=swap');
@import url('https://fonts.googleapis.com/css?family=Kumar+One&display=swap');

     .notfound-image img {
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-color: #ceb7a6;
        width: 100vw;
        height: 100vh;
        margin: 0;
        padding: 0;
        top: 0;
        bottom: 0;
    }

    .notfound-image {
        display: flex;
        justify-content: center;
    }

    .notfound-h2 {
        position: absolute;
        z-index: 6;
        justify-content: center;
        font-size: 5em;
        color: white;
    }

    .notfound-p {
        font-family: 'Lekton', sans-serif;
        font-size: 2em;
        position: absolute;
        z-index: 6;
        padding-top: 80vh;
        color: #f7f5c4;
    }

    .notfoundback p {
        font-size: 0.5em;
        text-align: center;
        color: white;    
    }

    .notfoundback a {
        text-decoration-color: #f7f5c4;
        border-bottom: #f7f5c4 0.125em solid;
    } 

    .notfoundback a:hover {
        color: #f7f5c4; 
    }


</style>