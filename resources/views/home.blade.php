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

/* videos */

.videos {
  background-color: #0E0E10;
  width: 100%;
  height: 100%;
  padding: 15px 15px;

  overflow-y: scroll;
}


.Main_Video {
  position: relative;
  top: 0;
  left: 36%;
  padding-bottom: 50px;
}

.videos__container {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  flex-wrap: wrap;
}


.video {
  width: 310px;

  margin-bottom: 30px;
}

.video:hover {
  transform: translateY(-5px);
  box-shadow: 0px 0px 15px #000;
}

.video__thumbnail {
  width: 100%;
  height: 170px;
}

.video__thumbnail img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.author img {
  object-fit: cover;
  border-radius: 50%;
  height: 40px;
  width: 40px;
  margin-right: 10px;
}

.video__details {
  display: flex;
  margin-top: 10px;
}

.title {
  display: flex;
  flex-direction: column;
}

.title h3 {
  color: #DEDEE3;
  line-height: 18px;
  font-size: 14px;
  margin-bottom: 6px;
}

.title a,
span {
  text-decoration: none;
  color: rgb(132, 132, 132);
  font-size: 14px;
}

h1 {
  font-size: 20px;
  margin-bottom: 10px;
  color: #DEDEE3;
}

@media (max-width: 425px) {
  .header__search {
    display: none;
  }

  .header__icons .material-icons {
    display: none;
  }

  .header__icons .display-this {
    display: inline;
  }

  .sidebar {
    display: none;
  }
}

@media (max-width: 768px) {
  .header__search {
    display: none;
  }

  .sidebar {
    display: none;
  }

  .show-sidebar {
    display: inline;
    position: fixed;
    top: 4.4rem;
    height: auto;
  }
}

@media (max-width: 941px) {
  .header__search input {
    width: 300px;
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
        <i class="material-icons" onclick="location.href='/upload'">videocam</i>
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
      <div class="videos">
        <h1>Recommended</h1>
        <div class="Main_Video">
            <img src="https://picsum.photos/id/1001/400/300" alt="Stream thumbnail">
            <div class="overlay" onclick="playVideo('https://www.w3schools.com/html/mov_bbb.mp4')">
                <i class="fas fa-play play-button"></i>
            </div>
        </div>

        <div class="videos__container">
          <!-- Single Video starts -->
          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/PpXUTUXU7Qc/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
              </div>
              <div class="title">
                <h3>
                  Top 5 Programming Languages to Learn in 2021 | Best Programming Languages to Learn
                </h3>
                <a href="">FutureCoders</a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
          </div>
          <!-- Single Video Ends -->

          <!-- Single Video starts -->
          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/YpTmcCBBdTE/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
              </div>
              <div class="title">
                <h3>Build A Password Generator with React JS - Beginners Tutorial</h3>
                <a href="">FutureCoders</a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
          </div>
          <!-- Single Video Ends -->

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/46cXFUzR9XM/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnh53ZRIGnyzC28QrfuggCINb3cfNbNWo4Uc6qR9=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Bella Ciao Full Song | La Casa De Papel | Money Heist | Netflix India</h3>
                <a href="">Netflix</a>
                <span>10M Views • 11 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/d2na6sCyM5Q/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnhESPVEatju_1yE-03-KLeSrnSLc5yy0RcvhPd5Lg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>DON'T EVER GIVE UP - Elon Musk (Motivational Video)</h3>
                <a href=""> Chispa Motivation</a>
                <span>10M Views • 1 Month Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/2Ji-clqUYnA/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwniaHN7MZyFEiNvdHuKMzIWnDF604Z2--O4GCMq-FA=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Javascript Fundamentals</h3>
                <a href="">Coding Addict</a>
                <span>179K • 8 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/3PHXvlpOkf4/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnifaQZvAunS0OFb2y_cieoVjLCVjqQW8Exf3BC1gg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Build 15 JavaScript Projects - Vanilla JavaScript Course</h3>
                <a href=""> freeCodeCamp.org </a>
                <span>470K Views • 8 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/CVClHLwv-4I/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnhIz_0Su6HhW6Ym50QCroJCAnF10X9xnnMDboN2=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Build Real Time Face Detection With JavaScript</h3>
                <a href=""> Web Dev Simplified </a>
                <span>875K Views • 1 Year Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/ulprqHHWlng/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnifaQZvAunS0OFb2y_cieoVjLCVjqQW8Exf3BC1gg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>AWS Basics for Beginners - Full Course</h3>
                <a href=""> freeCodeCamp.org </a>
                <span>36K Views • 1 Day Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/PpXUTUXU7Qc/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
              </div>
              <div class="title">
                <h3>
                  Top 5 Programming Languages to Learn in 2021 | Best Programming Languages to Learn
                </h3>
                <a href="">FutureCoders</a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/YpTmcCBBdTE/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
              </div>
              <div class="title">
                <h3>Build A Password Generator with React JS - Beginners Tutorial</h3>
                <a href="">FutureCoders</a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/46cXFUzR9XM/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnh53ZRIGnyzC28QrfuggCINb3cfNbNWo4Uc6qR9=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Bella Ciao Full Song | La Casa De Papel | Money Heist | Netflix India</h3>
                <a href="">Netflix</a>
                <span>10M Views • 11 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/d2na6sCyM5Q/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnhESPVEatju_1yE-03-KLeSrnSLc5yy0RcvhPd5Lg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>DON'T EVER GIVE UP - Elon Musk (Motivational Video)</h3>
                <a href=""> Chispa Motivation</a>
                <span>10M Views • 1 Month Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/2Ji-clqUYnA/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwniaHN7MZyFEiNvdHuKMzIWnDF604Z2--O4GCMq-FA=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Javascript Fundamentals</h3>
                <a href="">Coding Addict</a>
                <span>179K • 8 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/3PHXvlpOkf4/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnifaQZvAunS0OFb2y_cieoVjLCVjqQW8Exf3BC1gg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Build 15 JavaScript Projects - Vanilla JavaScript Course</h3>
                <a href=""> freeCodeCamp.org </a>
                <span>470K Views • 8 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/CVClHLwv-4I/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnhIz_0Su6HhW6Ym50QCroJCAnF10X9xnnMDboN2=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Build Real Time Face Detection With JavaScript</h3>
                <a href=""> Web Dev Simplified </a>
                <span>875K Views • 1 Year Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/ulprqHHWlng/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnifaQZvAunS0OFb2y_cieoVjLCVjqQW8Exf3BC1gg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>AWS Basics for Beginners - Full Course</h3>
                <a href=""> freeCodeCamp.org </a>
                <span>36K Views • 1 Day Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/PpXUTUXU7Qc/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
              </div>
              <div class="title">
                <h3>
                  Top 5 Programming Languages to Learn in 2021 | Best Programming Languages to Learn
                </h3>
                <a href="">FutureCoders</a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/YpTmcCBBdTE/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
              </div>
              <div class="title">
                <h3>Build A Password Generator with React JS - Beginners Tutorial</h3>
                <a href="">FutureCoders</a>
                <span>10M Views • 3 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/46cXFUzR9XM/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnh53ZRIGnyzC28QrfuggCINb3cfNbNWo4Uc6qR9=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Bella Ciao Full Song | La Casa De Papel | Money Heist | Netflix India</h3>
                <a href="">Netflix</a>
                <span>10M Views • 11 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/d2na6sCyM5Q/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnhESPVEatju_1yE-03-KLeSrnSLc5yy0RcvhPd5Lg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>DON'T EVER GIVE UP - Elon Musk (Motivational Video)</h3>
                <a href=""> Chispa Motivation</a>
                <span>10M Views • 1 Month Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/2Ji-clqUYnA/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwniaHN7MZyFEiNvdHuKMzIWnDF604Z2--O4GCMq-FA=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Javascript Fundamentals</h3>
                <a href="">Coding Addict</a>
                <span>179K • 8 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/3PHXvlpOkf4/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnifaQZvAunS0OFb2y_cieoVjLCVjqQW8Exf3BC1gg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Build 15 JavaScript Projects - Vanilla JavaScript Course</h3>
                <a href=""> freeCodeCamp.org </a>
                <span>470K Views • 8 Months Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/CVClHLwv-4I/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnhIz_0Su6HhW6Ym50QCroJCAnF10X9xnnMDboN2=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>Build Real Time Face Detection With JavaScript</h3>
                <a href=""> Web Dev Simplified </a>
                <span>875K Views • 1 Year Ago</span>
              </div>
            </div>
          </div>

          <div class="video" onclick="location.href='/watch'">
            <div class="video__thumbnail">
              <img src="https://img.youtube.com/vi/ulprqHHWlng/maxresdefault.jpg" alt="" />
            </div>
            <div class="video__details">
              <div class="author">
                <img
                  src="https://yt3.ggpht.com/ytc/AAUvwnifaQZvAunS0OFb2y_cieoVjLCVjqQW8Exf3BC1gg=s48-c-k-c0x00ffffff-no-rj"
                  alt=""
                />
              </div>
              <div class="title">
                <h3>AWS Basics for Beginners - Full Course</h3>
                <a href=""> freeCodeCamp.org </a>
                <span>36K Views • 1 Day Ago</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="index.js"></script>
    <!-- Main Body Ends -->
  </body>
</html>