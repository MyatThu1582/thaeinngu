<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Audio Player</title>
    <style>
        /* Add some styling for the play button */
        .play-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        .play-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <!-- audio player -->
    <audio src="https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3" controls></audio>
    <audio src="https://ia600702.us.archive.org/3/items/23-right-thought_202503/23%20%20RIGHT%20THOUGHT.mp3" controls></audio>
    <!-- audio player -->

    <?php 
    $audio_datas = [
        [
            'name' => '22 KAYAMIMAM METHOD',
            'src' => 'https://ia800608.us.archive.org/9/items/22-kayamimam-method/22%20KAYAMIMAM%20METHOD.mp3',
        ],
        [
            'name' => '23  RIGHT THOUGHT',
            'src' => 'https://ia600702.us.archive.org/3/items/23-right-thought_202503/23%20%20RIGHT%20THOUGHT.mp3',
        ]
    ];
    ?>

    <!-- Add Font Awesome CDN for the icons -->
    <head>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>

    <?php
        foreach ($audio_datas as $index => $audio) {
            ?>
            <button class="play-button" id="playBtn<?php echo $index; ?>">
                <i class="fas fa-play"></i> <!-- Play icon -->
                <?php echo $audio['name']; ?>
            </button>
            <audio id="audioPlayer<?php echo $index; ?>" style="display: none;">
                <source src="<?php echo $audio['src']; ?>" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <?php
        }
    ?>

    <script>
        let currentAudio = null; // Keep track of the currently playing audio

        document.querySelectorAll('.play-button').forEach((button, index) => {
            button.addEventListener('click', () => {
                const audioPlayer = document.getElementById('audioPlayer' + index);
                const icon = button.querySelector('i'); // Get the icon inside the button
                
                // If another audio is playing, pause it
                if (currentAudio && currentAudio !== audioPlayer) {
                    currentAudio.pause();
                    currentAudio.previousElementSibling.querySelector('i').classList.remove('fa-pause');
                    currentAudio.previousElementSibling.querySelector('i').classList.add('fa-play');
                }

                // If the audio is paused, play it
                if (audioPlayer.paused) {
                    audioPlayer.style.display = 'block'; // Show the player
                    audioPlayer.play(); // Play the audio
                    icon.classList.remove('fa-play'); // Change icon to pause
                    icon.classList.add('fa-pause'); // Change icon to pause
                    currentAudio = audioPlayer; // Set the current audio as the one that is playing
                } else {
                    audioPlayer.pause(); // Pause the audio
                    icon.classList.remove('fa-pause'); // Change icon to play
                    icon.classList.add('fa-play'); // Change icon to play
                    currentAudio = null; // Reset current audio if paused
                }
            });
        });
    </script>
</body>
</html>
