<?php
get_header();
?>

        <div class="banner-section">
            <div class="custom-container container">
                <div class="banner-outer">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="banner-inner">
                                <h1>Enjoy Your Music</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                                <div>
                                    <button class="btn btn-outline-success my-2 my-sm-0 btn-browse" type="submit">BROWSE</button>
                                    <button class="btn btn-outline-success my-2 my-sm-0 btn-subscribe" type="submit">SUBSCRIBE</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/h-banner.png';?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="music-menu">
            <div class="custom-container container">
                <div class="music-chooser">
                    <div class="all-music">
                        <div>
                            <img class="svg" src="<?php echo get_template_directory_uri().'/images/Artboard-1.svg';?>" alt="">
                        </div>
                        <h5>All Music</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's </p>
                    </div>
                    <div class="top-rated">
                        <div>
                            <img class="svg" src="<?php echo get_template_directory_uri().'/images/Artboard-2.svg';?>" alt="">
                        </div>
                        <h5>Top Rated</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's </p>
                    </div>
                    <div class="top-played">
                        <div>
                            <img class="svg" src="<?php echo get_template_directory_uri().'/images/Artboard-3.svg';?>" alt="">

                        </div>
                        <h5>Top Played</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's </p>
                    </div>
                    <div class="recently-added">
                        <div>
                            <img class="svg" src="<?php echo get_template_directory_uri().'/images/Artboard-4.svg';?>" alt="">

                        </div>
                        <h5>Recently Added</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry. Lorem Ipsum has been the industry's </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="selected-boxes">
            <div class="custom-container container">
                <div class="music-selector">
                     <!-- <div class="select-option-box">
                        <select class="form-control form-control-lg">
                            <option>Select Instrument</option>
                            <option>Keyboard</option>
                            <option>Octapad</option>
                            <option>Violin</option>
                            <option>Saxophone</option>
                        </select>
                    </div>  -->
                    <div id="dd" class="wrapper-dropdown-3 select-option-box" tabindex="1">
                        <span>Select Instrument</span>
                        <ul class="dropdown">
                            <li><a href="#">Keyboard</a></li>
                            <li><a href="#">Octapad</a></li>
                            <li><a href="#">Violin</a></li>
                            <li><a href="#">Saxophone</a></li>
                        </ul>
                    </div>
                    <div id="de" class="wrapper-dropdown-3 select-option-box" tabindex="1">
                        <span>Select Raag/Scale</span>
                        <ul class="dropdown">
                            <li><a href="#">Aadi</a></li>
                            <li><a href="#">Chandani</a></li>
                            <li><a href="#">Bhairavi</a></li>
                            <li><a href="#">Dhanashri</a></li>
                        </ul>
                    </div>
                    <!-- <div class="select-option-box">
                        <select class="form-control form-control-lg">
                            <option>Select Raag/Scale</option>
                            <option>Aadi</option>
                            <option>Chandani</option>
                            <option>Bhairavi</option>
                            <option>Dhanashri</option>
                        </select>
                    </div> -->
                    <div id="df" class="wrapper-dropdown-3 select-option-box" tabindex="1">
                        <span>Select Key</span>
                        <ul class="dropdown">
                            <li><a href="#">C</a></li>
                            <li><a href="#">C#</a></li>
                            <li><a href="#">D</a></li>
                            <li><a href="#">A</a></li>
                        </ul>
                    </div>
                    <!-- <div class="select-option-box">
                        <select class="form-control form-control-lg">
                            <option>Select Key</option>
                            <option>C</option>
                            <option>C#</option>
                            <option>D</option>
                            <option>A</option>
                        </select>
                    </div> -->


                          <div class="select-option-box cstm-dropdown">
                       <!-- <select class="form-control form-control-lg">
                           <option>Select BPM Range</option>
                           <input type="range" multiple value="0,100" />
                       </select> -->
                       <div class="dropdown">
                           <button class="dropbtn">Select BPM Range &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; <i class="fa fa-caret-down"></i> </button>
                           <div class="dropdown-content">
                               <!-- <input id="ex2" type="range" multiple value="0,100" /> -->
                               <b>0</b>&nbsp; &nbsp; <input id="ex2" type="text" class="span2" value="" data-slider-min="0" data-slider-max="200" data-slider-step="5" data-slider-value="[250,450]"/>&nbsp; &nbsp; <b>200</b>
                               <button class="btn btn-outline-success my-2 my-sm-0 btn-update" type="submit">UPDATE</button>
                           </div>
                       </div>
                   </div>
                   <div class="select-option-box search-box">
                       <div class="input-group">
                           <input type="search" placeholder="Search packs" aria-describedby="button-addon1" class="border-0">
                           <div class="input-group-append">
                           <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="music-track-table">
           <div class="custom-container container">
               <div class="tunes-tracking">
                   <div class="track-heading">
                       <div class="thump"></div>
                       <div class="time">Time</div>
                       <div class="trck">Track </div>
                       <div class="filename">Filename </div>
                       <div class="key">Key</div>
                       <div class="raag-scale">Raag/Scale</div>
                       <div class="bpm">BPM</div>
                       <div></div>
                   </div>

                   <div class="list-tracks"></div>
                    <?php $request ?>


                </div>
            </div>
        </div>

        <div class="sounds-banner">
            <div class="custom-container container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="s-img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/s-banner-1.jpg';?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="s-content">
                            <div class="top-head">
                                <p>SOUNDS</p>
                            </div>
                            <h4>Pick the perfect sound</h4>
                            <p>Preview and download millions of sounds from
                             top producers, artists, and sound designers.</p>
                             <button class="btn btn-outline-success my-2 my-sm-0 btn-learn" type="submit">LEARN MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sounds-banner bottom-banner">
            <div class="custom-container container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="s-content">
                            <div class="top-head">
                                <p>SOUNDS</p>
                            </div>
                            <h4>Pick the perfect sound</h4>
                            <p>Preview and download millions of sounds from
                             top producers, artists, and sound designers.</p>
                             <button class="btn btn-outline-success my-2 my-sm-0 btn-learn" type="submit">LEARN MORE</button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="s-img">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri().'/images/s-banner-2.jpg';?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-content">
            <div class="join-us">
                <h4>Thanks for listening. Now join in.</h4>
                <p>Save tracks, follow artists and build playlists. All for free.</p>
                <button class="btn btn-outline-success my-2 my-sm-0 btn-find" type="submit">FIND OUT MORE</button>
            </div>
        </div>
<?php
get_footer();
?>
