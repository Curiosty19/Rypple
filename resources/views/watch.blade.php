<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Material Icons -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <!-- CSS File -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
}

/* header */

.material-icons {
  color: rgb(96, 96, 96);
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 70px;
  padding: 15px;
  background-color: #303332;
}

.header__left {
  display: flex;
  align-items: center;
}

.header__left img {
  width: 100px;
  margin-left: 15px;
}

.header i {
  padding: 0 7px;
  cursor: pointer;
  padding-right: 2px;
}

.header__search form {
  border: 1px solid #474D4B;
  height: 35px;
  margin: 0;
  padding: 0;
  display: flex;
}

.header__search input {
  width: 500px;
  padding: 10px;
  margin: 0;
  border-radius: 0;
  border: none;
  height: 100%;
  background-color: #474D4B;
}

.header__search button {
  padding: 0;
  margin: 0;
  height: 100%;
  border: none;
  border-radius: 0;
}

/* Sidebar */
.mainBody {
  height: calc(100vh - 70px);
  display: flex;
  overflow: hidden;
}

.sidebar {
  height: 100%;
  width: 230px;
  background-color: #1F1F23;
  overflow-y: scroll;
}

.sidebar__categories {
  width: 100%;
  display: flex;
  flex-direction: column;
  margin-bottom: 15px;
  margin-top: 15px;
}

.sidebar__category {
  display: flex;
  align-items: center;
  padding: 12px 25px;
}

.sidebar__category span {
  margin-left: 15px;
}

.sidebar__category:hover {
  background: #27272c;
  cursor: pointer;
}

.sidebar::-webkit-scrollbar {
  display: none;
}

hr {
  height: 1px;
  background-color: #2a2a30;;
  border: none;
}

.title a,
span {
  text-decoration: none;
  color: rgb(132, 132, 132);
  font-size: 14px;
}

/* videos */

.mainBody{
    background:#0E0E10;
}

.container{
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 15px;
    align-items: flex-start;
    padding:5px 5%;
    background: #0E0E10;
}

.container .main-video{
    background: rgb(151, 90, 151);
    border-radius: 5px;
    padding:10px;
}

.container .main-video video{
    width: 100%;
    border-radius: 5px;
}

.container .main-video .title{
    color: #ccc;
    font-size: 23px;
    padding-top: 15px;
    padding-bottom: 15px;
}

.container .video-list{
    background: rgb(151, 90, 151);
    border-radius: 5px;
    height: 520px;
    overflow-y: scroll;
}

.container .video-list::-webkit-scrollbar{
    width: 7px;
}

.container .video-list::-webkit-scrollbar-track{
    background: #ccc;
    border-radius: 50px;
}

.container .video-list::-webkit-scrollbar-thumb{
    background: #666;
    border-radius: 50px;
}

.container .video-list .vid video{
    width: 100px;
    border-radius: 5px;
}

.container .video-list .vid{
    display: flex;
    align-items: center;
    gap: 15px;
    background: #ccc;
    border-radius: 5px;
    margin: 10px;
    padding: 10px;
    border: 1px solid rgba(0,0,0,.1);
    cursor: pointer;   
}

.container .video-list .vid:hover{
    background: #eee;
}

.container .video-list .vid:active{
    background: #2980b9;
}

.container .video-list .vid:active .title{
    color: #fff;
}

.container .video-list .vid .title{
    color: #333;
    font-size: 17px;
}

@media (max-width:991px){

    .container{
        grid-template-columns: 1.5fr 1fr;
        padding:10px;
    }

}

@media (max-width:768px){

    .container{
        grid-template-columns: 1fr;
    }

}

    </style>


    <title>Rypple</title>
  </head>
  <body>
    <!-- Header Starts -->
    <div class="header">
      <div class="header__left">
        <i id="menu" class="material-icons">menu</i>
        <img src="{{ asset('images/2rypple.png') }}" alt="tag">
      </div>

      <div class="header__search">
        <form action="">
          <input type="text" placeholder="Search" />
          <button><i class="material-icons">search</i></button>
        </form>
      </div>

      <div class="header__icons">
        <i class="material-icons display-this">search</i>
        <i class="material-icons">videocam</i>
        <i class="material-icons">apps</i>
        <i class="material-icons">notifications</i>
        </div>
        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </div>
      </div>
    </div>
    <!-- Header Ends -->

    <!-- Main Body Starts -->
    <div class="mainBody">
      <!-- Sidebar Starts -->
      <div class="sidebar">
        <div class="sidebar__categories">
          <div class="sidebar__category" onclick="location.href='/home'">
            <i class="material-icons">home</i>
            <span>Home</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">local_fire_department</i>
            <span>Trending</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">subscriptions</i>
            <span>Subcriptions</span>
          </div>
        </div>
        <hr />
        <div class="sidebar__categories">
          <div class="sidebar__category">
            <i class="material-icons">library_add_check</i>
            <span>Library</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">history</i>
            <span>History</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">play_arrow</i>
            <span>Your Videos</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">watch_later</i>
            <span>Watch Later</span>
          </div>
          <div class="sidebar__category">
            <i class="material-icons">thumb_up</i>
            <span>Liked Videos</span>
          </div>
        </div>
        <hr />
      </div>
      <!-- Sidebar Ends -->

      <!-- Videos Section -->
      
      <div class="container">

        <div class="main-video">
            <div class="video">
                <video src="https://www.youtube.com/watch?v=IPQ5vTqqdgE&ab_channel=Insider" controls muted autoplay></video>
                <h3 class="title">01. video title goes here</h3>
            </div>
        </div>
    
        <div class="video-list">
            <div class="vid active">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">01. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">02. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">03. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">04. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">05. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">06. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">07. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">08. video title goes here</h3>
            </div>
            <div class="vid">
                <video src="videoplayback.mp4" muted></video>
                <h3 class="title">09. video title goes here</h3>
            </div>
        </div>
    
    </div>
    <script src="index.js"></script>
    <!-- Main Body Ends -->
  </body>
</html>