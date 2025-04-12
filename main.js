var a = document.getElementById('tampil');
		function putarmusic(){
			a.style.display = "none";
			var audio = new Audio('audio.mp3');
			audio.play();
		}
		
		function hilangkanTeks() {
         document.getElementById("teks").style.display = "none";
        }
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('background-video');
        const products = document.querySelectorAll('.product');
        const lihatVideoLinks = document.querySelectorAll('.lihat-video');
        let sound;
        let isPlaying = false;

        function initAudio() {
            if (!sound) {
                sound = new Howl({
                    src: ['jj.mp4'],
                    html5: true,
                    loop: true,
                    onload: function() {
                      // No filter needed for basic synchronization
                    },
                    onloaderror: function(id, error) {
                        console.error("Error loading audio:", id, error);
                    },
                    onplayerror: function(id, error) {
                        console.error("Error playing audio:", id, error);
                        if (Howler.ctx && Howler.ctx.state === 'suspended') {
                            Howler.ctx.resume().catch(e => console.error("Error resuming AudioContext:", e)).style.display = "none";;
                        }
                    },
                    onend: function() {
                        isPlaying = true;
                    }
                });
            }
        }
      function playVideoAndAudio() {
        if (!isPlaying) {
            video.classList.add('playing');

            // Ensure both video and Howler use the HTML5 Audio API
            if (sound) {
                // Crucial: Set the audio's current time to match the video's
                sound.seek(video.currentTime);
                sound.play();
            }

            video.play()
                .then(() => {
                    isPlaying = true;
                })
                .catch(error => console.error("Error playing video:", error));
        }
    }


        function pauseVideoAndAudio() {
            video.classList.remove('playing');
            if (sound) {
                sound.pause();
            }
            video.pause();
            isPlaying = false;
        }

        products.forEach(product => {
            product.addEventListener('click', function() {
                initAudio();
                if (isPlaying) {
                    pauseVideoAndAudio();
                } else {
                    playVideoAndAudio().style.display = "none";;
                }
            });
        });

        lihatVideoLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                window.open(this.href, '_blank');
            });
        });

        document.addEventListener('visibilitychange', function() {
            if (document.hidden) {
                pauseVideoAndAudio();
            }
        });

        document.addEventListener('copy', function(e) {
            e.preventDefault();
            alert('Menyalin teks tidak diizinkan.');
        });
        document.addEventListener('cut', function(e) {
            e.preventDefault();
        });
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    });