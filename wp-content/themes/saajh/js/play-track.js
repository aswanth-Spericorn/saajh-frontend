
    var wavesurfer = WaveSurfer.create({
        //container: '#waveform',
        container: document.querySelector('#waveform'),
        waveColor: '#ababab',
        progressColor: '#ffa180',
        barHeight: 1.7
    });

    play.addEventListener('click', function() {
    // $(document).on("click",".play",function() {
      var tid = this.value;

        wavesurfer.playPause();

        $( this).css( "display", "block" );
        $( this).prev().css( "display", "none" );

        if(this.className  === 'play'){
            this.className = "pause";
        }else{
            this.className = "play";
        }

      });
      // });
      wavesurfer.load('https://ia800508.us.archive.org/15/items/LoveThemeFromTheGodfather/02LoveThemeFromTheGodfather.mp3');


<
